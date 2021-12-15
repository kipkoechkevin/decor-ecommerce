@extends('admin.admin_master')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Edit Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item">Profile</li>
                            <li class="breadcrumb-item active">Edit Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="edit-profile">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <form action="{{route('admin.profile.store')}}" method="POST" class="card" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pb-0">
                                <h4 class="card-title mb-0">Edit Profile</h4>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="row mb-2">
                                            <div class="profile-title">
                                                <div class="media"><img id="showImage" class="img-70 rounded-circle"
                                                                        alt=""
                                                                        src="{{ (!empty($updated->profile_photo_path))
                                             ? url('uploads/admin/' . $updated->profile_photo_path)
                                             : url('uploads/admin/default.jpeg') }}">
                                                    <div class="media-body">
                                                        <h3 class="mb-1 f-20 txt-primary">{{$updated->name}}</h3>
                                                        <p class="f-12">{{$updated->email}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Full Name</label>
                                                <input class="form-control" name="name" type="text"
                                                       value="{{$updated->name}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email Address</label>
                                                <input class="form-control" name="email" type="email"
                                                       value="{{$updated->email}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div><input class="form-control" id="profileImage" type="file"
                                                        name="profile_photo_path" aria-label="file example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#profileImage').change(function (e) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        });
    </script>
@endsection
