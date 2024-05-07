<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'Admin']);
        $UserRole = Role::create(['name' => 'User']);
        $SuperUserRole = Role::create(['name' => 'SuperUser']);

/*         $permission = Permission::create(['name' => 'admin.index'])->syncRoles([$role1, $role2, $role3]);

        $permission = Permission::create(['name' => 'admin.e_commerce.categories.index'])->syncRoles([$role1, $role2, $role3]);
    
        $permission = Permission::create(['name' => 'admin.e_commerce.categories.edit'])->syncRoles([$role1, $role2, $role3]);
     */

 // Crear permisos
 $permissions = [
    /* titulo label */
    'admin.adminTitulo' => 'ver el adminTitulo',
     /* lista de users */
    'admin.home' => 'ver el admin',
    'admin.users.index' => 'ver el listado de usuarios',
    'admin.users.update' => 'ver la actualización',
    'admin.users.edit' => 'asignar un rol',
     /* lista de post */
    'admin.posts.index' => 'ver listado de posts',
    'admin.posts.create' => 'crear posts',
    'admin.posts.edit' => 'editar posts',
    'admin.posts.destroy' => 'eliminar posts',
    /* lista de roles */
    'admin.roles.index' => 'ver listado de roles',
    'admin.roles.create' => 'crear roles',
    'admin.roles.edit' => 'editar roles',
    'admin.roles.destroy' => 'eliminar roles',
    /* lista de Pagos-Metodos */
    'admin.PaymentMethods.index' => 'ver listado de PaymentMethods',
    'admin.PaymentMethods.create' => 'crear',
    'admin.PaymentMethods.edit' => 'editar',
    'admin.PaymentMethods.destroy' => 'eliminar',
    /* lista de deviceInfos */
    'admin.deviceInfos.index' => 'ver listado de deviceInfos',
    'admin.deviceInfos.create' => 'crear',
    'admin.deviceInfos.edit' => 'editar',
    'admin.deviceInfos.destroy' => 'eliminar',
    /* lista de orders */
    'admin.orders.index' => 'ver listado de orders',
    'admin.orders.create' => 'crear',
    'admin.orders.edit' => 'editar',
    'admin.orders.destroy' => 'eliminar',
     /* lista de CommentsAll */
     'admin.CommentsAll.index' => 'ver listado de CommentsAll',
     'admin.CommentsAll.create' => 'crear',
     'admin.CommentsAll.edit' => 'editar',
     'admin.CommentsAll.destroy' => 'eliminar',        
     /* lista de Terms */
     'admin.Terms.index' => 'ver listado de Terms',
     'admin.Terms.create' => 'crear',
     'admin.Terms.edit' => 'editar',
     'admin.Terms.destroy' => 'eliminar',
     /* lista de Shareds */
     'admin.Shareds.index' => 'ver listado de Shareds',
     'admin.Shareds.create' => 'crear',
     'admin.Shareds.edit' => 'editar',
     'admin.Shareds.destroy' => 'eliminar',
    /* lista de Rules */
     'admin.Rules.index' => 'ver listado de Rules',
     'admin.Rules.create' => 'crear',
     'admin.Rules.edit' => 'editar',
     'admin.Rules.destroy' => 'eliminar',
    /* lista de providers */
    'admin.providers.index' => 'ver listado de providers',
    'admin.providers.create' => 'crear',
    'admin.providers.edit' => 'editar',
    'admin.providers.destroy' => 'eliminar',
    /* lista de reports */
    'admin.reports.index' => 'ver listado de reports',
    'admin.reports.create' => 'crear',
    'admin.reports.edit' => 'editar',
    'admin.reports.destroy' => 'eliminar',
     /* lista de bans */
    'admin.bans.index' => 'ver listado de bans',
    'admin.bans.create' => 'crear',
    'admin.bans.edit' => 'editar',
    'admin.bans.destroy' => 'eliminar',
        /* lista de Blocked_follows */
    'admin.Blocked_follows.index' => 'ver listado de Blocked_follows',
    'admin.Blocked_follows.create' => 'crear',
    'admin.Blocked_follows.edit' => 'editar',
    'admin.Blocked_follows.destroy' => 'eliminar',
    /* home config */
    'admin.adminTitulo.index' => 'titulo homeConfigTitulo',
    /* lista de navbars */
    'admin.navbars.index' => 'ver listado de navbars',
    'admin.navbars.create' => 'crear',
    'admin.navbars.edit' => 'editar',
    'admin.navbars.destroy' => 'eliminar',
    /* lista de sliders */
    'admin.sliders.index' => 'ver listado de sliders',
    'admin.sliders.create' => 'crear',
    'admin.sliders.edit' => 'editar',
    'admin.sliders.destroy' => 'eliminar',
     /* lista de postyoutubes */
     'admin.postyoutubes.index' => 'ver listado de postyoutubes',
     'admin.postyoutubes.create' => 'crear',
     'admin.postyoutubes.edit' => 'editar',
     'admin.postyoutubes.destroy' => 'eliminar',
     /* lista de HomeBaners */
     'admin.HomeBaners.index' => 'ver listado de HomeBaners',
     'admin.HomeBaners.create' => 'crear',
     'admin.HomeBaners.edit' => 'editar',
     'admin.HomeBaners.destroy' => 'eliminar',
      /* lista de footers */
    'admin.footers.index' => 'ver listado de footers',
    'admin.footers.create' => 'crear',
    'admin.footers.edit' => 'editar',
    'admin.footers.destroy' => 'eliminar',
    /* lista de redes sociales */
    'admin.redes.index' => 'ver listado de redes',
    'admin.redes.create' => 'crear',
    'admin.redes.edit' => 'editar',
    'admin.redes.destroy' => 'eliminar',
       /* lista de HomeContact */
    'admin.HomeContact.index' => 'ver listado de HomeContact',
    'admin.HomeContact.create' => 'crear',
    'admin.HomeContact.edit' => 'editar',
    'admin.HomeContact.destroy' => 'eliminar',

     /*CONFIGURACION */
     'admin.adminTitulo.index' => 'titulo ConfigTitulo',
     /* lista de DevTools */
     'admin.DevTools.index' => 'ver listado de DevTools',
     'admin.DevTools.create' => 'crear',
     'admin.DevTools.edit' => 'editar',
     'admin.DevTools.destroy' => 'eliminar',
     /* lista de icons */
     'admin.icons.index' => 'ver listado de icons',
     'admin.icons.create' => 'crear',
     'admin.icons.edit' => 'editar',
     'admin.icons.destroy' => 'eliminar',
      /* lista de database */
      'admin.database.index' => 'ver listado de database',
      'admin.database.create' => 'crear',
      'admin.database.edit' => 'editar',
      'admin.database.destroy' => 'eliminar',
      /* lista de envconfig */
      'admin.envconfig.index' => 'ver listado de envconfig',
      'admin.envconfig.create' => 'crear',
      'admin.envconfig.edit' => 'editar',
      'admin.envconfig.destroy' => 'eliminar',

        /* VENTAS */
     'admin.adminTitulo.index' => 'titulo ConfigTitulo',
     /* lista de orders */
     'admin.orders.index' => 'ver listado de orders',
     'admin.orders.create' => 'crear',
     'admin.orders.edit' => 'editar',
     'admin.orders.destroy' => 'eliminar',
     /* lista de sales */
     'admin.sales.index' => 'ver listado de sales',
     'admin.sales.create' => 'crear',
     'admin.sales.edit' => 'editar',
     'admin.sales.destroy' => 'eliminar',
      /* lista de buys */
      'admin.buys.index' => 'ver listado de buys',
      'admin.buys.create' => 'crear',
      'admin.buys.edit' => 'editar',
      'admin.buys.destroy' => 'eliminar',

                   /*adminTituloExtras */
     'admin.adminTituloExtras.index' => 'titulo adminTituloExtras',
     /* lista de error404 */
     'admin.error404.index' => 'ver listado de error404',
     'admin.error404.create' => 'crear',
     'admin.error404.edit' => 'editar',
     'admin.error404.destroy' => 'eliminar',
     /* lista de error405 */
     'admin.error405.index' => 'ver listado de error405',
     'admin.error405.create' => 'crear',
     'admin.error405.edit' => 'editar',
     'admin.error405.destroy' => 'eliminar',
      /* lista de chatgpt */
      'admin.chatgpt.index' => 'ver listado de chatgpt',
      'admin.chatgpt.create' => 'crear',
      'admin.chatgpt.edit' => 'editar',
      'admin.chatgpt.destroy' => 'eliminar',
      /* lista de chat */
      'admin.chat.index' => 'ver listado de chat',
      'admin.chat.create' => 'crear',
      'admin.chat.edit' => 'editar',
      'admin.chat.destroy' => 'eliminar',

             /*messages */
    'admin.adminTituloMessages.index' => 'titulo messages',
     /* lista de messages */
     'admin.messages.index' => 'ver listado de messages',
     'admin.messages.create' => 'crear',
     'admin.messages.edit' => 'editar',
     'admin.messages.destroy' => 'eliminar',

            /*Inventario */
     'admin.adminTituloInventario.index' => 'titulo Inventario',
     /* lista de brands */
     'admin.brands.index' => 'ver listado de brands',
     'admin.brands.create' => 'crear',
     'admin.brands.edit' => 'editar',
     'admin.brands.destroy' => 'eliminar',

    /* lista de Categorias */
    'admin.categories.index' => 'ver listado de categorías',
    'admin.categories.create' => 'crear categorías',
    'admin.categories.edit' => 'editar categorías',
    'admin.categories.destroy' => 'eliminar categorías',
     /* lista de tags */
    'admin.tags.index' => 'ver listado de tags',
    'admin.tags.create' => 'crear tags',
    'admin.tags.edit' => 'editar tags',
    'admin.tags.destroy' => 'eliminar tags',

     /* lista de sub_categories */
     'admin.sub_categories.index' => 'ver listado de sub_categories',
     'admin.sub_categories.create' => 'crear',
     'admin.sub_categories.edit' => 'editar',
     'admin.sub_categories.destroy' => 'eliminar',

      /* lista de sub_categories */
      'admin.dashboards.index' => 'ver dashboards admin',
      'admin.dashboards.create' => 'crear',
      'admin.dashboards.edit' => 'editar',
      'admin.dashboards.destroy' => 'eliminar',
 
];


        foreach ($permissions as $name => $description) {
            Permission::create(['name' => $name, 'description' => $description]);
        }

        // Asignar permisos a roles
        $adminPermissions = Permission::all();
        $adminRole->syncPermissions($adminPermissions);

        $userPermissions = [
            'admin.home',
            'admin.categories.index',
            'admin.tags.index',
            'admin.posts.index',
            'admin.posts.create',
            'admin.posts.edit',
            'admin.posts.destroy',
            'admin.adminTituloInventario.index',
        ];

        foreach ($userPermissions as $permission) {
            $SuperUserRole->givePermissionTo($permission);
        }

    }
}
