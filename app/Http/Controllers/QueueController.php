<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Clinic;
use Appointment;

class QueueController extends Controller
{
    public function show(Request $request, $clinicId)
    {
        $clinic = Clinic::find($clinicId);
        $clinics = Clinic::all();
        $appointments = Appointment::whereStatus('Queued')
            ->whereClinicId($clinicId)
            ->get();

        return view('queues.show', compact('clinic', 'clinics', 'appointments'));
    }

    public function enter(Request $request, $appointmentId)
    {
        $appointment = Appointment::find($appointmentId);
        $clinic = Clinic::find($appointment->clinic_id);

        // update status
        $appointment->status = 'Examination';
        $appointment->save();

        // masukkan pasien ke status klinik
        $clinic->patient_id = $appointment->patient_id;
        $clinic->save();

        return back();
    }

    public function finish(Request $request, $appointmentId)
    {
        $appointment = Appointment::find($appointmentId);
        $clinic = Clinic::find($appointment->clinic_id);

        // update status
        $appointment->status = 'Cashier';
        $appointment->save();

        // keluarkan pasien ke status klinik
        $clinic->patient_id = null;
        $clinic->save();

        return back();
    }
}
