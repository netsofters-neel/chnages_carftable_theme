@extends('brackets/admin-ui::admin.layout.default') 
to 
@extends('admin.paper-theme-layout.default')


------------------------vendor\brackets\admin-generator\resources\views\create.blade.php


card-body 
to
card-content


------------------------vendor\brackets\admin-generator\resources\views\index.blade.php
  <td>
      <div class="table-icons">
              <a class="btn btn-simple btn-info btn-icon table-action view" :href="item.resource_url + '/edit'" title="@{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="ti-pencil-alt"></i></a>
     
          <form class="btn btn-simple btn-info btn-icon table-action view" @submit.prevent="deleteItem(item.resource_url)">
              <button type="submit" class="btn btn-simple btn-danger btn-icon table-action remove" title="@{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="ti-close"></i></button>
          </form>
      </div>
  </td>
