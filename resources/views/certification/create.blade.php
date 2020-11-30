@extends('layouts.appAdmin')
@section('breadcumbText')
Certification Type
@endsection
@section('card')

@endsection
@section('cardBody')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Certification type</h2>
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
    <form action="/cerf" method="POST" >
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>University Logo:</strong>
                    <input type="text" name="uni_logo" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                    <strong>University Organization :</strong>
                    <input type="text" name="uni_organization" class="form-control" placeholder="University Organization">
                </div>
                <div class="form-group">
                    <strong>Title :</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <strong>Paragraph :</strong>
                    <input type="text" name="paragraph" class="form-control" placeholder="Paragraph">
                </div>
                <div class="form-group">
                    <strong>Main Part :</strong>
                    <input type="text" name="main_part" class="form-control" placeholder="Main part...">
                </div>
                <div class="form-group">
                    <strong>Certification type :</strong>
                    <select name="cerfType_id" >
                        @if(count($cerfType)!=0)
                            @foreach($cerfType as $ct)
                            <option value="{{$ct->id}}"> {{$ct->name}} </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <strong>License url :</strong>
                    <input type="text" name="license" class="form-control" placeholder="Main part...">
                </div>
            </div>
           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
@section('addButton')
@endsection