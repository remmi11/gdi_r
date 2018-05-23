<html>
<head>

    <style>
        .col6 {width:165px;padding-left:10px; float:left; margin:0; }
        .title {font-size:25px; font-weight: bold; text-align: center; clear: both; height:60px;}
        .subtitle {height:15px; width:100%; background-color: lightgrey; padding:5px 10px 5px 10px; clear:both; margin-top:80px;}

        td {width:50%}
        table, tr {width:100%; }
        .custom_row {min-height:30px; line-height: 30px; width:350px}
        .clearfix{clear:both}
    </style>

</head>

<body style="margin:0; padding: 0;">

    <div style="height:1000px; width:700px;">

        <div class="title">
            {{$form_data->title}}
        </div>

        <div style="position: absolute;top: 50px;left: 0;width:350px; height:700px;">

            <div style="text-align: center; ">Date Created {{date("m/d/Y", strtotime($form_data->date_entered))}}</div>

            <div class="subtitle">Client Info</div>

            <div class="custom_row">
                <div class="col6">Client</div>
                <div class="col6">{{$form_data->client}}</div>
                <div class="clearfix"></div>
                            </div>

            <div class="subtitle">Client Info</div>

            <div class="custom_row">
                <div class="col6">Job Contact</div>
                <div class="col6" style="text-align: left">{{$form_data->contact}}</div>
                <div class="clearfix"></div>
            </div>

            <div class="custom_row">
                <div class="col6">Job Phone</div>
                <div class="col6" style="text-align: left">{{$form_data->phone}}</div>
                <div class="clearfix"></div>
            </div>

            <div class="custom_row">
                <div class="col6">Job City</div>
                <div class="col6" style="text-align: left">{{$form_data->city}}</div>
                <div class="clearfix"></div>
            </div>

            <div class="custom_row">
                <div class="col6">JobSt: {{$form_data->state}}</div>
                <div class="col6" style="text-align: left">JobZip: {{$form_data->zipcode}}</div>
                <div class="clearfix"></div>
            </div>

            <div class="subtitle">Notes</div>

            <div class="custom_row" style="padding-left:10px">
                {{$form_data->notes}}
            </div>

            <div class="subtitle">Certify To:</div>

            <div class="custom_row">
                <div class="col6">Certify To</div>
                <div class="col6" style="text-align: left">{{$form_data->certify_to}}</div>
                <div class="clearfix"></div>
            </div>

            <div class="custom_row">
                <div class="col6">Lender</div>
                <div class="col6" style="text-align: left">{{$form_data->lender}}</div>
                <div class="clearfix"></div>
            </div>

            <div class="custom_row">
                <div class="col6">Gf #</div>
                <div class="col6" style="text-align: left">{{$form_data->gf_no}}</div>
                <div class="clearfix"></div>
            </div>

        </div>

        <div style="position: absolute;top: 50px;right: 0;width:350px; height:700px;">

            <div style="padding-left:50px ">

            <div style="font-weight:bold; text-decoration: underline; margin-bottom:15px">Survey Work Order</div>

                <div class="custom_row">
                    <div style="width:120px;float:left; height:20px; margin:0;">Project #</div>
                    <div style="width:160px; float:left; height:20px; margin:0;">{{$form_data->project_no}}</div>
                    <div class="clearfix"></div>
                </div>

                <!--<div class="custom_row">
                    <div style="width:120px;float:left; height:20px; margin:0;">File No.</div>
                    <div style="width:160px; float:left; height:20px; margin:0;">@if(isset($form_data->date_entered)){{date("d/m/Y", strtotime($form_data->date_entered))}}@endif</div>
                    <div class="clearfix"></div>
                </div> -->

                <div class="custom_row">
                    <div style="width:120px;float:left; height:20px; margin:0;">Date Needed</div>
                    <div style="width:160px; float:left; height:20px; margin:0;">@if(isset($form_data->date_needed)){{date("m/d/Y", strtotime($form_data->date_needed))}}@endif</div>
                    <div class="clearfix"></div>
                </div>

                <div class="custom_row">
                    <div style="width:120px;float:left; height:20px; margin:0;">Requested By</div>
                    <div style="width:160px; float:left; height:20px; margin:0;">{{$form_data->contact}}</div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="subtitle" style="clear: both">Job Location</div>
            <div class="custom_row">
                <div class="col6">Address</div>
                <div class="col6" style="text-align: left">{{$form_data->address_street}}</div>
                <div class="clearfix"></div>
            </div>

            <div class="custom_row">
                <div class="col6">City</div>
                <div class="col6" style="text-align: left">{{$form_data->city}}</div>
                <div class="clearfix"></div>
            </div>
            <div class="custom_row">
                <div class="col6">State / Province / Region</div>
                <div class="col6">{{$form_data->state}}</div>
                <div class="clearfix"></div>
            </div>
            <div class="custom_row">
                <div class="col6">Postal / Zip Code</div>
                <div class="col6">{{$form_data->zipcode}}</div>
                <div class="clearfix"></div>
            </div>
            
            <div class="subtitle" style="clear: both">Legal</div>

            <div class="custom_row">
                <div class="col6">County</div>
                <div class="col6" style="text-align: left">{{$form_data->county}}</div>
                <div class="clearfix"></div>
            </div>

            @if(isset($form_data->subdivision))
                <div class="custom_row">
                    <div class="col6">Subdivision </div>
                    <div class="col6" style="text-align: left">{{$form_data->subdivision}}</div>
                    <div class="clearfix"></div>
                </div>
            @endif

            @if(isset($form_data->unit))
                <div class="custom_row">
                    <div class="col6">Unit</div>
                    <div class="col6" style="text-align: left">{{$form_data->unit}}</div>
                    <div class="clearfix"></div>
                </div>
            @endif

            @if(isset($form_data->sub_block))
                <div class="custom_row">
                    <div class="col6">Block</div>
                    <div class="col6" style="text-align: left">{{$form_data->sub_block}}</div>
                    <div class="clearfix"></div>
                </div>
            @endif

            @if(isset($form_data->lot))
            <div class="custom_row">
                <div class="col6">Lot </div>
                <div class="col6" style="text-align: left">{{$form_data->lot}}</div>
                <div class="clearfix"></div>
            </div>
            @endif

            @if(isset($form_data->survey))
                <div class="custom_row">
                    <div class="col6">Survey</div>
                    <div class="col6" style="text-align: left">{{$form_data->survey}}</div>
                    <div class="clearfix"></div>
                </div>
            @endif

            @if(isset($form_data->rural_block))
                <div class="custom_row">
                    <div class="col6">Block</div>
                    <div class="col6" style="text-align: left">{{$form_data->rural_block}}</div>
                    <div class="clearfix"></div>
                </div>
            @endif

            @if(isset($form_data->rural_section))
            <div class="custom_row">
                <div class="col6">Section</div>
                <div class="col6" style="text-align: left">{{$form_data->rural_section}}</div>
                <div class="clearfix"></div>

                
            </div>
            @endif

            @if(isset($form_data->meridian))
                <div class="custom_row">
                    <div class="col6">Meridian</div>
                    <div class="col6" style="text-align: left">{{$form_data->meridian}}</div>
                    <div class="clearfix"></div>
                </div>
            @endif

            @if(isset($form_data->t_r))
                <div class="custom_row">
                    <div class="col6">Twnshp/Range</div>
                    <div class="col6" style="text-align: left">{{$form_data->t_r}}</div>
                    <div class="clearfix"></div>
                </div>
            @endif

            @if(isset($form_data->plss_section))
                <div class="custom_row">
                    <div class="col6">Section</div>
                    <div class="col6" style="text-align: left">{{$form_data->plss_section}}</div>
                    <div class="clearfix"></div>
                </div>
            @endif

        </div>
    </div>

</body>
</html>