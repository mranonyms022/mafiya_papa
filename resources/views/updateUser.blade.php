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
                      @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{Session::get('message')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                         <form action="{{route('update-userData')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $dataUser->id }}">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Name:</label>
                                            <input type="text" name="name" placeholder="Enter Your Name"
                                                class="form-control" value="{{ $dataUser->name }}">
                                            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Username:</label>
                                            <input type="text" name="username" placeholder="Create A username"
                                                class="form-control" value="{{ $dataUser->username }}" readonly>
                                            @error('username')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Email ID:</label>
                                            <input type="text" name="email" placeholder="Create A username"
                                                class="form-control" value="{{$dataUser->email }}">
                                            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Password:</label>
                                            <input type="password" name="password" placeholder="Create A username"
                                                class="form-control" value="{{ $dataUser->password }}">
                                            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Mobile Number:</label>
                                            <input type="text" name="phone" placeholder="Create A username"
                                                class="form-control" value="{{$dataUser->phone }}">
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
                                                class="form-control" value="{{ $dataUser->dob }}">
                                            @error('dob')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Address:</label>
                                            <input type="text" name="address" placeholder="Create A username"
                                                class="form-control" value="{{ $dataUser->address }}">
                                            @error('address')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>City:</label>
                                            <input type="text" name="city" placeholder="Create A username"
                                                class="form-control" value="{{ $dataUser->city }}">
                                            @error('city')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>State:</label>
                                            <input type="text" name="state" placeholder="Create A username"
                                                class="form-control" value="{{ $dataUser->state }}">
                                            @error('state')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Country:</label>
                                            <input type="text" name="country" placeholder="Create A username"
                                                class="form-control" value="{{ $dataUser->country }}">
                                            @error('country')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit"
                                            class="form-control btn btn-outline-success text-center">
                                    </div>
                                </form>
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