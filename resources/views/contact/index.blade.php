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
                    <td><!--<a href='{{$linkRead}}' class="btn btn-info" role="button">Ver mais</a> |--> <a href='{{$linkEdit}}' class="btn btn-info" role="button">Editar</a> |
                        <a href='{{$linkRemove}}' class="btn btn-danger" role="button">Remover</a></td>
                </tr>

            @endforeach

            </table>

        @else

            <h2>Nenhum contato cadastrado!</h2>

        @endif

        </div>

        <script src="{{asset('site/jquery.js')}}"></script>
            <script src="{{asset('site/bootstrap.js')}}"></script>

            <script type="text/javascript">

                $(".rows").click(function(e){

                    window.location.assign($(this).data('href'));

                    return false;
                });
            </script>
            @endsection
    <!--</body>
</html>-->
