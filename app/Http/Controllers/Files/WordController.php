<?php

namespace App\Http\Controllers\Files;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\PhpWord;

class WordController extends Controller
{
    public function newFile () {
//        $phpWord = new PhpWord();
        $phpWord = \PhpOffice\PhpWord\IOFactory::load(storage_path('app/public/SDR/template.docx'));
//        $phpWord = $phpWord->loadTemplate(storage_path('app/public/SDR/template.docx'));


        $sections = $phpWord->getSections();
        $section = $sections[0]; // le document ne contient qu'une section
        $arrays = $section->getElements();


        $section->addText('Add new words..');
        $phpWord->save(storage_path('app/public/SDR/x.docx'));
//        return response()->download(storage_path('app/public/SDR/x.docx'))->deleteFileAfterSend(true);
    }
}


