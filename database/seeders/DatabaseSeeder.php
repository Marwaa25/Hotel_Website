<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\hotel;
use App\Models\chambre;
use App\Models\comment;
use App\Models\tache;
use App\Models\personnel;
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
        // hotel::create([
        //     'name'=>'',
        //     'adresse'=>'',
        //     'CP'=>'',
        //     'tele'=>'',
        //     'email'=>'',
        //     'site'=>'',
        //     'nb_etoiles'=>''
        // ]);
        // chambre::create([
        //     'ID_Chambre' => '',
        //     'Type de chambre' =>'',
        //     'Etage' => '',
        //     'Prix-par-nuit'=>'',
        //     'Disponibilité'=>''
        // ]);
        // personnel::create([
        //     'Nom'=>'',
        //     'Prenom'=>'',
        //     'Adresse'=>'',
        //     'Email'=>'',
        //     'Telephone'=>'',
        //     'Poste'=>'',
        //     'Salaire'=>''
        // ]);
        // tache::create([
        //     'ID_Personnel'=>'',
        //     'Description-tache'=>'',
        //     'Datedébut'=>'',
        //     'Datefin'=>''
        // ]);
        // comment::create([
        //     'ID_Client'=>'',
        //     'Comment'=>'',
        //     'Note'=>'',
        //     'datecomment'=>'']);
        // \App\Models\Reservation::create([
           
        //     'date_reservation'=>date('2022-07-25'),
        //     // 'date_arrivee'=>date(),
        //     // 'date_dapart' =>date()


        // ]);
        \App\Models\Client::create([
            'nom'=>'Ahmed',
            'prenom' => 'Ahmad',
            'telephone'=> '061192774',
            'Adresse' => 'Adresse',
            'email' => 'email@gmail.com'

        ]);

    }
}
