@extends('layouts.appAdmin')
@section('breadcumbText')
Certification 
@endsection
@section('card')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@endsection

@section('cardBody')
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Certification type</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($cerf as $c)
            <tr>
            <td>{{ $c->id}}</td>
            <td>{{ $c->paragraph}}</td>
            <td>
                @foreach($cerftype as $ct)
                    @if($ct->id==$c->type_cerf_id)
                        {{$ct->name}}
                    @endif
                 @endforeach
            </td>
                
            <td>
                <a href="/cerfs/{{$c->id}}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="/cerf/{{$c->id}}">
                        <i class="fas fa-edit  fa-lg"></i>

                </a>
                <form action="/cerfd/{{$c->id}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>

                    </button>
                </form>
            </td>
            </tr>
        @endforeach

    </tbody>
</table>
{{-- {!! $faqs->links() !!} --}}
@endsection
@section('addButton')
<div class="container-fluid">    
    <div class="float-right">
        <a class="btn btn-success" href="/cerf/create" title="add new faq"> <i class="fas fa-plus-circle"></i>
        </a>
    </div>
</div>
@endsection