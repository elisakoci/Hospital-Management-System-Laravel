<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        label{
            display: inline-block;
            width: 200px;
        }
    </style>

    <!-- Required meta tags -->
    @include('admin.css')
</head>
<body>
<div class="container-scroller">



@include('admin.sidebar')

<!-- partial -->

@include('admin.navbar')
</div>


<!-- partial -->
<div class="container-fluid page-body-wrapper">



    <div class="container" align="center" style="padding-top: 50px;">


        @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}

            </div>

        @endif


        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px;">
                <label>Doctor Name</label>
                <input type="text" style="color: black;" name="name" placeholder="Enter Name" required>
            </div>
            <div style="padding: 15px;">
                <label>Phone </label>
                <input type="number" style="color: black;" name="number" placeholder="Write the number" required>
            </div>
            <div style="padding: 15px;">
                <label>Speciality</label>
                <select name="speciality" style="color: black; width: 217px;" required>
                    <option>--Select--</option>
                    <option value="skin">Skin Doctor</option>
                    <option value="heart">Heart Doctor</option>
                    <option value="eye">Eye Doctor</option>
                    <option value="nose">Nose Doctor</option>
                </select>
            </div>
            <div style="padding: 15px;">
                <label>Room Number </label>
                <input type="text" style="color: black;" name="room" placeholder="Write the room number" required>
            </div>
            <div style="padding: 15px;">
                <label>Doctor Image </label>
                <input type="file" name="file" required>
            </div>
            <div style="padding: 15px;">
                <input type="submit" class="btn btn-success" >
            </div>


        </form>
    </div>

</div>




<!-- container-scroller -->
    <!-- plugins:js -->

    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
