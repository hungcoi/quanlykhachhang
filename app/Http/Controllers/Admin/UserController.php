<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class UserController extends Controller
{
    protected $userRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    // public function __construct(UserRepositoryInterface $userRepository)
    {
        // $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.users.index');
    }

}
