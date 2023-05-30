<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\hotel;
use App\Models\chambre;
use App\Models\Comment;
use App\Models\tache;
use App\Models\personnel;
use App\Models\Stock;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  \App\Models\User::factory(10)->create();

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
            'nb_etoiles'=>'2'
        ]);
       
        Client::create([
            'nom'=>'Ahmed',
            'prenom' => 'Ahmad',
            'telephone'=> '061192774',
            'Adresse' => 'Adresse',
            'email' => 'Ahmad@gmail.com',
            'password'=>'password',

        ]);
        Comment::create([
            'ID_Client'=>'1',
            'Client_Name'=>'Ahmed',
            'Comment'=>'Le service est excellent',
            'Note'=>'8.8',
            'datecomment'=>'2023-03-08 14:44:04']);
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
        //     'Description_tache'=>'',
        //     'Datedébut'=>'',
        //     'Datefin'=>''
        // ]);

        // \App\Models\Reservation::create([
           
        //     'date_reservation'=>date('2022-07-25'),
        //     // 'date_arrivee'=>date(),
        //     // 'date_dapart' =>date()


        // ]);
        $user = new User();
        $user->name = "Manal";
        $user->email = "manal@gmail.com";
        $user->email_verified_at = now();
        $user->password = bcrypt('password');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = "Ahmad";
        $user->prenom = "Ahmadi";
        $user->sexe = "Homme";
        $user->date_naissance = '1994-03-23';
        $user->email = "ahmad@gmail.com";
        $user->email_verified_at = now();
        $user->password = bcrypt('password');
        $user->save();

        $chambre = Chambre::create([
            'id' => '101',
            'etage'=>2,
            'type_de_chambre' => 'Chambre Simple',
            'disponibilite'=>'Disponible',
            'prix_par_nuit' => 400,
        ]);
        $chambre = Chambre::create([
            'id' => '201',
            'etage'=>2,
            'type_de_chambre' => 'Chambre Double',
            'disponibilite'=>'Disponible',
            'prix_par_nuit' => 500,
        ]);
        $chambre = Chambre::create([
            'id' => '203',
            'etage'=>2,
            'type_de_chambre' => 'Chambre Triple',
            'disponibilite'=>'Disponible',
            'prix_par_nuit' => 660,
        ]);
        $chambre = Chambre::create([
            'id' => '305',
            'etage'=>2,
            'type_de_chambre' => 'Suite',
            'disponibilite'=>'Disponible',
            'prix_par_nuit' => 500,
        ]);
        $chambre = Chambre::create([
            'id' => '401',
            'etage'=>2,
            'type_de_chambre' => 'Appartement',
            'disponibilite'=>'Disponible',
            'prix_par_nuit' => 950,
        ]);
        $chambre = Chambre::create([
            'id' => '204',
            'etage'=>2,
            'type_de_chambre' => 'Chambre Quadruple',
            'disponibilite'=>'Disponible',
            'prix_par_nuit' => 774,
        ]);

        
        // $chambreId = 101; // the ID of the chambre you want to associate with the images
        // $chambreId2 = 201;
        // // create some image records for the chambre
        // $images = [
        //     ['url' => '/images/double (2).png', 'alt' => 'Image 1', 'chambre_id' => $chambreId],
        //     ['url' => '/images/double 2 (2).png', 'alt' => 'Image 2', 'chambre_id' => $chambreId],
        //     ['url' => '/images/double 2 (3).png', 'alt' => 'Image 3', 'chambre_id' => $chambreId],
        //     ['url' => '/images/double 2 (4).png', 'alt' => 'Image 4', 'chambre_id' => $chambreId],
        //     ['url' => 'images/appartement (2).png', 'alt' => 'Image 1', 'chambre_id' => $chambreId2],
        //     ['url' => 'images/appartement (3).png', 'alt' => 'Image 2', 'chambre_id' => $chambreId2],
        //     ['url' => 'images/appartement(4).png', 'alt' => 'Image 3', 'chambre_id' => $chambreId2],
        //     ['url' => 'images/appartement(5).png', 'alt' => 'Image 4', 'chambre_id' => $chambreId2],
        // ];
        // // insert the image records into the database
        // foreach ($images as $image) {
        //     Image::create($image);
        // }
        // Image::create([
        //     'url' => 'images/simple.jpg',
        //     'alt' => 'Chambre Simple',
        //     'chambre_id' => 101,
        // ]);

        // Image::create([
        //     'url' => 'images/double.jpg',
        //     'alt' => 'Chambre Double',
        //     'chambre_id' => 2,
        // ]);
        // $image1 = new Image([
        //     'url' => 'images/Double (2).png',
        //     'alt' => 'Image 1'
        // ]);
        // $image1->save();
        
        // $image2 = new Image([
        //     'url' => 'images/double 2 (2).png',
        //     'alt' => 'Image 2'
        // ]);
        // $image2->save();
        
        // $image3 = new Image([
        //     'url' => 'images/double 2 (3).png',
        //     'alt' => 'Image 3'
        // ]);
        // $image3->save();
        
        // $image4 = new Image([
        //     'url' => 'images/double 2 (4).png',
        //     'alt' => 'Image 4'
        // ]);
        // $image4->save();
        
        // // attach the images to the chambre with id 101
        // $chambre = Chambre::find(101);
        // $chambre->images()->attach([$image1->id, $image2->id, $image3->id, $image4->id]);

        // $image1Path = Storage::disk('public')->path('images/couloir.jpg');
        // $image2Path = Storage::disk('public')->path('images/double 2.jpg');
        // $images = [
        //     [
        //         'url' => $image1Path,
        //         'alt' => 'Chambre Image 1',
        //     ],
        //     [
        //         'url' => $image2Path,
        //         'alt' => 'Chambre Image 2',
        //     ],
        // ];

        // foreach ($images as $image) {
        //     $chambre->images()->create([
        //         'url' => $image['url'],
        //         'alt' => $image['alt'],
        //     ]);
        // }
        Reservation::create([
            'email' => 'johndoe@example.com',
            'nom'=>'John',
            'prenom'=>'Johnn',
            'telephone' => '0600000000',
            'date_arrivee' => '2023-07-01',
            'date_depart' => '2023-07-05',
            'chambre_id' => $chambre->id,
        ]);
        
        Personnel::create([
            'Nom' => 'John',
            'Prenom' => 'Doe',
            'Adresse' => '123 Main St',
            'Email' => 'john.doe@example.com',
            'Telephone' => '555-1234',
            'Poste' => 'Manager',
            'Salaire' => 50000
        ]);
    
        Personnel::create([
            'Nom' => 'Jane',
            'Prenom' => 'Doe',
            'Adresse' => '456 Oak Ave',
            'Email' => 'jane.doe@example.com',
            'Telephone' => '555-5678',
            'Poste' => 'Assistant',
            'Salaire' => 30000
        ]);

        Stock::create([
            'nom' => 'Shampoo',
            'type' => 'Shampoo',
            'description' => 'Shampoo',
            'quantite' => 50
        ]);
    
        Stock::create([
            'nom' => 'Savon',
            'type' => 'Savon',
            'description' => 'Savon',
            'quantite' => 100
        ]);
    }
}
?>