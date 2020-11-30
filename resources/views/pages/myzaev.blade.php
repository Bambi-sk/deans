@extends('layouts.app')
@section('breadcumbText')
Мои Заявлении
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
                <a class="small text-white stretched-link" href="#">Посмотреть</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('breadcrumb')
<i class="fas fa-pen"></i>
Мои Заявлении 
@endsection
@section('cardBody')
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Номер Заявления</th>
                <th>Название Заявления</th>
                <th>ФИО Студента</th>
                <th>Статус</th> 
                <th>Действия</th>              
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Номер Заявления</th>
                <th>Название Заявления</th>
                <th>ФИО Студента</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>1</td>
                <td>просто так</td>
                <td>Скандер Ботакоз</td>
                <td>Одобрен</td>
                <td><button type="button" class="btn btn-link">Отмменить Заявление</button></td>
            </tr>
            
        </tbody>
    </table>
</div>
@endsection
