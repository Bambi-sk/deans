
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
            
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('faq.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Question:</strong>
                {{ $faq->question }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Answer:</strong>
                {{$faq->answer }}
            </div>
        </div>
    </div>
@endsection
@section('addButton')
@endsection