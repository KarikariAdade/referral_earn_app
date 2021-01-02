<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Earn App | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/base/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
			<!-- 	<div class="pro-banner" id="pro-banner">
						<div class="card pro-banner-bg border-0 rounded-0">
							<div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
								<p class="mb-0 text-white font-weight-medium mb-2 mb-lg-0 mb-xl-0">Like what you see? Checkout our premium version for more.</p>
								<div class="d-flex">
									<a href="https://github.com/Bootstrapdash/Kapella-Free-Bootstrap-Admin-Template" target="_blank" class="btn btn-outline-light mr-2">Download free version</a>
									<a href="http://www.bootstrapdash.com/demo/kapella/template/" target="_blank" class="btn btn-outline-light mr-2 bg-white text-dark">Upgrade to Pro</a>
									<button id="bannerClose" class="btn border-0 p-0">
										<i class="mdi mdi-close text-white"></i>
									</button>
								</div>
						</div>
					</div>
				</div> -->
        <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
          <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container-fluid">
              <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <ul class="navbar-nav navbar-nav-left">
                  <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                    <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                      <i class="mdi mdi-bell mx-0"></i>
                      <span class="count bg-success">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                      <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-success">
                            <i class="mdi mdi-information mx-0"></i>
                          </div>
                        </div>
                        <div class="preview-item-content">
                          <h6 class="preview-subject font-weight-normal">Application Error</h6>
                          <p class="font-weight-light small-text mb-0 text-muted">
                            Just now
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-warning">
                            <i class="mdi mdi-settings mx-0"></i>
                          </div>
                        </div>
                        <div class="preview-item-content">
                          <h6 class="preview-subject font-weight-normal">Settings</h6>
                          <p class="font-weight-light small-text mb-0 text-muted">
                            Private message
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-info">
                            <i class="mdi mdi-account-box mx-0"></i>
                          </div>
                        </div>
                        <div class="preview-item-content">
                          <h6 class="preview-subject font-weight-normal">New user registration</h6>
                          <p class="font-weight-light small-text mb-0 text-muted">
                            2 days ago
                          </p>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                      <i class="mdi mdi-email mx-0"></i>
                      <span class="count bg-primary">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                      <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                          <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                          </h6>
                          <p class="font-weight-light small-text text-muted mb-0">
                            The meeting is cancelled
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                          <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                          </h6>
                          <p class="font-weight-light small-text text-muted mb-0">
                            New product launch
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                          <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                          </h6>
                          <p class="font-weight-light small-text text-muted mb-0">
                            Upcoming board meeting
                          </p>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
                  </li>
                </ul>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                  <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
                  <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                  <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                      <span class="nav-profile-name">{{ auth()->user()->name}}</span>
                      <span class="online-status"></span>
                      <img src="images/faces/face28.png" alt="profile"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Profile
                      </a>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="mdi mdi-logout text-primary"></i>
                      Logout
                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                      @csrf
                    </form>
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('member.dashboard') }}">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="mdi mdi-cube-outline menu-icon"></i>
                <span class="menu-title">Profile</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="mdi mdi-chart-areaspline menu-icon"></i>
                <span class="menu-title">Select Giveaways</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="mdi mdi-finance menu-icon"></i>
                <span class="menu-title">Subscribe</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="mdi mdi-grid menu-icon"></i>
                <span class="menu-title">Referrals ({{ count(auth()->user()->getReferrals()) }})</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="mdi mdi-emoticon menu-icon"></i>
                <span class="menu-title">Bonuses</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')

          </div>
        </div>
      </div>
      <footer class="footer">
  <div class="footer-wrap">
    <div class="w-100 clearfix">
      <span class="d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="" target="_blank">Earn App</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart-outline"></i></span>
    </div>
  </div>
</footer>
      <script src="{{ asset('assets/vendors/base/vendor.bundle.base.js') }}"></script>
      <script src="{{ asset('assets/js/template.js') }}"></script>
      <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
      <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
      <script src="{{ asset('assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js') }}"></script>
      <script src="{{ asset('assets/vendors/justgage/raphael-2.1.4.min.js') }}"></script>
      <script src="{{ asset('assets/vendors/justgage/justgage.js') }}"></script>
      <script src="{{ asset('assets/js/dashboard.js') }}"></script>
      <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
    </html>