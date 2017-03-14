<?php
/**
 * Created by PhpStorm.
 * User: dongyibo
 * Date: 2017/3/11
 * Time: 上午10:42
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function home(Request $request, $tag = null)
    {
        if ($tag == 'pay') {
            return view("home.pay");
        }
        if ($tag == 'free') {
            return view("home.free");
        }
        return view("home.home");
    }

    public function login(Request $request, $tag = null)
    {
        if ($tag == 'live') {
            return view("home.live", ["login" => "login"]);
        }
        $log = $request->input("log");
        $pwd = $request->input("pwd");

        if ($log == $pwd) {
            return view("home.home", ["login" => "user"]);
        } else {
            return view("home.home", ["login" => "teacher"]);
        }

    }

    public function course(Request $request, $name, $fee = null)
    {
        if ($fee != null) {
            return view('home.course', ['name' => $name, 'fee' => $fee]);
        } else {
            return view('home.freeCourse', ['name' => $name]);
        }
    }

    public function content(Request $request, $courseName, $chapter)
    {
        return view("home.video");
    }

    public function search(Request $request, $tag = null)
    {
        if ($tag == null) {
            $search = $request->input("search");
        } else {
            $search = $tag;
        }
        return view("home.search", ['search' => $search]);
    }

    public function live($name = null)
    {
        if ($name != null) {
            return view('home.liveDetail', ['name' => $name]);
        }
        return view('home.live');
    }

    public function teacher()
    {
        return view('home.teacher');
    }

    public function manage()
    {
        return view('home.manage');
    }


}