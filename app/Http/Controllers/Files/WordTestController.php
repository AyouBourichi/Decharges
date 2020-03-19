<?php

namespace App\Http\Controllers\Files;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;

class WordTestController extends Controller
{
    public function newFile (Request $request) {

        $rules = [
            "nom" => "required | min:3 | max:64",
            "prenom" => "required | min:3 | max:64",
        ];
        $validator = Validator::make(Input::all(), $rules);
        if($validator->passes()) {
            $nom = Input::post('nom');
            $prenom = Input::post('prenom');


            $templateProcessor = new TemplateProcessor(storage_path('app/public/SDR/template.docx'));

            // pour une seul variable
            $templateProcessor->setValue('nom', $nom);
            $templateProcessor->setValue('prenom', $prenom);


            // Save the file..
            $templateProcessor->saveAs(storage_path('app/public/SDR/x.docx'));
            return response()->download(storage_path('app/public/SDR/x.docx'))->deleteFileAfterSend(true);
        }
    }
}


