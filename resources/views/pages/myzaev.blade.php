@extends('layouts.app')
@section('breadcumbText')
Мои Заявлении
@endsection
@section('card')

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
