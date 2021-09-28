<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create($data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => User::ROLE_STUDENT,
        ]);
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->create($request);

        Auth::login($user);

        return redirect('/')->with('success', 'The new account created successfully! Let is login!');
    }
}
