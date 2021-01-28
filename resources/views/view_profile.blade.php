@extends('layout')


@section('contenu')

    <div>
        @foreach($utilisateur as $utilisateurs)
            <div>
                {{$utilisateurs->name}}
                {{$utilisateurs->email}}
            </div>
            <button type="submit">delete tout les utilisateurs</button>
            {{$utilisateurs->forceDelete()}}
        @endforeach
        <p>email</p>
        <input type="text" name="useremail">
        <p>nom</p>
        <input type="text" name="username">
        <p>mot de passe</p>
        <input type="text" name="usermdp">

    </div>

@endsection