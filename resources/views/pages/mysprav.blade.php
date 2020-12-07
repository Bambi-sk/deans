@extends('layouts.app')
@section('breadcrumbText')
Мои справки
@endsection
@section('card')

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
                    <a type="button" class="btn btn-link" href="/downloadpdf/{{$r->cert_id}}">Download</a>
                    <a type="button" class="btn btn-link" href="/sendEmail">Send Email</a>
                    @endif   
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection
