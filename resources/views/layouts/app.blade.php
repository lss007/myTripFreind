<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/tempusdominus-bootstrap-4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/mCustomScrollbar.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @livewireStyles
  <title>My Trip Freind - @yield('title')</title>
</head>

<body>
  @guest
  <section>
    {{ $slot }}
  </section>
  @endguest
  @auth
  <div>
    <section>
    <div class="sidebarCol">
      <div class="sidebarLogo">
        <a href="client-dashboard.html"><img src="{{ asset('assets/images/logo.svg') }}" alt="..."></a>
      </div>
      <div class="sidebarNavCol">
        <ul class="sidebarNav">
          <li class="navItem"><a href="client-dashboard.html" class="navLink active"><span class="navIcon"><img src="{{ asset('assets/images/home-icon.svg') }}" alt="..."></span> <span class="navText">Dashboard</span></a></li>
          <li class="navItem"><a href="messages.html" class="navLink"><span class="navIcon"><img src="{{ asset('assets/images/message-icon.svg') }}" alt="..."></span> <span class="navText">Messages</span></a></li>
          <li class="navItem sMenuLink">
            <a href="javascript:void(0)" class="navLink"><span class="navIcon"><img src="{{ asset('assets/images/projects-icon.svg') }}" alt="..."></span> <span class="navText">My Projects</span></a>
            <ul class="subMenuCol">
              <li><a href="projects.html" class="subMenuLink">Open Projects</a></li>
              <li><a href="offer-enquiries.html" class="subMenuLink">Offer Enquiries</a></li>
            </ul>
          </li>
          <li class="navItem"><a href="client-invoices.html" class="navLink"><span class="navIcon"><img src="{{ asset('assets/images/invoice-icon.svg') }}" alt="..."></span> <span class="navText">Invoices</span></a></li>
          <li class="navItem"><a href="client-announcements.html" class="navLink"><span class="navIcon"><img src="{{ asset('assets/images/calendar-icon-2.svg') }}" alt="..."></span> <span class="navText">Announcements</span></a></li>
          <li class="navItem badgeLink"><a href="payments.html" class="navLink"><span class="navIcon"><img src="{{ asset('assets/images/payment-icon.svg') }}" alt="..."></span> <span class="navText">Payments</span></a> <span class="badge navBadge">1 pending</span></li>
          <li class="navItem"><a href="help-and-support.html" class="navLink"><span class="navIcon"><img src="{{ asset('assets/images/helpSupport-icon.svg') }}" alt="..."></span> <span class="navText">Help & Support</span></a></li>
          <li class="navItem"><a href="contact.html" class="navLink"><span class="navIcon"><img src="{{ asset('assets/images/contact-icon.svg') }}" alt="..."></span> <span class="navText">Contact</span></a></li>
        </ul>
      </div>
      <div class="navBtmBtnCol">
        <a href="post-new-projet.html" class="btn btnSm btn-primary d-lg-none">Post New Project</a>
      </div>
    </div>
  </section>
  <section>
    <div class="pageContent">
      <div class="topBar">
        <div class="row align-items-center">
          <div class="col">
            <div class="headerLeftCol">
              <div class="row g-0 align-items-center">
                <div class="col-auto">
                  <a href="javascript:void(0)" class="navTrigger d-xl-none">
                    <span class="tglLine tlTop"></span>
                    <span class="tglLine tlCenter"></span>
                    <span class="tglLine tlBtm"></span>
                  </a>
                </div>
                <div class="col-auto">
                  <a href="client-dashboard.html" class="logoIconLink d-xl-none"><img src="{{ asset('assets/images/logo-icon.svg') }}" alt="..." class="logoIcon"></a>
                </div>
                <div class="col">
                  <div class="searchCol d-none">
                    <span class="searchIcon"><img src="{{ asset('assets/images/search-icon.svg') }}" alt="..." width="13"></span>
                    <input type="text" placeholder="Search..." class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="headerRightOptions">
              <ul>
                <li><a href="post-new-projet.html" class="btn btnSm btn-primary d-none d-lg-inline-block">Post New Project</a> <a href="post-new-projet.html" class="d-inline-block d-lg-none"><img src="{{ asset('assets/images/add-project-icon.svg') }}" alt="..." width="18"></a> </li>
                <li>
                  <div class="msgDDCol ddParent">
                    <a href="javascript:void(0)" class="ddTrigger actUnread"><span class="ddTriggerContent"><img src="{{ asset('assets/images/msg-icon.svg') }}" alt="..."> <span class="unreadIndicator"></span></span></a>
                    <div class="ddContent">
                      <div class="ddHeader">
                        <div class="row">
                          <div class="col">
                            <span class="xsTitle text-uppercase bold d-inline-block vAlignMdl">Message</span> <span class="badge bg-theme d-inline-block vAlignMdl">3 new</span>
                          </div>
                          <div class="col-auto">
                            <a href="javascript:void(0)" class="ddCloseTrigger"><img src="{{ asset('assets/images/close.svg') }}" alt="..."></a>
                          </div>
                        </div>
                      </div>
                      <div class="ddBody px-0">
                        <div class="ddScroll mCustomScrollbar" data-mcs-theme="dark">
                          <ul class="msgList">
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-03.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">Vasiliki Kalogeraki</h5>
                                  <span class="availableStatus online">Online</span>
                                </div>
                                <p>Hello! Good Morning</p>
                              </div>
                            </li>
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-02.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">Angelos George</h5>
                                  <span class="availableStatus online">Online</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                            </li>
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-04.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">A. Mused</h5>
                                  <span class="availableStatus">offline</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                            </li>
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-02.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">Angelos George</h5>
                                  <span class="availableStatus online">Online</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                            </li>
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-03.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">Vasiliki Kalogeraki</h5>
                                  <span class="availableStatus online">Online</span>
                                </div>
                                <p>Hello! Good Morning</p>
                              </div>
                            </li>
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-02.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">Angelos George</h5>
                                  <span class="availableStatus">Online</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="viewAllLink">
                          <a href="javascript:void(0)">View All</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="notifyDDCol ddParent">
                    <a href="javascript:void(0)" class="ddTrigger actUnread"><span class="ddTriggerContent"><img src="{{ asset('assets/images/bell-icon.svg') }}" alt="..."> <span class="unreadIndicator"></span></span></a>
                    <div class="ddContent">
                      <div class="ddHeader">
                        <div class="row">
                          <div class="col">
                            <span class="xsTitle text-uppercase bold d-inline-block vAlignMdl">Notifications</span> <span class="badge bg-theme d-inline-block vAlignMdl">3 new</span>
                          </div>
                          <div class="col-auto">
                            <a href="javascript:void(0)" class="ddCloseTrigger"><img src="{{ asset('assets/images/close.svg') }}" alt="..."></a>
                          </div>
                        </div>
                      </div>
                      <div class="ddBody px-0">
                        <div class="ddScroll mCustomScrollbar" data-mcs-theme="dark">
                          <ul class="msgList">
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-02.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">TELEMACHOS TZAK..</h5>
                                  <span class="d-block primaryColor">Customer Feedback</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="lightColor">Project: DIGITAL ADVERTISING & ANALYTICS / DIGITAL ADVERTISING AND RETURN DATA</p>
                              </div>
                            </li>
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-02.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">TELEMACHOS TZAK..</h5>
                                  <span class="d-block primaryColor">Customer Feedback</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="lightColor">Project: DIGITAL ADVERTISING & ANALYTICS / DIGITAL ADVERTISING AND RETURN DATA</p>
                              </div>
                            </li>
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-02.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">TELEMACHOS TZAK..</h5>
                                  <span class="d-block primaryColor">Customer Feedback</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="lightColor">Project: DIGITAL ADVERTISING & ANALYTICS / DIGITAL ADVERTISING AND RETURN DATA</p>
                              </div>
                            </li>
                            <li>
                              <a href="javascript:void(0)" class="fullLink"></a>
                              <span class="msgUserImg">
                                <img src="{{ asset('assets/images/user-img-02.png') }}" alt="...">
                              </span>
                              <div class="msgContent">
                                <div class="msgContentTopCol">
                                  <span class="dateTime"><span class="dCol">8/18/2019</span> <span class="tCol">3:20am</span></span>
                                  <h5 class="text-truncate">TELEMACHOS TZAK..</h5>
                                  <span class="d-block primaryColor">Customer Feedback</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="lightColor">Project: DIGITAL ADVERTISING & ANALYTICS / DIGITAL ADVERTISING AND RETURN DATA</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="viewAllLink">
                          <a href="javascript:void(0)">View All</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="proDDCol ddStyle ddParent">
                    <a href="javascript:void(0)" class="ddTrigger">
                      <span class="userTrigger">
                        <span class="userImg"><img src="{{ asset('assets/images/user.jpg') }}" alt="..."></span> <span class="d-none d-lg-inline-block userName text-truncate">John D.</span>
                      </span>
                    </a>
                    <div class="ddContent">
                      <ul class="ddOptions">
                        <li><a href="{{ url('profile') }}"> <span class="ddIcon"><img src="{{ asset('assets/images/user-icon-1.svg') }}" alt="..."></span> <span class="ddLinkText activeDot">My Profile</span></a></li>
                        <li><a href="javascript:void(0)"> <span class="ddIcon"><img src="{{ asset('assets/images/settings-icon.svg') }}" alt="..."></span> <span class="ddLinkText">Settings</span></a></li>
                        <li><livewire:authboard.logout /></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      {{ $slot }}
      <div class="navOverlay"></div>
    </div>
  </section>
  </div>
  @endauth

  @livewireScripts
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/moment-with-locales.min.js') }}"></script>
  <script src="{{ asset('assets/js/tempusdominus-bootstrap-4.js') }}"></script>
  <script src="{{ asset('assets/js/mCustomScrollbar.js') }}"></script>
  <script src="{{ asset('assets/js/custom-select.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
