@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Add Proposal</h2>
  <form class="form-horizontal" action="/list" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="proposal_type">Proposal Type:</label>
      <div class="dropdown ">
        <select name="proposal_type">
          <option value="SBP">Business (SBP)</option>
          <option value="SDP">Digital (SDP)</option>
          <option value="SMP">Maintenance (SMP)</option>
          <option value="SQP">Quotation (SQP)</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="proposal_no" >Proposal No:</label>
      <div class="col-sm-10">
        <input class="form-control" id="proposal_no" value="{{$last_id+1}}" disabled="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="project_name">Project Name:</label>
      <div class="col-sm-10">
        <input class="form-control" id="project_name" placeholder="Enter project name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="project_type">Project Type:</label>
      <div class="col-sm-10">
        <label class="checkbox-inline"><input name="project_type" type="checkbox" value="Design">Design</label>
        <label class="checkbox-inline"><input name="project_type" type="checkbox" value="Development">Development</label>
        <label class="checkbox-inline"><input name="project_type" type="checkbox" value="Testing">Testing</label>
        <label class="checkbox-inline"><input name="project_type" type="checkbox" value="Digital Markting">Digital Markting</label>
        <label class="checkbox-inline"><input name="project_type" type="checkbox" value="Maintenance">Maintenance</label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_name">Contact Name:</label>
      <div class="col-sm-10">
        <input class="form-control" id="contact_name" placeholder="Enter contact name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_mobile">Contact Mobile:</label>
      <div class="col-sm-10">
        <input class="form-control" id="contact_mobile" placeholder="Enter contact mobile">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_email">Contact Email:</label>
      <div class="col-sm-10">
        <input class="form-control" id="contact_email" placeholder="Enter contact email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="notes">Notes:</label>
      <div class="col-sm-10">
        <textarea  class="form-control" rows="5" id="notes" placeholder="Enter notes"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
</div>
@endsection
