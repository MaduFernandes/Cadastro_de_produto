<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $dados = $request->all();

        // TODO: VERIFICAR SE O USUARIO TEM ACESSO
        if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
            return redirect()->route('admin.index');
        }
        return dd('Você não tem acesso');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
