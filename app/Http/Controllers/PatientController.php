<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Patient;
use Appointment;
use DrugRecord;
use ProcedureRecord;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('q')) {
            $q = $request->get('q');

            $patients = Patient::orderBy('name')
                ->orWhere('name', 'LIKE', "%$q%")
                ->paginate();
        } else {
            $patients = Patient::orderBy('name')
                ->paginate();
        }

        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.form', [
            'patient' => new Patient(),
            'isEdit' => false,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $this->validate($request, [
            'name' => 'required',
        ]);

        Patient::create($data);

        return redirect('patients');
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        $Appointments = Appointment::wherePatientId($id)->get();
        //$drugs = DrugRecord::wherePatientId($id)->get();
        //$procedures = ProcedureRecord::wherePatientId($id)->get();

        return view('patients.show', compact('patient', 'appointments', 'procedures', 'drugs'));
    }

    public function edit($id)
    {
        $patient = Patient::find($id);

        return view('patients.form', [
            'patient' => $patient,
            'isEdit' => true,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $patient = Patient::find($id);
        $patient->fill($request->all());
        $patient->save();

        return redirect('patients');
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        return redirect('patients');
    }
}
