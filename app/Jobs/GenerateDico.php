<?php

namespace App\Jobs;

use App\Models\Mot;
use App\Providers\PDFDicoManager;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Expr\Array_;
use ZipStream\PackField;
use Codedge\Fpdf;

class GenerateDico implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     */
    public function __construct()
    {
    //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        ini_set('memory_limit', '512M');
        $locale = app()->getLocale();


        foreach (config('custom.available_languages') as $lang => $language) {
            $pdm = new PDFDicoManager();
            $pdm->createPDF($lang);
        }

    }
}
