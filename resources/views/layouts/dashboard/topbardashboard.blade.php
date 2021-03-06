<header id="page-topbar">
  <div class="navbar-header">
    <div class="d-flex">
      <!-- LOGO -->
      <div class="navbar-brand-box">
        <a href="#" class="logo logo-dark">
          <span class="logo-sm">
            <img src="{{asset('asset/images/logo-sm.png')}}" alt="" height="22">
          </span>
          <span class="logo-lg">
            <img src="{{asset('asset/images/logo-dark.png')}}" alt="" height="20" class="logoin">
          </span>
        </a>

        <a href="#" class="logo logo-light">
          <span class="logo-sm">
            <img src="{{asset('asset/images/logo-sm.png')}}" alt="" height="22">
          </span>
          <span class="logo-lg">
            <img src="{{asset('asset/images/logo-light.png')}}" alt="" height="20">
          </span>
        </a>
      </div>

      <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
      </button>

      <!-- App Search-->
      <form class="app-search d-none d-lg-block">
        <div class="position-relative">
          <input type="text" class="form-control" placeholder="@lang('site.search')....">
          <span class="uil-search"></span>
        </div>
      </form>
    </div>

    <div class="d-flex">
      <div class="dropdown d-inline-block d-lg-none ml-2">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="uil-search"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
          aria-labelledby="page-header-search-dropdown">

          <form class="p-3">
            <div class="form-group m-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>



      <div class="dropdown d-none d-lg-inline-block ml-1">
        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="uil-apps"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        </div>
      </div>





      {{-- start notifications --}}
      <div class="dropdown d-none d-lg-inline-block ml-1">
        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
          <i class="uil-minus-path"></i>
        </button>
      </div>

      <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="uil-bell"></i>
          <span class="badge badge-danger badge-pill"></span>

        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
          aria-labelledby="page-header-notifications-dropdown">

          <div div data-simplebar style="max-height: 230px;">

            {{-- <a href="#" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="uil-shopping-basket"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a> --}}

            {{-- <a href="#" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="uil-truck"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a> --}}

            {{-- <a href="#" class="text-reset notification-item">
                            <div class="media">
                                <img src="{{asset('asset/images/users/avatar-4.jpg')}}"
            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
            <div class="media-body">
              <h6 class="mt-0 mb-1">Salena Layfield</h6>
              <div class="font-size-12 text-muted">
                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
              </div>
            </div>
          </div>
          </a> --}}


        </div>


        {{-- View More.. --}}
        <div class="p-2 border-top">
          <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
            <i class="uil-arrow-circle-right mr-1"></i> @lang('site.View_More..')
          </a>
        </div>
      </div>
    </div>





    {{-- end notifications --}}
    <div class="dropdown d-inline-block">
      <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        @if(auth()->user())
        <img class="rounded-circle header-profile-user" src="{{asset('asset/images/users/avatar-4.jpg')}}"
          alt="Header Avatar">
        <span class="d-none d-xl-inline-block ml-1 font-weight-medium font-size-15">
          {{auth()->user()->name}}
          {{-- {{auth()->user()->last_name}} --}}
        </span>
        <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
        @endif
      </button>
      <div class="dropdown-menu dropdown-menu-right">
        <!-- item-->
        <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted mr-1"></i>
          <span class="align-middle">View Profile</span></a>
        <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-18 align-middle mr-1 text-muted"></i> <span
            class="align-middle">My Wallet</span></a>
        <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle mr-1 text-muted"></i>
          <span class="align-middle">Settings</span> <span
            class="badge badge-soft-success badge-pill mt-1 ml-2">03</span></a>
        <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle mr-1 text-muted"></i>
          <span class="align-middle">Lock screen</span></a>


        <div class="dropdown-divider" style="border-top-color:#9c9c9c"></div>
        <a class="dropdown-item" href="{{ route('logout') }}">
          <i class="uil uil-sign-out-alt font-size-18 align-middle mr-1 text-muted"></i> <span
            class="align-middle">@lang('site.Sign_out')</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="get" style="display: none;">
          @csrf
        </form>
      </div>
    </div>

    {{-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="uil-cog"></i>
                </button>
            </div>
            --}}
  </div>
  </div>
</header>
