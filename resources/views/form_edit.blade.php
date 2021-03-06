@extends('layout')
@section('layout')

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker3.min.css" rel="stylesheet">

    <style>
        .jf-copyright{display: none!important}
    </style>

    <div class="container jf-form" style="overflow: hidden;">


        <form data-licenseKey="" name="jqueryform-c58e31" id="jqueryform-c58e31" action='/form/update' method='post' enctype='multipart/form-data' novalidate autocomplete="on">
            <input type="hidden" name="method" value="validateForm">
            <input type="hidden" id="serverValidationFields" name="serverValidationFields" value="">

            {{csrf_field()}}

            <div class="col-xs-12">
                <div class="form-group required">
                    <br><br>
                    <label class="control-label">Title</label>
                    <select class="form-control" name="type" data-rule-required="true">
                        <option value="">- Select -</option>
                        <option value="Furman Land Surveyors, Inc." @if($form_data->title=="Furman Land Surveyors, Inc.") selected="selected" @endif>Furman Land Surveyors, Inc.</option>
                        <option value="GDI, Inc." @if($form_data->title=="GDI, Inc.") selected="selected" @endif>GDI, Inc.</option>
                    </select>
                </div>
            </div>

            <input type="hidden" name="id" value="{{$form_data->id}}">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                <div class="form-group f32 section" data-fid="f32">
                    <label class="control-label" for="f32">Client Info:</label>
                </div>

                <div class="form-group f6 " data-fid="f6">
                    <label class="control-label" for="f6">Date</label>

                    <div class="input-group date">
                        <input type="text" class="form-control datepicker" id="f6" name="date_entered" value="@if(isset($form_data->date_entered)) {{date('m/d/Y', strtotime($form_data->date_entered))}}@endif"/>
                        <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i></span>
                    </div>
                </div>

                <div class="form-group f29 " data-fid="f29">
                    <label class="control-label" for="f29">Date Needed</label>
                    <div class="input-group date">
                        <input type="text" class="form-control datepicker" id="f29" name="date_needed" value="@if(isset($form_data->date_needed)) {{date('m/d/Y', strtotime($form_data->date_needed))}}@endif" />
                        <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i></span>
                    </div>
                </div>


                <div class="form-group f5 required" data-fid="f5">
                    <label class="control-label" for="f5">Client</label>
                    <input type="text" class="form-control" id="f5" name="client" value="{{$form_data->client}}" data-rule-required="true" />
                </div>

                <div class="form-group f33 section" data-fid="f33">
                    <label class="control-label" for="f33">Job Info:</label>
                </div>

                <div class="form-group f28 " data-fid="f28">
                    <label class="control-label" for="f28">Project No.</label>
                    <input type="text" class="form-control" id="f28" name="project_no" value="{{$form_data->project_no}}" />
                </div>

                <div class="form-group f27 " data-fid="f27">
                    <label class="control-label" for="f27">Map No.</label>
                    <input type="text" class="form-control" id="f27" name="map_no" value="{{$form_data->map_no}}" />
                </div>

                <div class="form-group f34 section" data-fid="f34">
                    <label class="control-label" for="f34">Certify To:</label>
                </div>

                <div class="form-group f1 required" data-fid="f1">
                    <label class="control-label" for="f1">Job Contact</label>

                    <div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="f1" name="contact" value="{{$form_data->contact}}" placeholder="John Smith" data-rule-required="true" />
                    </div>
                </div>

                <div class="form-group f4 required" data-fid="f4">
                    <label class="control-label" for="f4">Phone</label>
                    <div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input type="tel" class="form-control" id="f4" name="phone" value="{{$form_data->phone}}" placeholder="xxx-xxx-xxxx" data-rule-pattern="[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}" data-msg-pattern="Invalid phone number" data-rule-required="true" />
                    </div>
                </div>

                <div class="form-group f3 required" data-fid="f3">
                    <label class="control-label" for="f3">Notes</label>
                    <div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-edit"></i></span>
                        <textarea class="form-control" id="f3" name="notes" rows="3" data-rule-required="true">{{$form_data->notes}}</textarea>
                    </div>
                </div>

                <div class="form-group f8 " data-fid="f8">
                    <label class="control-label" for="f8">Certify To</label>
                    <input type="text" class="form-control" id="f8" name="certify_to" value="{{$form_data->certify_to}}" />
                </div>

                <div class="form-group f9 " data-fid="f9">
                    <label class="control-label" for="f9">Lender</label>
                    <input type="text" class="form-control" id="f9" name="lender" value="{{$form_data->lender}}" />
                </div>

                <div class="form-group f10 " data-fid="f10">
                    <label class="control-label" for="f10">GF#</label>
                    <input type="text" class="form-control" id="f10" name="gf_no" value="{{$form_data->gf_no}}" />
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group f35 section" data-fid="f35">
                    <label class="control-label" for="f35">Job Location:</label>
                </div>

                <div class="form-group gaddress f38 " data-fid="f38">
                    <label class="control-label">Address</label>

                    <div class="form-group addressLine1">
                        <label class="control-label sr-only" for="f38_addressLine1">Address Line1</label>
                        <input type="text" class="form-control gaddress-autocomplete" data-gaddress-types="street_number route" data-gaddress-name="long_name"
                               id="f38_addressLine1" name="address_street" value="{{$form_data->address_street}}" aria-describedby="f38_addressLine1-help-block" placeholder="1234 Main St."
                        />
                        <p id="f38_addressLine1-help-block" class="description sr-only">Street address, P.O. box, company name, c/o</p>
                    </div>


                    <div class="form-group city">
                        <label class="control-label sr-only" for="f38_city">City</label>
                        <input type="text" class="form-control" data-gaddress-types="locality" data-gaddress-name="long_name" id="f38_city" name="city"
                               value="{{$form_data->city}}" aria-describedby="f38_city-help-block" placeholder="City" />
                        <p id="f38_city-help-block" class="description sr-only">City</p>
                    </div>

                    <div class="form-group state">
                        <label class="control-label sr-only" for="f38_state">State / Province / Region</label>
                        <input type="text" class="form-control" data-gaddress-types="administrative_area_level_1" data-gaddress-name="long_name"
                               id="f38_state" name="state" value="{{$form_data->state}}" aria-describedby="f38_state-help-block" placeholder="State / Province / Region"
                        />
                        <p id="f38_state-help-block" class="description sr-only">State / Province / Region</p>
                    </div>

                    <div class="form-group postalCode">
                        <label class="control-label sr-only" for="f38_postalCode">Postal / Zip Code</label>
                        <input type="text" class="form-control" data-gaddress-types="postal_code" data-gaddress-name="long_name" id="f38_postalCode"
                               name="zipcode" value="{{$form_data->zipcode}}" aria-describedby="f38_postalCode-help-block" placeholder="Postal / Zip Code" />
                        <p id="f38_postalCode-help-block" class="description sr-only">Postal / Zip Code</p>
                    </div>

                    <div class="form-group country">
                        <label class="control-label sr-only" for="f38_country">Country</label>
                        <input type="text" class="form-control" data-gaddress-types="country" data-gaddress-name="long_name" id="f38_country" name="country"
                               value="{{$form_data->country}}" aria-describedby="f38_country-help-block" placeholder="Country" />
                        <p id="f38_country-help-block" class="description sr-only">Country</p>
                    </div>
                    <div class='mq-indicator'></div>
                </div>

                <div class="form-group f36 section" data-fid="f36">
                    <label class="control-label" for="f36">Legal:</label>
                </div>

                <div class="form-group f15 required" data-fid="f15">
                    <label class="control-label" for="f15">Survey Type</label>
                    <select class="form-control" id="f15" name="survey_type" data-rule-required="true">
                        <option selected value="">- Select -</option>
                        <option @if($form_data->survey_type=='prad') selected @endif value="prad">PRAD</option>
                        <option @if($form_data->survey_type=='rural') selected @endif value="rural">RURAL</option>
                        <option @if($form_data->survey_type=='plss') selected @endif value="plss">PLSS</option>
                    </select>
                </div>

                <!-- ************************ Developer @divinepnc.cpom   ***************************** -->

                <div class="form-group f16 required" data-fid="f16">
                    <label class="control-label" for="f16">County</label>
                    <select class="form-control" id="f16" name="county">
                        <option value="">- Select -</option>

                        @foreach($county as $cnt)
                            @if($cnt->county!=NULL)
                                @if($form_data->county==$cnt->county)
                                    <option value="{{$cnt->county}}" selected>{{$cnt->county}}</option>
                                @else 
                                    <option value="{{$cnt->county}}">{{$cnt->county}}</option>
                                @endif
                            @endif
                            
                        @endforeach
                        <!-- <option selected value="{{$form_data->county}}">{{$form_data->county}}</option> -->
                    </select>
                </div>

                <div class="form-group f17 jf-hide" data-fid="f17">
                    <label class="control-label" for="f17">Subdivision</label>
                    <select class="form-control" id="f17" name="subdivision">
                        <option value="">- Select -</option>

                        @if(count($subdivision_list)>0)
                            @foreach($subdivision_list as $sbd)

                                @if($form_data->subdivision==$sbd->subdivisio)
                                    <option  value="{{$sbd->subdivisio}}" selected>{{$sbd->subdivisio}}</option>
                                @else
                                    <option  value="{{$sbd->subdivisio}}">{{$sbd->subdivisio}}</option>
                                @endif
                                    
                            @endforeach
                        @else 
                             <option selected value="{{$form_data->subdivision}}">{{$form_data->subdivision}}</option>     
                        @endif  

                    </select>
                </div>

                <div class="form-group f18 jf-hide" data-fid="f18">
                    <label class="control-label" for="f18">Unit</label>
                    <select class="form-control" id="f18" name="unit">
                        <option value="">- Select -</option>

                        @if(count($unit_list)>0)
                            @foreach($unit_list as $unit)

                                @if($form_data->unit==$unit->unit_numbe)
                                    <option  value="{{$sbd->unit_numbe}}" selected>{{$unit->unit_numbe}}</option>
                                @else
                                    <option  value="{{$sbd->unit_numbe}}">{{$unit->unit_numbe}}</option>
                                @endif
                                    
                            @endforeach

                        @else
                            <option selected value="{{$form_data->unit}}">{{$form_data->unit}}</option>                            
                        @endif
                    </select>
                </div>

                <div class="form-group f19 jf-hide" data-fid="f19">
                    <label class="control-label" for="f19">Sub Block</label>
                    <select class="form-control" id="f19" name="sub_block">
                        <option value="">- Select -</option>

                        @if(count($block_list)>0)
                            @foreach($block_list as $block)

                                @if($form_data->sub_block==$block->block_numb)
                                    <option  value="{{$block->block_numb}}" selected>{{$block->block_numb}}</option>
                                @else
                                    <option  value="{{$block->block_numb}}">{{$block->block_numb}}</option>
                                @endif
                                    
                            @endforeach

                        @else
                            <option selected value="{{$form_data->sub_block}}">{{$form_data->sub_block}}</option>                            
                        @endif
                       
                    </select>
                </div>

                <div class="form-group f20 jf-hide" data-fid="f20">
                    <label class="control-label" for="f20">Lot</label>
                    <select class="form-control" id="f20" name="lot">
                        <option value="">- Select -</option>
                        @if(count($lot_list)>0)
                            @foreach($lot_list as $lot)

                                @if($form_data->lot==$lot->lot_number)
                                    <option  value="{{$lot->lot_number}}" selected>{{$lot->lot_number}}</option>
                                @else
                                    <option  value="{{$lot->lot_number}}">{{$lot->lot_number}}</option>
                                @endif
                                    
                            @endforeach

                        @else
                            <option selected value="{{$form_data->lot}}">{{$form_data->lot}}</option>                            
                        @endif
                      
                    </select>
                </div>

                <div class="form-group f21 required jf-hide" data-fid="f21">
                    <label class="control-label" for="f21">Survey</label>
                    <select class="form-control" id="f21" name="survey" data-rule-required="true">
                        <option value="">- Select -</option>

                        @if(count($survey_list)>0)
                            @foreach($survey_list as $survey)

                                @if($form_data->survey==$survey->l1surnam)
                                    <option  value="{{$survey->l1surnam}}" selected>{{$survey->l1surnam}}</option>
                                @else
                                    <option value="{{$survey->l1surnam}}">{{$survey->l1surnam}}</option>
                                @endif
                                    
                            @endforeach
                        @else
                            <option selected value="{{$form_data->survey}}">{{$form_data->survey}}</option>                            
                        @endif

                    </select>
                </div>

                <div class="form-group f23 required jf-hide" data-fid="f23">
                    <label class="control-label" for="f23">Block</label>
                    <select class="form-control" id="f23" name="rural_block" data-rule-required="true">
                        <option value="">- Select -</option>

                          @if(count($l2block_list)>0)
                            @foreach($l2block_list as $l2block)

                                @if($form_data->rural_block==$l2block->l2block)
                                    <option  value="{{$l2block->l2block}}" selected>{{$l2block->l2block}}</option>
                                @else
                                    <option  value="{{$l2block->l2block}}">{{$l2block->l2block}}</option>
                                @endif
                                    
                            @endforeach

                        @else
                            <option selected value="{{$form_data->rural_block}}">{{$form_data->rural_block}}</option>                            
                        @endif 
                        <!-- <option selected value="{{$form_data->rural_block}}">{{$form_data->rural_block}}</option> -->
                    </select>
                </div>

                <div class="form-group f22 required jf-hide" data-fid="f22">
                    <label class="control-label" for="f22">Section</label>
                    <select class="form-control" id="f22" name="rural_section" data-rule-required="true">
                        <option value="">- Select -</option>

                      @if(count($l3surnum_list)>0)
                            @foreach($l3surnum_list as $l3surnum)

                                @if($form_data->rural_section==$l3surnum->l3surnum)
                                    <option  value="{{$l3surnum->l3surnum}}" selected>{{$l3surnum->l3surnum}}</option>
                                @else
                                    <option  value="{{$l3surnum->l3surnum}}">{{$l3surnum->l3surnum}}</option>
                                @endif
                                    
                            @endforeach

                        @else
                            <option selected value="{{$form_data->rural_section}}">{{$form_data->rural_section}}</option>                            
                        @endif 
                       <!--  <option selected value="{{$form_data->rural_section}}">{{$form_data->rural_section}}</option> -->
                    </select>
                </div>

                <div class="form-group f24 required  jf-hide" data-fid="f24">
                    <label class="control-label" for="f24">Meridian</label>
                    <select class="form-control" id="f24" name="meridian" data-rule-required="true">
                        <option value="">- Select -</option>

                        @if(count($meridian_list)>0)
                            @foreach($meridian_list as $meridian)

                                @if($form_data->meridian==$meridian->meridian)
                                    <option  value="{{$meridian->meridian}}" selected>{{$meridian->meridian}}</option>
                                @else
                                    <option  value="{{$meridian->meridian}}">{{$meridian->meridian}}</option>
                                @endif
                                    
                            @endforeach

                        @else
                            <option selected value="{{$form_data->meridian}}">{{$form_data->meridian}}</option>                            
                        @endif

                        <!-- <option selected value="{{$form_data->meridian}}">{{$form_data->meridian}}</option> -->
                    </select>
                </div>

                <div class="form-group f25 required jf-hide" data-fid="f25">
                    <label class="control-label" for="f25">Township_Range</label>
                    <select class="form-control" id="f25" name="t_r" data-rule-required="true">
                        <option value="">- Select -</option>

                        @if(count($t_r_list)>0)
                            @foreach($t_r_list as $t_r)

                                @if($form_data->t_r==$t_r->meridian)
                                    <option  value="{{$t_r->t_r}}" selected>{{$t_r->t_r}}</option>
                                @else
                                    <option  value="{{$t_r->t_r}}">{{$t_r->t_r}}</option>
                                @endif
                                    
                            @endforeach

                        @else
                            <option selected value="{{$form_data->t_r}}">{{$form_data->t_r}}</option>                            
                        @endif

                        <!-- <option selected value="{{$form_data->t_r}}">{{$form_data->t_r}}</option> -->
                    </select>
                </div>

                <div class="form-group f26 required jf-hide" data-fid="f26">
                    <label class="control-label" for="f26">Section</label>
                    <select class="form-control" id="f26" name="plss_section" data-rule-required="true">
                        <option value="">- Select -</option>

                        @if(count($section_list)>0)
                            @foreach($section_list as $section)

                                @if($form_data->plss_section==$section->section)
                                    <option  value="{{$section->section}}" selected>{{$section->section}}</option>
                                @else
                                    <option  value="{{$section->section}}">{{$section->section}}</option>
                                @endif
                                    
                            @endforeach

                        @else
                            <option selected value="{{$form_data->plss_section}}">{{$form_data->plss_section}}</option>                            
                        @endif

                        <!-- <option selected value="{{$form_data->plss_section}}">{{$form_data->plss_section}}</option> -->
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group f37 section" data-fid="f37">
                    <label class="control-label" for="f37">Folder Path</label>
                </div>

                <div class="form-group f30 required" data-fid="f30">
                    <label class="control-label" for="f30">Folder Path</label>
                    <input type="text" class="form-control" id="f30" name="folder_path" value="{{$form_data->folder_path}}" data-rule-required="true" />
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group submit f0 " data-fid="f0" style="position: relative;">
                    <label class="control-label sr-only" for="f0" style="display: block;">Submit Button</label>

                    <div class="progress" style="display: none; z-index: -1; position: absolute;">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:100%">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="z-index: 1;">
                        Submit
                    </button>
                </div>
                <div class="clearfix"></div>

                <div class="submit">
                    <p class="error bg-warning" style="display:none;">
                        Please check the required fields. </p>
                </div>

                <div class="clearfix"></div>
            </div>
        </form>


        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <a href="/download/{{$form_data->id}}">
                <button id="print_button" class="btn btn-warning btn-lg" style="z-index: 1;">
                    Print Work Order
                </button>
            </a>
        </div>
    </div>


    <script type="text/javascript" src="/js_template/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js_template/plugins/jquery/jquery-ui.min.js"></script>

    <script>
        $(document).on('click', '#print_button', function(){
            setTimeout(function(){
                var id =this.id.replace(/\D+/g, '');
                $(location).attr('href', '/download/'+id);
            }, 3000);
        });
    </script>

@stop