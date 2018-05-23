@extends('layout')
@section('layout')

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
    </script>

    <div class="page-title">
        <h2><span class="fa fa-users"></span> Users</h2>

        <a href="/user/create"><button id="update_user" class="btn btn-success" type="submit" style="width:10%; float:right">Create</button></a>
    </div>


    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">

                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th style="width:90%;">Email</th>
                                    <th style="width:10%" data-sorter="false">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td >{{$user->email}}</td>
                                    <td style="text-align:left">
                                        <div class="btn-group">
                                            <a href="/user/{{$user->id}}"> <button class="btn btn-default btn-condensed">Edit</button></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END DEFAULT DATATABLE -->

            </div>
        </div>

    </div>

@stop