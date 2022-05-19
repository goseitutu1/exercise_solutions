{{--@extends('layouts.app')--}}

{{--@section('extra-css')--}}

{{--<!-- Styles -->--}}
{{--    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">--}}
{{--<script src="https://cdn.datatables.net/buttons/1.0.3/js/buttons.html5.min.js"></script>--}}
{{--<script src="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css"></script>--}}

{{--@endsection--}}

{{--@section('content')--}}

{{--    <nav aria-label="breadcrumb">--}}
{{--        <ol class="breadcrumb">--}}
{{--            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>--}}
{{--            --}}{{--             <li class="breadcrumb-item"><a href="/view-daily-activity">Activity</a></li> --}}
{{--            <li class="breadcrumb-item active" aria-current="page">All Orders</li>--}}
{{--        </ol>--}}
{{--    </nav>--}}

{{--    <div class="page-wrapper">--}}

{{--        <!-- Earnings (Monthly) Card Example -->--}}
{{--        <div class="col-xl-12 col-md-10 mb-4 col-lg-10">--}}
{{--            <div class="card border-left-success shadow h-100 py-2">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row no-gutters align-items-center">--}}
{{--                        <div class="col mr-2">--}}
{{--                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">View (Extensions)</div>--}}
{{--                            --}}{{--                            <div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-auto">--}}
{{--                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div style="overflow-x: scroll; font-size: 12px;">--}}
{{--                        {!! $dataTable->table() !!}--}}
{{--                        <table class="table table-bordered data-table">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th width="50">No</th>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Email</th>--}}
{{--                                <th width="100px">Action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    @push('dash-script')--}}
{{--        --}}{{--        <script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script>--}}
{{--        --}}{{--        <script type="text/javascript" src="{{asset('admin/js/plugins/jquery/jquery.min.js')}}"></script>--}}
{{--        --}}{{--        <script type="text/javascript" src="{{asset('admin/js/plugins/jquery/jquery-ui.min.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset('admin/js/plugins/bootstrap/bootstrap.min.js')}}"></script>--}}
{{--        <script type='text/javascript' src="{{asset('admin/js/plugins/icheck/icheck.min.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset('admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset('admin/js/plugins/owl/owl.carousel.min.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset('js/alertify.min.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset('admin/js/plugins.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset('admin/js/actions.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset("admin/js/plugins/bootstrap/bootstrap-datepicker.js")}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset("admin/js/plugins/bootstrap/bootstrap-timepicker.min.js")}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset('admin/js/plugins/bootstrap/bootstrap-select.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset("admin/js/date-time/bootstrap-datetimepicker.min.js")}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset("admin/js/plugins/daterangepicker/daterangepicker.js")}}"></script>--}}
{{--    @endpush--}}

{{--    @push('t-script')--}}
{{--        {!! $dataTable->scripts() !!}--}}

{{--        <script>--}}
{{--            const table = $('#dataTableBuilder');--}}
{{--            $('.dataTables_wrapper').removeAttr("style").css({'width': '155%', 'max-width': ''});--}}
{{--            table.removeAttr("style").css({'width': '100%', 'max-width': ''});--}}
{{--            table.addClass('table-hover');--}}
{{--            $('.dt-button').addClass('btn');--}}
{{--            $('div.dataTables_paginate').css({'margin-left': '80%'})--}}
{{--            $('ul.pagination > li.paginate_button').addClass('page-item btn');--}}
{{--            $('li.paginate_button > a').addClass('page-link');--}}
{{--            $('.dt-button').addClass('btn btn-default');--}}
{{--        </script>--}}
{{--        <script type="text/javascript">--}}
{{--            $(function () {--}}
{{--                var table = $('.data-table').DataTable({--}}
{{--                    processing: true,--}}
{{--                    serverSide: true,--}}
{{--                    ajax: "{{ route('welcome.index') }}",--}}
{{--                    columns: [--}}
{{--                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},--}}
{{--                        {data: 'name', name: 'name'},--}}
{{--                        {data: 'email', name: 'email'},--}}
{{--                        {data: 'action', name: 'action', orderable: false, searchable: false},--}}
{{--                    ]--}}
{{--                });--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endpush--}}

{{--@endsection--}}



    <!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 CRUD using Datatables</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        error=false

        function validate()
        {
            if(document.userForm.name.value !='' && document.userForm.email.value !='' )
                document.userForm.btnsave.disabled=false
            else
                document.userForm.btnsave.disabled=true
        }
    </script>
</head>
<body>

<div class="container">
    <h1 align="center">All Orders</h1>
    <br/>
{{--    <div class="row">--}}
{{--        <div class="col-lg-12 margin-tb">--}}
{{--            <div class="pull-right">--}}
{{--                <a class="btn btn-success mb-2" id="new-user" data-toggle="modal">New User</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <table class="table table-bordered data-table" >
        <thead>
        <tr id="">
            <th width="5%">CustomerId</th>
            <th width="5%">OrderDate</th>
            <th width="30%">ShipAddress</th>
            <th width="30%">ShipCity</th>
            <th width="30%">ShipCountry</th>
            <th width="30%">ShipName</th>
            <th width="20%">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</body>

<script type="text/javascript">

    $(document).ready(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('welcome.index') }}",
            columns: [
                {data: 'CustomerId', name: 'CustomerId'},
                {data: 'OrderDate', name: 'OrderDate'},
                {data: 'ShipAddress', name: 'ShipAddress'},
                {data: 'ShipCity', name: 'ShipCity'},
                {data: 'ShipCountry', name: 'ShipCountry'},
                {data: 'ShipName', name: 'ShipName'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        /* When click New customer button */
        $('#new-user').click(function () {
            $('#btn-save').val("create-user");
            $('#user').trigger("reset");
            $('#userCrudModal').html("Add New User");
            $('#crud-modal').modal('show');
        });

        /* Edit customer */
        $('body').on('click', '#edit-user', function () {
            var user_id = $(this).data('id');
            $.get('users/'+user_id+'/edit', function (data) {
                $('#userCrudModal').html("Edit User");
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled',false);
                $('#crud-modal').modal('show');
                $('#user_id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);

            })
        });
        /* Show customer */
        $('body').on('click', '#show-user', function () {
            var user_id = $(this).data('id');
            $.get('users/'+user_id, function (data) {

                $('#sname').html(data.name);
                $('#semail').html(data.email);

            })
            $('#userCrudModal-show').html("User Details");
            $('#crud-modal-show').modal('show');
        });

        /* Delete customer */
        $('body').on('click', '#delete-user', function () {
            var user_id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            confirm("Are You sure want to delete !");

            $.ajax({
                type: "DELETE",
                url: "http://localhost/laravelpro/public/users/"+user_id,
                data: {
                    "id": user_id,
                    "_token": token,
                },
                success: function (data) {

//$('#msg').html('Customer entry deleted successfully');
//$("#customer_id_" + user_id).remove();
                    table.ajax.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

    });

</script>
</html>
