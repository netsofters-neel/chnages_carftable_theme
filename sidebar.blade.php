<div class="sidebar" data-background-color="brown" data-active-color="danger">
        <div class="logo">
            <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            CT
            </a>
            <a href="https://www.creative-tim.com" class="simple-text logo-normal">
            Jewellery
            </a>
        </div>
        <div class="sidebar-wrapper ps ps--active-x ps--active-y">
            <div class="user">
                <div class="info">
                    <div class="photo">
                        <img src="../../assets/img/faces/face-2.jpg">
                    </div>
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <span>
                            Admin
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                {{-- <a href="#profile"> --}}
                                    <a href="{{ url('admin/profile') }}">
                                        <span class="sidebar-mini"><i class="ti-user"></i></span>
                        <span class="sidebar-normal">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/password') }}">
                            <span class="sidebar-mini"><i class="ti-lock"></i></span>
                            <span class="sidebar-normal">Edit Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/logout') }}">
                        <span class="sidebar-mini"><i class="ti-power-off"></i></span>
                        <span class="sidebar-normal">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>
    <ul class="nav">
            <li>
                <a href="{{ url('admin/countries') }}">
                    <i class="ti-world"></i>
                    <p>Countries</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/diamond-types') }}">
                    <i class="ti-gallery"></i>
                    <p>Diamond Types</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/diamond-shapes') }}">
                    <i class="ti-layout"></i>
                    <p>Diamond Shapes</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/stone-colors') }}">
                    <i class="ti-palette"></i>
                    <p>Stone Colors</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/metal-types') }}">
                    <i class="ti-flag"></i>
                    <p>{{ trans('admin.metal-type.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/metal-purities') }}">
                    <i class="ti-dropbox"></i>
                    <p>{{ trans('admin.metal-purity.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/metal-tones') }}">
                    <i class="ti-palette"></i>
                    <p>{{ trans('admin.metal-tone.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/closures') }}">
                    <i class="ti-lock"></i>
                    <p>{{ trans('admin.closure.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/ring-sizes') }}">
                    <i class="ti-ruler-alt-2"></i>
                    <p>{{ trans('admin.ring-size.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/carat-weights') }}">
                    <i class="ti-stats-up"></i>
                    <p>{{ trans('admin.carat-weight.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/wrist-sizes') }}">
                    <i class="ti-hand-open"></i>
                    <p>{{ trans('admin.wrist-size.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/party-names') }}">
                    <i class="ti-id-badge"></i>
                    <p>{{ trans('admin.party-name.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/broker-names') }}">
                    <i class="ti-briefcase"></i>
                    <p>{{ trans('admin.broker-name.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/lock-types') }}">
                    <i class="ti-key"></i>
                    <p>{{ trans('admin.lock-type.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/polish-types') }}">
                    <i class="ti-paint-bucket"></i>
                    <p>{{ trans('admin.polish-type.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/prongs-types') }}">
                    <i class="ti-crown"></i>
                    <p>{{ trans('admin.prongs-type.title') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/priorities') }}">
                    <i class="ti-crown"></i>
                    <p>{{trans('admin.priority.title') }}</p>
                </a>
            </li>
    </ui>
        <div class="ps__rail-y" style="top: 0px; height: 454px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 137px;"></div></div>
        {{-- <div class="ps__rail-x" style="width: 260px; left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 259px;"></div>
         </div>
         <div class="ps__rail-y" style="top: 0px; height: 518px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 369px;"></div>
         </div> --}}
        
    </div>
</div>
