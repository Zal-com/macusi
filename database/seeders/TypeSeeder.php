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
            ['trads'=>'[{"FR":"Chiffre","DE":"Ziffer","IT":"Cifra"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Mathématique","DE":"Mathematisch","IT":"Matematico"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Géométrie","DE":"Geometrie","IT":"Geometria"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Temps","DE":"Zeit","IT":"Ore"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Concept","DE":"Begriff","IT":"Concetto"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Verbe","DE":"Verb","IT":"Verbo"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Animal","DE":"Tier","IT":"Animale"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Lieu","DE":"Ort","IT":"Luogo"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Humain","DE":"Mensch","IT":"Umano"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Commerce","DE":"Handel","IT":"Commercio"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Elément","DE":"Element","IT":"Elemento"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Objet","DE":"Objekt","IT":"Oggetto"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Sexualité","DE":"Sexualität","IT":"Sessualità"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Science","DE":"Wissenschaft","IT":"Scienza"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Sentiment","DE":"Gefühl","IT":"Sentimento"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Matière","DE":"Materie","IT":"Materia"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Machine","DE":"Maschine","IT":"Macchina"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Boisson","DE":"Trinken","IT":"Bere"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Végétal","DE":"Pflanze","IT":"Pianta"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Nourriture","DE":"Essen","IT":"Cibo"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Langue","DE":"Zunge","IT":"Lingua"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Médical","DE":"Medizinisch","IT":"Medico"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Condition","DE":"Zustand","IT":"Condizione"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Véhicule","DE":"Fahrzeug","IT":"Veicolo"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Religion","DE":"Religion","IT":"Religione"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Décès","DE":"Tod","IT":"Morte"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Science-fiction","DE":"Science-Fiction","IT":"Fantascienza"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Son","DE":"Sound","IT":"Suono"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Corps","DE":"Korps","IT":"Corpo"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Bâtiment","DE":"Gebäude","IT":"Edificio"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Mobilier","DE":"Möbel","IT":"Mobilio"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Légume","DE":"Gemüse","IT":"Ortaggio"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Phrase","DE":"Phrase","IT":"Locuzione"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Naval","DE":"Flotten","IT":"Navale"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Loi","DE":"Gesetz","IT":"Legge"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Fruit","DE":"Obst","IT":"Frutta"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Armée","DE":"Armee","IT":"Esercito"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Quantité","DE":"Menge","IT":"Quantità"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Famille","DE":"Familie","IT":"Famiglia"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Couleur","DE":"Farbe","IT":"Colore"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Vêtement","DE":"Kleidungsstück","IT":"Veste"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Climat","DE":"Klima","IT":"Clima"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Créature","DE":"Geschöpf","IT":"Creatura"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Question","DE":"Frage","IT":"Domanda"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Etude","DE":"Studieren","IT":"Studiare"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Forme","DE":"Form","IT":"Forma"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Sport","DE":"Sport","IT":"Sport"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Phobie","DE":"Phobie","IT":"Fobia"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Ordinateur","DE":"Computer","IT":"Computer"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Planète","DE":"Planet","IT":"Pianeta"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Justice","DE":"Gerechtigkeit","IT":"Giustizia"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Politique","DE":"Politik","IT":"Politica"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Fleur","DE":"Blume","IT":"Fiore"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Adverbe","DE":"Adverb","IT":"Avverbio"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Mois","DE":"Monat","IT":"Mese"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Saison","DE":"Saison","IT":"Stagione"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Poids","DE":"Gewicht","IT":"Peso"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Liquide","DE":"Flüssigkeit","IT":"Liquido"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Distance","DE":"Abstand","IT":"Distanza"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Onomatopée","DE":"Onomatopöie","IT":"Onomatopea"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Jour","DE":"Tag","IT":"Giorno"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Unité","DE":"Einheit","IT":"Unità"}]','isValidated'=>'1'],
            ['trads'=>'[{"FR":"Cri","DE":"Weinen","IT":"Piangere"}]','isValidated'=>'1'],
            ];

        DB::table('types')->insert($record);

    }
}
