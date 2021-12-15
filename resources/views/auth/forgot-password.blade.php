@include('frontend.header')
<!-- Main of the Page -->
<main id="mt-main">
    <section class="mt-detail-sec toppadding-zero">
        <div class="container">
            @if (session('status'))
                <div>
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-push-2">
                    <div class="holder" style="margin: 0px;">
                        <h2>Forgot your Password</h2>
                        <!-- Bill Detail of the Page -->
                        <form action="{{route('password.email')}}" method="POST" class="bill-detail" style="width: 100%;">
                                @csrf
                                <fieldset>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" :value="old('email')" required autofocus class="form-control" placeholder="Enter your Email">
                                </div>
                                <button class="process-btn" style="border: none;">Email Password</button>
                            </fieldset>
                        </form>
                        <!-- Bill Detail of the Page end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- Main of the Page end -->
@include('frontend.footer')
