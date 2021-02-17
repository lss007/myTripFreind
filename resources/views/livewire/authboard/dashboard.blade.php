<div class="pageContentMain">
  <div class="alert alertStyle d-flex alert-warning" role="alert">
    <div class="alertIcon d-flex align-items-center justify-content-center">
      <img src="{{ asset('assets/images/warningicon.svg') }}" />
    </div>
    <div class="alertText d-lg-flex align-items-center">
      <h3 class="text-uppercase">Warning!</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    <div class="alertClose" data-bs-dismiss="alert" aria-label="Close">
      <img src="{{ asset('assets/images/close.svg') }}" alt="">
    </div>
  </div>
  <div class="welcomeCol">
    <div class="row align-items-center">
      <div class="col-md">
        <div class="welcomelCol d-flex align-items-center">
          <div class="welcomeIcon">
            <img src="{{ asset('assets/images/hand.svg') }}" alt="">
          </div>
          <div class="welcomeText ms-3">
            <h4>Good Afternoon,</h4>
            <h3>John D.</h3>
          </div>
        </div>
      </div>
      <div class="col-md-auto">
        <div class="welcomeInfoCol">
          <ul class="text-center">
            <li>
              <a href="javascript:void(0)">
                <span class="infoNumber">
                  0
                </span>
                <span class="infoText d-block">
                  Open Projects
                </span>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <span class="infoNumber">
                  0
                </span>
                <span class="infoText d-block">
                  Offer Enquires
                </span>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <span class="infoNumber infoAmount">
                  €0.00
                </span>
                <span class="infoText d-block">
                  Debts
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="tabCol">
    <div class="tabTop">
      <div class="row">
        <div class="col">
          <!-- <label class="tabLabel">Your Projects</label> -->
        </div>
        <div class="col">
          <div class="sortDD d-flex justify-content-end">
            <label>Sort By:</label>
            <div class="sortParent">
              <a href="javascript:void(0)" class="sortTrigger">
                <span>Deadline</span>
              </a>
              <ul class="sortDdMenu">
                <li><a class="dropdown-item" href="javascript:void(0)">Latest</a></li>
                <li><a class="dropdown-item" href="javascript:void(0)">Oldest</a></li>
                <li><a class="dropdown-item" href="javascript:void(0)">Lowest Price</a></li>
                <li><a class="dropdown-item" href="javascript:void(0)">Highest Price</a></li>
                <li><a class="dropdown-item" href="javascript:void(0)">With Bids</a></li>
                <li><a class="dropdown-item" href="javascript:void(0)">Without Bids</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tabOuter noProject">
      <div class="tabSec">
        <div class="tabHeader rightSwitchCol">
          <div class="row">
            <div class="col-md">
              <ul class="nav nav-tabs nav-fill border-0 bold" id="myTab" role="tablist">
                <li class="nav-item text-start" role="presentation">
                  <a class="nav-link active" id="oepnProject-tab" data-bs-toggle="tab" href="#oepnProject" role="tab" aria-controls="oepnProject" aria-selected="true">Open projects</a>
                </li>
                <li class="nav-item text-end text-md-start" role="presentation">
                  <a class="nav-link" id="fcr-tab" data-bs-toggle="tab" href="#fcr" role="tab" aria-controls="fcr" aria-selected="false">Free Costing Requests </a>
                </li>
                <li class="nav-item text-start mdWd-100" role="presentation">
                  <a class="nav-link" id="review-tab" data-bs-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                </li>
              </ul>
            </div>
            <div class="col-md-auto">
              <!-- <div class="row g-0 align-items-center showCompletedOption switchStyle">
                <div class="col">
                  <label class="form-check-label pe-2" for="showCompletedSwitch">Show completed</label>
                </div>
                <div class="col-auto">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="showCompletedSwitch">
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>

        <div class="tab-content p-0" id="projectTabContent">
          <div class="tab-pane position-relative fade show active" id="oepnProject" role="tabpanel" aria-labelledby="oepnProject-tab">
            <div class="tabContentBorderCol">
              <div class="noProjectCol">
                <div class="noProImgCol">
                  <img src="{{ asset('assets/images/no-project-img.svg') }}" alt="..." width="120">
                </div>
                <div class="noProContentCol">
                  <p>There are <span class="highlight">no active projects</span> currently. If you need a new project why don't you post one?</p>
                  <a href="javascript:void(0)" class="btn btn-primary btnSm mt-3">Post New Project</a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="fcr" role="tabpanel" aria-labelledby="fcr-tab">
            <div class="noProjectCol">
              <div class="noProImgCol">
                <img src="{{ asset('assets/images/no-project-img.svg') }}" alt="..." width="120">
              </div>
              <div class="noProContentCol">
                <p>There are <span class="highlight">No Free Costing Requests</span> yet.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane reviewTabContent fade" id="review" role="tabpanel" aria-labelledby="review-tab">
            <div class="noProjectCol">
              <div class="noProImgCol">
                <img src="{{ asset('assets/images/no-project-img.svg') }}" alt="..." width="120">
              </div>
              <div class="noProContentCol">
                <p>There are <span class="highlight">No Reviews</span> yet.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
