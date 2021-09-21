<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use App\Models\VaccinationHistory;
use Illuminate\Http\Request;

class VaccinationController extends Controller
{
    public function vaccination(Request $request){
        $goats = Goat::orderBy('goatId')->get();

        return view('goats.vaccineUpdate', compact('goats'));

    }

    public function vaccineUpdate(Request $request){
        
        $request->validate([
            'typeOfVaccine' => 'required',
            'dateOfVaccine' => 'required',
            'vaccine_staff' => 'required',
            'goat_id' => 'required'      
        ]);       

            $vaccine = new VaccinationHistory();
            $vaccine -> typeOfVaccine = $request->typeOfVaccine;
            $vaccine -> dateOfVaccine = $request->dateOfVaccine;
            $vaccine -> vaccine_staff = $request->vaccine_staff;
            $vaccine -> goat_id = $request->goat_id;
            
            $vaccine -> save();

            if ($vaccine) {
                return back()->with('success', 'You have been successfully');
            } else {
                return back()->with('fail', 'Something went wrong');
            }

    }
}
