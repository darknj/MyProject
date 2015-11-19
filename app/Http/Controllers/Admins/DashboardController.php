<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Admins; // กำหนดที่อยู่ของ Controller

use App\Http\Controllers\Controller; //เรียกใช้ Controller หลักของ Laravel 5.0

class DashboardController extends Controller {

    public function getIndex() {
        return view('admin.dashboard.index');
    }

}
