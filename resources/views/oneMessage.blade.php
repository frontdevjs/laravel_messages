@extends('layouts.app')


@section('title-block')
    $data->subject
@endsection

@section('content')
    <h1>{{ $data->subject }}</h1>
    <div class="alert alert-info">
        <h5>ID сообщения: {{ $data->id }}</h5>
        <p>{{ $data->name }}</p>
        <p>{{ $data->message }}</p>
        <p>{{ $data->email }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact.update', $data->id) }}">
            <button class="btn btn-warning">Редактировать</button>
        </a>
        <a href="{{ route('contact.delete', $data->id) }}">
            <button class="btn btn-danger">Удалить</button>
        </a>
        <div class="mt-3">
            <a href="{{ route('contact.allData', $data->id) }}">
                <button class="btn btn-primary">Назад</button>
            </a>
        </div>
    </div>

@endsection



