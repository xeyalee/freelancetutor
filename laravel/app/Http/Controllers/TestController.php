<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function bosluq()
    {
      return view('layouts.bosluq');
    }
    public function idareci()
    {
      return view('layouts.idareci');
    }
    public function telebe()
    {
      return view('layouts.telebe');
    }
    public function muellim()
    {
      return view('layouts.muellim');
    }
     public function siyahi()
    {
      return view('layouts.siyahi');
    }
    public function kateqoriya()
    {
      return view('layouts.kateqoriya');
    }
    

}
