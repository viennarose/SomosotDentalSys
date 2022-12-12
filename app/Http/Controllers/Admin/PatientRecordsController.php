<?php

namespace App\Http\Controllers\Admin;

use App\Models\Consent;
use App\Models\History;
use Illuminate\Http\Request;
use App\Models\PatientRecord;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class PatientRecordsController extends Controller
{
    public function index()
    {
        return view('admin.patients.index');
    }

    public function create()
    {
        return view('admin.patients.create');
    }
    public function edit($id)
    {
        return view('admin.patients.edit', compact('id'));
    }
    public function show($id)
    {
        return view('admin.patients.show', compact('id'));
    }

    public function treatmentIndex($id){
        return view('admin.patients.treatments.index', compact('id'));

    }

    // public function consentView($id){
    //     $consents = Consent::get();
    //     $patientRecord = PatientRecord::get();

    //     return view('admin.patients.consentView', compact('id', 'consents', 'patientRecord'));
    // }
    public function consentIndex($id){
        $consents = Consent::get();
        return view('admin.patients.consent', compact('id', 'consents'));
    }

    public function consent(Request $request, int $id){
        $folderPath = public_path('consents/');
        $image_parts = explode(';base64,', $request->patientSig);
        $image_type_aux = explode('image/', $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath.uniqid().'.'.$image_type;
        $image_file1= file_put_contents($file,$image_base64);

        $folderPath = public_path('consents/');
        $image_parts = explode(';base64,', $request->dentistSig);
        $image_type_aux = explode('image/', $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath.uniqid().'.'.$image_type;
        $image_file2= file_put_contents($file,$image_base64);


        // $save = new Consent;
        // $save->dentistSig = $dentistSig;
        // $save->patientSig = $patientSig;
        // $save->save();
        $form_data = array(
            'patientSig' => $image_file1,
            'dentistSig' => $image_file2,
        );
        $patientRecord = PatientRecord::findOrFail($id);
        $patientRecord->consent()->create($form_data);

        return redirect('admin/patients');
    }

}
