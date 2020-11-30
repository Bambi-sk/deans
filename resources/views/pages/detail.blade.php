@extends('layouts.appAdmin')
@section('breadcumbText')
Заявления
@endsection
@section('card')

@endsection

@section('cardBody')
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Название</th>
        <th scope="col">Назначение</th>
        <th scope="col">Действии</th>
    </tr>
    </thead>
    <tbody>
    
        <tr>
            <th scope="row">1</th>
            <td>Приложение 6</td>
            <td>преподам</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary" data-toggle="modal" data-target="#see"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-list"></i></a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-times"></i></a>
                    <!-- Modal -->
                    <div class="modal fade" id="see" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Документ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            
                            <div class="modal-body">
                                <div class="card">
                                    <img src="https://data2.unhcr.org/images/documents/big_441d7f43ead31df601a2dc864f5d8ec564d2e7ae.jpg" class="card-img-top" alt="...">
                                </div>    
                            </div>

                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <td>С места требование</td>
            <td>студентам</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary" data-toggle="modal" data-target="#"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-list"></i></a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-times"></i></a>
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row">3</th>
            <td>В военкомат</td>
            <td>студентам</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary" data-toggle="modal" data-target="#"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-list"></i></a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-times"></i></a>
                </div>
            </td>
        </tr>

    </tbody>
</table>
@endsection
@section('addButton')
<div class="container-fluid">    
    <div class="float-right">
        <a class="btn btn-success" href="/add"> Добавить запись</a>
    </div>
</div>
@endsection