@extends('contact.master')

@section('content')

    @php
        var_dump($errors->all());
    @endphp
    <form action="{{url('/contato/update', ['id'=>$contact[0]->id])}}" id="form_contact_edit" method="post" novalidate>
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

    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/additional-methods.js')}}"></script>
    <script type="text/javascript">

        $(function(){

            $("#form_contact_edit").validate({

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
                    },

                    email: {

                        email: true
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
                    },

                    email: {

                        email: "Por favor, digite um email válido"
                    }
                }
            });
        });

    </script>
@endsection
