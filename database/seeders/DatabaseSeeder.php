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
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Service::create([
            'name' => 'Petit Déjeuner',
            'description' => 'Français,Espagnol,Beldi,Khlie,Menu Enfant',
            'price' => 50,
        ]);

        Service::create([
            'name' => 'Déjeuner',
            'description' => 'Pot au feu , Kefta, Tajine',
            'price' => 120,
        ]);
        Hotel::create([
            'name'=>'Code d\'Or',
            'adresse'=>'MMQF+RF5, Av. Lalla Nezha, M\'diq',
            'CP'=>'93200',
            'tele'=>'05396-63219',
            'email'=>'cotedor@gmail.com',
            'site'=>'www.cotedor.com',
            'nb_etoiles'=>2
        ]);
        Chambre::create([
            'type_de_chambre' =>'Simple',
            'etage' => 1,
            'prix_par_nuit'=>500,
            'disponibilite'=>'Oui'
        ]);
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
