<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Button trigger modal -->

                    <button class="btn btn-outline-danger float-right mb-2" data-toggle="modal"
                        data-target="#exampleModal">
                        Add User
                    </button>
                    @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{Session::get('message')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table class="table table-hoverable display" id="myTable">
                        <thead>
                           
                            <tr>
                                <th>Name</th>
                                <th>Email ID</th>
                                <th>Mobile Number</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users=App\Models\AppUsers::all() as $user) 
                            <tr>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->phone}}</td>
                              <td>Active</td>
                              <td>
                                  <a href="{{route('delete',[$user->id])}}" class="btn btn-danger btn-xs">Delete</a>
                                  <a href="{{url('/edit-data',[$user->id])}}" class="btn btn-success btn-xs">Edit</a>
                                  <a href="{{route('view',[$user->id])}}" class="btn btn-warning btn-xs">View</a>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('add-user')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Name:</label>
                                            <input type="text" name="name" placeholder="Enter Your Name"
                                                class="form-control" value="{{ old('name') }}">
                                            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Username:</label>
                                            <input type="text" name="username" placeholder="Create A username"
                                                class="form-control" value="{{ old('username') }}">
                                            @error('username')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Email ID:</label>
                                            <input type="text" name="email" placeholder="Create A username"
                                                class="form-control" value="{{ old('email') }}">
                                            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Password:</label>
                                            <input type="password" name="password" placeholder="Create A username"
                                                class="form-control" value="{{ old('password') }}">
                                            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Confirm Password:</label>
                                            <input type="password" name="cpassword" placeholder="Create A username"
                                                class="form-control" value="{{ old('cpassword') }}">
                                            @error('cpassword')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Mobile Number:</label>
                                            <input type="text" name="phone" placeholder="Create A username"
                                                class="form-control" value="{{ old('phone') }}">
                                            @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Profile Image:</label>
                                            <input type="file" name="photo" placeholder="Create A username"
                                                class="form-control">
                                            @error('photo')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>DOB:</label>
                                            <input type="date" name="dob" placeholder="Create A username"
                                                class="form-control" value="{{ old('dob') }}">
                                            @error('dob')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Address:</label>
                                            <input type="text" name="address" placeholder="Create A username"
                                                class="form-control" value="{{ old('address') }}">
                                            @error('address')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>City:</label>
                                            <input type="text" name="city" placeholder="Create A username"
                                                class="form-control" value="{{ old('city') }}">
                                            @error('city')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>State:</label>
                                            <input type="text" name="state" placeholder="Create A username"
                                                class="form-control" value="{{ old('state') }}">
                                            @error('state')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Country:</label>
                                            <input type="text" name="country" placeholder="Create A username"
                                                class="form-control" value="{{ old('country') }}">
                                            @error('country')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit"
                                            class="form-control btn btn-outline-success text-center">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary text-black"
                                    data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
</x-app-layout>