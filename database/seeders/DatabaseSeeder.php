<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ecommerce\Address;
use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\SubCategory;
use App\Models\Ecommerce\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
     # $this->call(ProductSeeder::class);

     /*  Category::factory(14)->create();
      Tag::factory(8)->create();
      SubCategory::factory(12)->create();
      Address::factory(18)->create();
     
 */

          /* ELIMINAR LAS IMAGENS DE LA CARPETA PUBLIC/STORAGE/POSTS */
    /*    Storage::deleteDirectory('public/posts');
       Storage::makeDirectory('public/posts');
 */   
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         /* CREACION DE LOS  */
        
        # $this->call(ReferralSeeder::class);
      /*    Pedido::factory(20)->create();
         Detalle::factory(10)->create(); */
     /*     Slider::factory(4)->create(); */
 
           /** SIN RELACIONES  POLIMORFICAS* */
       
/*          Brand::factory(20)->create();
         Provider::factory(2)->create();
         navbarConfig::factory(1)->create(); 
         Coin::factory(1)->create();
         Category::factory(14)->create();
         Tag::factory(8)->create();
         subCategory::factory(12)->create();
         
         Address::factory(18)->create();
         Profile::factory(20)->create();
         UserCoin::factory()->count(20)->create();
         PaymentMethod::factory(3)->create();
         Review::factory(10)->create(); */
 
        // UserParent::factory(50)->create();
     /** RELACION POLIMORFICA * */
 
       
   /*       $this->call(PostYoutubeSeeder::class);
         $this->call(videoSeeder::class);
         $this->call(ConfiguracionSeed::class); */
    }
}
