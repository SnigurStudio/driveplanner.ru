<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:100|email|min:5',
            'password' => 'required|min:5',
        ]);
        if ( $validator->fails() )
            return Response::json($validator->getMessageBag()->toArray(), 422);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'active' => true,
        ], true))
            return Response::json([
                'success' => true,
                'redirect' => route('user.main')
            ], 200);
        else
            return Response::json([], 422);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('main'));
    }

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest', ['except' => 'logout']);
    }
}
