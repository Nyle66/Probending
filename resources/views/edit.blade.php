@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profil Edition</div>

                
                    <div class="center">

                        {{ Form::open(array('url'=>'editForm')) }}

                        {{Form::label('age','Your Age :')}}
                        {{Form::number('age')}}
                        <br><br>
                        {{Form::label('avatar','Your Avatar URL :')}}
                        {{Form::text('avatar')}}
                        <br><br>
                        {{Form::label('sexe','Your gender :')}}
                        {{Form::select('sexe',array(
                            'femme'=>'♀',
                            'homme'=>'♂'
                        )) }}
                        <br><br>
                        {{Form::label('win','Your Win string :')}}
                        {{Form::select('win',array(
                            'La victoire est mienne, sale gueux !'=>'La victoire est mienne, sale gueux !',
                            'Mouahaha ! Tu ne faisais pas le poids !'=>'Mouahaha ! Tu ne faisais pas le poids !',
                            "C'est tout ? je suis décu..."=>"C'est tout ? je suis décu...",
                            "Je suis le meilleur, ce n'est pas de ta faute."=>"Je suis le meilleur, ce n'est pas de ta faute.",
                            'Hop hop hop par ici la gloire !'=>'Hop hop hop par ici la gloire !',
                        )) }}
                        <br><br>
                        {{Form::label('fail','Your fail string :')}}
                        {{Form::select('fail',array(
                            'Newbie un jour, newbie toujours...'=>'Newbie un jour, newbie toujours...',
                            'Argh ! Uné défaite de plus...'=>'Argh ! Uné défaite de plus...',
                            'Le monde en a après moi...'=>'Le monde en a après moi...',
                            'Noon ! Pourquoi ? POURQUOI ?!'=>'Noon ! Pourquoi ? POURQUOI ?!',
                            'Aie. Ca pique.'=>'Aie. Ca pique.',
                        )) }}
                        <br><br><br>
                        {{Form::submit('Edit')}}<br><br>

                        {{ Form::close() }}
                        
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection