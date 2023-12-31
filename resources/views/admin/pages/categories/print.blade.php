@extends('admin.pages.master')

@section('content')
<h1>Category List</h1>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category_data as $key=>$category_data)
    {{-- @foreach($category_data as $item) --}}
    <tr>
      <th scope="row">{{$category_data->id}}</th>
      <td>{{$category_data->category_name}}</td>
      <td>{{$category_data->category_description}}</td>
      <td>
        <a class ="btn btn-primary btn-sm" href="{{route('category.edit',$category_data->id)}}">Edit</a>
        <a class ="btn btn-danger btn-sm" href="{{route('category.delete',$category_data->id)}}">Delete</a>
        <a class ="btn btn-primary btn-sm" href="#">View</a>
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
</div>

@endsection