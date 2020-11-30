@extends('layouts.appAdmin')
@section('breadcrumbText')
Мои справки
@endsection
@section('card')
<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Справки</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/myspravki">Посмотреть</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Заявлении</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/myzaev">Посмотреть</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Success Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/">Посмотреть</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('breadcrumb')
<i class="fas fa-pen"></i>
 Мои Справки
@endsection
@section('cardBody')
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Номер Справки</th>
                <th>Название Справки</th>
                <th>ФИО Студента</th>
                <th>Статус</th>
                <th>Действия</th>
               
            </tr>
        </thead>
        <tfoot>
            <tr>
                
                <th>Название Справки</th>
                <th>Название Справки</th>
                <th>ФИО Студента</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($reqcer as $r)
                
           
            <tr>
                
                @foreach ($cerf as $c)
                    @if ($c->id==$r->cert_id)
                    <td>{{$c->title}}</td>
                    @foreach ($cerftype as $cf)
                        @if ($cf->id==$c->type_cerf_id)
                            <td>{{$cf->name}}</td>
                        @endif
                    @endforeach
                    @endif
                @endforeach
                
                <td>{{$student->firstname }}  {{$student->lastname }}</td>
                <td>
                     @if ($r->is_approved==false)
                         {{ 'in process' }}
                    @else
                    {{ 'completed' }}
                     @endif   
                </td>
                <td>
                    @if ($r->is_approved==false)
                   
                    @else
                    <button type="button" class="btn btn-link">Загрузить</button>
                    @endif   
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection
