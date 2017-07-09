<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller{
    public function index(){
      return view('fblogin');
    }
    public function callback(){
      $fb = Socialite::driver('facebook')->user();
      $usuario['nombre']  = $fb->getName();
      $usuario['nick']    = $fb->getNickname();
      $usuario['email']   = $fb->getEmail();
      $usuario['id']      = $fb->getId();
      $usuario['imagen']  = $fb->getAvatar();
      session(['usuario' => $usuario]);
      return view('logeadofb',[
        'nombre'  =>  $fb->getName(),
        'nick'    =>  $fb->getNickname(),
        'email'   =>  $fb->getEmail(),
        'id'      =>  $fb->getId(),
        'imagen'  =>  $fb->getAvatar(),
      ]);
    }

    public function redirect(){
      return Socialite::driver('facebook')->redirect();
    }
}
