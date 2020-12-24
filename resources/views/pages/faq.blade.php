@extends('layouts.app')
@section('breadcumbText')
FAQS 
@endsection
@section('card')
@endsection
@section('breadcrumb')
<i class="fa fa-question-circle" ></i>
FAQS 
@endsection
@section('cardBody')
<div class="container">
    <div class="" id="accordion">
         <div class="faqHeader">General questions</div>
         @foreach ($faqs as $f)
         <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{$f->question}}</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="card-block">
                   <p>{{$f->answer}}</p>
                </div>
            </div>
        </div>
         @endforeach
       
    </div>
 </div>
@endsection
