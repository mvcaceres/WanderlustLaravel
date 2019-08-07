<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'apellido' => ['required', 'string', 'max:50'],
            'telefono' => ['required', 'string', 'max:20'],
            'direccion' => ['required', 'string', 'max:50'],
            'ciudad' => ['required', 'string', 'max:50'],
            'provincia' => ['required', 'string', 'max:50'],
            'codigoPostal' => ['required', 'string', 'max:10'],
            'foto' => ['required','image'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $request = request();

      $imagen = $request->file('foto');
      if($imagen){
        $imagenfinal=uniqid("img_").".".$imagen->extension();
        $imagen->storePubliclyAs("public/userFoto",$imagenfinal);
      }


        return User::create([
          'name' => $data['name'],
          'apellido' => $data['apellido'],
          'telefono' => $data['telefono'],
          'direccion' => $data['direccion'],
          'ciudad' => $data['ciudad'],
          'provincia' => $data['provincia'],
          'codigoPostal' => $data['codigoPostal'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'foto' => $imagenfinal
        ]);
    }
}
