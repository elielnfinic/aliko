@extends("../lib")

@section("contenu_page")
<div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo text-center">
                            <img class="rounded-circle" src="{{asset("logo.png")}}" alt="logo">
                        </div>
                        <h4>{{__("auth.welcome_login")}}</h4>
                        <h6 class="font-weight-light">{{__("auth.sign_in_to_continue")}}</h6>
                        <form class="pt-3" method="post" action="/submit_login">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="{{__("auth.username")}}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="{{__("auth.password")}}">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">{{__("auth.BTN_SIGN_IN")}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection
