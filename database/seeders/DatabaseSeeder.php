<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Reservation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Service::create([
            'name' => 'Chambre double',
            'description' => '1 lit double , réfrigirateur , vue panoramique, salle de bain , wifi gratuit',
            'price' => 1000.0,
        ]);

        Service::create([
            'name' => 'Chambre jumeaux',
            'description' => '2 lit simple , réfrigirateur , vue panoramique, salle de bain , wifi gratuit',
            'price' => 700.0,
        ]);
        Reservation::create([
           
            'date_reservation'=>date(),
            // 'date_arrivee'=>date(),
            // 'date_dapart' =>date()


        ]);
        Client::create([
            'nom'=>'Ahmed',
            'prenom' => 'Ahmad',
            'Adresse' => 'Adresse',
            'email' => 'email@gmail.com'

        ]);

    }
}
