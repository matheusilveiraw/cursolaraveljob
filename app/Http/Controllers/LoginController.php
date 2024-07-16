<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function auth(Request $request) {

        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'o campo email é obrigátorio',
            'email.email' => 'o email não é válido',
            'password.required' => 'o campo senha é obrigatório também'
        ]);

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended(('admin/dashboard'));
        } else { 
            return redirect()->back()->with('erro', 'Usuário ou senha inválida.');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('site.index'));
     }

     public function create(Request $request) {
        return view('login.create');
     }
}
