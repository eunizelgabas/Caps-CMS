<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Form;
use App\Models\History;
use App\Models\MedicalHistory;
use App\Models\Patient;
use App\Models\PhysicalExamination;
use App\Models\Radiologic;
use App\Models\Remarks;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function create(Patient $patient){
        $doctor = Doctor::whereHas('user')->with([ 'user'])->get();
        $patient->load('user');
        return inertia('Form/Sample', [
            'patient' => $patient,
            'doctor' => $doctor
        ]);
    }
    // public function store(Request $request){
    //     $validatedData = $request->validate([
    //         'doc_id' => 'required|exists:doctors,id',
    //         'pat_id' => 'required|exists:patients,id',
    //         'date' => 'required|date',

    //     ]);

    //     // dd($validatedData);
    //     $form = Form::create($validatedData);
    //     $formId = $form->id;
    //     $forms = $form->id;
    //     $phyform =  $form->id;
    //     $fid =  $form->id;
    //     $f = $form->id;

    //     $field = $request->validate([
    //         // Add validation rules for other fields
    //         'allergy' => 'boolean',
    //                 'amoebiasis' => 'boolean',
    //                 'anemia' => 'boolean',
    //                 'asthma' => 'boolean',
    //                 'cancer' => 'boolean',
    //                 'chronic' => 'boolean',
    //                 'diabetes' => 'boolean',
    //                 'dysmenorrhea' => 'boolean',
    //                 'fainting' => 'boolean',
    //                 'deafness' => 'boolean',
    //                 'endocrine' => 'boolean',
    //                 'frequent_headache' => 'boolean',
    //                 'neck_injury' => 'boolean',
    //                 'heart_disease' => 'boolean',
    //                 'hernias' => 'boolean',
    //                 'highblood_pressure' => 'boolean',
    //                 'insomnia' => 'boolean',
    //                 'kidney_disease' => 'boolean',
    //                 'skeletal_disorder' => 'boolean',
    //                 'nervous_breakdown' => 'boolean',
    //                 'nose_trouble' => 'boolean',
    //                 'peptic_ulcer' => 'boolean',
    //                 'tuberculosis' => 'boolean',
    //                 'hospitalization' => 'boolean',
    //                 'surgical_operation' => 'boolean',
    //         // 'form_id' => 'required'
    //     ]);

    //     $field['form_id'] = $forms;

    //     $medicalhistory = MedicalHistory::create($field);

    //     $data = $request->validate([

    //         'remarks' => 'required|string'
    //     ]);

    //         $data['form_id'] = $formId;

    //         // dd($data);
    //         $remark = Remarks::create($data);



    //      $physicals = $request->validate([
    //                 // Add validation rules for other fields
    //                 'height' => 'numeric',
    //                 'weight' => 'numeric',
    //                 'bp' => 'string',
    //                 'rr' => 'string',
    //                 'pr' => 'string',
    //                 'saturation' => 'string',
    //                 'lmp' => 'string',
    //                 'head_neck_scalp' => 'boolean',
    //                 'eyes' => 'boolean',
    //                 'ears' => 'boolean',
    //                 'nose_sinuses' => 'boolean',
    //                 'mouth' => 'boolean',
    //                 'neck_thyroid' => 'boolean',
    //                 'chest_breast_axilla' => 'boolean',
    //                 'heart' => 'boolean',
    //                 'lungs' => 'boolean',
    //                 'abdomen' => 'boolean',
    //                 'back' => 'boolean',
    //                 'anus' => 'boolean',
    //                 'gut' => 'boolean',
    //                 'inguinals' => 'boolean',
    //                 'reflexes' => 'boolean',
    //                 'extremities' => 'boolean',
    //                 'dental' => 'boolean',
    //                 'right_eye' => 'string',
    //                 'left_eye' => 'string',
    //                 'withg_right_eye'=> 'string',
    //                 'withg_left_eye' => 'string',
    //                 'ishihara' => 'string',
    //                 'colour_blind' => 'string',
    //                'head_neck_scalp_findings'=> 'string|nullable',
    //                 'eyes_findings'=> 'string|nullable',
    //                 'ears_findings'=> 'string|nullable',
    //                 'nose_sinuses_findings'=> 'string|nullable',
    //                 'mouth_findings'=> 'string|nullable',
    //                 'neck_thyroid_findings'=> 'string|nullable',
    //                 'chest_breast_axilla_findings'=> 'string|nullable',
    //                 'heart_findings'=> 'string|nullable',
    //                 'lungs_findings'=> 'string|nullable',
    //                 'abdomen_findings'=> 'string|nullable',
    //                 'back_findings'=> 'string|nullable',
    //                 'anus_findings'=> 'string|nullable',
    //                 'gut_findings'=> 'string|nullable',
    //                 'inguinals_findings'=> 'string|nullable',
    //                 'reflexes_findings'=> 'string|nullable',
    //                 'extremities_findingd'=> 'string|nullable',
    //                 'dental_finding'=> 'string|nullable',

    //             ]);

    //             $physicals['form_id'] = $phyform;

    //             $physicalexam = PhysicalExamination::create($physicals);

    //             $valid = $request->validate([

    //                 'hist' => 'string'
    //             ]);

    //                 $valid['form_id'] = $fid;

    //                 // dd($data);
    //             $hist = History::create($valid);

    //                $d = $request->validate([

    //         // 'form_id' => 'required|string'
    //     ]);

    //     if($request->exam_results){
    //         $filename = time() . "." . $request->exam_results->extension();
    //         $request->exam_results->move(public_path('assets/radiologic_results'), $filename);
    //         $d['exam_results'] = $filename;
    //     }

    //     $d['form_id'] = $f;

    //         // dd($data);
    //     $radiologic = Radiologic::create($d);

    //     // You can also redirect to a success page or return a response
    //     return redirect('/healthForm/show/' . $form->id)->with('success', 'Physical Examination record and Medical History saved successfully');

    // }

    public function store(Request $request)
{
    // Validate the main form data
    $validatedFormData = $request->validate([
        'doc_id' => 'required|exists:doctors,id',
        'pat_id' => 'required|exists:patients,id',
        'date' => 'required|date',
    ]);

    // Create the main form record
    $form = Form::create($validatedFormData);
    $formId = $form->id;

    // Validate and store MedicalHistory
    $medicalHistoryData = $request->validate([
        // Add validation rules for other fields
        'allergy' => 'boolean',
        'amoebiasis' => 'boolean',
        'anemia' => 'boolean',
        'asthma' => 'boolean',
        'cancer' => 'boolean',
        'chronic' => 'boolean',
        'diabetes' => 'boolean',
        'dysmenorrhea' => 'boolean',
        'fainting' => 'boolean',
        'deafness' => 'boolean',
        'endocrine' => 'boolean',
        'frequent_headache' => 'boolean',
        'neck_injury' => 'boolean',
        'heart_disease' => 'boolean',
        'hernias' => 'boolean',
        'highblood_pressure' => 'boolean',
        'insomnia' => 'boolean',
        'kidney_disease' => 'boolean',
        'skeletal_disorder' => 'boolean',
        'nervous_breakdown' => 'boolean',
        'nose_trouble' => 'boolean',
        'peptic_ulcer' => 'boolean',
        'tuberculosis' => 'boolean',
        'hospitalization' => 'boolean',
        'surgical_operation' => 'boolean',
    ]);
    $medicalHistoryData['form_id'] = $formId;
    $medicalHistory = MedicalHistory::create($medicalHistoryData);

    // Validate and store Remarks
    $remarksData = $request->validate([
        'remarks' => 'required|string',
    ]);
    $remarksData['form_id'] = $formId;
    $remark = Remarks::create($remarksData);

    // Validate and store PhysicalExamination
    $physicalExamData = $request->validate([
        // Add validation rules for other fields
        'height' => 'numeric',
        'weight' => 'numeric',
        'bp' => 'string',
        'rr' => 'string',
        'pr' => 'string',
        'saturation' => 'string',
        'lmp' => 'string',
        'head_neck_scalp' => 'boolean',
        'eyes' => 'boolean',
        'ears' => 'boolean',
        'nose_sinuses' => 'boolean',
        'mouth' => 'boolean',
        'neck_thyroid' => 'boolean',
        'chest_breast_axilla' => 'boolean',
        'heart' => 'boolean',
        'lungs' => 'boolean',
        'abdomen' => 'boolean',
        'back' => 'boolean',
        'anus' => 'boolean',
        'gut' => 'boolean',
        'inguinals' => 'boolean',
        'reflexes' => 'boolean',
        'extremities' => 'boolean',
        'dental' => 'boolean',
        'right_eye' => 'string',
        'left_eye' => 'string',
        'withg_right_eye'=> 'string',
        'withg_left_eye' => 'string',
        'ishihara' => 'string',
        'colour_blind' => 'string',
        'head_neck_scalp_findings'=> 'string|nullable',
        'eyes_findings'=> 'string|nullable',
        'ears_findings'=> 'string|nullable',
        'nose_sinuses_findings'=> 'string|nullable',
        'mouth_findings'=> 'string|nullable',
        'neck_thyroid_findings'=> 'string|nullable',
        'chest_breast_axilla_findings'=> 'string|nullable',
        'heart_findings'=> 'string|nullable',
        'lungs_findings'=> 'string|nullable',
        'abdomen_findings'=> 'string|nullable',
        'back_findings'=> 'string|nullable',
        'anus_findings'=> 'string|nullable',
        'gut_findings'=> 'string|nullable',
        'inguinals_findings'=> 'string|nullable',
        'reflexes_findings'=> 'string|nullable',
        'extremities_findingd'=> 'string|nullable',
        'dental_finding'=> 'string|nullable',
    ]);
    $physicalExamData['form_id'] = $formId;
    $physicalExam = PhysicalExamination::create($physicalExamData);

    // Validate and store History
    $historyData = $request->validate([
        'hist' => 'nullable|string',
    ]);
    $historyData['form_id'] = $formId;
    $history = History::create($historyData);

    //Validate and store Radiologic
    $radiologicData = $request->validate([
        // Add validation rules for other fields
        'exam_results' => 'sometimes|file|mimes:jpeg,png,jpg,gif,pdf,doc,docx|max:10240',
    ]);

    $fileName = null;
    if ($request->exam_results) {
        $fileName = time() . "." . $request->exam_results->extension();
        $request->exam_results->move(public_path('assets/radiologic_results'), $fileName);
        $radiologicData['exam_results'] = $fileName;
    }

    $radiologicData['form_id'] = $formId;
    $radiologic = Radiologic::create($radiologicData);

    // Redirect to a success page or return a response
    return redirect('/healthForm/show/' . $form->id)->with('success', 'Physical Examination record and Medical History saved successfully');
}

    public function show(Form $form){
        $form->load(['patient.user', 'doctor', 'history', 'remark', 'medicalhistory', 'physicalexamination'])->find($form->id);
        $medicalhistory = MedicalHistory::all()->find($form->id);
        // $physicalexamination = PhysicalExamination::all()->find($form->id);
        // $remark = Remarks::all()->find($form->id);
        // $history = History::all()->find($form->id);
        // $serviceCount = $doctor->services->count();
        return inertia ('Form/Show',
            ['form'=> $form,
            // 'medicalhistory' => $medicalhistory,
            // 'physicalexamination' => $physicalexamination,
            // 'remark' => $remark,
            // 'history' => $history
        ]);
    }

    public function formPdf(Form $form){
        $form->load(['patient.user', 'doctor'])->find($form->id);
        $medicalhistory = MedicalHistory::all()->find($form->id);
        $physicalexamination = PhysicalExamination::all()->find($form->id);
        $remark = Remarks::all()->find($form->id);

         $pdf = Pdf::loadView('pdf.form',
         ['form'=> $form,
         'medicalhistory' => $medicalhistory,
         'physicalexamination' => $physicalexamination,
         'remark' => $remark
        ]);

        return $pdf->stream();

    }

    public function medCert(Patient $patient){
        $patient = Patient::with('user')->findOrFail($patient->id);

        $data = [
            'title' => 'MATER DEI COLLEGE',
            'header' => 'Medical Certificate',
            'address' => 'Tubigon, Bohol',
            'facility' => 'School Clinic',
            'date' => date('d/m/Y'),
            'patient' => $patient,
        ];

        $pdf = PDF::loadView('pdf.medCert', $data);
        return $pdf->stream();

   }

}
