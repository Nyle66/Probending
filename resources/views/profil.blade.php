@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profil</div>

                
                    <div class="center">
                        <div class="content">
                            <br>
                            <h2>{{$user->name}}</h2><br>
                            <span><img src='{{$profil->avatar}}' alt='avatar' class="avatar"></span><br><br>
                            <span>Age : {{$profil->age}}</span><br><br>
                            <span>Sexe : {{$profil->sexe}}</span><br><br>
                            <span>Phrase de victoire : {{$profil->victory_string}}</span><br><br>
                            <span>Phrase de défaite : {{$profil->fail_string}}</span><br><br><br>

                        </div>
                        <button class="buttonAccueil"><a href="{{ url('/edit') }}">Edit Profil</a></button><br><br>

                        <hr>
                            <h2>Statistiques</h2><br>
                            <span>Nombre de partie jouées : {{$score->games}}</span><br><br>
                            <span>Nombre de partie remportées: {{$score->win}}</span><br><br>
                            <span>Nombre de partie perdues : {{$score->fail}}</span><br><br>
                            <span>Ratio Victoire/Défaite : {{$score->ratio}}</span><br><br>
                            <span>Nombre d'attaque réussies : {{$score->hitWin}}</span><br><br>
                            <span>Nombre d'attaque loupées : {{$score->hitFail}}</span><br><br><br>
                        
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection