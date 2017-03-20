<?php

namespace App\Http\Controllers\User;

use App\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Jobs\SendEmailActivateCode;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{


    public function main()
    {
        return view('user.main');
    }




//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
}