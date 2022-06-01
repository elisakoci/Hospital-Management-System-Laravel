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

<!-- partial -->
@include('admin.body')

<!-- container-scroller -->
    <!-- plugins:js -->

    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script');
    <!-- End custom js for this page -->
</div>

</body>
</html>
