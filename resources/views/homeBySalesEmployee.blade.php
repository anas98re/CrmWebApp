@extends('LAYOUT')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">DashboardBySalesEmployee</h1>

                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}

                    </div>
                    <hr style="width:100%;text-align:left;margin-left:0">
                </div>
                <!-- /.container-fluid -->


            <!-- End of Main Content -->
            <script src="{{ asset('Tamplate/vendor2/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('Tamplate/js/demo/chart-area-demo.js') }}"></script>
            <script src="{{ asset('Tamplate/js/demo/chart-pie-demo.js') }}"></script>

@endsection
