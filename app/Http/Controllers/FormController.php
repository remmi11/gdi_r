<?php

namespace App\Http\Controllers;

use App\Http\Models\Forms;
use App\Http\Models\MasterGeom;
use App\Http\Models\PaymentOptions;
use App\Http\Models\SiteCoupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{

    public function create(Request $request)
    {

//        $validator = Validator::make($request->all(), [
//            'contact' => 'required',
//            'phone' => 'required',
//            'notes' => 'required',
//            'survey_type' => 'required',
//            'county' => 'required',
//        ]);
//
//        if ($validator->fails()) return redirect('/form')->withErrors($validator)->withInput();

        $date_entered='1970-01-01';
        $date_needed='1970-01-01';

        if($request->input('date_entered')) $date_entered=date("Y-m-d", strtotime($request->input('date_entered')));
        if($request->input('date_needed')) $date_needed=date("Y-m-d", strtotime($request->input('date_needed')));

        $form = new Forms();
        $form->title=$request->input('title');
        $form->user_id=Auth::user()->id;
        $form->date_entered=$newDate =$date_entered;
        $form->date_needed=$date_needed;
        $form->client=$request->input('client');
        $form->project_no=$request->input('project_no');
        $form->map_no=$request->input('map_no');
        $form->contact=$request->input('contact');
        $form->phone=$request->input('phone');
        $form->notes=$request->input('notes');
        $form->certify_to=$request->input('certify_to');
        $form->lender=$request->input('lender');
        $form->gf_no=$request->input('gf_no');
        $form->address_street=$request->input('address_street');
        $form->city=$request->input('city');
        $form->zipcode=$request->input('zipcode');
        $form->state=$request->input('state');
        $form->country=$request->input('country');
        $form->survey_type=$request->input('survey_type');
        $form->county=$request->input('county');
        $form->subdivision=$request->input('subdivision');
        $form->unit=$request->input('unit');
        $form->sub_block=$request->input('sub_block');
        $form->lot=$request->input('lot');
        $form->survey=$request->input('survey');
        $form->rural_block=$request->input('rural_block');
        $form->rural_section=$request->input('rural_section');
        $form->meridian=$request->input('meridian');
        $form->t_r=$request->input('t_r');
        $form->plss_section=$request->input('plss_section');
        $form->folder_path=$request->input('folder_path');
        $form->save();

        return 'Form Saved';
        return view('form');
    }

    public function update(Request $request)
    {

//        $validator = Validator::make($request->all(), [
//            'contact' => 'required',
//            'phone' => 'required',
//            'notes' => 'required',
//            'survey_type' => 'required',
//            'county' => 'required',
//        ]);
//
//        if ($validator->fails()) return redirect('/form')->withErrors($validator)->withInput();

        $date_entered='1970-01-01';
        $date_needed='1970-01-01';

        if($request->input('date_entered')) $date_entered=date("Y-m-d", strtotime($request->input('date_entered')));
        if($request->input('date_needed')) $date_needed=date("Y-m-d", strtotime($request->input('date_needed')));

        $form = Forms::find($request->input('id'));
        $form->user_id=Auth::user()->id;
        $form->title=$request->input('title');
        $form->date_entered=$newDate =$date_entered;
        $form->date_needed=$date_needed;
        $form->client=$request->input('client');
        $form->project_no=$request->input('project_no');
        $form->map_no=$request->input('map_no');
        $form->contact=$request->input('contact');
        $form->phone=$request->input('phone');
        $form->notes=$request->input('notes');
        $form->certify_to=$request->input('certify_to');
        $form->lender=$request->input('lender');
        $form->gf_no=$request->input('gf_no');
        $form->address_street=$request->input('address_street');
        $form->city=$request->input('city');
        $form->zipcode=$request->input('zipcode');
        $form->state=$request->input('state');
        $form->country=$request->input('country');
        $form->survey_type=$request->input('survey_type');
        $form->county=$request->input('county');
        $form->subdivision=$request->input('subdivision');
        $form->unit=$request->input('unit');
        $form->sub_block=$request->input('sub_block');
        $form->lot=$request->input('lot');
        $form->survey=$request->input('survey');
        $form->rural_block=$request->input('rural_block');
        $form->rural_section=$request->input('rural_section');
        $form->meridian=$request->input('meridian');
        $form->t_r=$request->input('t_r');
        $form->plss_section=$request->input('plss_section');
        $form->folder_path=$request->input('folder_path');
        $form->save();

        return 'Form Updated';
        return view('form');
    }

    public function lists (Request $request){
        $forms = Forms::orderBy('id')->get();
        return view('lists')->with(compact(['forms']));
    }

    public function edit(Request $request,$id)
    {
        /**************** Developer @divinepnc.com - Start***********************/
        $subdivision_list=array();
        $unit_list=array();
        $block_list=array();
        $lot_list=array();
        $survey_list=array();
        $l2block_list=array();
        $l3surnum_list=array();
        $meridian_list=array();
        $t_r_list=array();
        $section_list=array();
        
        $form_data = Forms::find($id);

        $join_type=$form_data->survey_type;
        $frm_county=$form_data->county;

        if($join_type=='prad')
        {
            $frm_subdivision=$form_data->subdivision;
            $frm_unit=$form_data->unit;
            $frm_sub_block=$form_data->sub_block;

            $subdivision_list = MasterGeom::where('join_type','prad')->where('county',$frm_county)->select('subdivisio')->OrderBy('subdivisio')->distinct()->get();

            $unit_list = MasterGeom::where('join_type','prad')->where('county',$frm_county)->where('subdivisio',$frm_subdivision)->select('unit_numbe')->OrderBy('unit_numbe')->distinct()->get();

            $block_list = MasterGeom::where('join_type','prad')->where('county',$frm_county)->where('subdivisio',$frm_subdivision)->where('unit_numbe',$frm_unit)->select('block_numb')->OrderBy('block_numb')->distinct()->get();

            $lot_list = MasterGeom::where('join_type','prad')->where('county',$frm_county)->where('subdivisio',$frm_subdivision)->where('unit_numbe',$frm_unit)->where('block_numb',$frm_sub_block)->select('lot_number')->OrderBy('lot_number')->distinct()->get();
        }

        if($join_type=='rural')
        {
            $frm_survey=$form_data->survey;
            $frm_rural_block=$form_data->rural_block;
                
            $survey_list = MasterGeom::where('join_type','rural')->where('county',$frm_county)->select('l1surnam')->OrderBy('l1surnam')->distinct()->get();

            $l2block_list = MasterGeom::where('join_type','rural')->where('county',$frm_county)->where('l1surnam',$frm_survey)->select('l2block')->OrderBy('l2block')->distinct()->get();

            $l3surnum_list = MasterGeom::where('join_type','rural')->where('county',$frm_county)->where('l1surnam',$frm_survey)->where('l2block',$frm_rural_block)->select('l3surnum')->OrderBy('l3surnum')->distinct()->get();
           
        }
              
        if($join_type=='plss')
        {
            $frm_meridian=$form_data->meridian;
            $frm_t_r=$form_data->t_r;
           
            $meridian_list = MasterGeom::where('join_type','plss')->where('county',$frm_county)->select('meridian')->OrderBy('meridian')->distinct()->get();

          $t_r_list = MasterGeom::where('join_type','plss')->where('county',$frm_county)->where('meridian',$frm_meridian)->select('t_r')->OrderBy('t_r')->distinct()->get();

           $section_list = MasterGeom::where('join_type','plss')->where('county',$frm_county)->where('meridian',$frm_meridian)->where('t_r',$frm_t_r)->select('section')->OrderBy('section')->distinct()->get();
        }


        $county= MasterGeom::where('join_type',$join_type)->select('county')->OrderBy('county')->distinct()->get();

        return view('form_edit')->with(compact(['form_data']))
                                ->with('county',$county)
                                ->with('subdivision_list',$subdivision_list)
                                ->with('unit_list',$unit_list)
                                ->with('block_list',$block_list)
                                ->with('lot_list',$lot_list)
                                ->with('survey_list',$survey_list)
                                ->with('l2block_list',$l2block_list)
                                ->with('l3surnum_list',$l3surnum_list)
                                ->with('meridian_list',$meridian_list)
                                ->with('t_r_list',$t_r_list)
                                ->with('section_list',$section_list);


             /**************** Developer @divinepnc.com - End***********************/   
        //$form_data = Forms::find($id);
        //return view('form_edit')->with(compact(['form_data']));
    }

    public function form(Request $request)
    {
        return view('form');
    }


    public function getlastid(Request $request)
    {
        $id = Forms::orderBy('updated_at','desc')->first()->id;
        return $id;
    }
}
