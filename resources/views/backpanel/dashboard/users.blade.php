@extends('backpanel/layouts.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="users-list-wrapper">
            <div class="users-list-filter px-1" style="padding-bottom: 15px"> 
                <div class="col-sm-2 pull-right col-lg-1">
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
                                <div id="users-list-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="users-list-datatable" class="table dataTable no-footer" role="grid" aria-describedby="users-list-datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>id</th>
                                                        <th>name</th>
                                                        <th>Email</th>
                                                        <th>edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                           
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
<script>
    $(function () {

        var table = $('#users-list-datatable').dataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });   
    });
</script>
@endsection
