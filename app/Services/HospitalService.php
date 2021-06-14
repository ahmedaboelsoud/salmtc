<?php

namespace App\Services;
use App\Repositories\Contracts\IHospitalRepository;


class HospitalService {


	protected $IHospitalRepository;

    public function __construct(IHospitalRepository $IHospitalRepository)
    {
        $this->IHospitalRepository = $IHospitalRepository;
    }
	
	public function HosProfile($id){

        $GetHosProfile = $this->IHospitalRepository->HosProfile($id);

        return $GetHosProfile;
	}
	
	
		
	
}//End Class