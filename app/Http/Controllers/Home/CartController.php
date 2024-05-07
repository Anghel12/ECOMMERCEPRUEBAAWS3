<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Detalle;
use App\Models\Ecommerce\Address;
use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Order as EcommerceOrder;
use App\Models\Ecommerce\Product;
use App\Models\Order;
use App\Models\Pedido;
/* use Cart; */
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verCarrito()
    {
        
        $products = Product::all();

        $category = Category::all();

        return view('home.e_commerce.cart.index', compact('products', 'category'));
    }

    public function comprarProducto(Request $request)
    {
        $product = Product::find($request->product_id); 
         
        Cart::add([

           ['id' => $product->id,
           'name' => $product->name,
            'qty' => $product->quantity,
             'price' => $product->price,
             'weight' => 1,
           'options' => [
               'urlfoto' => $product->images->first()->url,
               'nombre' => $product->name,
               ]
           ]
         ]);

        return view('home.e_commerce.cart.index');
    }

    public function  checkout(){

        $addresses = Address::all();
        return view('admin.user.cart.checkout', compact('addresses'));
    }
    
    public function agregarItem(Request $request)
    {
  
          $product = Product::find($request->product_id); 
         
         Cart::add([

            ['id' => $product->id,
            'name' => $product->name,
             'qty' => $product->quantity,
              'price' => $product->price,
              'weight' => 1,
            'options' => [
                'urlfoto' => $product->images->first()->url,
                'nombre' => $product->name,
                ]
            ]
          ]);
   
           return redirect()->back()->with('info', 'El Producto se agrego al carrito');     
          
    }


    public function incrementarCantidad(Request $request)
    {
       $item = Cart::content()->where("rowId", $request->id)->first();
       Cart::update($request->id, ["qty" =>$item->qty+1]);
       return back()->with('info', 'Agregaste una unidad mas');
    }
    
    public function decrementarCantidad(Request $request)
    {
       $item = Cart::content()->where("rowId", $request->id)->first();
       Cart::update($request->id, ["qty" =>$item->qty-1]);
       return back()->with('info', 'Quitaste una unidad');
    }


    public function eliminarProducto(Request $request)
    {
        Cart::remove($request->id);
        return back()->with('info', 'EL PRODUCTO SE ELIMINO CON EXITO DEL CARRITO');    
 
    }
    public function eliminarCarrito()
    {
        Cart::destroy();
        return back()->with('info', 'Carrito eliminado correctamente');    
 
    }


    public function CrearOrden(Request $request){

 
        $request->validate([ 
            'fullname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode'=> 'required',
            'phone'=> 'required',
            'payment_method' => 'required'
        ]);


        /* orden de envio al comprar */
        $order = new EcommerceOrder();
        $order->user_id = auth()->user()->id;
        $order->order_number = uniqid('OrderNumber-');
        $order->shipping_fullname = $request->fullname;
        $order->shipping_address = $request->address;
        $order->shipping_city = $request->city;
        $order->shipping_state = $request->state;
        $order->shipping_zipcode = $request->zipcode;
        $order->shipping_phone = $request->phone;

        $order->payment_method = $request->payment_method;
        $order->total = Cart::total();

        foreach (Cart::content() as $item) {
           /*  $order->item_count = Cart::qty();  */
           $order->item_count = Cart::tax(); 
            $order->total = Cart::total();
            $order->item_count = $item->qty;; 
        }
        $order->save();

         /* en caso esto billing este vacio  */
     /*    if ( is_null($this->billing_fullname) ) {

        $order->billing_fullname = $request->fullname;
        $order->billing_address = $request->address;
        $order->billing_city = $request->city;
        $order->billing_state = $request->state;
        $order->billing_zipcode = $request->zipcode;
        $order->billing_phone = $request->phone;
        }  */

        /* metodos de pagos  */
        if ( $request->payment_method == 'paypal') {
            # code...
        }else{
          //  $order->is_paid;
        }

/* guardar todos los items comparados en la tabla order_items  */
        foreach (Cart::content() as $item) {

            $order->posts()->attach($item->id , [
                'price' => $item->price,
                'quantity' => $item->qty,
            ] );
        }
    
        return back()->with('info', 'Tu pedido esta en camino');  
    }



    public function comfirmarCarrito()
    {
        $pedido = new Pedido() ;
        $pedido->subtotal = Cart::subtotal();
        $pedido->impuesto = Cart::tax();
        $pedido->total = Cart::total();
       /*  $pedido->fechapedido = date("Y-m-d h:m:s"); 
         $pedido->procedencia = "web"; */
        $pedido->entregado = "falta"; 
        $pedido->user_id = auth()->user()->id;
        $pedido->save();

        foreach (Cart::content() as $item) {
            $detalle = new Detalle();
            #$detalle->precio = $item->price; 
            $detalle->cantidad =  $item->qty;
            #$detalle->importe =  $item->pricio *  $item->qty; 
            $detalle->producto_id =  $item->id;
            #$detalle->pedido_id =  $pedido->id; 
            $detalle->user_id = auth()->user()->id;
            $detalle->save();
        }

        Cart::destroy();
        return back()->with('info', 'Tu pedido esta en camino');     
        
    }
}

