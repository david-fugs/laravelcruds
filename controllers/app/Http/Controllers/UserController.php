<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        //traer todos los datos
        $users = User::all();
        //datos con where
        // $users = User::where('age', '>', 25)->orderBy('age','asc')->get();
        //compact es para generar el array de ['users' => $users ] y pasarlo a la vista
//otra forma de traer las cosas pero es mejor el user all
    //    $users = DB::select(DB::raw("SELECT * FROM users "));
        return view('user.index', compact('users'));
    }
    public function create()
    {
        $user = new User;
        $user->name = 'juanjo';
        $user->email = "hola@gmail.com";
        $user->password = 1234;
        $user->age = 25;
        $user->address = "calle 42 8 1";
        $user->zip = 88991;
        $user->save();

        User::create([
            'name' => 'pacho',
            'email' => 'hola1@gmail.com',
            'password' => 12345,
            'age' => 55,
            'address' => 'calle 42 8 21',
            'zip' => 88991,

        ]);
        User::create([
            'name' => 'pedro',
            'email' => 'hola21@gmail.com',
            'password' => 12345,
            'age' => 65,
            'address' => 'calle 42 8 21',
            'zip' => 88991,

        ]);
        return redirect()->route('user.index');
    }
}
