@extends('backpanel/layouts.layout')

@section('content')
<style type="text/css">
    .dataTables_filter {
        float: right;
    }
</style>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="users-list-wrapper">
            <div class="users-list-filter px-1 row" style="padding-bottom: 15px"> 
                <div class="col-md-10"> 
                    <h1>Users</h1>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('/backpanel/user/adduser') }}"><button class="btn btn-block btn-primary glow">Add</button></a>
                </div><br><br>
            </div>
            <div class="users-list-table">
                <div class="card">
                    <div class="card-content">
                        @if($message = Session::get('success')) 
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{{ $message }}</strong>
                            </div><br><br>
                        @endif
                        <div class="card-body">
                            <!-- datatable start -->
                            <div class="table-responsive">
                            <div class="container">
                                <table id="users-list-datatable" class="table table-bordered data-table">
                                    <thead>
                                        <tr role="row">
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Disable/Enable</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                           
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <!-- datatable ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script type="text/javascript">
  $(function () {
    var table = $('#users-list-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ url("/backpanel/users/userslist") }}',
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'status', name: 'status', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
    
  });
  function change(user_id) {
    var status = $('.status-toggle'+user_id).is(':checked') == true ? 0 : 1; 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: '{{ url("/backpanel/users/changestatus") }}',
        data: {'status': status, 'user_id': user_id},
        success: function(data) {
          console.log(data.success)
        }
    });
  }
</script>

@endsection
