@extends('admin.pages.master')

@section('content')
<h1>User List</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $key=>$singleUser)
    <tr>
        <td>{{$key+1}}</td>
        <th scope="row">{{$singleUser->id}}</th>
        <td>{{$singleUser->name}}</td>
        <td>
            <img style="border-radius: 60px;" width="7%" src="{{url('/uploads/user'.$singleUser->image)}}" alt="">
        </td>
        <td>{{$singleUser->email}}</td>
        <td>{{$singleUser->role}}</td>
        <td>
            <a class="btn btn-success" href="{{route('users.edit',$singleUser->id)}}">Edit</a>
            <a class="btn btn-warning" href="{{route('users.delete',$singleUser->id)}}">Delete</a>
            <a  class="btn btn-danger"href="">View</a>
        </td>

    </tr>
        
    @endforeach

    <button onclick="printlist()">Print List</button>
    <script>
        function printlist(){
            window.print();
        }
    </script>
   
  </tbody>
</table>
@endsection