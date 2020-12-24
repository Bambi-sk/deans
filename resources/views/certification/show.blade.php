
@extends('layouts.appAdmin')
@section('breadcumbText')
Certification
@endsection
@section('card')

@endsection
@section('cardBody')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/cerf" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>University Logo:</strong>
                {{$cerfType->uni_logo}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>University Organization:</strong>
                {{$cerfType->uni_organization }}
            </div>
            <div class="form-group">
                <strong>Dean Name:</strong>
                {{$cerfType->paragraph }}
            </div>
            <div class="form-group">
                <strong>Paragraph:</strong>
                {{$cerfType->title }}
            </div>
            <div class="form-group">
                <strong>Main part:</strong>
                {{$cerfType->main_part }}
            </div>
            <div class="form-group">
                <strong>License:</strong>
                {{$cerfType->license }}
            </div>
           

        </div>
    </div>
@endsection
@section('addButton')
@endsection