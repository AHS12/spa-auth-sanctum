<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ApiUserController extends Controller
{
    public function index()
    {
        return new JsonResponse(User::all(), 200);
    }

    /**
     * Generate the logged in user informations.
     *
     * @param
     * @return mixed array
     */
    private function generateAuthenticatedUserData()
    {

        return [
            'user' => Auth::user(),
            'authCheck' => Auth::check(),
        ];
    }

    /**
     * Fetch the Authenticated user of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAuthenticatedUser(Request $request)
    {
        if (!Auth::check()) abort(401);
        return new JsonResponse($this->generateAuthenticatedUserData(), 200);
    }
}
