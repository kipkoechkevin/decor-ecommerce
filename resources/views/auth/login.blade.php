@include('frontend.header')
<main id="mt-main">
    <!-- Mt About Section of the Page -->
    <section class="mt-about-sec" style="padding-bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="txt wow fadeInUp" style="text-align:center;" data-wow-delay="0.4s">
                        <h2>login</h2>
                    </div>
                    @if (session('status'))
                        <div class="">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Mt About Section of the Page -->
    <!-- Mt Detail Section of the Page -->
    <section class="mt-detail-sec toppadding-zero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-push-2">
                    <div class="holder" style="margin: 0;">
                        <div class="mt-side-widget">
                            <header>
                                <h2 style="margin: 0 0 5px;">SIGN IN</h2>
                                <p>Welcome back! Sign in to Your Account</p>
                            </header>
                            <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                                @csrf
                                <fieldset>
                                    <input type="email"  name="email" placeholder="Email address" class="input" required autofocus>
                                    <input type="password" name="password" placeholder="Password" class="input" required autofocus autocomplete="current-password">
                                    <div class="box">
                                        <span class="left">
                                            <input class="checkbox" type="checkbox" id="remember_me" name="remember"><label for="check1">Remember Me</label></span>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="help">Forgot Password?</a>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn-type1">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- Main of the Page end -->
@include('frontend.footer')
