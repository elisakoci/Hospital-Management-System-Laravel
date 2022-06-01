<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
@include('admin.sidebar')

<!-- partial -->


@include('admin.navbar')
</div>

    <div class="container-fluid page-body-wrapper">

        <div align="center">
            <table>
                <tr style="background-color: #00a8a8;">
                    <th style="padding: 10px;">Customer Name</th>
                    <th style="padding: 10px;">Email</th>
                    <th style="padding: 10px;">Phone</th>
                    <th style="padding: 10px;">Doctor Name</th>
                    <th style="padding: 10px;">Date</th>
                    <th style="padding: 10px;">Message</th>
                    <th style="padding: 10px;">Status</th>
                    <th style="padding: 10px;">Approved</th>
                    <th style="padding: 10px;">Canceled</th>
                </tr>

                @foreach($data as $appoint)

                <tr style="border: 1px solid #00a8a8;" align="center;">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>

                    <td><a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approved</a></td> <!--dedekton id ku rklikon butnonin approved-->
                    <td><a class="btn btn-danger" href="{{url('canceled', $appoint->id)}}">Canceled</a></td>


                </tr>
                @endforeach
            </table>
        </div>

    </div>
    <!-- Plugin js for this page -->
    @include('admin.script')
    <!-- End custom js for this page -->


</body>
</html>
