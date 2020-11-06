<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pintores extends Controller
{
    public function menu(){
        return view ('menu');
    }

    
        public function davinci(){
            return view ('davinci');
        }

        public function vincent(){
            return view ('vincent');
        }

        public function frida(){
            return view ('frida');
        }

        public function miguel(){
            return view ('miguel');
        }

        public function pablo(){
            return view ('pablo');
        }
    
}
