@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
<div class="bg-white shadow-lg rounded-lg">
<div class="px-6 py-4">
<h1 class="text-3xl font-semibold mb-4">Détails du personnel</h1>
<a href="{{ route('admin.index') }}" class="btn btn-primary btn-sm float-right mb-4">Retour</a>
<table class="table w-full">
<tbody>
<tr>
<td class="font-semibold">Nom:</td>
<td>{{ $personnel->Nom }}</td>
</tr>
<tr>
<td class="font-semibold">Prénom:</td>
<td>{{ $personnel->Prenom }}</td>
</tr>
<tr>
<td class="font-semibold">Adresse:</td>
<td>{{ $personnel->Adresse }}</td>
</tr>
<tr>
<td class="font-semibold">Email:</td>
<td>{{ $personnel->Email }}</td>
</tr>
<tr>
<td class="font-semibold">Téléphone:</td>
<td>{{ $personnel->Telephone }}</td>
</tr>
<tr>
<td class="font-semibold">Poste:</td>
<td>{{ $personnel->Poste }}</td>
</tr>
<tr>
<td class="font-semibold">Salaire:</td>
<td>{{ $personnel->Salaire }}</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
@endsection