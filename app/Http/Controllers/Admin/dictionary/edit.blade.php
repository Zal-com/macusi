@extends('layouts.app')
@section('content')
    <x-admin_sidebar :url="$url"/>
    <div class="right px-4">
        <h1>Modification du mot "{{$mot->enMacusi}}"</h1>
        <div class="border rounded-1 shadow-sm p-lg-3">
            <form action="{{-- route('admin.members.update' ,$user->id) --}}" method="post">
                @csrf
                @method('PUT')
                <div>
                    <div>
                        <label for="types">Types</label>
                        <input type="select" id="types" name="types" multiple>
                               @if(old('types'))
                                   value="{{ old('types') }}"
                               @else
                                   value="{{ dd($mot->types) }}"
                               @endif
                               class="@error('types') is-invalid @enderror">

                        @error('types')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button>Modifier</button>
                    <a href="{{ back() }}">Annuler</a>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <h2>Liste des erreurs de validation</h2>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
