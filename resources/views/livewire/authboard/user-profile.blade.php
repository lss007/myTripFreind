<div class="pageContentMain">
  <div class="profilePage lightColor">
    <div class="borderCard lightBg">
      <div class="profileCard online">
        <div class="row align-items-center">
          <div class="col-sm-auto">
            <div class="profileImgCard">
              <img src="{{ asset('assets/images/profile-img.jpg') }}" alt="...">
            </div>
          </div>
          <div class="col-sm">
            <div class="profileContent">
              <span class="d-block bold mdTitle text-truncate darkColor">
                <span class="userStatus vipStatusIcon">John Doe</span>
              </span>
              <span class="d-block text-truncate mdText">Informatics</span>
              <div class="row g-2 g-lg-3 align-items-center">
                <div class="col-sm-6 col-lg-4">
                  <span class="primaryColor">Registered:</span> <span class="d-inline-block">10-12-2020 08:16</span>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <span class="primaryColor">Registered:</span> <span class="d-inline-block">10-12-2020 08:16</span>
                </div>
                <div class="col-sm-12 col-lg-4">
                  <span class="btn btn-light"> <img src="{{ asset('assets/images/mail-filled-icon.svg') }}" alt="..." width="16"> info@netsatisfy.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tabCol pt-3 pt-xl-4">
      <div class="tabOuter">
        <div class="tabSec">
          <div class="tabHeadCol">
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
              <li class="nav-item text-md-start" role="presentation">
                <a class="nav-link active" id="generalInfo-tab" data-bs-toggle="tab" href="#generalInfo" role="tab" aria-controls="generalInfo" aria-selected="true">General Info</a>
              </li>
              <li class="nav-item text-md-start" role="presentation">
                <a class="nav-link" id="personalInfo-tab" data-bs-toggle="tab" href="#personalInfo" role="tab" aria-controls="personalInfo" aria-selected="false">Personal Info</a>
              </li>
              <li class="nav-item text-md-start" role="presentation">
                <a class="nav-link" id="socialLinks-tab" data-bs-toggle="tab" href="#socialLinks" role="tab" aria-controls="socialLinks" aria-selected="false">Social Links</a>
              </li>
              <li class="nav-item text-md-start" role="presentation">
                <a class="nav-link" id="loginDetails-tab" data-bs-toggle="tab" href="#loginDetails" role="tab" aria-controls="loginDetails" aria-selected="false">Login Details</a>
              </li>
              <li class="nav-item text-md-start" role="presentation">
                <a class="nav-link" id="myPreferences-tab" data-bs-toggle="tab" href="#myPreferences" role="tab" aria-controls="myPreferences" aria-selected="false">My Preferences</a>
              </li>
              <li class="nav-item text-md-start" role="presentation">
                <a class="nav-link" id="vipStatus-tab" data-bs-toggle="tab" href="#vipStatus" role="tab" aria-controls="vipStatus" aria-selected="false">VIP Status</a>
              </li>
            </ul>
          </div>

          <div class="tab-content p-0" id="profileTabContent">
            <div class="tab-pane fade show active" id="generalInfo" role="tabpanel" aria-labelledby="generalInfo-tab">
              <div class="profileFormCol">
                <h4 class="smTitle1 bold darkColor pb-3">General Info</h4>
                <form action="" class="row g-3 g-lg-4 formStyle">
                  <div class="col-md-6">
                    <label for="firstNameFld" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstNameFld" value="John" placeholder="First Name">
                  </div>
                  <div class="col-md-6">
                    <label for="lastNameFld" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastNameFld" value="Doe" placeholder="Last Name">
                  </div>
                  <div class="col-md-6">
                    <label for="phoneFld" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phoneFld" value="+61 005 5650 333" placeholder="123 456 7890">
                  </div>
                  <div class="col-md-6">
                    <label for="skypeNameFld" class="form-label">Skype Name</label>
                    <input type="text" class="form-control" id="skypeNameFld" value="" placeholder="Skype Name here">
                  </div>
                  <div class="col-md-6">
                    <label for="dDateFld" class="form-label">Date of birth</label>
                    <div class="input-group dateField" id="datetimepicker2" data-target-input="nearest">
                      <input type="text" id="dDateFld" class="form-control datetimepicker-input" placeholder="Enter Date" data-toggle="datetimepicker" data-target="#datetimepicker2"/>
                      <span class="calIcon" data-target="#datetimepicker2" data-toggle="datetimepicker">
                        <span class="calendarIcon"><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="..."></span>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="languageFld" class="form-label">Gender</label>
                    <div class="genderCol">
                      <div class="customRadio">
                        <input type="radio" name="gender" id="male" value="" checked="">
                        <label for="male">Male</label>
                      </div>
                      <div class="customRadio">
                        <input type="radio" name="gender" id="female" value="">
                        <label for="female">Female</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-end pt-1 pb-2">
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="personalInfo" role="tabpanel" aria-labelledby="personalInfo-tab">
              <div class="profileFormCol">
                <h4 class="smTitle1 bold darkColor pb-3">Personal Info</h4>
                <form action="" class="row g-3 g-lg-4 formStyle">
                  <div class="col-12">
                    <label for="fullNameFld" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="fullNameFld" value="John Doe" placeholder="Full name">
                  </div>
                  <div class="col-12">
                    <label for="addressFld" class="form-label">Address</label>
                    <textarea class="form-control" id="addressFld" placeholder="Address"></textarea>
                  </div>
                  <div class="col-md-6">
                    <label for="cityFld" class="form-label">City</label>
                    <input type="text" class="form-control" id="cityFld" placeholder="City">
                  </div>
                  <div class="col-md-6">
                    <label for="stateFld" class="form-label">State</label>
                    <input type="text" class="form-control" id="stateFld" placeholder="State">
                  </div>
                  <div class="col-md-6">
                    <label for="zipFld" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zipFld" placeholder="Zip">
                  </div>
                  <div class="col-md-6">
                    <label for="countryFld" class="form-label">Country</label>
                    <input type="text" class="form-control" id="countryFld" placeholder="Country">
                  </div>
                  <div class="col-md-6">
                    <label for="phoneFld2" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phoneFld2" placeholder="Phone">
                  </div>
                  <div class="col-md-6">
                    <label for="secondTelFld" class="form-label">Second Telephone</label>
                    <input type="text" class="form-control" id="secondTelFld" placeholder="Second Telephone">
                  </div>
                  <div class="col-md-6">
                    <label for="professionFld" class="form-label">Profession</label>
                    <input type="text" class="form-control" id="professionFld" placeholder="Profession">
                  </div>
                  <div class="col-md-6">
                    <label for="priceFld" class="form-label">Pricing details</label>
                    <input type="text" class="form-control" id="priceFld" placeholder="Tax Identification Number, Tax Office, Address">
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-end pt-1 pb-2">
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="socialLinks" role="tabpanel" aria-labelledby="socialLinks-tab">
              <div class="profileFormCol">
                <h4 class="smTitle1 bold darkColor pb-3">Social Links</h4>
                <form action="" class="row g-3 g-lg-4 formStyle">
                  <div class="col-md-6">
                    <label for="fbFld" class="form-label">Facebook</label>
                    <input type="text" class="form-control" id="fbFld" placeholder="https://www.facebook.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="twitterFld" class="form-label">Twitter</label>
                    <input type="text" class="form-control" id="twitterFld" placeholder="https://twitter.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="linkedinFld" class="form-label">Linkedin</label>
                    <input type="text" class="form-control" id="linkedinFld" placeholder="https://www.linkedin.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="gPlusFld" class="form-label">Google plus</label>
                    <input type="text" class="form-control" id="gPlusFld" placeholder="https://plus.google.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="diggFld" class="form-label">Digg</label>
                    <input type="text" class="form-control" id="diggFld" placeholder="http://digg.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="youtubeFld" class="form-label">youtube</label>
                    <input type="text" class="form-control" id="youtubeFld" placeholder="https://www.youtube.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="pinterestFld" class="form-label">Pinterest</label>
                    <input type="text" class="form-control" id="pinterestFld" placeholder="https://www.pinterest.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="instaFld" class="form-label">Instagram</label>
                    <input type="text" class="form-control" id="instaFld" placeholder="https://instagram.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="githubFld" class="form-label">Github</label>
                    <input type="text" class="form-control" id="githubFld" placeholder="https://github.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="tumbirFld" class="form-label">Tumblr</label>
                    <input type="text" class="form-control" id="tumbirFld" placeholder="https://www.tumblr.com/">
                  </div>
                  <div class="col-md-6">
                    <label for="vineFld" class="form-label">Vine</label>
                    <input type="text" class="form-control" id="vineFld" placeholder="https://vine.co/">
                  </div>
                  <div class="col-md-6 align-self-end">
                    <button type="submit" class="btn btn-primary w-100">Save</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="loginDetails" role="tabpanel" aria-labelledby="loginDetails-tab">
              <div class="profileFormCol">
                <h4 class="smTitle1 bold darkColor pb-3">Login Details</h4>
                <form action="" class="row g-3 g-lg-4 formStyle">
                  <div class="col-12">
                    <label for="emailFld" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailFld" placeholder="Email" value="testasf@gmail.com">
                  </div>
                  <div class="col-md-6">
                    <label for="passwordFld" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordFld" placeholder="Password" value="123456">
                  </div>
                  <div class="col-md-6">
                    <label for="rPasswordFld" class="form-label">Repeat Password</label>
                    <input type="password" class="form-control" id="rPasswordFld" placeholder="Repeat Password" value="">
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-end pt-1 pb-2">
                      <div class="col-md-6 align-self-end">
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="myPreferences" role="tabpanel" aria-labelledby="myPreferences-tab">
              <div class="profileFormCol">
                <h4 class="smTitle1 bold darkColor pb-3">My Preferences</h4>
                <form action="" class="row g-3 g-lg-4 formStyle">
                  <div class="col-md-6">
                    <label for="ncvFld" class="form-label">Notification call volume</label>
                    <select class="form-select" id="ncvFld" placeholder-text="|||||||">
                      <option>-</option>
                      <option>|</option>
                      <option>||</option>
                      <option>|||</option>
                      <option>||||</option>
                      <option>|||||</option>
                      <option>||||||</option>
                      <option>|||||||</option>
                      <option>||||||||</option>
                      <option>|||||||||</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="onlineAlerts" class="form-label">Enable online alerts</label>
                    <select class="form-select" id="onlineAlerts" placeholder-text="Yes">
                      <option selected="selected">Yes</option>
                      <option>No</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="emailNotification" class="form-label">Enable notifications in my email</label>
                    <select class="form-select" id="emailNotification" placeholder-text="Yes">
                      <option selected="selected">Yes</option>
                      <option>No</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="langFld" class="form-label">Language</label>
                    <select class="form-select" id="langFld" placeholder-text="Greek">
                      <option value="czech">Czech</option>
                      <option value="italian">Italian</option>
                      <option value="portuguese">Portuguese</option>
                      <option value="spanish">Spanish</option>
                      <option value="french">French</option>
                      <option value="russian">Russian</option>
                      <option value="dutch">Dutch</option>
                      <option value="greek" selected="selected">Greek</option>
                      <option value="polish">Polish</option>
                      <option value="norwegian">Norwegian</option>
                      <option value="german">German</option>
                      <option value="english">English</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="hideMenuFld" class="form-label">Hide menus from topbar</label>
                    <input type="text" class="form-control" id="hideMenuFld" placeholder="hidden_topbar_menus">
                  </div>
                  <div class="col-md-6 align-self-end">
                    <button type="submit" class="btn btn-primary w-100">Save</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="vipStatus" role="tabpanel" aria-labelledby="vipStatus-tab">
              <div class="profileFormCol">
                <h4 class="smTitle1 bold darkColor pb-3">VIP Status</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
