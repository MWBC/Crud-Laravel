@extends('contact.master')
 <!--<!DOCTYPE HTML>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Contatos</title>

        <style>

            div.tabela{
                margin: 30px 300px;
            }

            table{
                justify-content: center;
            }

            table tr#labels{
                color: red;
                font-size: 25px;
                text-align: left;
            }

            table tr#labels td{
                padding-right: 30px;
            }

            header{
                font-size: 40px;
                text-align: center;
                height: 90px;
                background-color: lightslategrey;
            }

            p#linkCadastro{


            }
        </style>

        <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">

    </head>

    <body>
-->

        @section('content')

        <div class="container">
        <h1 align="center" class="my-3">Listagem de Contatos</h1>
        @if(!empty($contacts[0]))

            <table class="table table-striped table-hover">

                <thead class="bg-info">
                    <td>Nome:</td>
                    <td>Telefone:</td>
                    <td>Email:</td>
                    <td>Ações</td>
                </thead>

            @foreach ($contacts as $contact)

                @php
                $linkRead = url('/contato/' . $contact->url);
                $linkEdit = url('/contato/editar/' . $contact->url);
                $linkRemove = url('/contato/remover/' . $contact->url);
                @endphp

                <tr style="cursor: pointer;">
                    <td class="rows" data-href="{{$linkRead}}" >{{{$contact->name}}}</td>
                    <td class="rows" data-href="{{$linkRead}}" >{{{$contact->telephone}}}</td>
                    <td class="rows" data-href="{{$linkRead}}" >{{{$contact->email}}}</td>
                    <td><!--<a href='{{$linkRead}}' class="btn btn-info" role="button">Ver mais</a> |-->
                        <a href='{{$linkEdit}}' class="btn btn-info" role="button">Editar</a> |
                        <!--<a href='{{$linkRemove}}' class="btn btn-danger" role="button" data-toggle="modal"
                        data-target="#modalDelete">Remover</a>--><button onclick="deleteData({{$contact->id}})" data-toggle="modal" data-target="#modalDelete" class="btn btn-danger">Remover</button></td>
                </tr>

            @endforeach

            </table>

        @else

            <h2>Nenhum contato cadastrado!</h2>

        @endif

            <!--Modal para confirmação de exclusão de contato-->
            <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">

                <div class="modal-dialog-centered" role="document">

                    <form action="" id="deleteForm" method="post">

                        <div class="modal-content">

                            <div class="modal-header">

                                <h5 class="modal-title" id="labelModal">Confirmação de Exclusão</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="fechar">

                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">

                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <p>Deseja realmente excluir este contato?</p>
                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Confirmar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
            Abrir modal de demonstração
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                    </div>
                </div>
            </div>
        </div>


            <<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <!--<script src="{{asset('site/jquery.js')}}"></script>
            <script src="{{asset('site/bootstrap.js')}}"></script>-->

            <script type="text/javascript">

                function deleteData(id) {

                    var id = id;
                    var url = '{{url('/contato/excluir/:id')}}';
                    url = url.replace(':id', id);
                    alert(url);
                    $(#deleteForm).attr('action', url);
                }

                function formSubmit() {

                    $(#deleteForm).submit();
                }

            </script>
            <script type="text/javascript">

                $(".rows").click(function(e){

                    window.location.assign($(this).data('href'));

                    return false;
                });


            </script>
            @endsection
    <!--</body>
</html>-->
