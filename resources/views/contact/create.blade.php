@extends('contact.master')

@section('content')

    @php
    var_dump($errors->all());
    @endphp

    <form action="{{url('/store')}}" method="post" novalidate>
        @csrf
        <!--{{csrf_field()}}-->

        <p class="h3 my-5" align="center" style="color: #17a2b8">Formulário de Cadastro</p>

        <div class="container w-25 my-4 table-bordered">
            <div class="form-group">

                <label for="name">Nome:</label>
                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Digite o seu nome" name="name" required>

                @error('name')

                    <div class="invalid-feedback">

                        {{$errors->first('name')}}
                    </div>
                @enderror
            </div>

            <div class="form-group">

                <label for="telephone">Telefone:</label>
                <input type="tel" class="form-control {{$errors->has('telephone') ? 'is-invalid' : ''}}" placeholder="Digite o seu telefone" name="telephone" required>

                @error('telephone')

                    <di class="invalid-feedback">

                        {{$errors->first('telephone')}}
                    </di>
                @enderror
            </div>

            <div class="form-group">

                <label for="email">Email:</label>
                <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Digite o seu email" name="email">

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
