<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
<<<<<<< HEAD
use App\Models\hotel;
use App\Models\chambre;
use App\Models\comment;
use App\Models\tache;
use App\Models\personnel;
=======
use App\Models\Reservation;
<<<<<<< HEAD
use App\Models\Client;
=======
>>>>>>> 972135f4dba27b6a9e2fc049ca08b28545727505
>>>>>>> b178d578d3f6b6ee758d09d0f9f4882a92ec9dd3

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
<<<<<<< HEAD
       
      
=======
<<<<<<< HEAD
        hotel::create([
            'name-hotel'=>'',
            'adresse-hotel'=>'',
            'CP-hotel'=>'',
            'tele-hotel'=>'',
            'email-hotel'=>'',
            'site-hotel'=>'',
            'nb-etoiles'=>''
        ]);
        chambre::create([
            'ID_Chambre' => '',
            'Type de chambre' =>'',
            'Etage' => '',
            'Prix-par-nuit'=>'',
            'Disponibilité'=>''
        ]);
        personnel::create([
            'Nom'=>'',
            'Prenom'=>'',
            'Adresse'=>'',
            'Email'=>'',
            'Telephone'=>'',
            'Poste'=>'',
            'Salaire'=>''
        ]);
        tache::create([
            'ID_Personnel'=>'',
            'Description-tache'=>'',
            'Datedébut'=>'',
            'Datefin'=>''
        ]);
        comment::create([
            'ID_Client'=>'',
            'Comment'=>'',
            'Note'=>'',
            'datecomment'=>''
=======
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

>>>>>>> 972135f4dba27b6a9e2fc049ca08b28545727505
        ]);
>>>>>>> b178d578d3f6b6ee758d09d0f9f4882a92ec9dd3

    }
}
