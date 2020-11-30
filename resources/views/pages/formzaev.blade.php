@extends('layouts.appAdmin')
@section('breadcumbText')
Заполнение вид  заявление
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
                    <form method="post">
                    <div class="form-group ">
                    <label class="control-label " for="second_name">
                    Фамилия
                    </label>
                    <input class="form-control" id="second_name" name="second_name" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="name1">
                    Имя
                    </label>
                    <input class="form-control" id="name1" name="name1" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="father_name">
                    Отчество
                    </label>
                    <input class="form-control" id="father_name" name="father_name" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="date">
                    Дата рождения
                    </label>
                    <div class="input-group">
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" readonly/>
                    <div class="input-group-addon">
                        <i class="fa fa-calendar">
                        </i>
                    </div>
                    </div>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="iin">
                    ИИН
                    </label>
                    <input class="form-control" id="iin" name="iin" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="citizenship">
                    Гражданство
                    </label>
                    <input class="form-control" id="citizenship" name="citizenship" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="document">
                    Документ, удостоверяющий личность
                    </label>
                    <input class="form-control" id="document" name="document" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="number_document">
                    Номер документа, удостоверяющего личность
                    </label>
                    <input class="form-control" id="number_document" name="number_document" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="date1">
                    Дата выдачи документа, удостоверяющего личность
                    </label>
                    <input class="form-control" id="date1" name="date1" placeholder="MM/DD/YYYY" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="organ_document">
                    Орган выдачи документа, удостоверяющего личность
                    </label>
                    <input class="form-control" id="organ_document" name="organ_document" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="facultet">
                    Факультет
                    </label>
                    <input class="form-control" id="facultet" name="facultet" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="kafedra">
                    Кафедра
                    </label>
                    <input class="form-control" id="kafedra" name="kafedra" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="speciality">
                    Специальность/Группа образовательных программ
                    </label>
                    <input class="form-control" id="speciality" name="speciality" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="course">
                    Курс
                    </label>
                    <input class="form-control" id="course" name="course" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="text9">
                    Группа
                    </label>
                    <input class="form-control" id="text9" name="text9" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="form_payment">
                    Форма оплаты
                    </label>
                    <input class="form-control" id="form_payment" name="form_payment" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="address">
                    Адрес
                    </label>
                    <input class="form-control" id="address" name="address" type="text" readonly/>
                    </div>
                    <div class="form-group ">
                    <label class="control-label " for="tel">
                    Мобильный телефон
                    </label>
                    <input class="form-control" id="tel" name="tel" type="text" />
                    </div>
                    <div class="form-group ">
                    <label class="control-label requiredField" for="email1">
                    E-mail
                    <span class="asteriskField">
                        *
                    </span>
                    </label>
                    <input class="form-control" id="email1" name="email1" type="text"/>
                    </div>
                    <div class="form-group">
                    <div>
                    <button class="btn btn-success " name="submit" type="submit">
                        <a href="/" style="color: white;"> Подать Заявление </a>
                    
                    </button>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
