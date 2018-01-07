<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function create(Request $request)
    {
    	$newProposal = new Proposal();
        $newProposal->proposal_type = $request->input('proposal_type');
        $newProposal->proposal_no = $request->input('proposal_type').$request->input('proposal_no');
        $newProposal->project_name = $request->input('project_name');
        $newProposal->project_type = $request->input('project_type');
        $newProposal->contact_name = $request->input('contact_name');
        $newProposal->contact_mobile = $request->input('contact_mobile');
        $newProposal->contact_email = $request->input('contact_email');
        $newProposal->notes = $request->input('notes');

        $newProposal->save();
    }

    public function getLastID()
    {
      //Get the last id
      $last_id =  Proposal::orderBy('id', 'desc')->first();
      $arr = array('last_id' => $last_id->id);
      return ($arr);
    }
}
