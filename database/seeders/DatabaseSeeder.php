<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Volleyball;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/



        $volleyball = new Volleyball();
        $volleyball->name = 'Mikasa';
        $volleyball->price = 299;
        $volleyball->picture = 'https://www.google.com/imgres?q=mikasa%20volleyball&imgurl=https%3A%2F%2Fwww.mikasa.fr%2Fwp-content%2Fuploads%2F2019%2F07%2F503-1084-Mikasa-V200W.jpg&imgrefurl=https%3A%2F%2Fwww.mikasa.fr%2Fproduit%2Fmikasav200w%2F&docid=Cu8hd8Gh5hwNJM&tbnid=tg-z3dIdbgK4zM&vet=12ahUKEwi1nonU9tyPAxWvfKQEHSMyD7sQM3oECB4QAA..i&w=1000&h=1000&hcb=2&ved=2ahUKEwi1nonU9tyPAxWvfKQEHSMyD7sQM3oECB4QAA';
        $volleyball->description = 'Pas le meilleur ballon car il fait un peu mal';
        $volleyball->save();



        $volleyball = new Volleyball();
        $volleyball->name = 'Molten';
        $volleyball->price = 150;
        $volleyball->picture = 'https://www.google.com/imgres?q=molten&imgurl=https%3A%2F%2Fwww.molten-france.com%2Fwp-content%2Fuploads%2F2017%2F02%2FV5M5000-VB-1024x1024.png&imgrefurl=https%3A%2F%2Fwww.molten-france.com%2Fproduit%2Fv5m5000&docid=OY43IXgyMixFsM&tbnid=u9rdeTtNbyYzyM&vet=12ahUKEwj7-tWy99yPAxV_TaQEHctvO58QM3oECB8QAA..i&w=1024&h=1024&hcb=2&ved=2ahUKEwj7-tWy99yPAxV_TaQEHctvO58QM3oECB8QAA';
        $volleyball->description = 'Le meilleur ballon';
        $volleyball->save();



        $volleyball = new Volleyball();
        $volleyball->name = 'Kipsta';
        $volleyball->price = 99;
        $volleyball->picture = 'https://www.google.com/imgres?q=marque%20ballon%20de%20volley&imgurl=https%3A%2F%2Fcontents.mediadecathlon.com%2Fp2640856%2Fk%24c4b27a8b5fc299a727c5c5c88c2b756a%2Fsq%2Fballon-de-volley-ball-vb500-soft-230250-g-bleu-et-jaune.jpg%3Fformat%3Dauto%26f%3D800x0&imgrefurl=https%3A%2F%2Fwww.decathlon.fr%2Ftous-les-sports%2Fvolley-ball%2Fmarques-de-ballons-de-volley%3Ffrom%3D40%26size%3D40&docid=5PU2XIokVyUOqM&tbnid=jYjofduDiO43mM&vet=12ahUKEwjQtKrF99yPAxVARaQEHeudDskQM3oECCoQAA..i&w=800&h=800&hcb=2&ved=2ahUKEwjQtKrF99yPAxVARaQEHeudDskQM3oECCoQAA';
        $volleyball->description = 'Je connais pas la marque';
        $volleyball->save();



        $volleyball = new Volleyball();
        $volleyball->name = 'Wilson';
        $volleyball->price = 50;
        $volleyball->picture = 'https://www.google.com/imgres?q=marque%20ballon%20de%20volley&imgurl=https%3A%2F%2Fwww.ballesdesport.com%2Fwp-content%2Fuploads%2F2025%2F02%2FWV2000701EC_0_OF_NOVA_LIGHT_VB_2.jpg&imgrefurl=https%3A%2F%2Fwww.ballesdesport.com%2Fproduit%2Fballon-de-volleyball-wilson-nova-light%2F&docid=ILp_oC68MTJBlM&tbnid=ZQJstpFuou07NM&vet=12ahUKEwjQtKrF99yPAxVARaQEHeudDskQM3oECBsQAA..i&w=837&h=849&hcb=2&ved=2ahUKEwjQtKrF99yPAxVARaQEHeudDskQM3oECBsQAA';
        $volleyball->description = 'Inconnu au bataillon';
        $volleyball->save();
    }
}
