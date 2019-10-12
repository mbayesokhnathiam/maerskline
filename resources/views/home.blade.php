@extends('layouts.app')

@section('content')
<div class="container">
    <div class="align-items-end d-flex justify-content-end">
        <a href="" class="btn bg-maersk-primary py-2 rounded-0 shadow text-white font-weight-bold" data-toggle="modal" id="import-modal" data-target="#importFromGainde">Impoter de Gainde <i class="fas fa-download"></i></a>
    </div>

    <div class="row justify-content-center pt-3">
        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Shipping Lines</span>

                <i class="fas fa-shipping-fast fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">1000</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="/shipping">Voir plus</a>
            </div>
        </div>

        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Vessels</span>

                <i class="fas fa-ship  fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">1000</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="/vessels">Voir plus</a>
            </div>
        </div>

        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Bordereaux de Livraison (BL)</span>

                <i class="fas fa-file-invoice  fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">1000</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="/bls">Voir plus</a>
            </div>
        </div>

    </div>

    <div class="modal fade" id="importFromGainde" tabindex="-1" role="dialog" aria-labelledby="importFromGaindeTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="importFromGaindeTitle">Formulaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" class="form" id="import-form">

                    <div class="form-group">
                        <label for="startDate">Date de debut <span class="text-danger">*</span></label>
                        <input type="date" class="form-control rounded-0" id="startDate" name="rechercheManifesteForm.datManifDateDebut" required>
                    </div>

                    <div class="form-group">
                        <label for="endDate">Date de fin <span class="text-danger">*</span></label>
                        <input type="date" class="form-control rounded-0" id="endDate" name="rechercheManifesteForm.datManifDateFin" required>
                    </div>

                    <div class="form-group">
                        <label for="annee">Numero Manifeste <span class="text-danger">*</span></label>
                        <div class="d-flex justify-content-start">
                            <input type="text" class="form-control rounded-0 w-50 mr-2" id="year" name="rechercheManifesteForm.numManifAnnee" placeholder="Annee" required>
                            <input type="text" class="form-control rounded-0 w-50" id="office" name="rechercheManifesteForm.numManifCodeBur" placeholder="Bureau" required>
                        </div>
                    </div>

                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn bg-maersk-primary rounded-0 text-white">Importer</button>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
