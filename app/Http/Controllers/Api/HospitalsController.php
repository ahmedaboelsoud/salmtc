<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\HospitalService;
use Super;

class HospitalsController extends Controller
{
  
   protected $hospitalService;   	
   public function __construct(HospitalService $hospitalService)
   {
        $this->hospitalService = $hospitalService;
   }

   public function HosProfile($id)
   {
   	  $hospital = $this->hospitalService->HosProfile($id);

      return Super::sendResponse($hospital);
   }   
}
