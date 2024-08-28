--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
app\Models\Order.php
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    use Brackets\Media\HasMedia\ProcessMediaTrait;
    use Brackets\Media\HasMedia\AutoProcessMediaTrait;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
    use Brackets\Media\HasMedia\HasMediaThumbsTrait;
    ----------------------------------------------------------------------------------------

    class Order extends Model implements HasMedia
    ----------------------------------------------------------------------------------------

    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;
    ----------------------------------------------------------------------------------------

    protected $appends = ['resource_url','image_url'];

    ----------------------------------------------------------------------------------------

    public function getImageUrlAttribute() 
    {
        if(isset($this->getThumbs200ForCollection('image')[0]['url']))
            return $this->getThumbs200ForCollection('image')[0]['url'];
        else
            return '';
    }
    public function registerMediaCollections() : void {
        // $this->addMediaCollection('image')->accepts('image/jpg', 'image/png');
        $this->addMediaCollection('image')->accepts('image/*');
        // $this->addMediaCollection('image')->maxNumberOfFiles(10);
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->autoRegisterThumb200();
        $this->addMediaConversion('detail_hd')
            ->width(1000)
            ->height(500)
            ->performOnCollections('image');
    }
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
resources\js\admin\order\Form.js
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    mediaCollections: ['image'], 



--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
resources\views\admin\order\components\form-elements.blade.php
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


<div class="form-group">
    @if(isset($order->id))
        @include('brackets/admin-ui::admin.includes.media-uploader', [ 
            'mediaCollection' => app(App\Models\Order::class)->getMediaCollection('image'),
            'media' => $order->getThumbs200ForCollection('image'),
            'label' => 'Image'
        ])
        <div v-if="errors.has('image')" class="form-control-feedback form-text alert alert-danger mt-2" v-cloak>@{{ errors.first('image') }}</div>
    @else
        @include('brackets/admin-ui::admin.includes.media-uploader', [
            'mediaCollection' => app(App\Models\Order::class)->getMediaCollection('image'),
            'label' => 'Image'
        ])
        <div v-if="errors.has('image')" class="form-control-feedback form-text alert alert-danger mt-2" v-cloak>@{{ errors.first('image') }}</div>
    @endif
</div>
