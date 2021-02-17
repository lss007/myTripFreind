<div class="row g-0">
  <div class="col-lg-6 order-lg-last">
    <div class="lRightContentCol loginContentCol">
      <span class="loginWhiteCircleBg d-lg-none"><img src="{{ asset('assets/images/bg-circles-1.svg') }}" alt="..."></span>
      <div class="mbFormWhiteBg">
        <div class="logoCol text-center">
          <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="..." class="loginLogoImg"></a>
        </div>
        <div class="flashMsg">
          @if (session()->has('message'))
              <div class="alert alert-success text-center">
                  {{ session('message') }}
              </div>
          @endif
        </div>
        <div class="row g-0 h-lg-100 align-items-center">
          <div class="col">
            <div class="loginContainer">
              <h5 class="smTitle pb-md-2 text-center text-lg-start loginTitle">Forgot <span class="d-none d-lg-inline-block">Password</span></h5>
              <div class="loginForm">
                <form action="" class="needs-validation" wire:submit.prevent="forgotPassword" novalidate>
                  <div class="loginFields mb-2 mb-lg-3">
                    <div class="fldCol">
                      <label for="emailFld" class="form-label d-lg-none">Email</label>
                      <input type="text" id="emailFld" class="form-control leftIconFld checkFld" wire:model="email" placeholder="Enter Your Exiting Email" required>
                      <span class="fldLeftIcon"><img src="{{ asset('assets/images/mail-icon.svg') }}" alt="..."></span>
                    </div>
                  </div>
                  @error('email') <span class="error">{{ $message }}</span> @enderror
                  <div class="text-center d-lg-none">
                    <p class="mb-2">You do not have an account; <br> <a href="{{ url('/register') }}">Application for new customers</a></p>
                    <div class="loginContactCol py-2">
                      <p class="mb-1">If you have a problem please contact us:</p>
                      <ul class="loginContactOption">
                        <li><a href="javascript:void(0)"><span><img src="{{ asset('assets/images/telephone.svg') }}" alt="..."></span> <span class="lcText">+30 231 111 7211</span></a></li>
                        <li><a href="javascript:void(0)"><span><img src="{{ asset('assets/images/mail-icon-2.svg') }}" alt="..."></span> <span class="lcText">info@sbs-studies.gr</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row justify-content-center py-3">
                    <div class="col-11 col-sm-10">
                      <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>
                    </div>
                  </div>
                  <div class="d-lg-none">
                    <div class="row justify-content-center">
                      <div class="col-11 col-sm-10">
                        <a href="{{ url('/register') }}" class="btn btn-dark w-100 mb-3">Sign up</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="text-center d-none d-lg-block">
                <p>You are a new customer and don’t have account? <a href="{{ url('/register') }}">Create a new account</a></p>
                <div class="loginContactCol">
                  <p class="mb-1">If you have a problem please contact us:</p>
                  <ul class="loginContactOption">
                    <li><a href="javascript:void(0)"><span><img src="{{ asset('assets/images/telephone.svg') }}" alt="..."></span> <span class="lcText">+30 231 111 7211</span></a></li>
                    <li><a href="javascript:void(0)"><span><img src="{{ asset('assets/images/mail-icon-2.svg') }}" alt="..."></span> <span class="lcText">info@sbs-studies.gr</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btmIconCol text-center d-lg-none">
          <ul>
            <li><a href="javascript:void(0)"><img src="{{ asset('assets/images/GEA-2020-logo.png') }}" alt="..."></a></li>
            <li><a href="javascript:void(0)"><img src="{{ asset('assets/images/On-education.svg') }}" alt="..."></a></li>
            <li>
              <div class="ratingCol">
                <div class="row g-0 align-items-center">
                  <div class="col-auto">
                    <span class="ratingText centerContentCol">
                      4.7
                    </span>
                  </div>
                  <div class="col">
                    <ul class="ratingStars ms-1">
                      <li><img src="{{ asset('assets/images/star.svg') }}" alt="..."></li>
                      <li><img src="{{ asset('assets/images/star.svg') }}" alt="..."></li>
                      <li><img src="{{ asset('assets/images/star.svg') }}" alt="..."></li>
                      <li><img src="{{ asset('assets/images/star.svg') }}" alt="..."></li>
                      <li><img src="{{ asset('assets/images/star-7.svg') }}" alt="..."></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="loginLeftCol">
      <img src="{{ asset('assets/images/forgotvector.svg') }}" alt=""/>
    </div>
  </div>
</div>
