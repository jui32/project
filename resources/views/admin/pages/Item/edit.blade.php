@extends('admin.pages.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('Item.update', $Item->id) }}" method="post" enctype= 'multipart/form-data'>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" name="item_name"class="form-label">Name</label>
                        <input type="text" class="form-control" name="item_name" value="{{ $Item->name }}">
                    </div>
                    <div class="form-group">
                        <label for="InputItemImage">Item image </label>
                        <input type="file" class="form-control" name="image" value="{{ $Item->image}}" id="InputItemimage"
                            aria-describedby="emailHelp" placeholder="Add picture">
                    </div>
                    <div class="mb-3">

                        <div class="form-group">
                            <label for="">Select Category:</label>
                            <select required class="form-control" name="category_id" id=""
                                value="{{ $Item->category_name }}">
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Enter Price: </label>
                            <input value="{{ $Item->price }}" required type="number" class="form-control"
                                placeholder="Enter price" name="item_price">

                            @error('itemt_price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="">Enter Stock: </label>
                            <input value="{{ $Item->stock }}" required type="number" class="form-control"
                                placeholder="Enter Stock" name="item_stock" value="{{ $Item->item_stock }}">
                        </div>



                        <div class="form-group">
                            <label for="">Enter Item Description:</label>
                            <textarea class="form-control" placeholder="Enter product short description" name="item_description" id=""
                                cols="30" rows="5">{{ $Item->item_description }}</textarea>
                        </div>

             
                 {{-- @foreach ($categories as $cat)
                 <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                 @endforeach
                 --}}
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
