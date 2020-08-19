<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $credenciais = [
            'name' => 'admin',
            'email' => 'admin@admin.com.br',
            'password' => bcrypt('123456789'),
        ];

        if (User::where('email','=', $credenciais['email'])->count()){
            $usuario = (User::where('email','=', $credenciais['email'])->first());
            $usuario->save($credenciais);

        }else{
            User::create($credenciais);
        }
    }
}
