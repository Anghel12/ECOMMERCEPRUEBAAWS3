<x-guest-layout>
  
    <body>
        
  

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif

<main>
    <!-- section -->

    <section class="my-lg-14 my-8">
       <!-- container -->
       <div class="container">
          <!-- row -->
          <div class="row justify-content-center align-items-center">
             <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                <!-- img -->
                
                <img src="{{ asset('images/svg-graphics/signup-g.svg') }}" alt="" class="img-fluid" />
             </div>
             <!-- col -->
             <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                <div class="mb-lg-9 mb-5">
                   <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
                   <p>Welcome to FreshCart! Enter your email to get started.</p>
                </div>

                <a href="{{-- {{route('google-auth')}} --}}" class="btn btn-danger w-100 mb-3"><span class="fab fa-google text-danger me-2 fs--1"></span>Sign in with google</a>

				<a href="{{-- {{route('facebook-auth')}} --}}" class="btn btn-dark w-100"><span class="fab fa-facebook text-primary me-2 fs--1"></span>Sign in with facebook</a>

                <div class="position-relative">
                  <hr class="bg-200 mt-5 mb-4" />
                  <p class="divider-content-center bg-white">or use email</p>
                </div>
                <!-- form -->

                <form action="{{ $register_url }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <!-- col -->
                        <div class="col">
                            <!-- input -->
                            <label for="formSignupfname" class="form-label visually-hidden">First Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>
                            <div class="invalid-feedback">Please enter first name.</div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <!-- input -->
                            <label for="formSignupEmail" class="form-label visually-hidden">Email address</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
                            <div class="invalid-feedback">Please enter email.</div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="password-field position-relative">
                                <label for="formSignupPassword" class="form-label visually-hidden">Password</label>
                                <input type="password" name="password" class="form-control fakePassword" placeholder="{{ __('adminlte::adminlte.password') }}">
                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                <div class="invalid-feedback">Please enter password.</div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="password-field position-relative">
                                <label for="formSignupPassword" class="form-label visually-hidden">Password confirmation</label>
                                <input type="password" name="password_confirmation" class="form-control fakePassword" placeholder="{{ __('adminlte::adminlte.retype_password') }}">
                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                <div class="invalid-feedback">Retype Password</div>

                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                             have an account
                            <a href="{{ $login_url }}">Sign Up</a>
                         </div>

                        <!-- btn -->
                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <!-- text -->
                        <div class="col-12">
                            <p>
                                <small>
                                    By continuing, you agree to our
                                    <a href="{{ $login_url }}">Terms of Service</a>
                                    &
                                    <a href="{{ $login_url }}">Privacy Policy</a>
                                </small>
                            </p>
                        </div>
                    </div>
                </form>
             </div>
          </div>
       </div>
    </section>
 </main>

</body>

</x-app-layout>

<script src="vendor/jquery/jquery.min.js"></script>

<!-- Agrega esto después de incluir jQuery -->
<script>
    $(document).ready(function() {
        $('.passwordToggler').on('click', function() {
            var passwordField = $('#password');
            var passwordFieldType = passwordField.attr('type');

            if (passwordFieldType === 'password') {
                passwordField.attr('type', 'text');
            } else {
                passwordField.attr('type', 'password');
            }
        });
    });
</script>

