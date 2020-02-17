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

         //$this->call(UsersTableSeeder::class);
        DB::table("categories")->insert([
          [
            "nombre_categoria"=> "palm",
          ],
          [
            "nombre_categoria"=> "telefonos",
          ],
          [
            "nombre_categoria"=> "tablets",
          ],
          [
            "nombre_categoria"=> "impresoras",
          ],
          [
            "nombre_categoria"=> "escaner",
          ],
          [
            "nombre_categoria"=> "camaras",
          ],
          [
            "nombre_categoria"=> "reproductores",
          ],]
      );
       factory(App\articulos::class, 40)->create();

    }
}
