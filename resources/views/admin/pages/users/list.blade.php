@extends('admin.pages.master')

@section('content')
<h1>User List</h1>

<a href="{{route('users.create')}}" class="btn btn-success">Create new User</a>
<a href="{{route('users.print')}}" class="btn btn-danger">Print</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $key=>$singleUser)
    {{-- @dd($singleUser) --}}
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$singleUser->name}}</td>
        <td>
            <img style="border-radius: 60px;" width="7%" src="{{url('/uploads/uploads/'.$singleUser->image)}}" alt="">
        </td>
        <td>{{$singleUser->email}}</td>
        <td>{{$singleUser->role}}</td>
        
        <td>
            <a class="btn btn-success" href="{{route('users.edit',$singleUser->id)}}">Edit</a>
            <a class="btn btn-warning" href="{{route('users.delete',$singleUser->id)}}">Delete</a>
        </td>

    </tr>
        
    @endforeach
   

    
  </tbody>
</table>
@endsection