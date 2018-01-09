@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Add Proposal</h2>

  @include('layouts.errors')

  <form class="form-horizontal" action="index" method="POST">
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
        <input class="form-control" name="proposal_no2" id="proposal_no2" value="{{$proposal->proposal_no}}" disabled="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="project_name">Project Name:</label>
      <div class="col-sm-10">
        <input class="form-control" id="project_name" name="project_name" placeholder="Enter project name" value="{{$proposal->project_name}}" {{-- required="Project Name is required" --}}>
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
        <input class="form-control" id="contact_name"  name="contact_name" placeholder="Enter contact name" value="{{$proposal->contact_name}}" {{-- required="Contact name is required" --}}>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_mobile">Contact Mobile:</label>
      <div class="col-sm-10">
        <input class="form-control" id="contact_mobile" name="contact_mobile" placeholder="Enter contact mobile" value="{{$proposal->contact_mobile}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_email">Contact Email:</label>
      <div class="col-sm-10">
        <input class="form-control" id="contact_email" name="contact_email" placeholder="Enter contact email" value="{{$proposal->contact_email}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="notes">Notes:</label>
      <div class="col-sm-10">
        <textarea  class="form-control" rows="5" id="notes" name="notes" placeholder="Enter notes" >{{$proposal->notes}}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    {{ csrf_field() }}
  </form>
</div>

@endsection
