@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Proposal info</h2>
    <div class="form-group">
      <label class="control-label col-sm-2" for="proposal_type">Proposal Type:</label>
        {{$proposal->proposal_type}}
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="proposal_nos" >Proposal No:</label>
      <div class="col-sm-10">
        {{$proposal->proposal_no}}
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="project_name">Project Name:</label>
      <div class="col-sm-10">
        {{$proposal->project_name}}
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="project_type">Project Type:</label>
      <div class="col-sm-10">
        {{$proposal->project_type}}
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_name">Contact Name:</label>
      <div class="col-sm-10">
        {{$proposal->contact_name}}
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_mobile">Contact Mobile:</label>
      <div class="col-sm-10">
        {{$proposal->contact_mobile}}
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_email">Contact Email:</label>
      <div class="col-sm-10">
        {{$proposal->contact_email}}
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="notes">Notes:</label>
      <div class="col-sm-10">
        {{$proposal->notes}}
      </div>
    </div>
    
</div>
@endsection
