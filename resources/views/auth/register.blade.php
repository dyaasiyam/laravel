@extends('layouts.app')

@section('content')
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">إنشاء حساب جديد</h2>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-outline mb-4 text-center">
                                        <label for="name" class="form-label ">{{ __('اسم المستخدم') }}</label>

                                        <div class="col-lg-12">
                                            <input id="name" type="text"
                                                class="form-control form-control-lg  text-center @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required autocomplete="name"
                                                autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4 text-center text-center"">
                                        <label for="email" class="form-label">{{ __('البريد الإلكتروني') }}</label>

                                        <div class="col-lg-12">
                                            <input id="email" type="email"
                                                class="form-control text-center @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4 text-center"">
                                        <label for="password" class="form-label">{{ __('كلمة المرور') }}</label>

                                        <div class="col-lg-12">
                                            <input id="password" type="password"
                                                class="form-control text-center @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4 text-center"">
                                        <label for="password-confirm"
                                            class="form-label">{{ __('تأكيد كلمة المرور') }}</label>

                                        <div class="col-lg-12">
                                            <input id="password-confirm" type="password" class="form-control text-center"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <div class="">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('إنشاء حساب') }}
                                            </button>
                                        </div>
                                        <p class="mt-3" style="color: #393f81;">هل لديك حساب بالفعل؟<a href="/login"
                                                style="color: #c21327;">تسجل الدخول</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
