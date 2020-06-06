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
                    <h1>Suppliers</h1>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('/backpanel/suppliers/addsupplier') }}"><button class="btn btn-block btn-primary glow">Add</button></a>
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
                                <table id="suppliers-list-datatable" class="table table-bordered data-table">
                                    <thead>
                                        <tr role="row">
                                            <th>Id</th>
                                            <th>Company Name</th>
                                            <th>Contact Person</th>
                                            <th>Company Address</th>
                                            <th>Phone</th>
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
    var table = $('#suppliers-list-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ url("/backpanel/suppliers/supplierslist") }}',
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'companyName', name: 'companyName'},
            {data: 'contactPerson', name: 'contactPerson'},
            {data: 'companyAdrs', name: 'companyadrs'},
            {data: 'phone', name: 'phone'},
            {data: 'email', name: 'email'},
            {data: 'status', name: 'status', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
    
  });
  function change(supplierid) {
    var status = $('.status-toggle'+supplierid).is(':checked') == true ? 0 : 1; 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: '{{ url("/backpanel/suppliers/changestatus") }}',
        data: {'status': status, 'supplierid': supplierid},
        success: function(data) {
          console.log(data.success)
        }
    });
  }
  function supplierdelete(id) {
    swal({
      title: 'Are you sure?',
      text: 'Do you want to delete this supplier?',
      showCancelButton: true,
      confirmButtonText: 'Yes, I am sure!',
      cancelButtonText: 'No, cancel it!'
    }, function(isConfirm){
    if (isConfirm) {     
       window.location ='{{ url("/backpanel/suppliers/deletesupplier",'+id+') }}';
   } 
   // ).then((result) => {
   //    if (result.value) {
   //          window.location ='{{ url("/backpanel/suppliers/deletesupplier",'+id+') }}';
   //    } 
   //  })
})
}
</script>

@endsection
