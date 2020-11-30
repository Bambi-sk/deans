@extends('layouts.appAdmin')
@section('breadcumbText')
Список запросов
@endsection
@section('card')

@endsection
@section('addButton')
<div class="container-fluid">   
    <div class="float-right">
        <a class="btn btn-danger" href=""><i class="fa fa-times"></i> Отклонить все</a>
    </div> 
    <div class="float-right">
        <a class="btn btn-success" href=""><i class="fa fa-check"></i> Разрешить все</a>
    </div>
</div>
@endsection
@section('cardBody')
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">ФИО</th>
        <th scope="col">Группа</th>
        <th scope="col">Курс</th>
        <th scope="col">Запрос</th>
        <th scope="col">Действие</th>
    </tr>
    </thead>
    <tbody>
        @foreach($requestCert as $r)
        <tr>
            @if ($r->is_approved==false)
                <th scope="row">{{$r->id}}</th>
                <td>
                    @foreach ($students as $s)
                    @if ($r->student_id==$s->id)
                        {{$s->lastname}}  {{$s->firstname}}
                    @endif
                    @endforeach
                    
                </td>
                <td>
                    @foreach ($students as $s)
                    @if ($r->student_id==$s->id)
                        @foreach ($stream as $st)
                            @if ($st->id=$s->id_stream)
                                {{$st->name}}
                            @endif
                        @endforeach
                        
                    @endif
                    @endforeach
                </td>
                <td>@foreach ($students as $s)
                    @if ($r->student_id==$s->id)
                        @foreach ($stream as $st)
                            @if ($st->id=$s->id_stream)
                                {{$st->year}}
                            @endif
                        @endforeach
                        
                    @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($cerf as $c)
                        @if ($c->id==$r->cert_id)
                            @foreach ($cerf_Type as $ct)
                                @if ($ct->id==$c->type_cerf_id)
                                    {{$ct->name}}
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                
            </td>
                <td>
                    <div class="btn-group">
                        <form action="/requestCert/{{$r->id}}" method="POST">
                            @csrf
                            @method('DELETE')
        
                            <button type="submit"  class="btn btn-danger">
                                <i class="fas fa-trash"></i>
        
                            </button>
                        </form>
                        <form action="/requestCert/update" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$r->id}}">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i>
                            </button>
                        </form>
                    
                    </div>
                </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
