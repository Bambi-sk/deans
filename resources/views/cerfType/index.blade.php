@extends('layouts.appAdmin')
@section('breadcumbText')
Certification Type
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
        <th scope="col">Period date</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($cerf_Types as $cerf_Type)
            <tr>
            <td>{{ $cerf_Type->id}}</td>
                <td>{{ $cerf_Type->name}}</td>
                <td>{{ $cerf_Type->period_date }}</td>
                
                <td>
                    <a href="/cerfTypes/{{$cerf_Type->id}}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>

                    <a href="/cerfType/{{$cerf_Type->id}}">
                        <i class="fas fa-edit  fa-lg"></i>

                    </a>
                    <form action="/cerfTyped/{{$cerf_Type->id}}" method="POST">
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
        <a class="btn btn-success" href="/cerfType/create" title="add new faq"> <i class="fas fa-plus-circle"></i>
        </a>
    </div>
</div>
@endsection