@extends('admin.admin_master')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Admin Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Admin Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="user-profile">
                <div class="row">
                    <!-- user profile header start-->
                    <div class="col-sm-12">
                        <div class="card profile-header"><img class="img-fluid bg-img-cover"
                                                              src="../assets/images/user-profile/bg-profile.jpg" alt="">
                            <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover"
                                                                src="../assets/images/user-profile/bg-profile.jpg"
                                                                alt=""></div>
                            <div class="userpro-box">
                                <div class="img-wrraper">
                                    <div class="avatar">
                                        <img class="img-fluid" alt=""
                                             src="{{ (!empty($profile->profile_photo_path))
                                             ? url('uploads/admin/' . $profile->profile_photo_path)
                                             : url('uploads/admin/default.jpeg') }}">
                                    </div>
                                    <a class="icon-wrapper" href="{{route('admin.profile.edit')}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </div>
                                <div class="user-designation">
                                    <div class="title"><a href="{{route('admin.profile')}}">
                                            <h4>{{$profile->name}}</h4>
                                            <p>{{$profile->email}}</p>
                                        </a>
                                    </div>
                                    {{--                                    <div class="social-media">--}}
                                    {{--                                        <ul class="user-list-social">--}}
                                    {{--                                            <li><a href="user-profile.html#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--                                            <li><a href="user-profile.html#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--                                            <li><a href="user-profile.html#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--                                            <li><a href="user-profile.html#"><i class="fa fa-instagram"></i></a></li>--}}
                                    {{--                                            <li><a href="user-profile.html#"><i class="fa fa-rss"></i></a></li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </div>--}}
                                    <div class="follow">
                                        <ul class="follow-list">
                                            <li>
                                                {{--                                                <div class="follow-num counter"></div>--}}
                                                <span></span>
                                            </li>
                                            <li>
                                                {{--                                                <div class="follow-num counter"></div>--}}
                                                <span></span>
                                            </li>
                                            <li>
                                                {{--                                                <div class="follow-num counter"></div>--}}
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- user profile header end-->
                </div>
            </div>
        </div>
    </div
@endsection
