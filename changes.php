@extends('brackets/admin-ui::admin.layout.default') 
to 
@extends('admin.paper-theme-layout.default')


------------------------vendor\brackets\admin-generator\resources\views\create.blade.php


card-body 
to
card-content




------------------------vendor\brackets\admin-generator\resources\views\index.blade.php


fa fa-align-justify
to
ti-align-justify


<th></th>
to
<th is='sortable' :column="'actions'">{{'{{'}} trans('Actions') }}</th>

<div class="row" v-if="pagination.state.total > 0">
to
<div class="row pagination-margin" v-if="pagination.state.total > 0">



  <td>
      <div class="table-icons">
              <a class="btn btn-simple btn-info btn-icon table-action view" :href="item.resource_url + '/edit'" title="@{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="ti-pencil-alt"></i></a>
     
          <form class="btn btn-simple btn-info btn-icon table-action view" @submit.prevent="deleteItem(item.resource_url)">
              <button type="submit" class="btn btn-simple btn-danger btn-icon table-action remove" title="@{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="ti-close"></i></button>
          </form>
      </div>
  </td>


----------------------- ALL index.blade.php 
serch -> col col-lg-7 col-xl-5 form-group

                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                        <div class="col col-lg-12 col-xl-5 form-group search-box">
                                            <div class="input-group search-bar">
                                                <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                                <span class="btn btn-primary input-group-addon search-logo" @click="filter('search', search)"><i class="ti-search"></i></span>
                                            </div>

                                            <label>
                                                <select class="form-control" v-model="pagination.state.per_page">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </label>
                                        </div>
                                </div>


                            </form>


