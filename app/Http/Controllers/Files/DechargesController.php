<?php

namespace App\Http\Controllers\Files;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;

class DechargesController extends Controller
{
    public function newDecharge (Request $request) {

        $rules = [
            "manager"   => "required | min:3 | max:64",
            "local"     => "required | min:3 | max:64",
            "equipment" => "required | min:3 | max:64",
            "quantity"  => "required",
        ];
        $validator = Validator::make(Input::all(), $rules);
        if($validator->passes()) {
            $manager    = Input::post('manager');
            $prenom     = Input::post('local');
            $equipment  = Input::post('equipment');
            $quantity   = Input::post('quantity');
            //$date       = Input::post('date');


            $templateProcessor = new TemplateProcessor(storage_path('app/public/SDR/template_min.docx'));

            // pour une seul variable
            $templateProcessor->setValue('manager', $manager);
            $templateProcessor->setValue('local', $prenom);
            $templateProcessor->setValue('equipment', $equipment);
            $templateProcessor->setValue('quantity', $quantity);
            $templateProcessor->setValue('date', date("d/m/Y"));


            // Save the file..
            $templateProcessor->saveAs(storage_path('app/public/SDR/decharge.docx'));
            return response()->download(storage_path('app/public/SDR/decharge.docx'))->deleteFileAfterSend(true);
        }
    }
}


