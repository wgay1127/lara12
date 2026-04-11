<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests;
use App\Models\Todos;
class TodoController extends Controller
{
    public function index(){
    try {
        $current = Todos::all();
        $response = Http::get("https://jsonplaceholder.typicode.com/todos");
        $data = json_decode($response->body(), true); // Manually decode JSON response
        $current = $current->toArray(); // Convert Eloquent collection to array
        
            dump($current); // Automatically decodes JSON response
            $data = json_decode($response->body(), true); // Manually decode JSON response

            foreach($data as $item){
                // Todos::create([
                //     'user_id' => $item['userId'],
                //     'title' => $item['title'],
                //     'details' => '',
                //     'completed' => $item['completed']
                // ]);
                dd($item);
            }
        
        $data = $response->json(); // Automatically decodes JSON response
        //$data = json_decode($response->body(), true); // Manually decode JSON response
        dd($data);

        return response()->json($data);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to fetch data'], 500);
    }
}
    }
