<!-- Header-->
<div class="container-xxl position-relative p-0">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
  <a href="{{route('home')}}" class="navbar-brand p-0">
  <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
  
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
  <span class="fa fa-bars"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
  <div class="navbar-nav ms-auto py-0 pe-4">
  {{-- <a href="{{route('item.category')}}" class="nav-item nav-link active">Categories</a> --}}
  <a href="{{route('home')}}" class="nav-item nav-link active " >Home</a>
  <a href="{{route('front_item')}}" class="nav-item nav-link active ">All Items</a>
 
    <div class="nav-item dropdown">
      <a class="nav-link active dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              @foreach ($headerCategories as $category)
                              <li>
                                  <a class="dropdown-item" href="  {{ route('items.under.category',$category->id) }}">{{$category->category_name}}</a>
                              </li>
                              @endforeach
                            </ul>

    </div>
    <a href="{{route('about')}}" class="nav-item nav-link active">About</a>
    <a href="{{route('contact')}}" class="nav-item nav-link active">Contact</a>
</div>
</div>

<a class="btn btn-outline-primary" href="{{route('cart.view')}}">
  <i class="bi-cart-fill me-1"></i>
  Cart
  <span class="badge bg-dark text-white ms-1 rounded-pill">
      @if(session()->has('vcart'))
          {{ count(session()->get('vcart')) }}
      @else
      0
      @endif
  </span>
</a>


<!-- Button trigger modal -->
@if (auth('customer')->user())
  {{-- <li style="list-style: none; margin-right:20px;">{{auth('customer')->user()->name}}</li> --}}
  <a class="btn btn-outline-primary" style="margin-left: 10px" href="{{route('profile.view')}}"> {{auth('customer')->user()->name}} </a>

  <a button type="button" class="btn btn-warning" style="margin-left: 10px" href="{{ route('customer.logout') }}">Logout</a>

  @else
  <button type="button" class="btn btn-success" style="margin-left: 10px" data-bs-toggle="modal" data-bs-target="#exampleModal_1">
    Login
  </button>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-warning" style="margin-left: 10px" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Registration
  </button>
  @endif

  </nav>
 
  <!-- End Header-->

{{-- login --}}

  <!-- Modal -->
<div class="modal fade" id="exampleModal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login From</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('customer.dologin')}}" method="post">
        @csrf
      <div class="modal-body">
        
        <div class="mb-3">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="mb-3">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Submit">
      </div>
    </form>
    </div>
  </div>
</div>



{{-- registration --}}

<!-- Modal -->
<form action="{{route('customer.doregister')}}" method="post" enctype="multipart/form-data">
  @csrf
  
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration From</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form">
          <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name">
          </div>

          <div class="mb-3">
            <label for="InputCustomerName">Customer image </label>
            <input type="file" class="form-control" name="image" id="InputCustomerimage" aria-describedby="emailHelp" placeholder="Enter your name">
            <small id="emailHelp" class="form-text text-muted">add image</small>
          </div>
          
          <div class="mb-3">
            <label for="">Birth Date</label>
            <input type="string" name="birth_date" class="form-control" placeholder="Enter Birth Date">
          </div>

          <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
          </div>

          <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>

          <div class="mb-3">
            <label for="">Address</label>
            <input type="string" name="address" class="form-control" placeholder="Enter address">
          </div>

          <div class="mb-3">
            <label for="">City</label>
            <input type="text" name="city" class="form-control" placeholder="Enter city">
          </div>

          <div class="mb-3">
            <label for="">State</label>
            <input type="text" name="state" class="form-control" placeholder="Enter state">
          </div>

          <div class="mb-3">
            <label for="">Zip</label>
            <input type="number" name="zip" class="form-control" placeholder="Enter zip number">
          </div>

          <div class="mb-3">
            <label for="">Phone Number</label>
            <input type="number" name="number" class="form-control" placeholder="Enter number">
          </div>

        
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>