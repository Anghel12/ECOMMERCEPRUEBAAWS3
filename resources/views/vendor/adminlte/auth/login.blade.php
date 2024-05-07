<x-guest-layout>

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

<body>
    <!-- navigation -->
<div class="border-bottom shadow-sm">
<nav class="navbar navbar-light py-2">
  <div class="container justify-content-center justify-content-lg-between">
    <a class="navbar-brand" href="../index.html">
      <img src="../assets/images/logo/freshcart-logo.svg" alt="" class="d-inline-block align-text-top">
    </a>
    <span class="navbar-text">
      Already have an account? <a href="signin.html">Sign in</a>
    </span>
  </div>
</nav>
</div>


    <main>
       <!-- section -->
       <section class="my-lg-14 my-8">
          <div class="container">
             <!-- row -->
             <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                   <!-- img -->
                   <img src="{{ asset('images/svg-graphics/signin-g.svg') }}" alt="" class="img-fluid" />
                </div>
                <!-- col -->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                   <div class="mb-lg-9 mb-5">
                      <h1 class="mb-1 h2 fw-bold">Sign in to FreshCart</h1>
                      <p>Welcome back to FreshCart! Enter your email to get started.</p>
                   </div>

                     
                   <a href="{{route('google-auth')}}" class="btn btn-danger w-100 mb-3"><span class="fab fa-google text-danger me-2 fs--1"></span>Sign in with google</a>

                   <a href="{{route('facebook-auth')}} " class="btn btn-dark w-100"><span class="fab fa-facebook text-primary me-2 fs--1"></span>Sign in with facebook</a>
       
                  <div class="position-relative">
                    <hr class="bg-200 mt-5 mb-4" />
                    <div class="divider-content-center bg-white">or use email</div>
                  </div>

                   <form action="{{ $login_url }}" method="post" class="needs-validation">
                    @csrf

                      <div class="row g-3">
                         <!-- row -->

                         <div class="col-12">
                            <!-- input -->
                            <label for="formSigninEmail" class="form-label visually-hidden">Email address</label>
                            <input type="email" name="email" class="form-control" id="email"
                            value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
         
                             <div class="invalid-feedback">Please enter name.</div>              
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                         </div>


                         <div class="col-12">
                           <!-- input -->
                           <div class="password-field position-relative">
                              <label for="formSigninPassword" class="form-label visually-hidden">Password</label>
                              <div class="password-field position-relative">
                               <input type="password" name="password" class="form-control fakePassword" id="password"
                               placeholder="{{ __('adminlte::adminlte.password') }}">
                               <span ><i class="bi bi-eye-slash passwordToggler"></i></span>
                                 <div class="invalid-feedback">Please enter password.</div>
                                
                      @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                              </div>

                              
                           </div>
                        </div>

                         <div class="d-flex justify-content-between">
                            <!-- form check -->
                            <div class="form-check">

                              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}class="form-check-input" >

                               <!-- label -->
                               <label class="form-check-label" for="remenber">Remember me</label>
                            </div>
                            <div>
                               Forgot password?
                               <a href="{{ $password_reset_url }}">Reset It</a>
                            </div>
                         </div>
                         <!-- btn -->
                         <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Sign In</button></div>
                         <!-- link -->
                         <div>
                            Don’t have an account?
                            <a href="{{ $register_url }}">Sign Up</a>
                         </div>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </section>
    </main>
</body>

</x-guest-layout>

<script src="vendor/jquery/jquery.min.js"></script>

<!-- Agrega esto después de incluir jQuery -->
<script>
    $(document).ready(function() {
        $('.toggle-password').on('click', function() {
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

