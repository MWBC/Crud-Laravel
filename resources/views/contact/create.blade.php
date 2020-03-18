@extends('contact.master')

@section('content')

    @php
    var_dump($errors->all());
    @endphp

    <form action="{{url('/store')}}" id="form_contact" method="post" novalidate>
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

    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/additional-methods.js')}}"></script>
    <script type="text/javascript">

        $(function(){

            $("#form_contact").validate({

                errorClass: "is-invalid",

                /*highlight: function(element, errorClass){

                    $(element.form).find("#name").addClass(errorClass);
                    $(element.form).find("#name-error").addClass("invalid-feedback");
                    $(element.form).find("#telephone").addClass(errorClass);
                    $(element.form).find("#telephone-error").addClass("invalid-feedback");
                    $(element.form).find("#email").addClass(errorClass);
                    $(element.form).find("#email-error").addClass("invalid-feedback");
                },*/

                rules: {

                    name: {

                        required: true,
                        minlength: 2
                    },

                    telephone: {

                        required: true,
                        number: true
                    }
                },

                messages: {

                    name: {

                        required: "Por favor, digite o seu nome",
                        minlength: "Por favor, digite um nome válido com pelo menos 2 letras"
                    },

                    telephone: {

                        required: "Por favor, digite o seu número de telefone",
                        number: "Por favor, digite apenas números"
                    }
                }
            });
        });

    </script>
@endsection