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
// use App\Models\Image;
use App\Models\ChambreImage;
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
            'type_de_chambre' => 'Chambre simple',
            'etage' => 2,
            'prix_par_nuit' => 400,
            'disponibilite' => 'Disponible',
        ]);

        // Création d'images associées à la chambre
        $images = [
            '101_1.jpg',
            '101_2.jpg',
            '101_3.jpg',
            '101_4.jpg',
            '101_5.png'
        ];

        foreach ($images as $image) {
            $chambreImage = new ChambreImage;
            $chambreImage->filename = $image;
            $chambreImage->chambre_id = $chambre->id;
            $chambreImage->save();
        }
        $chambreDouble = Chambre::create([
            'type_de_chambre' => 'Chambre double',
            'etage' => 2,
            'prix_par_nuit' => 500,
            'disponibilite' => 'Disponible',
        ]);
        
        // Création d'images associées à la chambre double
        $imagesDouble = [
            '201_1.jpg',
            '201_2.jpg',
            '201_3.jpg',
            '201_4.jpg',
            '201_5.png'
        ];
        
        foreach ($imagesDouble as $image) {
            $chambreImage = new ChambreImage;
            $chambreImage->filename = $image;
            $chambreImage->chambre_id = $chambreDouble->id;
            $chambreImage->save();
        }
        $chambreTriple = Chambre::create([
            'type_de_chambre' => 'Chambre triple',
            'etage' => 3,
            'prix_par_nuit' => 660,
            'disponibilite' => 'Disponible',
        ]);
        
        $imagesTriple = [
            '203_1.jpg',
            '203_2.png',
            '203_3.jpg',
            '203_4.png',
            '203_5.png'
        ];
        
        foreach ($imagesTriple as $image) {
            $chambreImage = new ChambreImage;
            $chambreImage->filename = $image;
            $chambreImage->chambre_id = $chambreTriple->id;
            $chambreImage->save();
        }
        $chambreQuadruple = Chambre::create([
            'type_de_chambre' => 'Chambre quadruple',
            'etage' => 2,
            'prix_par_nuit' => 774,
            'disponibilite' => 'Disponible',
        ]);
        
        $imagesQuadruple = [
            '204_1.jpg',
            '204_2.jpg',
            '204_3.jpg',
            '204_4.jpg',
            '204_5.jpg'
        ];
        
        foreach ($imagesQuadruple as $image) {
            $chambreImage = new ChambreImage;
            $chambreImage->filename = $image;
            $chambreImage->chambre_id = $chambreQuadruple->id;
            $chambreImage->save();
        }
                        
        $suite = Chambre::create([
            'type_de_chambre' => 'Suite',
            'etage' => 4,
            'prix_par_nuit' => 500,
            'disponibilite' => 'Disponible',
        ]);
        
        $imagesSuite = [
            '305_1.jpg',
            '305_2.jpg',
            '305_3.png',
            '305_4.jpg',
            '305_5.png'
        ];
        
        foreach ($imagesSuite as $image) {
            $chambreImage = new ChambreImage;
            $chambreImage->filename = $image;
            $chambreImage->chambre_id = $suite->id;
            $chambreImage->save();
        }
        $appartement = Chambre::create([
            'type_de_chambre' => 'Appartement',
            'etage' => 5,
            'prix_par_nuit' => 950,
            'disponibilite' => 'Disponible',
        ]);
        
        $imagesAppartement = [
            '401_1.jpg',
            '401_2.jpg',
            '401_3.png',
            '401_4.jpg',
            '401_5.png'
        ];
        
        foreach ($imagesAppartement as $image) {
            $chambreImage = new ChambreImage;
            $chambreImage->filename = $image;
            $chambreImage->chambre_id = $appartement->id;
            $chambreImage->save();
        }
                
        

        // $chambre = Chambre::create([
        //     'id' => '101',
        //     'etage'=>2,
        //     'type_de_chambre' => 'Chambre Simple',
        //     'disponibilite'=>'Disponible',
        //     'prix_par_nuit' => 400,
        // ]);
        // $chambre = Chambre::create([
        //     'id' => '201',
        //     'etage'=>2,
        //     'type_de_chambre' => 'Chambre Double',
        //     'disponibilite'=>'Disponible',
        //     'prix_par_nuit' => 500,
        // ]);
        // $chambre = Chambre::create([
        //     'id' => '203',
        //     'etage'=>2,
        //     'type_de_chambre' => 'Chambre Triple',
        //     'disponibilite'=>'Disponible',
        //     'prix_par_nuit' => 660,
        // ]);
        // $chambre = Chambre::create([
        //     'id' => '305',
        //     'etage'=>2,
        //     'type_de_chambre' => 'Suite',
        //     'disponibilite'=>'Disponible',
        //     'prix_par_nuit' => 500,
        // ]);
        // $chambre = Chambre::create([
        //     'id' => '401',
        //     'etage'=>2,
        //     'type_de_chambre' => 'Appartement',
        //     'disponibilite'=>'Disponible',
        //     'prix_par_nuit' => 950,
        // ]);
        // $chambre = Chambre::create([
        //     'id' => '204',
        //     'etage'=>2,
        //     'type_de_chambre' => 'Chambre Quadruple',
        //     'disponibilite'=>'Disponible',
        //     'prix_par_nuit' => 774,
        // ]);

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