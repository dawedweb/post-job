<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //User::factory(5)->create();
         //listing::create(
            //[
                //'title' => 'Laravel Senior Developer', 
                //'tags' => 'laravel, javascript',
                //'company' => 'Acme Corp',
                //'location' => 'Boston, MA',
                //'email' => 'email1@email.com',
                //'website' => 'https://www.acme.com',
              //  'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
            //]
          //  );
        //listing::create([
            //'title' => 'Full-Stack Engineer',
            //'tags' => 'laravel, backend ,api',
            //'company' => 'Stark Industries',
            //'location' => 'New York, NY',
            //'email' => 'email2@email.com',
            //'website' => 'https://www.starkindustries.com',
           // 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
         // ]

       // );
         $user = User::factory()->create([
          'name' => 'daoud mohamed amine',
          'email' => 'dawedamine@gmail.com'
         ]);

         listing::factory(6)->create([
          'user_id' => $user-> id
         ]);
       
    }
}
