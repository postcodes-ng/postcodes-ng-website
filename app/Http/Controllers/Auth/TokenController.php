<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Helpers\AjaxHelper;
use Illuminate\Support\Facades\Log;

class TokenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('ajax');
    }

    public function getToken() {
        $response = [];
        $token = AjaxHelper::generateAPIJWT();
        $response['apiToken'] = strval($token);
        return $response;
    }
}
