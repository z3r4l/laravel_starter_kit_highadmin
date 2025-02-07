{{-- <header>
  <nav class="navbar navbar-expand navbar-light navbar-top">
    <div class="container-fluid">
      <a href="#" class="burger-btn d-block">
        <i class="bi bi-justify fs-3"></i>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-lg-0">

        </ul>
        <div class="dropdown">
          <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user-menu d-flex">
              <div class="user-name text-end me-3">
                <h6 class="mb-0 text-gray-600">{{ auth()->user()->name }}</h6>
                <p class="mb-0 text-sm text-gray-600">{{ auth()->user()->getRolesAsString() }}</p>
              </div>
              <div class="user-img d-flex align-items-center">
                <div class="avatar avatar-md">
                  <img src="{{ asset('back/assets/compiled/jpg/1.jpg') }}">
                </div>
              </div>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
            <li>
              <h6 class="dropdown-header">Hello, John!</h6>
            </li>
            <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                Wallet</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                  class="icon-mid bi bi-box-arrow-left me-2"></i>
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header> --}}

<div class="topbar">

  <nav class="navbar-custom">

    <ul class="list-unstyled topbar-right-menu float-right mb-0">

      {{-- <li class="hide-phone app-search">
        <form>
          <input type="text" placeholder="Search..." class="form-control">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </li> --}}

      <li class="dropdown notification-list">
        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
          aria-haspopup="false" aria-expanded="false">
          <i class="fi-bell noti-icon"></i>
          <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


          <!-- item-->
          <div class="dropdown-item noti-title">
            <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a>
              </span>Notification</h5>
          </div>

          <div class="slimscroll" style="max-height: 230px;">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
              <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min
                  ago</small></p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
              <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
              <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days
                  ago</small></p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
              <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days
                  ago</small></p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
              <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
              <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days
                  ago</small></p>
            </a>
          </div>

          <!-- All-->
          <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
            View all <i class="fi-arrow-right"></i>
          </a>

        </div>
      </li>

      <li class="dropdown notification-list">
        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
          aria-haspopup="false" aria-expanded="false">
          <i class="fi-speech-bubble noti-icon"></i>
          <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


          <!-- item-->
          <div class="dropdown-item noti-title">
            <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a>
              </span>Chat</h5>
          </div>

          <div class="slimscroll" style="max-height: 230px;">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon"><img src="{{ asset('back/assets/images/users/avatar-2.jpg') }}"
                  class="img-fluid rounded-circle" alt="" /> </div>
              <p class="notify-details">Cristina Pride</p>
              <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon"><img src="{{ asset('back/assets/images/users/avatar-3.jpg') }}"
                  class="img-fluid rounded-circle" alt="" /> </div>
              <p class="notify-details">Sam Garret</p>
              <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon"><img src="{{ asset('back/assets/images/users/avatar-4.jpg') }}"
                  class="img-fluid rounded-circle" alt="" /> </div>
              <p class="notify-details">Karen Robinson</p>
              <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon"><img src="{{ asset('back/assets/images/users/avatar-5.jpg') }}"
                  class="img-fluid rounded-circle" alt="" /> </div>
              <p class="notify-details">Sherry Marshall</p>
              <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon"><img src="{{ asset('back/assets/images/users/avatar-6.jpg') }}"
                  class="img-fluid rounded-circle" alt="" /> </div>
              <p class="notify-details">Shawn Millard</p>
              <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
            </a>
          </div>

          <!-- All-->
          <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
            View all <i class="fi-arrow-right"></i>
          </a>

        </div>
      </li>

      <li class="dropdown notification-list">
        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
          aria-expanded="false">
          <img src="{{ asset('back/assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"> <span
            class="ml-1">{{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i> </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
          <!-- item-->
          <div class="dropdown-item noti-title">
            <h6 class="text-overflow m-0">Welcome !</h6>
          </div>

          <!-- item-->
          <a href="{{ route('profile') }}" class="dropdown-item notify-item">
            <i class="fi-head"></i> <span>My Account</span>
          </a>

          <!-- item-->
          {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fi-cog"></i> <span>Settings</span>
          </a> --}}

          <!-- item-->
          {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fi-help"></i> <span>Support</span>
          </a> --}}

          <!-- item-->
          {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fi-lock"></i> <span>Lock Screen</span>
          </a> --}}

          <!-- item-->
          <a 
            class="dropdown-item notify-item" 
            href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"> 
            <i class="fi-power"></i> <span>Logout</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>

    </ul>

    <ul class="list-inline menu-left mb-0">
      <li class="float-left">
        <button class="button-menu-mobile open-left disable-btn">
          <i class="dripicons-menu"></i>
        </button>
      </li>
      <li>
        {{-- <div class="page-title-box">
          <h4 class="page-title">Starter </h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active">Starter</li>
          </ol>
        </div> --}}
      </li>

    </ul>

  </nav>

</div>