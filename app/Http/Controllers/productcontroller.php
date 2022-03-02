<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function marbel(){
        return "Marbel - Educational Games";
    }
    public function marbelandfriends(){
        return "Marbel & Friends - Kids Games";
    }
    public function riri(){
        return "Riri - Story Books";
    }
    public function kolak(){
        return "Kolak - Kids Songs";
    }
    public function kabi(){
        return "Kabi - Islamic Apps";
    }
    public function marbeljunior(){
        return "Marbel Junior - Merchandise & Licensing";
    }
    public function keonggames(){
        return "Keong Games - Entertainment Games";
    }
}
