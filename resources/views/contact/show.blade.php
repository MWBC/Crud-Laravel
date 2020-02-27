@extends('contact.master')

@section('content')
<h1>Página Single</h1>



@if(!empty($contact))

    @foreach ($contact as $cont)

        <h2>Nome: {{{$cont->name}}}</h2>
        <h2>Telefone: {{{$cont->telephone}}}</h2>
        <h2>email: {{{$cont->email}}} </h2>

    @endforeach
@endif

@endsection
