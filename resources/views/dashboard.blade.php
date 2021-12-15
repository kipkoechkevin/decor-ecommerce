@include('frontend.header')
<!-- Main of the Page -->
<main id="mt-main">
    <!-- Mt Detail Section of the Page -->
    <section class="mt-detail-sec toppadding-zero">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin-top: 45px">
                    <div class="d-flex align-items-center">
                        <img style="width: 50% !important; margin-left: 25%;"
                            class="rounded-circle" src="{{ (!empty($user->profile_photo_path))
                                             ? url('uploads/profiles/' . $user->profile_photo_path)
                                             : url('uploads/admin/default.jpeg') }}"
                        >
                    </div>
                    <div class="card">
                        <ul class="list-unstyled block" style="text-align: center">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('user.profile')}}">Profile Update</a></li>
                            <li><a href="{{route('change.password')}}">Change Password</a></li>
                            <li><a href="{{route('user.logout')}}">Logout</a></li>

                        </ul>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="holder">
                        <h2>Account Information</h2>
                        <!-- Panel Group of the Page -->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- Panel Panel Default of the Page -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="order-checkout.html#collapseOne" aria-expanded="true"
                                           aria-controls="collapseOne">
                                            Name
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>{{auth()->user()->name}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel Panel Default of the Page end -->
                            <!-- Panel Panel Default of the Page -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="order-checkout.html#collapseTwo"
                                           aria-expanded="false" aria-controls="collapseTwo">
                                            Email Address
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>{{auth()->user()->email}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel Panel Default of the Page end -->
                            <!-- Panel Panel Default of the Page -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="order-checkout.html#collapseThree"
                                           aria-expanded="false" aria-controls="collapseThree">
                                            Phone Number
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>{{auth()->user()->phone}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel Panel Default of the Page end -->
                        </div>
                        <!-- Panel Group of the Page end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mt Detail Section of the Page end -->
</main><!-- Main of the Page end here -->
@include('frontend.footer')
