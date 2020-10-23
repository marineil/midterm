<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;

class AccountController extends Controller
{
    public function index() {

        $acc = Accounts::orderBy('user_id')->get();

        return view('accounts.index', ['accounts'=>$acc]);

    }
}
