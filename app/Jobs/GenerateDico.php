<?php

namespace App\Jobs;

use App\Models\Mot;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateDico implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $uniqueFor = 300;
    public $mot;

    /**
     * Create a new job instance.
     */
    public function __construct(public Mot $mot)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

    }

    public function uniqueId() : string {
        return $this->mot->id;
    }
}
