<?php

namespace App\Repositories;


use App\Models\Hospital;
use Carbon\Carbon;
use App\Repositories\Contracts\IHospitalRepository;

class HospitalRepository implements IHospitalRepository
{
    
    public function HosProfile($id)
    {
        try {
		    $hospital = Hospital::select('hospitals.id','hospitals.user_id','name','photo','rating','information','views')
		                  
		                    ->first();

            return $hospital;
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}