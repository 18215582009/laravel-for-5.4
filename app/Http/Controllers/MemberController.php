<?php

namespace App\Http\Controllers;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * 显示信息
     *
     * @param int $id
     * @return Response
     */
    public function info($id)
    {
       return DB::insert('insert into admin_user(name ,age ) values(?,?)',['xiewen',18]);
    }
}
