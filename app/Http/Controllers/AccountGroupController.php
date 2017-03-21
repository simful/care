<?php

namespace App\Http\Controllers;

class AccountGroupController extends Controller
{
    public function index()
    {
        $accountGroups = AccountGroup::all();

        return viewOrJson('accounts.index', compact('accounts'));
    }
}
