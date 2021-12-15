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
                        <form action="{{route('password.update')}}" method="POST" class="bill-detail"
                              style="width: 100%;">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <fieldset>
                                <div class="form-group">
                                    <input
                                        type="email" id="email" name="email"
                                        :value="old('email', $request->email)" required autofocus
                                        class="form-control" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" required
                                           class="form-control" autocomplete="new-password"
                                           placeholder="Enter your New Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                           required class="form-control"
                                           autocomplete="new-password" placeholder="Confirm your Password">
                                </div>

                                <button class="process-btn" style="border: none;">Reset Password</button>
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


<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo/>
        </x-slot>

        <x-jet-validation-errors class="mb-4"/>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                             :value="old('email', $request->email)" required autofocus/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}"/>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                             autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                             name="password_confirmation" required autocomplete="new-password"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
