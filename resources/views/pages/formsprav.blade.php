@extends('layouts.app')
@section('breadcumbText')
Заполнение вид  справки
@endsection
@section('card')
@endsection
@section('breadcrumb')
<i class="fas fa-pen"></i>
 Информация о студенте 
@endsection
@section('cardBody')
<div class="bootstrap-iso">
    <div class="container-fluid">
     <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <form method="post" action="/requestCert">
                        @csrf
                    <div class="form-group ">
                    <label class="control-label " for="second_name">
                    Фамилия
                    </label>
                    <input class="form-control" id="second_name"  value="{{$student->lastname}}" name="lastname" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="name1">
                    Имя
                    </label>
                    <input class="form-control" id="name1"  value="{{$student->firstname}}" name="firstname" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="date">
                    Дата рождения
                    </label>
                    <div class="input-group">
                    <input class="form-control" id="date" name="date" value="{{$student->birthdate}}" placeholder="MM/DD/YYYY" type="text" readonly/>
                    <div class="input-group-addon">
                        <i class="fa fa-calendar">
                        </i>
                    </div>
                    </div>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="citizenship">
                    Гражданство
                    </label>
                    @foreach ($nationality as $n)
                        @if ($n->id==$student->id_nation)
                        <input class="form-control" value="{{$n->name}}" id="citizenship" name="citizenship" type="text" readonly/>
                        @endif
                    @endforeach
                    
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="kafedra">
                        Специальность/Группа образовательных программ
                    </label>
                    @foreach ($speciality as $s)
                        @if ($s->id==$student->id_spec)
                        <input class="form-control" value="{{$s->name}}" id="kafedra" name="kafedra" type="text" readonly/>
                        @endif
                    @endforeach

                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="course">
                    Курс
                    </label>
                    @foreach ($stream as $s)
                    @if ($s->id==$student->id_stream)
                    <input class="form-control"   value="{{$s->year}}" id="course" name="course" type="text" readonly/>
                    @endif
                     @endforeach
                    
                    </div>

                    <div class="form-group ">
                    <label class="control-label " for="address">
                    Адрес
                    </label>
                    <input class="form-control" id="address" value="{{$student->address}}"name="address" type="text" readonly/>
                    </div>
                    <div class="form-group">
                    <div>
                        <input type="hidden" name="cert_id" value="{{$cerf->id}}">
                        <input type="hidden" name="student_id" value="{{$student->id}}">
                    <button class="btn btn-success " name="submit" type="submit">
                        
                        <a style="color: white;"> Подать Заявление </a>
                    
                    </button>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
