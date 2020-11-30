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
            <a class="btn btn-primary" href="/cerfType" title="Go back"> <i class="fas fa-backward "></i> </a>
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

<form action="/cerfType/update" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <input type="hidden" name="id" value="{{$cerfType->id}}">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $cerfType->name }}" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Period date:</strong>
                <input type="number" min='0' class="form-control" style="height:50px" name="period_date" value="{{ $cerfType->period_date }}">
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