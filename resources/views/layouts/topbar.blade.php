<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <span class="ms-1 nav-user-name hidden-sm">{{ Auth::user()->name }}</span>
                    <img src="{{ (isset(Auth::user()->avatar) && Auth::user()->avatar != '')  ? asset(Auth::user()->avatar) : asset('/assets/images/users/user-1.jpg') }}" alt="profile-user" class="rounded-circle thumb-xs" />
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    @if(auth()->user()->role === 'dokter')
                    <a class="dropdown-item" href="{{ route('backoffice.profile-dokter') }}"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> <span key="t-logout">Edit Profile</span></a>
                    @endif
                    <a class="dropdown-item" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> <span key="t-logout">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile">
                    <i data-feather="menu" class="align-self-center topbar-icon"></i>
                </button>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>