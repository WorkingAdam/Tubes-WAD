<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Layanan;
use App\Models\Order;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/home');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        return view('admin/home',$d);
    }

    public function depan()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'depan';
        $d['subclass'] = 'depan';
        return view('home',$d);
    }
    
    

    
    

    public function area()
    {
        if (auth()->user()->is_admin == 1) {            //admin
            return redirect()->route('admin.home');
        }elseif (auth()->user()->is_admin == 0){        //member
                return redirect()->route('member.depan');
        }
    }
}
