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
        <th>Action</th>       
      </tr>
    </thead>
    <tbody>
      @foreach ($proposals as $element)
        <tr>
          <td><a href="proposal/{{{$element->id}}}">{{$element->proposal_no}}</a></td>
          <td>{{$element->project_name}}</td>
          <td>{{$element->project_type}}</td>
          <td>{{$element->contact_name}}</td>
          <td>
            <div>
              <a href="/proposal/{{$element->id}}/edit">Edit</a>
            </div>
            <div>
              <a href="">Delete</a>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
