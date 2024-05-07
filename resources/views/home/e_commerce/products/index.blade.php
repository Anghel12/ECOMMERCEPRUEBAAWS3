<x-guest-layout>

    <main>
    {{-- carrusel --}}
        @include('home.e_commerce.products.partials.carrusel')
        <!-- Category Section End-->
        @include('home.e_commerce.products.partials.category_section')
        <!-- Category Section Start-->
        @include('home.e_commerce.products.partials.descuento')
        <!-- Popular Products Start-->
        @include('home.e_commerce.products.partials.popular_products')
        <!-- Popular Products End-->
        @include('home.e_commerce.products.partials.modal_products')
        {{-- ventas por dia --}}
        @include('home.e_commerce.products.partials.daily_sales')

        @include('home.e_commerce.products.partials.about')

    </main>
  
</x-guest-layout>