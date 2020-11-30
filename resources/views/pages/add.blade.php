@extends('layouts.appAdmin')
@section('breadcumbText')
Добавить справку
@endsection
@section('card')

@endsection
@section('addButton')

@endsection
@section('cardBody')
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Название</label>
        <input type="text" class="form-control" placeholder="Приложение 6">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Текст</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Текущая дата</label>
        <input type="text" class="form-control" placeholder="28.10.2020" readonly>
    </div>
    
    <div class="form-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Загрузите штамп</span>
          </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>

        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Загрузите подпись</span>
          </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>

    <div class="float-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add"> Добавить</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>

</form>
@endsection
