

<x-guest-layout>
    <main>
        <!-- section -->
        <section>
           <!-- container -->
           <div class="container">
              <!-- row -->
              <div class="row">
                 <!-- col -->
                 <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                       <!-- heading -->
                       <h3 class="fs-5 mb-0">Account Setting</h3>
                       <!-- button -->
                       <button
                          class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasAccount"
                          aria-controls="offcanvasAccount">
                          <i class="bi bi-text-indent-left fs-3"></i>
                       </button>
                    </div>
                 </div>
                 <!-- col -->
                 <div class="col-lg-3 col-md-4 col-12 border-end d-none d-md-block">
                  <div class="card-header text-center border-bottom">
                     <!-- Avatar -->
                     <div class="avatar avatar-xl position-relative mb-2">
                        <img class="avatar-img rounded-circle border border-2 border-white" src="{{ auth()->user()->profile_photo_url }}" alt="">
                        <a href="#" class="btn btn-sm btn-round btn-dark position-absolute top-50 start-100 translate-middle mt-4 ms-n3" data-bs-toggle="tooltip" data-bs-title="Edit profile">
                              <i class="bi bi-pencil-square"></i>
                        </a>
                     </div>
                     <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                     <a href="#" class="text-reset text-primary-hover small">{{ auth()->user()->email }}</a>
               </div>

                    <div class="pt-10 pe-lg-10">
                       <!-- nav item -->
                       <ul class="nav flex-column nav-pills nav-pills-dark">
                        <li class="nav-item">
                           <a class="nav-link" aria-current="page" href="{{ route('home.e_commerce.cart.index') }}">
                              <i class="feather-icon icon-shopping-bag me-2"></i>
                              Shop Cart
                           </a>
                        </li>
                          <li class="nav-item">
                             <a class="nav-link" aria-current="page" href="{{ route('admin.user.order.index') }}">
                                <i class="feather-icon icon-shopping-bag me-2"></i>
                                Your Orders
                             </a>
                          </li>
                          <!-- nav item -->
                          <li class="nav-item">
                             <a class="nav-link active" href="{{ route('admin.user.setting.index') }}">
                                <i class="feather-icon icon-settings me-2"></i>
                                Settings
                             </a>
                          </li>
                          <!-- nav item -->
                          <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.user.address.index') }}">
                                <i class="feather-icon icon-map-pin me-2"></i>
                                Address
                             </a>
                          </li>
                          <!-- nav item -->
                          <li class="nav-item">
                           <a class="nav-link " href="{{ route('admin.user.payment_method.index') }}">
                              <i class="feather-icon icon-credit-card me-2"></i>
                              Payment Method
                           </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                           <a class="nav-link " href="{{ route('admin.user.notification.index') }}">
                              <i class="feather-icon icon-bell me-2"></i>
                              Notification
                           </a>
                        </li>
                          <!-- nav item -->
                          <li class="nav-item">
                             <hr />
                          </li>
                          <!-- nav item -->
                          <li class="nav-item">
                             <a class="nav-link" href="../index.html">
                                <i class="feather-icon icon-log-out me-2"></i>
                                Log out
                             </a>
                          </li>
                       </ul>
                    </div>
                 </div>
    
           <div class="col-lg-9 col-md-4 col-12 border-end d-none d-md-block">
                   <div class="pt-1 pe-lg-1">
                  <x-slot name="header">
                      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                          {{ __('Profile') }}
                      </h2>
                  </x-slot>

                          @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                              @livewire('profile.update-profile-information-form')
              
                              <x-section-border />
                          @endif
              
                          @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                              <div class="mt-10 sm:mt-0">
                                  @livewire('profile.update-password-form')
                              </div>
              
                              <x-section-border />
                          @endif
              
                          @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                              <div class="mt-10 sm:mt-0">
                                  @livewire('profile.two-factor-authentication-form')
                              </div>
              
                              <x-section-border />
                          @endif
              
                          <div class="mt-10 sm:mt-0">
                              @livewire('profile.logout-other-browser-sessions-form')
                          </div>
              
                          @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                              <x-section-border />
              
                              <div class="mt-10 sm:mt-0">
                                  @livewire('profile.delete-user-form')
                              </div>
                          @endif
            

                  </div>
                </div>
                 
              </div>
           </div>
        </section>
     </main>
</x-guest-layout>


