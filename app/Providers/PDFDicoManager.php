<?php

namespace App\Providers;

use App\Models\Mot;
use Codedge\Fpdf\Fpdf;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;

ini_set('max_execution_time', 0);

class PDFDicoManager extends Fpdf\Fpdf
{

    protected int $y0;

    protected string $title = 'Dictionnaire';
    protected string $stitle1 = 'Français - MaCuSi';
    protected string $stitle2 = 'MaCuSi - Français';
    const NBCOL = 2;



    /**
     * Fonction permettant de créer le PDF
     */
    public function createPDF($lang) : void
    {
        $filename = 'DicoPDF_' . strtoupper($lang) . '.pdf';

        $this->AddPage();
        $this->setDicoTitle();
        $this->addDico($this->stitle1, $lang);
        $this->AddPage();
        $this->addDico($this->stitle2, $lang);
        $this->Output('F', public_path() . '/storage/pdf/' . $filename);
    }

    /**
     * Fonction permettant d'ajouter le dictionnaire au pdf
     */
    private function addDico($title, $lang) : void {
        $this->setDicoSubTitles($title);
        $this->setcol(0);
        $this->y0 = $this->GetY()+5;
        $tabCol = $this->dicoBuildDefinitions($lang);
        $this->dicoColumns($tabCol);
    }

    /**
     * Fonction permettant d'initialiser le titre du document
     */
    private function setDicoTitle() : void
    {
        $x = $this->getX();
        $this->SetFont('Arial', 'B', 18);
        $mid_x = $this->getPageWidth()/2;
        $this->SetX($mid_x - ($this->GetStringWidth($this->title) / 2));
        $this->Write(20, utf8_decode($this->title));
        $this->Ln();
        $this->setX($x);
    }

    /**
     * Fonction permettant d'initialiser les sous-titres
     * mentionnés
     */
    private function setDicoSubTitles($stitle) : void
    {
        $x = $this->getX();
        $this->setDicoSubTitle($stitle, 1);
        $this->SetX($x);
        $this->Ln();
    }

    /**
     * Fonction permettant d'initialiser le sous-titre
     */
    private function setDicoSubTitle($stitle, $col) : void
    {
        $this->SetFont('Arial', 'B', 12);
        $x = ($this->getPageWidth()/2) * ($col-0.5);
        $this->SetX($x - ($this->GetStringWidth($stitle) / 2));
        $this->Write(5,utf8_decode($stitle));
    }

    /**
     * Fonction permettant de construire les définitions
     */
    private function dicoBuildDefinitions($lang) {

        $mots = Mot::where('id', '>=', 65)->get();
        $lang = strtoupper($lang);
        $tab = [];

        foreach($mots as $mot){
            //dd($mot);
            $word = $mot->enMacusi;
            $signification = json_decode($mot->trads)->$lang;
            //dd($signification);
            $explication = $mot->explication;
            $description = $mot->SyllabesString();
            $type = '[' . $mot->typesString() . ']';

            $fulldescription = $description . ' ' . $type . ' ' . $explication;
            $tab[] = [$word, $signification, $fulldescription, null];

        }
        /*
         * ANCIEN CODE NE PAS SUPPPRIMER
         *
         *

        foreach($table as $key => $value) {
            if($signWord) {
                $word[0] = $value->getMeaning();
                $word[1] = $phonetics[$key];
                $signification = $value->getWord();
            } else {
                $word = $value->getWord();
                $signification[0] = $value->getMeaning();
                $signification[1] = $phonetics[$key];
            }
            $explication = ($value->getExplanation() !== '' && $value->getExplanation() !== null) ? "{" . $value->getExplanation() . "}" : "";
            $description = "";
            for($i = 1; $i <= self::NBCOL; $i++) {
                if($value->getWordX($i) !== '' && $value->getWordX($i) !== null) {
                    $description .= ($i !== 1) ? " " . $value->getWordX($i) : $value->getWordX($i);
                }
            }
            $def = "";
            $first = true;
            if(isset($defs[$key])){
                foreach($defs[$key] as $defAlt){
                    if(!$first){
                        $def .= " | ";
                    }
                    for($i = 0; $i < self::NBCOL; $i++){
                        if(isset($defAlt[$i]) && $defAlt[$i] != ""){
                            $def .= ($i !== 0) ? " " . $defAlt[$i] : $defAlt[$i];
                        }
                    }
                    $first = false;
                }
            }
            $type = "[" . $value->getType() . "]";
            $fulldescription = $description . ' ' . $type . ' ' . $explication;
            if(isset($defs[$key]) && $defs[$key] !== null) {
                $tab[] = [$word, $signification, $fulldescription, $def];
            } else {
                $tab[] = [$word, $signification, $fulldescription, null];
            }
        }
        */
        return $tab;
    }

    /**
     * Fonction permettant de construire les colonnes
     */
    private function dicoColumns($col, $bool = false) {
        for($i = 0; $i < count($col); $i++) {
            $this->writeDef($col[$i][0], $col[$i][1], $col[$i][2], $col[$i][3], $bool);
        }
    }

    /**
     * Fonction permettant d'écrire les définitions
     */
    private function writeDef($word, $signification, $fulldescription, $def = null, $bool = false) {
        $w = ($this->getPageWidth()/2) - (($this->col === 0) ? 15 : 10);
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(255, 0, 0);
        if($bool){
            $this->Cell($this->GetStringWidth(utf8_decode($word[0])), 5, utf8_decode($word[0]));
            $this->SetTextColor(153, 153, 153);
            $this->SetFont('Arial','',10);
            $this->Cell($this->GetStringWidth(html_entity_decode(' {' . $word[1]) . '}'), 5, html_entity_decode(' {' . $word[1] . '}'));
            $this->SetFont('Arial', '', 10);
        } else {
            $this->Cell($this->GetStringWidth(utf8_decode($word)), 5, utf8_decode($word));
        }
        $this->SetTextColor(0, 0, 0);
        $this->Cell($this->GetStringWidth(utf8_decode(' - ')), 5,utf8_decode(' - '));
        $this->SetTextColor(0, 0, 255);
        $this->Cell($this->GetStringWidth(utf8_decode($signification)), 5, utf8_decode($signification));
        $this->SetTextColor(0, 0, 0);
        $this->Ln();
        $h = 4.5 + ceil(($this->GetStringWidth(utf8_decode($fulldescription)) / $w)) * 0.1;
        $this->MultiCell($w, $h, utf8_decode($fulldescription), 0, 'L');
        if($def !== null) {
            $h = 4.5 + ceil(($this->GetStringWidth(utf8_decode($def)) / $w)) * 0.1;
            $this->MultiCell($w, $h, utf8_decode($def), 0, 'L');
        }
    }

    /**
     * Fonction permettant de modifier la colonne
     */
    function SetCol($col) : void
    {
        $this->col = $col;
        $x = ($col === 0) ? 10 : 5;
        $x = $x + $col*($this->getPageWidth()/2);
        $this->SetLeftMargin($x);
        $this->SetX($x);
    }

    /**
     * Fonction permettant d'adapter la fin de page
     * avec la gestion des colonnes
     */
    public function AcceptPageBreak() : bool
    {
        if($this->col == 0)
        {
            $this->SetCol($this->col+1);
            $this->SetY($this->y0);
            return false;
        }
        else
        {
            $this->y0 = 10;
            $this->SetCol(0);
            return true;
        }
    }

    /**
     * Fonction permettant de créer les pieds de page
     */
    function Footer() : void
    {
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }
}

