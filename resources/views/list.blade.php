@extends('layout')
@section('title', 'Employees list')
@section('content')

<div class="row">
    <div class="col-md-3 m-4">
        <a class="btn btn-success" href="{{ route('employees.create') }}">Add new employee</a>
    </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employees as $employee)
    <tr>
      <th scope="row">{{ $employee->id }}</th>
      <td>{{ $employee->first_name }}</td>
      <td>{{ $employee->last_name }}</td>
      <td>{{ $employee->email }}</td>
      <td>{{ $employee->phone_number }}</td>
      <td>
          <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Modify</a>
          <form method="POST" action="{{ route('employees.destroy', $employee->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit" href="" class="btn btn-danger">Delete</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection