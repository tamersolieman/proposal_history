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

        //Get the last id
      $last_id =  Proposal::orderBy('id', 'desc')->first();
      //$arr = array('last_id' => $last_id->id);

       $newProposal = new Proposal();
        $newProposal->proposal_type = $request->input('proposal_type');
        $newProposal->proposal_no = $request->input('proposal_type')."-".$last_id->id;
        $newProposal->project_name = $request->input('project_name');
        $newProposal->project_type = $request->input('project_type');
        $newProposal->contact_name = $request->input('contact_name');
        $newProposal->contact_mobile = $request->input('contact_mobile');
        $newProposal->contact_email = $request->input('contact_email');
        $newProposal->notes = $request->input('notes');

        //dd($newProposal);
        $newProposal->save();
       
      }
      //Get the last id
      $last_id =  Proposal::orderBy('id', 'desc')->first();
      $arr = array('last_id' => $last_id->id);
     
      return view('add', $arr);
    }




}
