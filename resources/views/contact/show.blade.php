@extends('contact.master')

@section('content')

    @if(!empty($contact))

        <h1 align="center" style="margin-bottom: 30px">Informações Individuais</h1>

        @foreach ($contact as $cont)

            <div class="row">

                <div class="col-md-10 offset-1 order-1" align="center">

                    <h2>Nome: {{{$cont->name}}}</h2>
                </div>

            <div class="col-md-10 offset-1 order-2" align="center">

                <h2>Telefone: {{{$cont->telephone}}}</h2>
            </div>

            <div class="col-md-10 offset-1 order-3" align="center">

                <h2>email: {{{$cont->email}}} </h2>
            </div>
            </div>

        @endforeach

    @endif
@endsection
