<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Santo;

class MainController extends Controller
{
    
    public function home() {

        $santi = Santo::orderBy('created_at', 'DESC') -> get();

        // $data = [
        //     'santi' => $santi
        // ];

        return view('pages.home', compact('santi'));
    }

    public function santoShow($id) {

        $santi = Santo::find($id);
        $data = [
            'santo' => $santo
        ];
        return view('pages.santoShow', $data);
    }

    public function santoDestroy($id) {

        $santo = Santo::find($id);
        $santo -> delete();
      
        return redirect() -> route('home');
    }
}