@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Proposal List</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Proposal No.</th>
        <th>Project Name</th>
        <th>Project Type</th>
        <th>Contact Name</th>        
      </tr>
    </thead>
    <tbody>
      @foreach ($proposal as $element)
        <tr>
          <td>{{$element->proposal_no}}</td>
          <td>{{$element->project_name}}</td>
          <td>{{$element->project_type}}</td>
          <td>{{$element->contact_name}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
