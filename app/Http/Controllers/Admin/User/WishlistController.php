<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $wishlists = $user->wishlists()->with('product')->get();
        return view('admin.user.wishlist.index', compact('wishlists'));
    }

    public function store(Request $request)
    {
        // Obtener el ID del usuario autenticado
        $userId = auth()->id();

        // Obtener el ID del producto enviado en la solicitud
        $productId = $request->product_id;

        // Verificar si el producto ya está en la lista de deseos del usuario
        $existingWishlistItem = Wishlist::where('user_id', $userId)
            ->where('product_id', $productId)
            ->exists();

        // Si el producto ya está en la lista de deseos, redireccionar con un mensaje de error
        if ($existingWishlistItem) {
           /*  return redirect()->route('home.e_commerce.products.index')->with('info', 'Este producto ya está en tu lista de deseos.');
            */ return back()->with('info', 'Este producto ya está en tu lista de deseos.');  
        }

        $wishlist = new Wishlist();
        $wishlist->user_id = auth()->id();
        $wishlist->product_id = $request->product_id;
        $wishlist->save();

        return back()->with('info', 'Producto agregado a la lista de deseos');  
   /*      return redirect()->route('home.e_commerce.products.index')->with('info', 'Producto agregado a la lista de deseos.');
    */ }
    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return back()->with('info', 'Producto eliminado de la lista de deseos.');  
      /*   return redirect()->route('home.e_commerce.products.index')->with('info', ''); */
    }
}
