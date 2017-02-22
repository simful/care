<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Visit;
use App\rec_procedure;
use App\rec_drug;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::orderby('id', 'desc')->get();

        return view('patients.index', compact('patients'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $this->validate($request, [
            'id' => 'required',
            'nik' => 'required',
            'name' => 'required'
        ]);

        Patient::create($data);

        return redirect('/patient');
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        $visits = Visit::where('med_rec', $med_rec)->get();
        $drug = rec_drug::where('med_rec', $med_rec)->get();
        $procedure = rec_procedure::where('med_rec', $med_rec)->get();

        return view('patients.show', compact(['patient', 'visits', 'procedure', 'drug']));
    }
}
