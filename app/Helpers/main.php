<?php

    function css()
    {
        $env = App::environment();

        if ( $env == 'production' ){
            $path = resource_path().'/assets/manifests/css/rev-manifest.json';
            $file = json_decode(File::get($path), true);
            return $file['app.css'];
        } else {
            return 'app.css';
        }

    }

    function js()
    {
        $env = App::environment();

        if ( $env == 'production' ){
            $path = resource_path().'/assets/manifests/js/rev-manifest.json';
            $file = json_decode(File::get($path), true);
            return $file['app.js'];
        } else {
            return 'app.js';
        }

    }

    function checkGoogleCaptcha($token)
    {
        $recaptcha = false;
        if( $curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, 'secret= '.env('GOOGLE_RECAPTCHA_SECRET')."&response={$token}");
            $recaptcha = json_decode(curl_exec($curl));
            curl_close($curl);
        }

        return $recaptcha;
    }



?>