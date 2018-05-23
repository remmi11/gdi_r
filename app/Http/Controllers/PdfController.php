<?php

namespace App\Http\Controllers;


use App\Http\Models\Forms;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{

    // Generate Will File
    public function pdf_generation ($form_id) {

        $form_data = Forms::find($form_id);

        $pdf = App::make('dompdf.wrapper');
        $pdf->setPaper('A4');
        $pdf->loadView('pdf.view',   compact('form_data'));

        return $pdf;
    }

    // View PDF Draft File
    public function view(Request $request,$id) {
        if ($request->isMethod('get')) {
            $pdf= $this->pdf_generation($id);

            return $pdf->stream();
        }
    }

    // Download Will PDF File
    public function download(Request $request,$id)
    {
        if ($request->isMethod('get')) {
            $name=DB::table('form')->select('project_no')->where('id','=',$id)->get();
            //echo '<hr><pre>';
            $pdf_name=$name[0]->project_no;

            if($pdf_name=='')$pdf_name='JobRecord';
            
            return $this->pdf_generation($id)->download($pdf_name.'WO.pdf');
        }
    }

    // Download Guide To Your Will PDF File
    public function downloadGuide(Request $request)
    {
        if ($request->isMethod('get')) {
            $file= public_path(). "/pdf/GuideToYourWill.pdf";
            return response()->download($file, "GuideToYourWill.pdf");
        }
    }

    // Download Signing Guide PDF File
    public function downloadSigningGuide(Request $request)
    {
        if ($request->isMethod('get')) {
            $file= public_path(). "/pdf/SigningGuide.pdf";
            return response()->download($file, "SigningGuide.pdf");
        }
    }

    // Download Free Guide PDF File
    public function downloadFreeGuide(Request $request)
    {
        if ($request->isMethod('get')) {
            $file= public_path(). "/pdf/FreeGuide.pdf";
            return response()->download($file, "FreeGuide.pdf");
        }
    }

}
