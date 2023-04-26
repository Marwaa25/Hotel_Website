<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
        
        $greeting = Question::create("Bonjour! Comment puis-je vous aider? Vous pouvez poser une question sur les sujets suivants:")
            ->fallback('Désolé, je n\'ai pas compris votre demande.')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Heures d\'arrivée et de départ')->value('heures d\'arrivée et de départ'),
                Button::create('Aide avec les bagages')->value('aide avec les bagages'),
                Button::create('Service de navette depuis l\'aéroport')->value('service de navette depuis l\'aéroport'),
                Button::create('Réservation de chambre')->value('réservation de chambre'),
                Button::create('Service de blanchisserie')->value('service de blanchisserie'),
                Button::create('Équipements de la chambre')->value('équipements de la chambre'),
                Button::create('Quitter')->value('quit'),
            ]);
        
        $botman->hears('Bonjour|Salut', function($botman) use ($greeting) {
            $botman->reply($greeting);
        });
        
        $botman->hears('heures d\'arrivée et de départ', function($botman) use ($greeting) {
            $botman->typesAndWaits(1);
            $botman->reply('L\'heure d\'arrivée est à partir de 14h et l\'heure de départ est jusqu\'à midi.');
            $botman->typesAndWaits(1);
            $botman->reply($greeting);
        });
        
        $botman->hears('aide avec les bagages', function($botman) use ($greeting){
            $botman->typesAndWaits(1);
            $botman->reply('Bien sûr! Nous serons heureux de vous aider avec vos bagages.');
            $botman->reply($greeting);
        });
        
        $botman->hears('service de navette depuis l\'aéroport', function($botman) use ($greeting) {
            $botman->typesAndWaits(1);
            $botman->reply('Oui, nous avons un service de navette disponible pour un coût supplémentaire. Veuillez nous contacter pour plus de détails.');
            $botman->reply($greeting);
        });
        
        $botman->hears('réservation de chambre', function($botman) use ($greeting){
            $botman->typesAndWaits(1);
            $botman->reply('Vous pouvez réserver une chambre en ligne sur notre site web ou en nous appelant directement.');
            $botman->reply($greeting);
        });
        
        $botman->hears('service de blanchisserie', function($botman) use ($greeting){
            $botman->typesAndWaits(1);
            $botman->reply('Oui, nous avons un service de blanchisserie disponible pour un coût supplémentaire. Veuillez nous contacter pour plus de détails.');
            $botman->reply($greeting);
        });
        
        $botman->hears('équipements de la chambre', function($botman) use ($greeting){
            $botman->typesAndWaits(1);
            $botman->reply('Nos chambres sont équipées d\'un téléviseur, d\'un minibar, d\'un coffre-fort et d\'une connexion Wi-Fi gratuite.');
            $botman->reply($greeting);
        });
        $botman->hears('quit', function ($botman) {
            $botman->reply('Au revoir!');
            // $botman->stopConversation();
        }); 
        
        $botman->fallback(function($botman) use ($greeting) {
            $botman->reply($greeting);
        });

        $botman->listen();
    }
}
