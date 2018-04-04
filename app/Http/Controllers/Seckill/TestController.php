<?php

namespace App\Http\Controllers\Seckill;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * 展示应用的用户列表.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::insert('insert into sh_test (user, age) values (? ,?)', ['学院君', 28]);;
        var_dump($users);
	}
}