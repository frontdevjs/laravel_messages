@extends('layouts.app')


@section('title-block')
    Все сообщения
@endsection

@section('content')
    <h1>Все сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h5>ID сообщения: {{ $el->id }}</h5>
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact.showOneMessage', $el->id) }}">
                <button class="btn btn-warning">Детальнее</button>
            </a>
        </div>
    @endforeach
@endsection



