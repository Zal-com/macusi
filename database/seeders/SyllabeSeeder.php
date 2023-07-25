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
            ['syllabe' => 'Ba', 'trads' => '{"FR":"Avoir","DE":"Haben","IT":"Avere","EN":"Have"}'],
            ['syllabe' => 'Be', 'trads' => '{"FR":"Etre","DE":"Sein","IT":"Essere","EN":"To be"}'],
            ['syllabe' => 'Bi', 'trads' => '{"FR":"Créer","DE":"Schaffen","IT":"Creare","EN":"Create"}'],
            ['syllabe' => 'Bo', 'trads' => '{"FR":"Transformer","DE":"Verwandeln","IT":"Cambiare","EN":"Transform"}'],
            ['syllabe' => 'Bu', 'trads' => '{"FR":"Utiliser","DE":"Benutzen","IT":"Utilizzare","EN":"Use"}'],
            ['syllabe' => 'Ca', 'trads' => '{"FR":"Supprimer","DE":"Löschen","IT":"Eliminare","EN":"Delete"}'],
            ['syllabe' => 'Ce', 'trads' => '{"FR":"Devoir","DE":"Mussen","IT":"Dovere","EN":"Must"}'],
            ['syllabe' => 'Ci', 'trads' => '{"FR":"Sentir","DE":"Fühlen","IT":"Sentire","EN":"Feel"}'],
            ['syllabe' => 'Co', 'trads' => '{"FR":"Voir","DE":"Sehen","IT":"Vedere","EN":"See"}'],
            ['syllabe' => 'Cu', 'trads' => '{"FR":"Croire","DE":"Glauben","IT":"Credere","EN":"Believe"}'],
            ['syllabe' => 'Da', 'trads' => '{"FR":"Aimer","DE":"Lieben","IT":"Amare","EN":"Love"}'],
            ['syllabe' => 'De', 'trads' => '{"FR":"Déplacer","DE":"Bewegen","IT":"Spostare","EN":"Move"}'],
            ['syllabe' => 'Di', 'trads' => '{"FR":"Dire","DE":"Sagen","IT":"Dire","EN":"Say"}'],
            ['syllabe' => 'Do', 'trads' => '{"FR":"Donner","DE":"Geben","IT":"Dare","EN":"Give"}'],
            ['syllabe' => 'Du', 'trads' => '{"FR":"Recevoir","DE":"Bekommen","IT":"Ricevere","EN":"Receive"}'],
            ['syllabe' => 'Fa', 'trads' => '{"FR":"Savoir","DE":"Wissen","IT":"Sapere","EN":"Know"}'],
            ['syllabe' => 'Fe', 'trads' => '{"FR":"Chercher","DE":"Suchen","IT":"Cercare","EN":"Search"}'],
            ['syllabe' => 'Fi', 'trads' => '{"FR":"","DE":"","IT":"","EN":""}'],
            ['syllabe' => 'Fo', 'trads' => '{"FR":"Vouloir","DE":"Wollen","IT":"Volere","EN":"Want"}'],
            ['syllabe' => 'Fu', 'trads' => '{"FR":"","DE":"","IT":"","EN":""}'],
            ['syllabe' => 'Ga', 'trads' => '{"FR":"Caractère","DE":"Zeichen","IT":"Caratteri","EN":"Character"}'],
            ['syllabe' => 'Ge', 'trads' => '{"FR":"Chiffre","DE":"Nummer","IT":"Cifra","EN":"Digit"}'],
            ['syllabe' => 'Gi', 'trads' => '{"FR":"Forme","DE":"Form","IT":"Forma","EN":"Form"}'],
            ['syllabe' => 'Go', 'trads' => '{"FR":"Son","DE":"Geraüsch","IT":"Suono","EN":"Sound"}'],
            ['syllabe' => 'Gu', 'trads' => '{"FR":"Temps","DE":"Zeit","IT":"Tempo","EN":"Time"}'],
            ['syllabe' => 'Ja', 'trads' => '{"FR":"Objet","DE":"Objekt","IT":"Oggetto","EN":"Object"}'],
            ['syllabe' => 'Je', 'trads' => '{"FR":"Argent","DE":"Geld","IT":"Denaro","EN":"Money"}'],
            ['syllabe' => 'Ji', 'trads' => '{"FR":"Humain","DE":"Mensch","IT":"Umano","EN":"Human"}'],
            ['syllabe' => 'Jo', 'trads' => '{"FR":"Animal","DE":"Tier","IT":"Animale","EN":"Animal"}'],
            ['syllabe' => 'Ju', 'trads' => '{"FR":"Végétal","DE":"Pflanzlich","IT":"Vegetale","EN":"Vegetable"}'],
            ['syllabe' => 'La', 'trads' => '{"FR":"Machine","DE":"Machine","IT":"Macchina","EN":"Machine"}'],
            ['syllabe' => 'Le', 'trads' => '{"FR":"Sentiment","DE":"Gefühl","IT":"Sentimento","EN":"Feeling"}'],
            ['syllabe' => 'Li', 'trads' => '{"FR":"Lieu","DE":"Ort","IT":"Luogo","EN":"Place"}'],
            ['syllabe' => 'Lo', 'trads' => '{"FR":"Boisson","DE":"Getränk","IT":"Bibita","EN":"Beverage"}'],
            ['syllabe' => 'Lu', 'trads' => '{"FR":"Nourriture","DE":"Lebensmittle","IT":"Cibo","EN":"Food"}'],
            ['syllabe' => 'Ma', 'trads' => '{"FR":"Devant","DE":"Vor","IT":"Davanti","EN":"Front"}'],
            ['syllabe' => 'Me', 'trads' => '{"FR":"Derrière","DE":"Hinter","IT":"Dietro","EN":"Back"}'],
            ['syllabe' => 'Mi', 'trads' => '{"FR":"Droite","DE":"Rechts","IT":"Destra","EN":"Right"}'],
            ['syllabe' => 'Mo', 'trads' => '{"FR":"Au dessus/Haut","DE":"Über","IT":"Sopra/Su","EN":"Above/High"}'],
            ['syllabe' => 'Mu', 'trads' => '{"FR":"En dessous/Bas","DE":"Unter","IT":"Sotto/Giù","EN":"Below/Low"}'],
            ['syllabe' => 'Na', 'trads' => '{"FR":"","DE":"","IT":"","EN":""}'],
            ['syllabe' => 'Ne', 'trads' => '{"FR":"Extérieur","DE":"Draussen","IT":"Esterno","EN":"Outside"}'],
            ['syllabe' => 'Ni', 'trads' => '{"FR":"Intérieur","DE":"Innerhalb","IT":"Interno","EN":"Inside"}'],
            ['syllabe' => 'No', 'trads' => '{"FR":"Petit","DE":"Klein","IT":"Picolo","EN":"Small"}'],
            ['syllabe' => 'Nu', 'trads' => '{"FR":"Grand","DE":"Gross","IT":"Grande","EN":"Big"}'],
            ['syllabe' => 'Pa', 'trads' => '{"FR":"Air/Gaz","DE":"Gaz","IT":"Aria/Gas","EN":"Air/Gas"}'],
            ['syllabe' => 'Pe', 'trads' => '{"FR":"Terre","DE":"Erde","IT":"Terra","EN":"Earth"}'],
            ['syllabe' => 'Pi', 'trads' => '{"FR":"Feu","DE":"Feuer","IT":"Fuoco","EN":"Fire"}'],
            ['syllabe' => 'Po', 'trads' => '{"FR":"Eau/Liquide","DE":"Wasser","IT":"Aqua/Liquido","EN":"Water/Liquid"}'],
            ['syllabe' => 'Pu', 'trads' => '{"FR":"Pierre","DE":"Stein","IT":"Pietra","EN":"Stone"}'],
            ['syllabe' => 'Ra', 'trads' => '{"FR":"Métaux","DE":"Metalle","IT":"Metalli","EN":"Metals"}'],
            ['syllabe' => 'Re', 'trads' => '{"FR":"Verre","DE":"Glass","IT":"Vetro","EN":"Glass"}'],
            ['syllabe' => 'Ri', 'trads' => '{"FR":"Energie","DE":"Energie","IT":"Energia","EN":"Energy"}'],
            ['syllabe' => 'Ro', 'trads' => '{"FR":"Solide","DE":"Solide","IT":"Solido","EN":"Solid"}'],
            ['syllabe' => 'Ru', 'trads' => '{"FR":"","DE":"","IT":"","EN":""}'],
            ['syllabe' => 'Sa', 'trads' => '{"FR":"Seul","DE":"Aleine","IT":"Solo","EN":"Alone"}'],
            ['syllabe' => 'Se', 'trads' => '{"FR":"Toi","DE":"Du","IT":"Tu","EN":"You"}'],
            ['syllabe' => 'Si', 'trads' => '{"FR":"Pluriel","DE":"Plural","IT":"Plurale","EN":"Plural"}'],
            ['syllabe' => 'So', 'trads' => '{"FR":"Ensemble","DE":"Allgemein ","IT":"Insieme","EN":"Together"}'],
            ['syllabe' => 'Su', 'trads' => '{"FR":"Ordre","DE":"Bestellung","IT":"Ordine","EN":"Order"}'],
            ['syllabe' => 'Ta', 'trads' => '{"FR":"1","DE":"Eins","IT":"Uno","EN":"One"}'],
            ['syllabe' => 'Te', 'trads' => '{"FR":"2","DE":"Zwei","IT":"Due","EN":"Two"}'],
            ['syllabe' => 'Ti', 'trads' => '{"FR":"3","DE":"Drei","IT":"Tre","EN":"Three"}'],
            ['syllabe' => 'To', 'trads' => '{"FR":"4","DE":"Vier","IT":"Quattro","EN":"Four"}'],
            ['syllabe' => 'Tu', 'trads' => '{"FR":"5","DE":"Fünf","IT":"Cinque","EN":"Five"}'],
            ['syllabe' => 'Va', 'trads' => '{"FR":"6","DE":"Sechs","IT":"Sei","EN":"Six"}'],
            ['syllabe' => 'Ve', 'trads' => '{"FR":"7","DE":"Sieben","IT":"Sette","EN":"Seven"}'],
            ['syllabe' => 'Vi', 'trads' => '{"FR":"8","DE":"Acht","IT":"Otto","EN":"Eight"}'],
            ['syllabe' => 'Vo', 'trads' => '{"FR":"9","DE":"Neun ","IT":"Nove","EN":"Nine"}'],
            ['syllabe' => 'Vu', 'trads' => '{"FR":"0","DE":"Null","IT":"Zero","EN":"Zero"}'],
            ['syllabe' => 'Wa', 'trads' => '{"FR":"Question","DE":"Frage","IT":"Domanda","EN":"Question"}'],
            ['syllabe' => 'We', 'trads' => '{"FR":"Passé","DE":"Vergangenheit","IT":"Passato","EN":"Past"}'],
            ['syllabe' => 'Wi', 'trads' => '{"FR":"Condition","DE":"Zustand","IT":"Condizione","EN":"Condition"}'],
            ['syllabe' => 'Wo', 'trads' => '{"FR":"Début","DE":"Amfang","IT":"Inizio","EN":"Beginning"}'],
            ['syllabe' => 'Wu', 'trads' => '{"FR":"Fin","DE":"Dun","IT":"Fine","EN":"End"}'],
            ['syllabe' => 'Xa', 'trads' => '{"FR":"Couleur","DE":"Farbe","IT":"Colore","EN":"Color"}'],
            ['syllabe' => 'Xe', 'trads' => '{"FR":"Jaune","DE":"Gelb","IT":"Giallo","EN":"Yellow"}'],
            ['syllabe' => 'Xi', 'trads' => '{"FR":"Rouge","DE":"Rot","IT":"Rosso","EN":"Red"}'],
            ['syllabe' => 'Xo', 'trads' => '{"FR":"Bleu","DE":"Blau","IT":"Blu","EN":"Blue"}'],
            ['syllabe' => 'Xu', 'trads' => '{"FR":"Blanc","DE":"Weiss","IT":"Bianco","EN":"White"}'],
            ['syllabe' => 'Za', 'trads' => '{"FR":"+","DE":"+","IT":"+","EN":"+"}'],
            ['syllabe' => 'Ze', 'trads' => '{"FR":"-","DE":"-","IT":"-","EN":"-"}'],
            ['syllabe' => 'Zi', 'trads' => '{"FR":"*","DE":"*","IT":"*","EN":"*"}'],
            ['syllabe' => 'Zo', 'trads' => '{"FR":"/","DE":"/","IT":"/","EN":"/"}'],
            ['syllabe' => 'Zu', 'trads' => '{"FR":"=","DE":"=","IT":"=","EN":"="}']
        ];

        DB::table('syllabes')->insert($record);

    }
}
