@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Détails du personnel
                        <a href="{{ route('admin.index') }}" class="btn btn-primary btn-sm float-right">Retour</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><strong>Nom:</strong></td>
                                    <td>{{ $personnel->Nom }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Prénom:</strong></td>
                                    <td>{{ $personnel->Prenom }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Adresse:</strong></td>
                                    <td>{{ $personnel->Adresse }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ $personnel->Email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Téléphone:</strong></td>
                                    <td>{{ $personnel->Telephone }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Poste:</strong></td>
                                    <td>{{ $personnel->Poste }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Salaire:</strong></td>
                                    <td>{{ $personnel->Salaire }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
