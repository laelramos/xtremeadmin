@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Row form-->
        <div class="row" id="row-form" style="display: none;">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">Detalhes do Pedido</h4>
                    </div>
                    <form class="form-horizontal r-separator">
                        <div class="form-body">
                            <div class="card-body">
                                <h4 class="card-title">Itens</h4>

                            </div>


                            <div class="card-body bg-light">
                                <h4 class="card-title m-t-10 p-b-20">Dados adicionais</h4>

                                <div class="form-group row p-b-15 fixed">
                                    
                                    <label class="col-sm-1 text-right control-label col-form-label">Pagamento:</label>
                                    <div class="col-sm-2">
                                        <select class="form-control">
                                            
                                        </select>
                                    </div>

                                    

                                    <label class="col-sm-1 text-right control-label col-form-label">Fornecedor:</label>
                                    <div class="col-sm-2">
                                        <select class="form-control">
                                            
                                        </select>
                                    </div>

                                    <label class="col-sm-1 text-right control-label col-form-label">Data:</label>
                                    <div class="col-sm-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- total -->
                            <div class="card-body bg-light">
                                <div class="form-group row p-b-15 fixed">
                                    <div class="col-md-11 text-right">
                                        <h3 class="card-title m-t-10 p-b-20">Total: </h4>
                                    </div>

                                    <div class="col-md-1 text-right">
                                        <h3 class="card-title m-t-10 p-b-20">R$00,00</h4>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="form-actions">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="button" class="btn btn-secondary" id="btn-fecha-detalhes">Voltar</button>
                                                    <button type="button" class="btn btn-success" id="btn-finaliza_venda">Finalizar</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
    </div>


@endsection