@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>Comments</h1>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Comments</h3>
            </div>
            <div class="card-body">
                <table id="comments" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Comment</th>
                            <th>Note</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->client->name }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>{{ $comment->note }}</td>
                                <td>{{ $comment->datecomment }}</td>
                                <td>
                                    <a href="{{ route('admin.comments.show', $comment->id) }}" class="btn btn-primary">View</a>
                                    <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

