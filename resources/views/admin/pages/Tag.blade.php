@extends('layouts.adminindex')

@section('homepagedmin')
    <div class="top_nav">
        <table class="table table-dark">
            <a href="#">Creat Post</a>
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tag as $tags)
                <tr>
                    <th scope="row">{{$tags->id}}</th>
                    <td width="200px" >{{$tags->name}}</td>
                    <th>
                    <td ><a href="{{ URL::route('user.destroy/'.$tags->id)}}">Edit</a> </td>
                    <td ><a href="{{url('/post/delete/'.$tags->id)}}">Delete</a> </td>

                    </th>

                </tr>
            @endforeach



            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/admin/js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/admin/js/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('assets/admin/js/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('assets/admin/js/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('assets/admin/js/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/admin/js/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('assets/admin/js/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('assets/admin/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('assets/admin/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js{{ asset('assets/admin/js/moment.min.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/admin/js/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('assets/admin/js/moment.js') }}"></script>
    <script src="{{ asset('assets/admin/js/ daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/admin/js/custom.min.js') }}"></script>
@endsection
