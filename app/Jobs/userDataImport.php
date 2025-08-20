<?php

namespace App\Jobs;

use App\Imports\UsersDataImport;
use App\Imports\UsersImport;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Maatwebsite\Excel\Facades\Excel;

class userDataImport implements ShouldQueue
{
    use Queueable;
    protected $file;

    /**
     * Create a new job instance.
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Excel::import(new UsersDataImport, $this->file);
    }
}
