<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Profession;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::create([
            'title'=> 'Back-end Developer',
        ]);
        Profession::create([
            'title'=> 'Front-end Developer',
        ]);
        Profession::create([
            'title'=> 'Full Stack',
        ]);
        Profession::create([
            'title'=> 'Diseñador grafico',
        ]);
        DB::table('professions')->insert([
            'title'=> 'Analista',
        ]);
        DB::table('professions')->insert([
            'title'=> 'Programador',
        ]);
        DB::table('professions')->insert([
            'title'=> 'Diseñador web',
        ]);
        //por si queremos eliminar el contenido existente:
        //DB::table('professions')->truncate();
    }
}
