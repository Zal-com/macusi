@extends('layouts.app')

@section('content')
    <x-admin_sidebar :url="$url"/>
    <div class="right px-5">
        <h2 class="mb-4">Liste des membres</h2>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>Username</td>
                <td>E-mail</td>
                <td>Membre depuis</td>
                <td>Statut</td>
                <td>Actions</td>
            </tr>
            </thead>
            @foreach($members as $member)
                <tr>
                    <td>{{$member->username}}</td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->dateVerbose('created_at')}}</td>
                    <td>{{$member->isActivated() ? 'Activé' : 'Désactivé' }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.toggleStatus', ['id' => $member->id]) }}" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-danger btn-sm">
                                @if($member->isActivated())
                                    Désactiver
                                @else
                                    Activer
                                @endif
                            </button>
                        </form>
                        <a href="{{ route('admin.members.edit', ['id' => $member->id]) }}" class="btn btn-sm btn-primary">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
