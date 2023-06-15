@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')
    <h1>Контакты</h1>

    <form action="{{route('contact.submit')}}" method="post" class="mt-5">
        @csrf

        <div class="form-group mt-2">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-4">Отправить</button>
    </form>
@endsection


