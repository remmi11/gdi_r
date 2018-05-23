@extends('layout')
@section('layout')

    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-body table-responsive">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th style="width:5%;">ID</th>
                                <th style="width:10%">Form Type</th>
                                <th style="width:5%">Job Number</th>
                                <th style="width:5%">Client</th>
                                <th style="width:10%">Property Address</th>
                                <th style="width:5%">County</th>
                                <th style="width:5%">Survey</th>
                                <th style="width:5%">Block</th>
                                <th style="width:5%">Section</th>
                                <th style="width:5%">Subdivision</th>
                                <th style="width:5%">Unit</th>
                                <th style="width:5%">Block</th>
                                <th style="width:10%">Lot</th>
                                <th style="width:10%">Meridian</th>
                                <th style="width:10%">Township Range</th>
                                <th style="width:5%">Section</th>
                                
                                <th style=" width:220px" data-sorter="false"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($forms as $form)
                            <tr>
                                <td style="word-wrap: break-word;">{{$form->id}}</td>
                                <td style="word-wrap: break-word;">{{$form->survey_type}}</td>
                                <td style="word-wrap: break-word;">{{$form->project_no}}</td>
                                <td style="word-wrap: break-word;">{{$form->client}}</td>
                                <td style="word-wrap: break-word;">{{$form->address_street}}</td>
                                <td style="word-wrap: break-word;">{{$form->county}}</td>
                                <td style="word-wrap: break-word;">{{$form->survey}}</td>
                                <td style="word-wrap: break-word;">{{$form->rural_block}}</td>
                                <td style="word-wrap: break-word;">{{$form->rural_section}}</td>
                                <td style="word-wrap: break-word;">{{$form->subdivision}}</td>
                                <td style="word-wrap: break-word;">{{$form->unit}}</td>
                                <td style="word-wrap: break-word;">{{$form->sub_block}}</td>
                                <td style="word-wrap: break-word;">{{$form->lot}}</td>
                                <td style="word-wrap: break-word;">{{$form->meridian}}</td>
                                <td style="word-wrap: break-word;">{{$form->t_r}}</td>
                                <td style="word-wrap: break-word;">{{$form->plss_section}}</td>
                                
                                <td style="text-align:center; width:120px">
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-condensed edit_form" title="Edit" id="edit_form_{{$form->id}}"><i class="fa fa-pencil"></i></button></a>
                                        <button class="btn btn-info btn-condensed review_form" title="Review" id="review_form_{{$form->id}}"><i class="fa fa-eye"></i></button></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        td {
            padding:2px 5px 2px 10px !important;
            vertical-align: middle!important;
            margin:0 !important;
        }
        th {
            text-align: left!important;
        }
    </style>

    <script type="text/javascript" src="/js_template/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js_template/plugins/jquery/jquery-ui.min.js"></script>

    <script>
        $( document ).ready(function() {
            $('.datatable').dataTable( {
                "pageLength": 25
            } );
        });

        $(document).on('click', '.review_form', function(){
            var id =this.id.replace(/\D+/g, '');
            $(location).attr('href', '/view/'+id)
        });

        $(document).on('click', '.edit_form', function(){
            var id =this.id.replace(/\D+/g, '');
            $(location).attr('href', '/form/'+id)
        });
    </script>

@stop