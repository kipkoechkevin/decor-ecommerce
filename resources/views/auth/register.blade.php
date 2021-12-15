@include('frontend.header')
<main id="mt-main">
    <!-- Mt Detail Section of the Page -->
    <section class="mt-detail-sec toppadding-zero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-push-1">
                    <div class="holder" style="margin: 0;">
                        <div class="mt-side-widget">
                            <header>
                                <h2 style="margin: 0 0 5px;">register</h2>
                                <p>Don’t have an account?</p>
                            </header>
                            <form method="POST" action="{{route('register')}}" style="margin: 0 0 80px;">
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <input id="name" type="text" name="name" :value="old('name')"
                                                   placeholder="Full Name" class="input" required autofocus
                                                   autocomplete="name">
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                               {{$message}}
                                            </span>
                                        @enderror
                                        <div class="col-xs-12 col-sm-6">
                                            <input id="email" type="email" name="email" :value="old('email')"
                                                   placeholder="Email Address" class="input" required>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <input id="username" type="text" name="username" :value="old('username')"
                                                   placeholder="Username" class="input" required>
                                        </div>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                        <div class="col-xs-12 col-sm-6">
                                            <input id="phone" type="text" name="phone" :value="old('phone')"
                                                   placeholder="Phone Number" class="input" required>
                                        </div>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <input id="password" type="password" name="password" placeholder="Password"
                                                   class="input" required autocomplete="new-password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                        <div class="col-xs-12 col-sm-6">
                                            <input id="password_confirmation" type="password"
                                                   placeholder=" Confirm Password" class="input"
                                                   name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="box">
                                        <a href="{{route('login')}}" class="help">Already have an account ?</a>
                                    </div>
                                    <button type="submit" class="btn-type1">Register Me</button>
                                </fieldset>
                            </form>
                            <header>
                                <h2 style="margin: 0 0 5px;">register with social</h2>
                                <p>Create an account using social</p>
                            </header>
                            <ul class="mt-socialicons">
                                <li class="mt-facebook"><a href="registerpage.html#"><i
                                            class="fa fab-facebook-f"></i></a></li>
                                <li class="mt-twitter"><a href="registerpage.html#"><i class="fa fab-twitter"></i></a>
                                </li>
                                <li class="mt-youtube"><a href="registerpage.html#"><i class="fa fab-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mt Detail Section of the Page end -->
</main><!-- Main of the Page end -->
@include('frontend.footer')
