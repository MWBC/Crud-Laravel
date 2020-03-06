@extends('contact.master')

@section('content')

    @php
    var_dump($errors->all());
    @endphp

    <form action="{{url('/store')}}" id="form_contact" method="post" novalidate onsubmit="return testeValidacao()">
        @csrf
        <!--{{csrf_field()}}-->

        <p class="h3 my-5" align="center" style="color: #17a2b8">Formulário de Cadastro</p>

        <div class="container w-25 my-4 table-bordered">
            <div class="form-group" id="div_name">

                <label for="name">Nome:</label>
                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Digite o seu nome" name="name" id="name" required value="{{Request::old('name')}}">

                @error('name')

                    <div class="invalid-feedback">

                        {{$errors->first('name')}}
                    </div>
                @enderror
            </div>

            <div class="form-group" id="div_telephone">

                <label for="telephone">Telefone:</label>
                <input type="tel" class="form-control {{$errors->has('telephone') ? 'is-invalid' : ''}}" placeholder="Digite o seu telefone" name="telephone" required value="{{Request::old('telephone')}}">

                @error('telephone')

                    <di class="invalid-feedback">

                        {{$errors->first('telephone')}}
                    </di>
                @enderror
            </div>

            <div class="form-group" id="div_email">

                <label for="email">Email:</label>
                <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Digite o seu email" name="email" value="{{Request::old('email')}}">

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

    <script type="text/javascript">

        function testeValidacao() {

            var form = document.getElementById("form_contact");
            var name = form.name;

            if(name.value === ""){

                alert("Teste: o campo nome está vazio");
                $("#name").addClass('is-invalid');

                form.name.focus();

                return false;
            }
        }
    </script>
@endsection
