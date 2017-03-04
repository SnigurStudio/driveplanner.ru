<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class RegisterController extends Controller
{

    public function create( Request $request, User $user )
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|max:100|email',
            'password' => 'required|min:5',
        ]);

        if ( $validator->fails() )
            return Response::json($validator->getMessageBag()->toArray(), 422);

        $recaptcha = false;
        if( $curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, 'secret= '.env('GOOGLE_RECAPTCHA_SECRET')."&response={$request->input('g-recaptcha-response')}");
            $recaptcha = json_decode(curl_exec($curl));
            curl_close($curl);
        }

        if ( !$recaptcha->success )
            return Response::json(['g-recaptcha-response' => ['Нужно пройти проверку'] ], 422);


        $user = User::create( $request->all() );

        return Response::json([
            'success' => true
        ], 200);

    }

}
