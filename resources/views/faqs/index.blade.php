@extends('layouts.appAdmin')
@section('breadcumbText')
Faqs
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
        <th scope="col">Вопрос</th>
        <th scope="col">Ответ</th>
        <th scope="col">Действии</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($faqs as $faq)
            <tr>
            <td>{{ $faq->id}}</td>
                <td>{{ $faq->question}}</td>
                <td>{{ $faq->answer }}</td>
                
                <td>
                    <form action="{{ route('faq.destroy', $faq) }}" method="POST">

                        <a href="{{ route('faq.show', $faq) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('faq.edit', $faq) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

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
        <a class="btn btn-success" href="{{ route('faq.create') }}" title="add new faq"> <i class="fas fa-plus-circle"></i>
        </a>
    </div>
</div>
@endsection