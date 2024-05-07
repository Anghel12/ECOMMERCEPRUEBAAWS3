

@auth
<li class="nav-item w-100 w-lg-auto">
    <a class="nav-link" href="{{ route('admin.index') }}">Admin</a>
</li>

@else
<li class="nav-item dropdown w-100 w-lg-auto">
    <a class="nav-link dropdown-toggle" href="index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('login') }}">Sign in</a></li>
        <li><a class="dropdown-item" href="{{ route('register') }}">Signup</a></li>
    </ul>
</li>
@endauth


