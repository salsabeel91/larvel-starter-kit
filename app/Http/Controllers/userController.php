<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class userController extends Controller
{
    //
    public function index()
    {
    	$users = [
    		'0' => [
    			'firstname' => 'nameone',
    			'place' => 'India'
    		],
    		'1' => [
    			'firstname' => 'nametwo',
    			'place' => 'Dubai'
    		]
    	];
    	return view('admin.users.index', compact('users'));

    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	User::create($request->all());
    	return 'success';
    }
    
}
