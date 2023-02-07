<?php

namespace App\Jobs;

use App\Models\OnlineDriver;
use App\Repository\Geolocation\LocationsRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\ResponseTrait;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class updateGpsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private  $driverRepo;
    private  $token;
    private  $request;

    public function __construct(String $token, Array $request)
    {
        $this->driverRepo = new LocationsRepository(new OnlineDriver());
        $this->token = $token;
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //TOKEN gerado pelo Login, porém passando pelo HEADER
        return $this->driverRepo->updateGPS( $this->token ,$this->request);
    }
}
