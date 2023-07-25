<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();

        Type::truncate();

        Schema::enableForeignKeyConstraints();

        $record = [
            ['trads' => '{"FR":"Chiffre","DE":"Ziffer","IT":"Cifra","EN":"Digit"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Mathématique","DE":"Mathematisch","IT":"Matematico","EN":"Mathematical"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Géométrie","DE":"Geometrie","IT":"Geometria","EN":"Geometry"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Temps","DE":"Zeit","IT":"Ore","EN":"Time"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Concept","DE":"Begriff","IT":"Concetto","EN":"Concept"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Verbe","DE":"Verb","IT":"Verbo","EN":"Verb"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Animal","DE":"Tier","IT":"Animale","EN":"Animal"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Lieu","DE":"Ort","IT":"Luogo","EN":"Place"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Humain","DE":"Mensch","IT":"Umano","EN":"Human"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Commerce","DE":"Handel","IT":"Commercio","EN":"Commerce"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Elément","DE":"Element","IT":"Elemento","EN":"Element"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Objet","DE":"Objekt","IT":"Oggetto","EN":"Object"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Sexualité","DE":"Sexualität","IT":"Sessualità","EN":"Sexuality"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Science","DE":"Wissenschaft","IT":"Scienza","EN":"Science"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Sentiment","DE":"Gefühl","IT":"Sentimento","EN":"Feeling"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Matière","DE":"Materie","IT":"Materia","EN":"Material"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Machine","DE":"Maschine","IT":"Macchina","EN":"Machine"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Boisson","DE":"Trinken","IT":"Bere","EN":"Drink"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Végétal","DE":"Pflanze","IT":"Pianta","EN":"Vegetable"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Nourriture","DE":"Essen","IT":"Cibo","EN":"Food"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Langue","DE":"Zunge","IT":"Lingua","EN":"Language"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Médical","DE":"Medizinisch","IT":"Medico","EN":"Medical"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Condition","DE":"Zustand","IT":"Condizione","EN":"Condition"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Véhicule","DE":"Fahrzeug","IT":"Veicolo","EN":"Vehicle"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Religion","DE":"Religion","IT":"Religione","EN":"Religion"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Décès","DE":"Tod","IT":"Morte","EN":"Death"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Science-fiction","DE":"Science-Fiction","IT":"Fantascienza","EN":"Science Fiction"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Son","DE":"Sound","IT":"Suono","EN":"Sound"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Corps","DE":"Korps","IT":"Corpo","EN":"Body"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Bâtiment","DE":"Gebäude","IT":"Edificio","EN":"Building"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Mobilier","DE":"Möbel","IT":"Mobilio","EN":"Furniture"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Légume","DE":"Gemüse","IT":"Ortaggio","EN":"Vegetable"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Phrase","DE":"Phrase","IT":"Locuzione","EN":"Phrase"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Naval","DE":"Flotten","IT":"Navale","EN":"Naval"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Loi","DE":"Gesetz","IT":"Legge","EN":"Law"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Fruit","DE":"Obst","IT":"Frutta","EN":"Fruit"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Armée","DE":"Armee","IT":"Esercito","EN":"Army"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Quantité","DE":"Menge","IT":"Quantità","EN":"Quantity"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Famille","DE":"Familie","IT":"Famiglia","EN":"Family"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Couleur","DE":"Farbe","IT":"Colore","EN":"Color"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Vêtement","DE":"Kleidungsstück","IT":"Veste","EN":"Clothing"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Climat","DE":"Klima","IT":"Clima","EN":"Climate"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Créature","DE":"Geschöpf","IT":"Creatura","EN":"Creature"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Question","DE":"Frage","IT":"Domanda","EN":"Question"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Etude","DE":"Studieren","IT":"Studiare","EN":"Study"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Forme","DE":"Form","IT":"Forma","EN":"Shape"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Sport","DE":"Sport","IT":"Sport","EN":"Sport"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Phobie","DE":"Phobie","IT":"Fobia","EN":"Phobia"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Ordinateur","DE":"Computer","IT":"Computer","EN":"Computer"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Planète","DE":"Planet","IT":"Pianeta","EN":"Planet"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Justice","DE":"Gerechtigkeit","IT":"Giustizia","EN":"Justice"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Politique","DE":"Politik","IT":"Politica","EN":"Politics"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Fleur","DE":"Blume","IT":"Fiore","EN":"Flower"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Adverbe","DE":"Adverb","IT":"Avverbio","EN":"Adverb"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Mois","DE":"Monat","IT":"Mese","EN":"Month"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Saison","DE":"Saison","IT":"Stagione","EN":"Season"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Poids","DE":"Gewicht","IT":"Peso","EN":"Weight"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Liquide","DE":"Flüssigkeit","IT":"Liquido","EN":"Liquid"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Distance","DE":"Abstand","IT":"Distanza","EN":"Distance"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Onomatopée","DE":"Onomatopöie","IT":"Onomatopea","EN":"Onomatopoeia"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Jour","DE":"Tag","IT":"Giorno","EN":"Day"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Unité","DE":"Einheit","IT":"Unità","EN":"Unit"}','isValidated'=>'1'],
            ['trads' => '{"FR":"Cri","DE":"Weinen","IT":"Piangere","EN":"Cry"}','isValidated'=>'1'],
        ];

        DB::table('types')->insert($record);

    }
}
