<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{ url('/') }}">
            <img src="{{ asset('vendor\soft-ui\img\logo.png') }}">
        </a>
        <button
            class="navbar-toggler shadow-none ms-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navigation"
            aria-controls="navigation"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
        </button>
        <div class="navbar-collapse w-100 pt-3 pb-2 py-lg-0 collapse show" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">

                @auth
                    <li class="nav-item">
                        <a class="btn btn-sm btn-round mb-0 ms-2 bg-gradient-success" href="{{ route('dashboard') }}">
                            {{ __('Dashboard') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-sm btn-round mb-0 ms-2 bg-gradient-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-sm btn-round mb-0 ms-2 bg-gradient-success">
                            {{ __('Login') }}
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
