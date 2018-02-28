<?php

use Illuminate\Database\Seeder;
use pascuaweb\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedUsuarios();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }

    private function seedUsuarios(){
    	DB::table('users')->delete();
    	
    	$u = new User;
            $u->name = 'Florencia Cabrera';
            $u->email = 'aflorenciacabrera@gmail.com' ;
            $u->password = bcrypt('123456');
             $u->save();  


             // FABRICA 10 INSTANCIAS de Productor

       //$productores = factory(pascuaweb\User::class,10)->create();	
    }
}
