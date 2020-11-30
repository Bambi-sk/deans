@extends('layouts.appAdmin')
@section('breadcumbText')
Faqs
@endsection
@section('card')
@endsection
@section('cardBody')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/cerf" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/cerf/update" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <input type="hidden" name="id" value="{{$cerf->id}}">
            <div class="form-group">
                <strong>University Logo:</strong>
                <input type="text" value="{{$cerf->uni_logo}}" name="uni_logo" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <strong>University Organization :</strong>
                <input type="text" value="{{$cerf->uni_organization}}" name="uni_organization" class="form-control" placeholder="University Organization">
            </div>
            <div class="form-group">
                <strong>Title :</strong>
                <input type="text"  value="{{$cerf->title}}"  name="title" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <strong>Paragraph :</strong>
                <input type="text" value="{{$cerf->paragraph}}"  name="paragraph" class="form-control" placeholder="Paragraph">
            </div>
            <div class="form-group">
                <strong>Main Part :</strong>
                <input type="text" value="{{$cerf->main_part}}" name="main_part" class="form-control" placeholder="Main part...">
            </div>
            <div class="form-group">
                <strong>License Url :</strong>
                <input type="text" value="{{$cerf->license}}" name="license" class="form-control" placeholder="Main part...">
            </div>
            <div class="form-group">
                <strong>Certification Type :</strong>
                <select name="cerfType">
                    @foreach($cerfType as $ct)
                        @if($ct->id==$cerf->type_cerf_id)
                                <option value="{{$ct->id}}" selected> {{$ct->name}}</option>
                        @else
                                <option value="{{$ct->id}}" > {{$ct->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
       
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
@section('addButton')
<div class="container-fluid">    
   
</div>
@endsection