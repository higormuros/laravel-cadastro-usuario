<?php

namespace Database\Seeders;
use App\Models\usuario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($u=1;$u<=10;$u++){
            usuario::create([
                'nome'=>'Higor '.$u
            ]);
        }
    }
}
