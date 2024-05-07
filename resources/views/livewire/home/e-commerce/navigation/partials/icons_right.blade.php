<div class="col-lg-2 col-xxl-2 text-end col-md-6 col-7">
    <div class="list-inline">
        @auth


        <div class="list-inline-item me-5">
            <a href="index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">


                <img src="{{ auth()->user()->profile_photo_url }}" alt="" class="avatar avatar-md rounded-circle" />
            </a>

            <div class="dropdown-menu dropdown-menu-end p-0">
                <div class="lh-1 px-5 py-4 border-bottom">
                    <h5 class="mb-1 h6">{{ auth()->user()->name }}</h5>
                    <small>{{ auth()->user()->email }}</small>
                </div>

                <ul class="list-unstyled px-2 py-3">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.user.index') }}">YO</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.user.order.index') }}">Order</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('admin.user.setting.index') }}">Settings</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('admin.user.cart.index') }}">Ver Carrito</a>
                      
                    </li>
                    <li><a class="dropdown-item" href="{{ route('admin.user.address.index') }}">Address</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.user.payment_method.index') }}">Payment Method</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.user.notification.index') }}">Notification</a></li>
                </ul>
                <div class="border-top px-5 py-3">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <button class="btn btn-dark px-6" type="submit"> {{ __('Log Out') }}</button>
                    </form>

                </div>
            </div>
        </div>


        @else
        <div class="list-inline-item me-5">
            <a href="index.html#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </a>
        </div>
        @endauth


        <div class="list-inline-item me-5">
            <a href="{{ route('admin.user.wishlist.index') }}" class="text-muted position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-heart">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                </svg>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    5
                    <span class="visually-hidden">unread messages</span>
                </span>
            </a>
        </div>

        <div class="list-inline-item me-5 me-lg-0">
            <a class="text-muted position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                href="index.html#offcanvasExample" role="button" aria-controls="offcanvasRight">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-shopping-bag">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                </svg>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    1
                    <span class="visually-hidden">unread messages</span>
                </span>
            </a>
        </div>
        
        <div class="list-inline-item d-inline-block d-lg-none">
            <!-- Button -->
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
                    <path
                        d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
        </div>
    </div>
</div>