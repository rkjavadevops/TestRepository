<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;



class RedisController extends Controller
{
    public function index(){
        Redis::set('user:1:first_name', 'RamakrishnaD');
        
        var_dump(Redis::get('testkey'));
        return 'testing Redis';
    }

    
}
