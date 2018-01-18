<?php

namespace App\Http\Controllers;

use DB;
use App\Profil;
use App\User;
use App\Score;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use App\Http\Requests\editFormRequest;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function profilMethod(){

        $c = Auth::user();
        $p = Profil::where('users_id', $c->id)->first();
        $s = Score::where('users_id', $c->id)->first();

        if(isset($p) == false){

            Profil::create([
                'users_id' => $c->id,
                'avatar' => "à compléter",
                'sexe' => "à compléter",
                'age' => "à compléter",
                'victory_string' => "à compléter",
                'fail_string' => "à compléter",
            ]);

            Score::create([
                'users_id' => $c->id,
                'games' => 0,
                'win' => 0,
                'fail' => 0,
                'ratio' => 1,
                'hitWin' => 0,
                'hitFail' => 0,
            ]);

            return view('profil', array(
                'profil' => $p,
                'user'=> $c,
                'score'=> $s,
            ));
        }
        else{

            return view('profil', array(
                'profil' => $p,
                'user'=> $c,
                'score'=> $s,
            ));
        }

    }

    public function editMethod(){
        return view('edit');
    }

    public function editFormService(editFormRequest $request)
    {
        $r = $request->all();

        $age = $r['age'];
        $avatar = $r['avatar'];
        $sexe = $r['sexe'];
        $win = $r['win'];
        $fail = $r['fail'];

        $current = Auth::user();

        $profil = Profil::where('users_id', $current->id)->first();
        $profil->age = $age;
        $profil->avatar = $avatar;
        $profil->sexe = $sexe;
        $profil->victory_string = $win;
        $profil->fail_string = $fail;
        $profil->save();

        return redirect()->back();
    }

    public function gameMethod(){
        return view('game');
    }
}
