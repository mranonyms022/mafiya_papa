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
                    <div class="row">
                        <div class="col-sm-8">
                        <table class="">
                            <tr><td class="text-center"> <img src="{{URL('images'.'/'.$userdetails->photo)}}" alt="tmp-img" style="height:200px;width:200px;"></td></tr>
                        <tr><td>Name:</td><td>{{$userdetails->name}}</td></tr>
                        <tr><td>Username:</td><td>{{$userdetails->username}}</td></tr>
                        <tr><td>Email:</td><td>{{$userdetails->Email}}</td></tr>
                        <tr><td>Phone:</td><td>{{$userdetails->phone}}</td></tr>
                        <tr><td>DOB:</td><td>{{$userdetails->dob}}</td></tr>
                        <tr><td>Address:</td><td>{{$userdetails->address}}</td></tr>
                        <tr><td>City:</td><td>{{$userdetails->city}}</td></tr>
                        <tr><td>State:</td><td>{{$userdetails->state}}</td></tr>
                        <tr><td>Country:</td><td>{{$userdetails->country}}</td></tr>
                        <tr><td>Registration Date:</td><td>{{$userdetails->created_at}}</td></tr>
                    </table>

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