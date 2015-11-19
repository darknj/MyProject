<?php

namespace App\Http\Controllers; //กำหนดที่อยู่ ของ Controller ที่เรียกใช้งาน

use App\Models\Profile as Profile; // กำหนดชื่อ ของ Model จากที่อยู่ของ Model ที่เราเรียกใช้งาน

class ProfileController extends Controller {

    public function getIndex() {
        header('content-type:text/html; charset=utf-8');
        $profile = Profile::where('id','1')->get();//Profile::get();
        return $profile ;//? 'Model Profile Connect Yes!' : 'Error! Model Profile Connect False!!!';
    }

}
