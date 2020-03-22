<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //  $professionId = DB::table('professions')->where('title','FullStack')->value('id');
      $professionId = Profession::where ('title','FullStack')->value('id');

      factory(User::class)->create([
          'name'=> 'Paco6',
          'email'=> 'Pacojaeyorodri@gmail.com',
          'password'=> bcrypt('1234'),
          'profession_id'=> $professionId,
          'is_admin'=> true,
      ]);

      //crear modelos con factory para prueba:
      factory(User::class)->create([
        'profession_id' => $professionId,
      ]);

      factory(User::class, 48)->create();

      //conulta sql plano:
      //$professions=DB::select('SELECT ID FROM professions WHERE TITLE=?', ["Back-End Developer"]);
      //dd($professions);

      //consulta con Laravel
      //$professionId = DB::table('professions')->where('title','FullStack')->value('id');

      //usando el modelo DB y sentencias DQL
/*
      DB::table('users')->insert([
          'name'=> 'Paco3',
          'email'=> 'Pacojae@gmail.com',
          'password'=> bcrypt('1234'),
          'profession_id'=> $professionId,
      ]);
*/
    }
}
