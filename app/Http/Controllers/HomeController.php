<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
    * List the proposals
    *
    * @return void
    */
    public function listProposals()
    {
      $proposal= Proposal::all();
      $arr = array('proposal' =>$proposal);
      return view('list',$arr);
    }

    /**
    * Add new proposals
    *
    * @return void
    */
    public function addProposals(Request $request)
    {
      if ($request->isMethod('POST')) {
        //Validation Here
        //

       $this->create($request);
       
      }
     
      return view('add', $this->getLastID());
    }




}
