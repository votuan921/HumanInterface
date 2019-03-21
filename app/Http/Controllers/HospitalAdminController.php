<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalAdminController extends Controller
{
    public function index(){
        return view('HospitalAdmin.index');
    }

    public function doctor_info(){
        return view('HospitalAdmin.doctor_info');
    }

    public function staff_info(){
        return view('HospitalAdmin.staff_info');
    }

    public function edit_info(){
        return view('HospitalAdmin.hospital_info');
    }

    public function staff_edit() {
        return view('HospitalAdmin.staff_edit');
    }

    public function doctor_edit() {
        return view('HospitalAdmin.doctor_edit');
    }

    public function staff_add() {
        return view('HospitalAdmin.staff_add');
    }

    public function doctor_add() {
        return view('HospitalAdmin.doctor_add');
    }
}