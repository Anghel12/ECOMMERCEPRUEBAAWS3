<x-guest-layout>


    @php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url',
    'password/reset') )

    @if (config('adminlte.use_route_url', false))
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
    @else
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
    @endif

    <main>
        <section class="my-lg-14 my-8">
            <div class="container">

                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                        <form action="{{ $password_reset_url }}" method="post">
                            @csrf

                            {{-- Token field --}}
                            <input type="hidden" name="token" value="{{ $token }}">

                            {{-- Email field --}}
                            <div class="input-group mb-3">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span
                                            class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                    </div>
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            {{-- Password field --}}
                            <div class="input-group mb-3">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="{{ __('adminlte::adminlte.password') }}">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                    </div>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            {{-- Password confirmation field --}}
                            <div class="input-group mb-3">
                                <input type="password" name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="{{ trans('adminlte::adminlte.retype_password') }}">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                    </div>
                                </div>

                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            {{-- Confirm password reset button --}}
                            <button type="submit"
                                class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                <span class="fas fa-sync-alt"></span>
                                {{ __('adminlte::adminlte.reset_password') }}
                            </button>

                        </form>
                    </div>
                </div>


            </div>
        </section>
    </main>


</x-guest-layout>