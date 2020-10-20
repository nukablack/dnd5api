<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $fields = ['id', 'user_role', 'nickname', 'email', 'password'];
        $users = User::all();

        $result = [];

        foreach ($users as $user) {
            $newElement = [];
            foreach ($fields as $field) {
                $newElement[$field] = $user->$field;
            }

            array_push($result, $newElement);
        }

        return $result;
    }

    public function show($id){
        $result = [];
        $fields = ['id', 'user_role', 'nickname', 'email', 'password'];

        $user = User::find($id);

        foreach ($fields as $field){
            $result[$field] = $user->$field;
        }

        return $result;

    }

    public function store(Request $request){
        if (!is_null($request)){
            $exists = false;

            $nickname = $request->get('nickname');
            $email = $request->get('email');

            $nickname_exists = User::where('nickname', '=', $nickname)->first();
            $email_exists = User::where('email', '=', $email)->first();

            if (!is_null($nickname_exists) || !is_null($email_exists)){
                $exists = true;
            } else {
                $exists = false;
            }

            if (!$exists){
                $user = new User();

                $user->user_role = 'player';
                $user->nickname = $nickname;
                $user->email = $email;
                $user->password = bcrypt($request->get('password'));

                $user->save();
                $message = 'El usuario se ha registrado correctamente.';

            } else{
                $message = 'El usuario no ha podido registrarse';
            }

            return $message;
        }
    }
}
