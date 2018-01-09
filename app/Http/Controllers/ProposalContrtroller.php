<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proposal;

class ProposalContrtroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // /proposals 
        $proposals = Proposal::all();
        $props  = array(
            'proposals' => $proposals 
        );
        return view('index', $props);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // /proposals/create

        //Get the last id
        $last_id =  Proposal::orderBy('id', 'desc')->first();
        $arr = array('last_id' => $last_id->id);

        return view('create', $arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /proposals

        //Validation 
        $this->validate(request(),[
            'project_name' => 'required',
            'contact_name' => 'required'
        ]);

        //Get the last id
        $last_id =  Proposal::orderBy('id', 'desc')->first();
        $arr = array('last_id' => $last_id->id);

        //create a new proposal using request data

        $proposal = new Proposal;

        $proposal->proposal_type = request('proposal_type');
        $proposal->proposal_no = request('proposal_type')."-".$last_id->id;
        $proposal->project_name = request('project_name');
        $proposal->project_type = request('project_type');
        $proposal->contact_name = request('contact_name');
        $proposal->contact_mobile = request('contact_mobile');
        $proposal->contact_email = request('contact_email');
        $proposal->notes = request('notes');

        // Save it to the database
        $proposal->save();

        // And then redirect to the home page 
        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // GET /proposals/{id}
        $proposal = Proposal::find($id);

        $arr = array('proposal' => $proposal );

        return view('proposal', $arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // GET /proposals/{id}/edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // PATCH /proposals/{id}

        $proposal = Proposal::find($id);
        $arr = array('proposal' => $proposal );

        return view('update',$arr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE /proposals/{id}
    }
}
