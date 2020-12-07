@extends('layouts.app')
@section('breadcumbText')
Подача Справки
@endsection
@section('card')
@endsection
@section('breadcrumb')
<i class="fas fa-user"></i>
 Вид Справки
@endsection
@section('cardBody')
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
              
                <th>Название Справки</th>
                <th>Вид справки</th>
                <th>Action</th>
                
               
            </tr>
        </thead>
        <tfoot>
            <tr>
                
                <th>Название Справки</th>
                <th>Вид справки</th>
                <th>Action</th>
                
            </tr>
        </tfoot>
        <tbody>
            @foreach ($cerf as $ct)
           
                <tr>
                   
                    
                    <td>{{$ct->title}}</td>
                    @foreach ($cerftype as $c)
                        @if ($c->id==$ct->type_cerf_id)
                        <td>{{$c->name}}</td>
                        @endif
                    @endforeach
                    
                    <td> <a class="btn btn-success" href="/requestCert/create/{{$ct->id}}"> Отправить</a></td>
                   
                </tr>
           
            @endforeach
        </tbody>
    </table>
    {{-- <button type="button" class="btn btn-outline-dark" ><a href="/requestCert/create/{{$cerf->id}}"> Отправить заявку</a></button> --}}
</div>
@endsection
