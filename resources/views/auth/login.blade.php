@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 fw-bold mb-0">مدونتي</span>
                          </div>

                          <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">سجل دخولك عبر الجميل الخاص بك</h5>

                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">{{ __('البريد الإلكتروني') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label for="password" class="form-label">{{ __('كلمة المرور') }}</label>
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <div class="form-label">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('تذكرني') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <div class="form-label">
                                <button type="submit" class="btn btn-success">
                                    {{ __('تسجيل الدخول') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{-- {{ __('Forgot Your Password?') }} --}}
                                    </a>
                                @endif
                            </div>
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">ألا تمتلك حساب! <a href="/register"
                                style="color: #259a5b;">إنشاء حساب</a></p>
                        </div>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
