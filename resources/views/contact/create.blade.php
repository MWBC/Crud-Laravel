@extends('contact.master')

@section('content')

    <div class="container">

        @php
        var_dump($errors->all());
        @endphp

        <div class="row">

            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">

                <p class="h3 my-5" align="center" style="color: #17a2b8">Formulário de Cadastro</p>

                <form class="table-bordered" action="{{url('/store')}}" id="form_contact_create" method="post" novalidate>

                    @csrf

                    <div class="row no-gutters">

                        <div class="col-10 offset-1">

                            <div class="form-group" id="div_name">

                                <label for="name">Nome:</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                       placeholder="Digite o seu nome" name="name" id="name" required value="{{old('name')}}">

                                @error('name')

                                <div class="invalid-feedback">

                                    {{$errors->first('name')}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row no-gutters">

                        <div class="col-10 offset-1">

                            <div class="form-group" id="div_telephone">

                                <label for="telephone">Telefone:</label>
                                <input type="tel" class="form-control {{$errors->has('telephone') ? 'is-invalid' : ''}}"
                                       placeholder="Digite o seu telefone" name="telephone" required value="{{Request::old('telephone')}}">

                                @error('telephone')

                                <di class="invalid-feedback">

                                    {{$errors->first('telephone')}}
                                </di>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="row no-gutters">

                        <div class="col-10 offset-1">

                            <div class="form-group" id="div_email">

                                <label for="email">Email:</label>
                                <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                                       placeholder="Digite o seu email" name="email" value="{{Request::old('email')}}">

                                @error('email')

                                <div class="invalid-feedback">

                                    {{$errors->first('email')}}
                                </div>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="row no-gutters">

                        <div class="col-10 offset-1">

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary w-100">Enviar</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/additional-methods.js')}}"></script>
    <script type="text/javascript">

        $(function(){

            $("#form_contact_create").validate({

                errorClass: "is-invalid",

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
