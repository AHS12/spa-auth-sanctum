<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Book;

class ApiBookController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        return new JsonResponse(Book::all(), 200);
    }
}
