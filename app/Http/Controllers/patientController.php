<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use App\visit;
use App\rec_procedure;
use App\rec_drug;

class patientController extends Controller
{
    public function index(){
    	$patients=patient::orderby('id','desc')->get();
    	return view('patient',compact('patients'));
    }
    public function store(Request $req){
    	// $data=$req->all();
    	$data=$req->except('_token');
    	patient::create($data);
    	return redirect('/patient');
    	// dd($data);
    }
    public function show($med_rec){
    	$find=patient::where('med_rec',$med_rec)->get();
    	$visits=visit::where('med_rec',$med_rec)->get();
    	$drug=rec_drug::where('med_rec',$med_rec)->get();
    	$procedure=rec_procedure::where('med_rec',$med_rec)->get();

    	return view('profile',compact(['find','visits','procedure','drug']));
    	// dd($find);
    }
}
