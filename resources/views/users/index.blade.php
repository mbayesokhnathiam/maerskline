@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="w-100 d-flex align-items-center justify-content-between">
                    <h1>Gestion Utilisateurs</h1>
                    <button class="btn btn-sm bg-maersk-primary rounded-0 shadow-sm text-white" data-toggle="modal" data-target="#userAddModal">
                        Ajouter un utilisateur
                        <i class="fas fa-user ml-2"></i>
                    </button>
                </div>
                <div class="mt-3 w-100">
                    @foreach ($users as $user)
                        @if ($user->id != Auth::id())
                            <div class="bg-white shadow-sm d-flex w-100 align-items-center justify-content-between px-3 py-3 mb-2">
                                <h5>{{ $user->name }}</h3>
                                <h5>{{ $user->email }}</h5>
                                <div class="d-flex justify-content-between w-17 rounded-0">
                                    <a class="btn btn-sm bg-maersk-primary text-white rounded-0" href="#">Modifier</a>
                                    <a class="btn btn-sm btn-danger rounded-0" href="#">Supprimer</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="d-flex align-items-center justify-content-center w-100">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="userAddModal" tabindex="-1" role="dialog" aria-labelledby="userAddModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header border-0">
                    <h4 class="modal-title">{{ __('Ajout d\'un utilisateur') }}</h4>
                </div>
                <div class="modal-body">
                    <form action="/users" id="user-add-modal" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input class="rounded-0 border-0 shadow-sm form-control"
                                name="name" type="text" id="name" placeholder="Entrer le nom">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="rounded-0 border-0 shadow-sm form-control"
                                name="email" type="email" id="email" placeholder="Entrer l'adresse email">
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="level" id="level">
                            <label class="custom-control-label" for="level"
                                data-toggle="tooltip" data-placement="right"
                                title="Permet de définir si l'utilisateur est un administrateur ou pas">
                                {{ __('Est un administrateur') }}
                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="button" id="save-user" class="btn btn-sm bg-success text-white rounded-0 shadow-sm">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
@endsection
