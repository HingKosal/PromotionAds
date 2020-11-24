@section('style')
    <link rel="stylesheet" href="{{asset('jquery.datetimepicker.min.css')}}">
    <link href="{{asset('backend/skins/square/blue.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <style>
        .multiselect {
            width: 200px;
        }

        .selectBox {
            position: relative;
        }

        .selectBox select {
            width: 100%;
            font-weight: bold;
        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #checkboxes {
            display: none;
        }

        #checkboxes label {
            display: block;
        }
    </style>
@endsection

@extends('Backend.layout.master')
@section('content')

        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard" style="padding-top:10px; padding-bottom:10px">
                                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <h1>Manage User</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row" style="display: flex;justify-content: space-between;">
                                            <div class="col-md-1">
                                                <a href="{{route('user.create')}}" type="button" class="btn btn-primary"> Add New </a>
                                            </div>

                                            <div class="col-md-1">
                                                <a class="btn btn-secondary" href="{{route('user')}}">Clear</a>
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{route('user.filter')}}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="filter" autocomplete="off" name="from_date" placeholder="From Date" aria-controls="DataTables_Table_0" required>
                                                        <input type="text" class="form-control" id="filter1" autocomplete="off"  name="to_date" placeholder="To Date" aria-controls="DataTables_Table_0" required>
                                                        <span class="input-group-prepend">
                                                        <button type="submit" class="btn btn-primary">Filter</button>
                                                    </span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{route('user.search')}}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="input-group">
                                                        <input type="search" class="form-control " name="search" placeholder="" aria-controls="DataTables_Table_0" required>
                                                        <span class="input-group-prepend">
                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                    </span>
                                                    </div>

                                                </form>
                                            </div>

                                            <div class="col-md-4" style="margin: 10px 0">
                                                <form action="{{route('user.export')}}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="multiselect">
                                                        <div class="selectBox" onclick="showCheckboxes()">
                                                            <select style="padding: 10px;">
                                                                <option>Select Columns</option>
                                                            </select>
                                                            <div class="overSelect"></div>
                                                        </div>
{{--                                                        <div id="checkboxes">--}}
{{--                                                            <label for="one">--}}
{{--                                                                --}}
{{--                                                            </label>--}}
{{--                                                            <button type="submit" class="btn btn-secondary btn-sm" >export Excel</button>--}}
{{--                                                        </div>--}}
                                                        <div id="checkboxes">
{{--                                                            @foreach($column as $key=>$item)--}}
{{--                                                                <input type="checkbox" value="{{$item}}" name="testcc[$key]">{{$item}}--}}
{{--                                                            @endforeach--}}
                                                            <label for="one">
                                                                @foreach($user as $item)
                                                                    <input type="hidden" value="{{$item->first_name}}" name="fname[]" class="check_fname_hidden">
                                                                @endforeach
                                                                <input id="select_fname" type="checkbox" name="check_fname[]" class="checkClass check_fname" value="first name">
                                                                FirstName
                                                            </label>
                                                            <label for="one">
                                                                @foreach($user as $item)
                                                                    <input type="hidden" value="{{$item->last_name}}" name="lname[]" class="check_lname_hidden">
                                                                @endforeach
                                                                <input id="select_lname" type="checkbox" name="check_lname[]" class="checkClass check_lname" value="last name">
                                                                    LastName
                                                            </label>
                                                            <label for="one">
                                                                @foreach($user as $item)
                                                                    <input type="hidden" value="{{$item->username}}" name="username[]" class="check_username_hidden">
                                                                @endforeach
                                                                <input id="select_username" type="checkbox" name="check_username[]" class="checkClass check_username" value="username">
                                                                    Username
                                                            </label>
                                                            <label for="one">
                                                                @foreach($user as $item)
                                                                    <input type="hidden" value="{{$item->email}}" name="email[]" class="check_email_hidden">
                                                                @endforeach
                                                                <input id="select_email" type="checkbox" name="check_email[]" class="checkClass check_email" value="email">
                                                                E-mail
                                                            </label>
                                                            <button type="submit" class="btn btn-secondary btn-sm" >export Excel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">

                                                <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="tbl-data" role="grid" aria-describedby="DataTables_Table_0_info" >
                                                    <thead>
                                                    <tr style="width: 100%">
{{--                                                        <th><input type="checkbox" class="checkClass" id="select_all"></th>--}}
                                                        <th># </th>
                                                        <th>First Name </th>
                                                        <th>Last Name </th>
                                                        <th>Username </th>
                                                        <th>E-mail </th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if ($user->count())
                                                        @foreach($user as $u)
                                                        <tr>
                                                            <td>
                                                                {{$u->id}}
                                                            </td>
                                                            <td>{{$u->first_name}}</td>
                                                            <td>{{$u->last_name}}</td>
                                                            <td>
                                                                <input type="hidden" id="fname" value="{{$u->username}}" class="checkClass username_check">
                                                                {{$u->username}}
                                                            </td>
                                                            <td>
                                                                <input type="hidden" id="fname" value="{{$u->username}}" class="checkClass email_check">
                                                                {{$u->email}}
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-warning btn-sm" href="{{route('password.request')}}" role="button">reset password</a>
                                                                <a class="btn btn-primary btn-sm" href="{{route('user.edit',$u->id)}}" role="button"><i class='la la-pencil'></i></a>
                                                                <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="{{route('user.delete',$u->id)}}" role="button"><i class='la la-trash-o'></i></a>
                                                                <a class="btn btn-secondary btn-sm" href="{{route('user.view', $u->id)}}" role="button"><i class='la la-eye'></i></a>
                                                            </td>
                                                        </tr>

                                                        @endforeach
                                                        @else
                                                            <tr>
                                                                <td>No data</td>
                                                                <td>No data</td>
                                                                <td>No data</td>
                                                                <td>No data</td>
                                                                <td>No data</td>
                                                                <td>No data</td>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                </table>

                                                <div class="export" style="display: flex;">
                                                    <form action="{{route('user.pdf')}}" method="post">
                                                        {{csrf_field()}}
                                                        @if($user->count())
                                                            @foreach($user as $item)
                                                                <input type="hidden" value="{{$item->id}}" name="search_id[]">
                                                            @endforeach
                                                            <button type="submit" class="btn btn-secondary btn-sm" >export PDF</button>
                                                        @endif
                                                    </form>
                                                    <div class="gap" style="margin: 0 10px;"></div>
                                                    <form action="{{route('user.excel')}}" method="post">
                                                        {{csrf_field()}}
                                                        @if($user->count())
                                                            @foreach($user as $excel)
                                                                <input type="hidden" value="{{$excel->id}}" name="excel[]">
                                                            @endforeach
                                                            <button type="submit" class="btn btn-secondary btn-sm" >export Excel</button>
                                                        @endif
                                                    </form>
                                                </div>
                                                <div style="display: flex; justify-content: flex-end">
                                                    {{$user->links()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
@section('scripts')
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{asset('jquery.datetimepicker.js')}}"></script>
{{--    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>--}}


    <script src="{{asset('backend/icheck.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#filter').datetimepicker({
                format: "Y-m-d"
            });
            $('#filter1').datetimepicker({
                format: "Y-m-d",
            });
        });

        $(document).ready(function(){
            $('.checkClass').iCheck({
                checkboxClass: 'icheckbox_square-blue'
            });

            $('#select_fname').on('ifChecked', function() {
                $('.check_fname').iCheck('check');
                $('.check_fname_hidden').iCheck('check');
            });
            $('#select_fname').on('ifUnchecked', function() {
                $('.check_fname').iCheck('uncheck');
                $('.check_fname_hidden').iCheck('uncheck');
            });

            $('#select_lname').on('ifChecked', function() {
                $('.check_lname').iCheck('check');
                $('.check_lname_hidden').iCheck('check');
            });
            $('#select_lname').on('ifUnchecked', function() {
                $('.check_lname').iCheck('uncheck');
                $('.check_lname_hidden').iCheck('uncheck');
            });

            $('#select_username').on('ifChecked', function() {
                $('.check_username').iCheck('check');
                $('.check_username_hidden').iCheck('check');
            });
            $('#select_username').on('ifUnchecked', function() {
                $('.check_username').iCheck('uncheck');
                $('.check_username_hidden').iCheck('uncheck');
            });

            $('#select_email').on('ifChecked', function() {
                $('.check_email').iCheck('check');
                $('.check_email_hidden').iCheck('check');
            });
            $('#select_email').on('ifUnchecked', function() {
                $('.check_email').iCheck('uncheck');
                $('.check_email_hidden').iCheck('uncheck');
            });

            // $('#select_all_email').on('ifChecked', function() {
            //     $('.email_check').iCheck('check');
            // });
            // $('#select_all_email').on('ifUnchecked', function() {
            //     $('.email_check').iCheck('uncheck');
            // });

            $('#btn_excel').click(function(e) {
                e.preventDefault();
                let token = '<?php echo csrf_token() ?>';
                // let user_ids = [];
                let user_ids = $('.checkClass:checked').map(function () {
                    return $(this).val();
                }).get();
                if (user_ids.length > 0) {
                    let url = '{!! route('excel') !!}';
                    console.log('id',user_ids);
                    window.open(`${url}/${user_ids}`,'_blank');
                    {{--$.ajax({--}}
                    {{--    url: "{{route('excel')}}",--}}
                    {{--    type: "GET",--}}
                    {{--    data: {'_token':token, 'user_ids':user_ids},--}}
                    {{--    success: function (data) {--}}
                    {{--        console.log(data);--}}
                    {{--    }--}}
                    {{--})--}}
                }
            });
        });

        let expanded = false;

        function showCheckboxes() {
            let checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }

        $(document).ready(function(){
            // $('#tbl-data').DataTable();
            let token = '<?php echo csrf_token() ?>';
            $('#table_checkbox').DatabTable({
                "processing": true,
                "serverSide": true,
                ajax :{
                    method: 'POST',
                    url : "{{route('user.export')}}",
                    data: {_token:token},

                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'username', name: 'username'},
                    {data: 'email', name: 'email'},
                ]
            })
        })
    </script>
@endsection



