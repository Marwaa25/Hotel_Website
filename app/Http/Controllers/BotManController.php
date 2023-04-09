<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
        
        

        $botman->hears('Bonjour|Salut', function($botman) {
            $botman->reply('Bonjour! Comment puis-je vous aider? Vous pouvez poser une question sur les sujets suivants: <br>
            - heures d\'arrivée et de départ,<br>
            - aide avec les bagages, <br>
            - service de navette depuis l\'aéroport,<br>
            - réservation de chambre,<br>
            - service de blanchisserie,<br>
            - équipements de la chambre.');
        });
        
        $botman->hears('heures d\'arrivée et de départ', function($botman) {
            $botman->reply('L\'heure d\'arrivée est à partir de 14h et l\'heure de départ est jusqu\'à midi.');
            
        });
        
        $botman->hears('aide avec les bagages', function($botman) {
            $botman->reply('Bien sûr! Nous serons heureux de vous aider avec vos bagages.');
        });
        
        $botman->hears('service de navette depuis l\'aéroport', function($botman) {
            $botman->reply('Oui, nous avons un service de navette disponible pour un coût supplémentaire. Veuillez nous contacter pour plus de détails.');
        });
        
        $botman->hears('réservation de chambre', function($botman) {
            $botman->reply('Vous pouvez réserver une chambre en ligne sur notre site web ou en nous appelant directement.');
        });
        
        $botman->hears('service de blanchisserie', function($botman) {
            $botman->reply('Oui, nous avons un service de blanchisserie disponible pour un coût supplémentaire. Veuillez nous contacter pour plus de détails.');
        });
        
        $botman->hears('équipements de la chambre', function($botman) {
            $botman->reply('Nos chambres sont équipées d\'un téléviseur, d\'un minibar, d\'un coffre-fort et d\'une connexion Wi-Fi gratuite.');
        });
        
        $botman->fallback(function($botman) {
            $botman->reply("Je suis désolé, je ne comprends pas. Vous pouvez poser une question sur les sujets suivants: <br>
            - heures d'arrivée et de départ ,<br>
            - aide avec les bagages , <br>
            - service de navette depuis l'aéroport ,<br>
            - réservation de chambre ,<br>
            - service de blanchisserie ,<br>
            - équipements de la chambre .<br>
            Sinon vous pouvez nous contacter sur notre email: 'cotedor@live.fr' ou sur numéro de téléphone : '06535472842'");
        });

        $botman->listen();
    }
}
