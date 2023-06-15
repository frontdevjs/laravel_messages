@extends('layouts.app')


@section('title-block')Главня страница@endsection

@section('content')
    <h1>Главня страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia necessitatibus placeat soluta. Consequatur ea, facere itaque iusto nostrum quasi quibusdam vitae? Alias animi, dolorem esse est et expedita iure minus modi, obcaecati pariatur perspiciatis, quam quasi quos similique tenetur velit voluptate voluptatibus voluptatum! Dolorum ex officiis perspiciatis ratione, recusandae temporibus.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текс</p>
@endsection

