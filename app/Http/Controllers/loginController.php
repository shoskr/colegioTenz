<?php

namespace colegio\Http\Controllers;

use Illuminate\Http\Request;
use colegio\Usuario as Usuario;

class loginController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $Usuario = usuario::all();

        $user = $request->username;
        $psaR;
        $tipo;
        foreach ($Usuario as $us) {
            if ($us->username == $user) {
                $pasR = $us->password;
                $tipo = $us->perfil;
            }
        }

        if (password_verify($request->password, $pasR)) {
            switch ($tipo) {
                case 1:
                    session_start();
                    $_SESSION['user'] = $user;

                    break;
                case 2:
                    session_start();
                    $_SESSION['user'] = $user;

                    break;
                case 3:
                    session_start();
                    $_SESSION['user'] = $user;
                    return \View::make('formUTP', compact($_SESSION['user']));
                case 4:
                    session_start();
                    $_SESSION['user'] = $user;

                    break;
            }
        } else {
            echo 'no pasa';
        }
    }

//
}
