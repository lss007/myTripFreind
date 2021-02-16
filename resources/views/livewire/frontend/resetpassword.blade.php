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
              <h5 class="smTitle pb-md-2 text-center text-lg-start loginTitle">Reset <span class="d-none d-lg-inline-block">Password</span></h5>


              <div class="registerForm pt-2">
                <form action="" class="row g-3 needs-validation formStyle" novalidate wire:submit.prevent="resetPassword">
                  <div class="col-md-12 col-xl-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="testasf@gmail.com" wire:model="email" placeholder="Email Address" required>
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-md-12 col-xl-12">
                    <label for="passwordFld" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" value="" wire:model="password" placeholder="Enter New Password" required>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-md-12 col-xl-12">
                    <label for="passwordFld" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password-confirm" value="" wire:model="password_confirmation" placeholder="Confirm New Password" required>
                    @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-center pt-1 pb-2">
                      <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary w-100">Update Password</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="text-center d-none d-lg-block">
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
      <div class="overlay"></div>
      <div class="loginLeftContent">
        <div class="llcContent">
          <h4 class="lgTitle lineTitle">Φερνουμε κοντα τους <br> φοιτητεσ στους καθηγητεσ</h4>
        </div>
      </div>
    </div>
  </div>
</div>
