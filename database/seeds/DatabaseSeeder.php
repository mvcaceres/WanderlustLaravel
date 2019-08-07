<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Maletas',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Mochilas',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Neck Pillows',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Paraguas',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Bolsos',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Otros',
        ]);

        //se podría hacer lo mismo seteando un administrador, estableciendo por ejemplo
        //mail "admin@admin.com" y pass "admin"
        // DB::table('user')->insert([
        //     'email' => 'admin@admin.com',
        //     'pass' => 'admin'
        // ]);

        factory(\App\Producto::class, 40)->create();
        factory(\App\User::class, 7)->create();
        // $maletas =
        // factory(\App\Producto::class, 40)->create([
        //   'categoria_id' => 1,
        //   'imagen'
        // ]);

    }
}
