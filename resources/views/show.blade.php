@extends('layout')
@section('layout')

    <style>
        .accordion_header{height: 50px!important; background: #3d4e5d!important; line-height: 30px!important; font-size:17px!important; color:white!important}
        .sub_title{font-size:14px; margin-bottom:5px; font-weight: 500!important}
        .error_input {text-align: left!important;  margin-top:5px;  margin-bottom:5px; color:red; font-size: 12px!important; height:10px!important; width:100%}
    </style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        .c-card {width:100%; border:2px solid black}
        td {padding:8px!important}
        .panel-body { padding: 5px!important; }
        .table {
            margin-bottom: 5px!important;
        }
    </style>

    <div class="page-title">
        <br>
        <h2> Update User data </span> </h2>
    </div>

    <div class="page-content-wrap">
        <form action="/user/update" id="customer_show_form" method="post">
            {{csrf_field()}}
            <input name="id" type="hidden" value="{{$user_info->id}}">
            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="min-height:200px;">
                    <br><br><br>

                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label class="sub_title">Email</label>
                            <input class="form-control" placeholder="" type="text" name="email" value="@if(old('email')){{old('email')}}@else{{$user_info->email}}@endif">
                            <label class="error_input" for="email">{{$errors->first('email')}}</label>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label class="sub_title">Password</label>
                            <input class="form-control" placeholder="" type="text" name="password" value="">
                            <label class="error_input" for="email">{{$errors->first('email')}}</label>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label class="sub_title"> </label>
                            <button id="update_user" class="btn btn-success" type="submit" style="margin-top:24px; width:40%; float:left">Save</button>
                            <a href="/user/delete/{{$user_info->id}}"><button id="update_user" class="btn btn-danger" type="button" style="margin-top:24px; width:40%; float:left">Delete</button></a>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </form>
    </div>

@stop