<x-guest-layout>
    @php( $password_email_url = View::getSection('password_email_url') ?? config('adminlte.password_email_url',
    'password/email') )

    @if (config('adminlte.use_route_url', false))
    @php( $password_email_url = $password_email_url ? route($password_email_url) : '' )
    @else
    @php( $password_email_url = $password_email_url ? url($password_email_url) : '' )
    @endif


    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif


    <main>
        <section class="my-lg-14 my-8">
            <div class="container">

                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">

                        <!-- section -->
                        <form action="{{ $password_email_url }}" method="post">
                            @csrf

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

                            {{-- Send reset link button --}}
                            <button type="submit"
                                class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                <span class="fas fa-share-square"></span>
                                {{ __('adminlte::adminlte.send_password_reset_link') }}
                            </button>

                        </form>
                    </div>
                </div>


            </div>
        </section>
    </main>
</x-guest-layout>