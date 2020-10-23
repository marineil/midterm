<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'=>'Nunez',
                'fname'=>'John Ed Paul',
                'address'=>'Pinayagan Sur,Tubigon,Bohol',
                'phone'=>'09952293273',
                'email'=>'johnpaulnunez@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Cruel',
                'fname'=>'Melchizedek',
                'address'=>'Pinayagan Sur,Tubigon,Bohol',
                'phone'=>'09051151272',
                'email'=>'Melko@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Polinar',
                'fname'=>'Danne Andy Jee',
                'address'=>'Banlasan,Tubigon,Bohol',
                'phone'=>'09061293371',
                'email'=>'Dedex@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Padriga',
                'fname'=>'Lordson',
                'address'=>'Pinayagan Norte,Tubigon,Bohol',
                'phone'=>'09052553211',
                'email'=>'Zander69@gmail.com',
                'password'=>bcrypt('password123')
            ],
        ];

        foreach($data as $u) {
            \App\User::create($u);
        }
    }
}
