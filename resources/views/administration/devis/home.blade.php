@extends('layouts.app')

@section('content')

<style type="text/css">
    .petit input[type="text"] {
        width: 50px;
    }

</style>

<div class="content-wrapper">

    <div class="container-fluid">

            <!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i>
                    Création de devis
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    {{ Form::open(['route' => 'store.contact', 'class' => 'form-horizontal']) }}
                    {{ csrf_field() }}
                    <div class="form-group row{{ $errors->has('devisNum') ? ' has-error' : '' }}">
                        {{ Form::label('devisNum', 'N° du devis', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('devisNum', null, array('class' => 'form-control col-sm-6', 'required' => 'required', 'autofocus' => 'autofocus')) }}
                        {{ $errors->first('devisNum', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('devisObj') ? ' has-error' : '' }}">
                        {{ Form::label('devisObj', 'Objet du devis', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('devisObj', null, array('class' => 'form-control col-sm-6', 'required' => 'required')) }}
                        {{ $errors->first('devisObj', '<small class="help-block">:message</small>') }}
                     </div>

                        <table class="table table-bordered text-muted" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Position</th>
                                    <th>Texte</th>
                                    <th>Quantité</th>
                                    <th>Unité</th>
                                    <th>Prix unit.</th>
                                    <th>Montant</th>
                                </tr>
                            </thead>
                            <tbody id = "devis_table">
                                <tr>
                                    <td id = "code_input1" class = "petit"><input type="text" id="1"></td>
                                    <td id = "texte1"><input type="text" id="1"></td>
                                    <td id = "quantite1"><input type="number" value = "0" id="1"></td>
                                    <td id = "unite1" class="petit"><input type="text" id="1"></td>
                                    <td id = "prix_unit1"><input type="number" value = "0" id="1"></td>
                                    <td id = "montant1">0 frs</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>Montant total : </td>
                                  <td id = "montantTot">0 frs</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div>
                {{ Form::submit('Enregistrer !', ['class' => 'btn btn-primary btn-block col-sm-3']) }}
                    {{ Form::close() }}
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright &copy; Your Website 2017</small>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <script src="{{ asset('js/devis.js') }}"></script>
    
    @endsection
