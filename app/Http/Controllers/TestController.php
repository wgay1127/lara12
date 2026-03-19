<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests;
class TestController extends Controller
{
    public function index(){
{
    try {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts");
        $data = $response->json(); // Automatically decodes JSON response
        dd($data);

        return response()->json($data);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to fetch data'], 500);
    }
}   
       // $test = curl -X GET "https://jsonplaceholder.typicode.com/posts";
        dd("here not there");
    }
}
