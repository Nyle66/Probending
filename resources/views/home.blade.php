@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Accueil</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="center">

                        <h1>Welcome in the first Pro-Bending Game 2.0</h1>
                        <br><br>
                        <button class="buttonAccueil"><a href="{{ url('/profil') }}">Go to Profil</a></button>
                        <br><br>
                        <button class="buttonAccueil"><a href="{{ url('/game') }}">Go to Game Stats</a></button>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
