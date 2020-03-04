@extends('contact.master')

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
                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$contact->id}})"
                       data-target="#modalDelete" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Remover</a></td>
            </tr>

        @endforeach

        </table>

    @else

        <h2>Nenhum contato cadastrado!</h2>

    @endif

        <!--Modal para confirmação de exclusão de contato-->
        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">

            <div class="modal-dialog" role="document">

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

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
    <script src="{{asset('js/app.js')}}"></script>

    <script type="text/javascript">

        function deleteData(id) {

            var id = id;
            var url = '{{url('/contato/excluir/:id')}}';
            url = url.replace(':id', id);
            //alert(url);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {

            $("#deleteForm").submit();
        }

    </script>
    <script type="text/javascript">

        $(".rows").click(function(e){

            window.location.assign($(this).data('href'));

            return false;
        });


    </script>

@endsection
