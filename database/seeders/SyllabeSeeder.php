<?php

namespace Database\Seeders;

use App\Models\Syllabe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SyllabeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Syllabe::truncate();

        Schema::enableForeignKeyConstraints();

        $record = [
            ['syllabe'=>'Ba','trads'=>'[{"FR":"Avoir","GE":"Haben","IT":"Avere"}]'],
            ['syllabe'=>'Be','trads'=>'[{"FR":"Etre","GE":"Sein","IT":"Essere"}]'],
            ['syllabe'=>'Bi','trads'=>'[{"FR":"Créer","GE":"Schaffen","IT":"Creare"}]'],
            ['syllabe'=>'Bo','trads'=>'[{"FR":"Transformer","GE":"Verwandeln","IT":"Cambiare"}]'],
            ['syllabe'=>'Bu','trads'=>'[{"FR":"Utiliser","GE":"Benutzen","IT":"Utilizzare"}]'],
            ['syllabe'=>'Ca','trads'=>'[{"FR":"Supprimer","GE":"Löschen","IT":"Eliminare"}]'],
            ['syllabe'=>'Ce','trads'=>'[{"FR":"Devoir","GE":"Mussen","IT":"Dovere"}]'],
            ['syllabe'=>'Ci','trads'=>'[{"FR":"Sentir","GE":"Fühlen","IT":"Sentire"}]'],
            ['syllabe'=>'Co','trads'=>'[{"FR":"Voir","GE":"Sehen","IT":"Vedere"}]'],
            ['syllabe'=>'Cu','trads'=>'[{"FR":"Croire","GE":"Glauben","IT":"Credere"}]'],
            ['syllabe'=>'Da','trads'=>'[{"FR":"Aimer","GE":"Lieben","IT":"Amare"}]'],
            ['syllabe'=>'De','trads'=>'[{"FR":"Déplacer","GE":"Bewegen","IT":"Spostare"}]'],
            ['syllabe'=>'Di','trads'=>'[{"FR":"Dire","GE":"Sagen","IT":"Dire"}]'],
            ['syllabe'=>'Do','trads'=>'[{"FR":"Donner","GE":"Geben","IT":"Dare"}]'],
            ['syllabe'=>'Du','trads'=>'[{"FR":"Recevoir","GE":"Bekommen","IT":"Ricevere"}]'],
            ['syllabe'=>'Fa','trads'=>'[{"FR":"Savoir","GE":"Wissen","IT":"Sapere"}]'],
            ['syllabe'=>'Fe','trads'=>'[{"FR":"Chercher","GE":"Suchen","IT":"Cercare"}]'],
            ['syllabe'=>'Fi','trads'=>'[{"FR":"","GE":"","IT":""}]'],
            ['syllabe'=>'Fo','trads'=>'[{"FR":"Vouloir","GE":"Wollen","IT":"Volere"}]'],
            ['syllabe'=>'Fu','trads'=>'[{"FR":"","GE":"","IT":""}]'],
            ['syllabe'=>'Ga','trads'=>'[{"FR":"Caractère","GE":"Zeichen","IT":"Caratteri"}]'],
            ['syllabe'=>'Ge','trads'=>'[{"FR":"Chiffre","GE":"Nummer","IT":"Cifra"}]'],
            ['syllabe'=>'Gi','trads'=>'[{"FR":"Forme","GE":"Form","IT":"Forma"}]'],
            ['syllabe'=>'Go','trads'=>'[{"FR":"Son","GE":"Geraüsch","IT":"Suono"}]'],
            ['syllabe'=>'Gu','trads'=>'[{"FR":"Temps","GE":"Zeit","IT":"Tempo"}]'],
            ['syllabe'=>'Ja','trads'=>'[{"FR":"Objet","GE":"Objekt","IT":"Oggetto"}]'],
            ['syllabe'=>'Je','trads'=>'[{"FR":"Argent","GE":"Geld","IT":"Denaro"}]'],
            ['syllabe'=>'Ji','trads'=>'[{"FR":"Humain","GE":"Mensch","IT":"Umano"}]'],
            ['syllabe'=>'Jo','trads'=>'[{"FR":"Animal","GE":"Tier","IT":"Animale"}]'],
            ['syllabe'=>'Ju','trads'=>'[{"FR":"Végétal","GE":"Pflanzlich","IT":"Vegetale"}]'],
            ['syllabe'=>'La','trads'=>'[{"FR":"Machine","GE":"Machine","IT":"Macchina"}]'],
            ['syllabe'=>'Le','trads'=>'[{"FR":"Sentiment","GE":"Gefühl","IT":"Sentimento"}]'],
            ['syllabe'=>'Li','trads'=>'[{"FR":"Lieu","GE":"Ort","IT":"Luogo"}]'],
            ['syllabe'=>'Lo','trads'=>'[{"FR":"Boisson","GE":"Getränk","IT":"Bibita"}]'],
            ['syllabe'=>'Lu','trads'=>'[{"FR":"Nourriture","GE":"Lebensmittle","IT":"Cibo"}]'],
            ['syllabe'=>'Ma','trads'=>'[{"FR":"Devant","GE":"Vor","IT":"Davanti"}]'],
            ['syllabe'=>'Me','trads'=>'[{"FR":"Derrière","GE":"Hinter","IT":"Dietro"}]'],
            ['syllabe'=>'Mi','trads'=>'[{"FR":"Droite","GE":"Rechts","IT":"Destra"}]'],
            ['syllabe'=>'Mo','trads'=>'[{"FR":"Au dessus/Haut","GE":"Über","IT":"Sopra/Su"}]'],
            ['syllabe'=>'Mu','trads'=>'[{"FR":"En dessous/Bas","GE":"Unter","IT":"Sotto/Giù"}]'],
            ['syllabe'=>'Na','trads'=>'[{"FR":"","GE":"","IT":""}]'],
            ['syllabe'=>'Ne','trads'=>'[{"FR":"Extérieur","GE":"Draussen","IT":"Esterno"}]'],
            ['syllabe'=>'Ni','trads'=>'[{"FR":"Intérieur","GE":"Innerhalb","IT":"Interno"}]'],
            ['syllabe'=>'No','trads'=>'[{"FR":"Petit","GE":"Klein","IT":"Picolo"}]'],
            ['syllabe'=>'Nu','trads'=>'[{"FR":"Grand","GE":"Gross","IT":"Grande"}]'],
            ['syllabe'=>'Pa','trads'=>'[{"FR":"Air/Gaz","GE":"Gaz","IT":"Aria/Gas"}]'],
            ['syllabe'=>'Pe','trads'=>'[{"FR":"Terre","GE":"Erde","IT":"Terra"}]'],
            ['syllabe'=>'Pi','trads'=>'[{"FR":"Feu","GE":"Feuer","IT":"Fuoco"}]'],
            ['syllabe'=>'Po','trads'=>'[{"FR":"Eau/Liquide","GE":"Wasser","IT":"Aqua/Liquido"}]'],
            ['syllabe'=>'Pu','trads'=>'[{"FR":"Pierre","GE":"Stein","IT":"Pietra"}]'],
            ['syllabe'=>'Ra','trads'=>'[{"FR":"Métaux","GE":"Metalle","IT":"Metalli"}]'],
            ['syllabe'=>'Re','trads'=>'[{"FR":"Verre","GE":"Glass","IT":"Vetro"}]'],
            ['syllabe'=>'Ri','trads'=>'[{"FR":"Energie","GE":"Energie","IT":"Energia"}]'],
            ['syllabe'=>'Ro','trads'=>'[{"FR":"Solide","GE":"Solide","IT":"Solido"}]'],
            ['syllabe'=>'Ru','trads'=>'[{"FR":"","GE":"","IT":""}]'],
            ['syllabe'=>'Sa','trads'=>'[{"FR":"Seul","GE":"Aleine","IT":"Solo"}]'],
            ['syllabe'=>'Se','trads'=>'[{"FR":"Toi","GE":"Du","IT":"Tu"}]'],
            ['syllabe'=>'Si','trads'=>'[{"FR":"Pluriel","GE":"Plural","IT":"Plurale"}]'],
            ['syllabe'=>'So','trads'=>'[{"FR":"Ensemble","GE":"Allgemein ","IT":"Insieme"}]'],
            ['syllabe'=>'Su','trads'=>'[{"FR":"Ordre","GE":"Bestellung","IT":"Ordine"}]'],
            ['syllabe'=>'Ta','trads'=>'[{"FR":"1","GE":"Eins","IT":"Uno"}]'],
            ['syllabe'=>'Te','trads'=>'[{"FR":"2","GE":"Zwei","IT":"Due"}]'],
            ['syllabe'=>'Ti','trads'=>'[{"FR":"3","GE":"Drei","IT":"Tre"}]'],
            ['syllabe'=>'To','trads'=>'[{"FR":"4","GE":"Vier","IT":"Quattro"}]'],
            ['syllabe'=>'Tu','trads'=>'[{"FR":"5","GE":"Fünf","IT":"Cinque"}]'],
            ['syllabe'=>'Va','trads'=>'[{"FR":"6","GE":"Sechs","IT":"Sei"}]'],
            ['syllabe'=>'Ve','trads'=>'[{"FR":"7","GE":"Sieben","IT":"Sette"}]'],
            ['syllabe'=>'Vi','trads'=>'[{"FR":"8","GE":"Acht","IT":"Otto"}]'],
            ['syllabe'=>'Vo','trads'=>'[{"FR":"9","GE":"Neun ","IT":"Nove"}]'],
            ['syllabe'=>'Vu','trads'=>'[{"FR":"0","GE":"Null","IT":"Zero"}]'],
            ['syllabe'=>'Wa','trads'=>'[{"FR":"Question","GE":"Frage","IT":"Domanda"}]'],
            ['syllabe'=>'We','trads'=>'[{"FR":"Passé","GE":"Vergangenheit","IT":"Passato"}]'],
            ['syllabe'=>'Wi','trads'=>'[{"FR":"Condition","GE":"Zustand","IT":"Condizione"}]'],
            ['syllabe'=>'Wo','trads'=>'[{"FR":"Début","GE":"Amfang","IT":"Inizio"}]'],
            ['syllabe'=>'Wu','trads'=>'[{"FR":"Fin","GE":"Dun","IT":"Fine"}]'],
            ['syllabe'=>'Xa','trads'=>'[{"FR":"Couleur","GE":"Farbe","IT":"Colore"}]'],
            ['syllabe'=>'Xe','trads'=>'[{"FR":"Jaune","GE":"Gelb","IT":"Giallo"}]'],
            ['syllabe'=>'Xi','trads'=>'[{"FR":"Rouge","GE":"Rot","IT":"Rosso"}]'],
            ['syllabe'=>'Xo','trads'=>'[{"FR":"Bleu","GE":"Blau","IT":"Blu"}]'],
            ['syllabe'=>'Xu','trads'=>'[{"FR":"Blanc","GE":"Weiss","IT":"Bianco"}]'],
            ['syllabe'=>'Za','trads'=>'[{"FR":"+","GE":"+","IT":"+"}]'],
            ['syllabe'=>'Ze','trads'=>'[{"FR":"-","GE":"-","IT":"-"}]'],
            ['syllabe'=>'Zi','trads'=>'[{"FR":"*","GE":"*","IT":"*"}]'],
            ['syllabe'=>'Zo','trads'=>'[{"FR":"/","GE":"/","IT":"/"}]'],
            ['syllabe'=>'Zu','trads'=>'[{"FR":"=","GE":"=","IT":"="}]']
        ];

        DB::table('syllabes')->insert($record);

    }
}
