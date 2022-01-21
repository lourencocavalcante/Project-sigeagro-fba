@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Cadastrar Fazenda') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger border-left-danger" role="alert">
    <ul class="pl-4 my-2">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">

    <div class="col-lg-8 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Dados da Fazenda</h6>
            </div>

            <div class="card-body">

                <form method="POST" action="./salvar-cadastro-fazenda" autocomplete="off">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <h6 class="heading-small text-muted mb-4">Preencha os campos abaixo</h6>

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="fazend_nome">Nome<span class="small text-danger">*</span></label>
                                    <input type="text" id="fazend_nome" class="form-control" name="fazend_nome" placeholder="Ex.: Fazenda Boi Nelore">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="fazend_proprietario">Proprietario</label>
                                    <input type="text" id="fazend_proprietario" class="form-control" name="fazend_proprietario" placeholder="Nome do proprietário da fazenda">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="fazend_cnpj_cpf">CNPJ/CPF</label>
                                    <input type="text" id="fazend_cnpj_cpf" class="form-control" name="fazend_cnpj_cpf" placeholder="CNPJ ou CPF da Fazenda">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="fazend_endereco">Endereço<span class="small text-danger">*</span></label>
                                    <input type="text" id="fazend_endereco" class="form-control" name="fazend_endereco" placeholder="Endereço da propriedade">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="fazend_cidade">Cidade</label>
                                    <input type="text" id="fazend_cidade" class="form-control" name="fazend_cidade" placeholder="Cidade">
                                </div>
                            </div>
                        </div>




                    </div>

                    <!-- Button -->
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

</div>

@endsection