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
                        <ul class="list-unstyled block" style = "text-align: center;">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('user.profile')}}">Profile Update</a></li>
                            <li><a href="{{route('change.password')}}">Change Password</a></li>
                            <li><a href="{{route('user.logout')}}">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="holder">
                        <h2>Password Change</h2>
                        <!-- Panel Group of the Page -->
                        <form action="{{route('user.password.update')}}" method="post"  class="bill-detail">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input type="password" id="current_password" name="oldpassword" class="form-control"  placeholder="Current Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" class="form-control"  placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"  placeholder="Confirm Password">
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-success"> Change Password</button>
                        </form>
                        <!-- Panel Group of the Page end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mt Detail Section of the Page end -->
</main><!-- Main of the Page end here -->
@include('frontend.footer')
