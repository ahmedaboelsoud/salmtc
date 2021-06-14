<?php


namespace App\Providers;

use App\Repositories\Contracts\IHospitalRepository;
use App\Repositories\HospitalRepository;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(IHospitalRepository::class, HospitalRepository::class);
    }

}