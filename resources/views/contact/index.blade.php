@extends('contact.master')

@section('title', 'Crud - Index')

@section('content')

    <div class="container">

        <h1 align="center" class="my-3">Listagem de Contatos</h1>

        @if(!empty($contacts[0]))

            <table class="table table-striped table-hover">

                <thead class="bg-info">
                <th>Nome:</th>
                <th>Telefone:</th>
                <th>Email:</th>
                <th>Ações</th>
                </thead>

                <tbody>

                @foreach ($contacts as $contact)

                    @php
                        $linkRead = url('/contato/' . $contact->url);
                        $linkEdit = url('/contato/editar/' . $contact->url);
                        //$linkRemove = url('/contato/remover/' . $contact->url);
                    @endphp

                    <tr style="cursor: pointer;">
                        <td data-toggle="modal" data-target="#modalSeeMore" data-whatever="{{$contact}}">{{{$contact->name}}}</td>
                        <td data-toggle="modal" data-target="#modalSeeMore" data-whatever="{{$contact}}">{{{$contact->telephone}}}</td>
                        <td data-toggle="modal" data-target="#modalSeeMore" data-whatever="{{$contact}}">{{{$contact->email}}}</td>
                        <td><!--<a href='{{$linkRead}}' class="btn btn-info" role="button">Ver mais</a> |-->
                            <a href='{{$linkEdit}}' class="btn btn-info" role="button">Editar</a> |
                            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$contact->id}})"
                               data-target="#modalDelete" class="btn btn-danger"><i class="fa fa-trash"></i>Remover</a></td>
                    </tr>

                @endforeach

                </tbody>
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

                            @csrf
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

        <!-- Modal para exibir as informações individuais do contato -->
        <div class="modal fade" id="modalSeeMore" tabindex=""role="dialog" aria-labelledby="labelModal" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="labelModal" style="margin: 0 auto;">Informações individuais</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="fechar">

                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <p id="name" class="name h5"></p>
                        <p class="h5 telephone"></p>
                        <p class=" h5 email"></p>
                    </div>

                    <div class="modal-footer">

                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
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

        $(document).ready(function () {

            resizeTableButton();

            $("#modalSeeMore").on('show.bs.modal', function(event){

                var button = $(event.relatedTarget);
                var contact = button.data('whatever');

                var modal = $(this);

                modal.find('.name').text('Nome: ' + contact.name);
                modal.find('.telephone').text('Telefone: ' + contact.telephone);
                modal.find('.email').text('Email: ' + contact.email);

            });

            $(window).resize(function(){

                resizeTableButton();
            });
        });

        function resizeTableButton(){

            let size = $(window).width();

            if(size < 768){

                $("table").addClass("table-sm");
                $("a").addClass("btn-sm");
            }else {

                $("table").removeClass("table-sm");
                $("a").removeClass("btn-sm");
            }
        }
        //função para tornar possível o retorno para o documento original
        /*$(".rows").click(function(e){

            window.location.assign($(this).data('href'));

            return false;
        });*/


    </script>

@endsection
