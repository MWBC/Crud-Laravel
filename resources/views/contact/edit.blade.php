@extends('contact.master')

@section('content')

    @php
        var_dump($errors->all());
    @endphp
    <form action="{{url('/contato/update', ['id'=>$contact[0]->id])}}" method="post" novalidate>
        @csrf
        {{method_field('PUT')}}

        <p class="h3 my-5" align="center" style="color: #17a2b8">Formulário de Edição</p>
        <div class="container w-25 my-4 table-bordered">

            <div class="form-group">

                <label for="name">Nome:</label>
                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{$contact[0]->name}}">

                @error('name')

                <div class="invalid-feedback">

                    {{$errors->first('name')}}
                </div>
                @enderror
            </div>

            <div class="form-group">

                <label for="telephone">Telefone:</label>
                <input type="tel" class="form-control {{$errors->has('telephone') ? 'is-invalid' : ''}}" name="telephone" value="{{$contact[0]->telephone}}">

                @error('telephone')

                <div class="invalid-feedback">

                    {{$errors->first('telephone')}}
                </div>
                @enderror
            </div>

            <div class="form-group">

                <label for="email">Email:</label>
                <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" value="{{$contact[0]->email}}">

                @error('email')

                <div class="invalid-feedback">

                    {{$errors->first('email')}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary w-50 offset-md-3">Enviar</button>
            </div>
        </div>
    </form>

@endsection
