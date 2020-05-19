@extends('backpanel/layouts.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="users-list-wrapper">
            <div class="users-list-filter px-1" style="padding-bottom: 15px"> 
                <div class="col-12 col-sm-6 pull-right col-lg-3">
                    <a href="{{ url('/backpanel/user/adduser') }}"><button class="btn btn-block btn-primary glow">Add new</button></a>
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
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="users-list-datatable_length">
                                                <label>Show 
                                                    <select name="users-list-datatable_length" aria-controls="users-list-datatable" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="users-list-datatable_filter" class="dataTables_filter">
                                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="users-list-datatable"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="users-list-datatable" class="table dataTable no-footer" role="grid" aria-describedby="users-list-datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="users-list-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="id: activate to sort column descending" style="width: 49.8182px;">id</th>
                                                        <th class="sorting" tabindex="0" aria-controls="users-list-datatable" rowspan="1" colspan="1" aria-label="name: activate to sort column ascending" style="width: 231.636px;">name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="users-list-datatable" rowspan="1" colspan="1" aria-label="email: activate to sort column ascending" style="width: 161.091px;">Email</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="edit" style="width: 74.5455px;">edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>  
                                                @foreach ($users as $user)
                                                    <tr role="row">
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td></td>
                                                    </tr>
                                                @endforeach                             
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="users-list-datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 36 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="users-list-datatable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="users-list-datatable_previous"><a href="#" aria-controls="users-list-datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="users-list-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="users-list-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="users-list-datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="users-list-datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                    <li class="paginate_button page-item next" id="users-list-datatable_next"><a href="#" aria-controls="users-list-datatable" data-dt-idx="5" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
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
@endsection
