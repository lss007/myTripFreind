<div class="row g-0">
  <div class="col-lg-6 order-lg-last">
    <div class="lRightContentCol regContentCol lightColor darkTitle">
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
            <div class="regContainer">
              <div class="infoIconLbl">
                <h5 class="smTitle">CONTACT INFO AND FREE ACCOUNT</h5>
                <span class="infoIcon" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"><img src="{{ asset('assets/images/question-mark.svg') }}" alt="..."></span>
              </div>
              <p class="mb-1">Write your contact details here so you can get our response for your project enquirie.</p>
              <div class="registerForm pt-2">
                <form action="" class="row g-3 needs-validation formStyle" novalidate wire:submit.prevent="saveUser">

                  <div class="col-md-6 col-xl-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" value="" wire:model="name" placeholder="Your Name" required>
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-md-6 col-xl-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="testasf@gmail.com" wire:model="email" placeholder="Email Address" required>
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-md-6 col-xl-6">
                    <label for="passwordFld" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" value="" wire:model="password" placeholder="Enter Password" required>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-md-6 col-xl-6">
                    <label for="passwordFld" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password-confirm" value="" wire:model="password_confirmation" placeholder="Enter Confirm Password" required>
                    @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-12 pt-2">
                    <div class="row g-3">
                      <div class="col-md">
                        <div class="pe-xl-3">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberCheck" wire:model="cnfAgree" required>
                            <label class="form-check-label" for="rememberCheck">
                              I have read and i agree with <a href="javascript:void(0)" class="colorInherit textUnderline">terms and conditions</a> for usage of services
                            </label>
                            @error('cnfAgree') <span class="error">{{ $message }}</span> @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="captchaCol">
                          <img src="{{ asset('assets/images/reCaptcha.jpg') }}" alt="...">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-center pt-1 pb-2">
                      <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                        <div class="text-center pt-2">
                          <span class="d-inline-block align-middle lockIcon me-1"><img src="{{ asset('assets/images/lock-icon.svg') }}" alt="..." width="22" class="d-block"></span> <span class="d-inline-block align-middle">Credentials are 100% safe and Privacy Guarantee</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="text-center">
                <p><span class="darkColor">You are already a customer and you have account?</span> <a href="{{ url('login') }} ">Go to login page </a></p>
              </div>
            </div>
            <div class="btmIconCol text-center">
              <div class="loginContactCol p-0">
                <p class="mb-0">You need any help? Get in touch</p>
                <ul class="loginContactOption mdText">
                  <li><a href="javascript:void(0)"><span><img src="{{ asset('assets/images/telephone.svg') }}" alt="..." class="d-block" width="30"></span> <span class="ms-xl-2 lcText">+30 231 111 7211</span></a></li>
                  <li><a href="javascript:void(0)"><span><img src="{{ asset('assets/images/mail-icon-2.svg') }}" alt="..." class="d-block" width="30"></span> <span class="ms-xl-2 lcText">info@sbs-studies.gr</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="col-lg-6">
    <div class="loginLeftCol">
      <img src="{{ asset('assets/images/registervector.svg') }}" alt=""/>
    </div>
  </div>
</div>
