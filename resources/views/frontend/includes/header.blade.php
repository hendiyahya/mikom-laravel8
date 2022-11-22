<header class="header-global align-items-center ">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-2 px-lg-6 navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="navbar-brand-dark common" src="{{asset('img/backend-logo.png')}}" height="35" alt="Logo light">
                <img class="navbar-brand-light common" src="{{asset('img/backend-logo.png')}}" height="35" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="/">
                                <img src="{{asset('img/backend-logo.jpg')}}" height="35" alt="Logo Impact">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                                data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class=" col-10 navbar-nav navbar-nav-hover justify-content-center">

                    <li class="nav-item">
                        <a href="{{ route('frontend.posts.index') }}" class="nav-link text-black">
                            <!-- <span class="fas fa-file-alt mr-1"></span>  -->
                            <h5>Post</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black">
                            <!-- <span class="fas fa-file-alt mr-1"></span>  -->
                            <h5>Forum</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black">
                            <!-- <span class="fas fa-file-alt mr-1"></span>  -->
                            <h5>Konsultasi</h5>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block text-black">
                <div class="nav-item dropdown">
                    <h4>
                        <a href="#" class="nav-link dropdown-toggle" aria-expanded="false" data-toggle="dropdown">
                            <span class="nav-link-inner-text mr-1">
                                <span class="fas fa-user-circle mr-1"></span>
                            </span>
                            <i class="fas fa-angle-down nav-link-arrow"></i>
                        </a>
                    </h4>
                    <div class="dropdown-menu dropdown-menu-lg">
                        <div class="col-auto px-0" data-dropdown-content>
                            <div class="list-group list-group-flush">
                                @auth
                                <a href="{{ route('frontend.users.profile', auth()->user()->id) }}"
                                    class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                    <span class="icon icon-sm icon-success"><i class="fas fa-user"></i></span>
                                    <div class="ml-4">
                                        <span class="text-dark d-block">
                                            {{ Auth::user()->name }}
                                        </span>
                                        <span class="small">View profile details!</span>
                                    </div>
                                </a>
                                <a href="{{ route('logout') }}"
                                    class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4" onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
                                    <span class="icon icon-sm icon-secondary">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </span>
                                    <div class="ml-4">
                                        <span class="text-dark d-block">
                                            Logout
                                        </span>
                                        <span class="small">Logout from your account!</span>
                                    </div>
                                </a>
                                <form id="account-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                @else
                                <a href="{{ route('login') }}"
                                    class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                    <span class="icon icon-sm icon-black"><i class="fas fa-key"></i></span>
                                    <div class="ml-4">
                                        <span class="text-dark d-block">
                                            Login
                                        </span>
                                        <span class="small">Login ke Website</span>
                                    </div>
                                </a>
                                @if(user_registration())
                                <a href="{{ route('register') }}"
                                    class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                    <span class="icon icon-sm icon-black">
                                        <i class="fas fa-address-card"></i>
                                    </span>
                                    <div class="ml-4">
                                        <span class="text-dark d-block">Daftar</span>
                                        <span class="small">Bergabunglah bersama kami!</span>
                                    </div>
                                </a>
                                @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex d-lg-none align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </div>
    </nav>
</header>
