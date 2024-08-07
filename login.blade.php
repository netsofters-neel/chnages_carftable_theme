{{--vendor\brackets\admin-auth\resources\views\admin\auth\login.blade.php --}}

@extends('brackets/admin-ui::admin.layout.master')

@section('title', trans('brackets/admin-auth::admin.login.title'))

@section('content')
    <div class="wrapper wrapper-full-page" id="app">
        <div class="full-page login-page" data-color="blue" data-image="{{ asset('../../assets/img/background/background-2.jpg') }}">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <auth-form :action="'{{ url('/admin/login') }}'" :data="{}" inline-template>
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}" novalidate>
                                    {{ csrf_field() }}
                                    <div class="card" data-background="color" data-color="blue">
                                        <div class="card-header">
                                            <div class="card-title">{{ trans('brackets/admin-auth::admin.login.title') }}</div>
                                        </div>
                                        <div class="card-content">
                                            @include('brackets/admin-auth::admin.auth.includes.messages')
                                            <div class="form-group_old" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
                                                <label for="email">{{ trans('Email address') }}</label>
                                                <input type="text" v-model="form.email" v-validate="'required|email'" class="form-control input-no-border" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('Email address') }}">
                                                <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
                                            </div>

                                            <div class="form-group_old" :class="{'has-danger': errors.has('password'), 'has-success': fields.password && fields.password.valid }">
                                                <label for="password">{{ trans('brackets/admin-auth::admin.auth_global.password') }}</label>
                                                <input type="password" v-model="form.password" class="form-control input-no-border" :class="{'form-control-danger': errors.has('password'), 'form-control-success': fields.password && fields.password.valid}" id="password" name="password" placeholder="{{ trans('brackets/admin-auth::admin.auth_global.password') }}">
                                                <div v-if="errors.has('password')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('password') }}</div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <input type="hidden" name="remember" value="1">
                                            <button type="submit" class="btn btn-fill btn-wd btn-primary btn-spinner"><i class="fa"></i> {{ trans('brackets/admin-auth::admin.login.button') }}</button>
                                            <div class="forgot">
                                                <a href="{{ url('/admin/password-reset') }}">{{ trans('brackets/admin-auth::admin.login.forgot_password') }}</a>
                                            </div>
                                        </div>
                                    </div>
				
                                </form>
                            </auth-form>
                        </div>
                    </div>
                </div>
            </div>
 
            <footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                        © <script>document.write(new Date().getFullYear())</script>, made with <i class=" ti-heart heart"></i> by <a href="https://netsofters.in/">Netsofters LLP</a>
                    </div>
                </div>
            </footer>
            <div class="full-page-background" style="background-image: url('{{ asset('../../assets/img/background/background-2.jpg') }}')"></div>
        </div>
    </div>
@endsection

@section('bottom-scripts')
<script type="text/javascript">
    // fix chrome password autofill
    // https://github.com/vuejs/vue/issues/1331
    document.getElementById('password').dispatchEvent(new Event('input'));
</script>
@endsection
