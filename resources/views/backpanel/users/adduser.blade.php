@extends('backpanel/layouts.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
    <section class="users-edit">
            <div class="card">
                <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title" style="color: #009C9F">
                            @if(isset($users[0]->id))
                                Edit User 
                            @else
                                Add User
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- users edit account form start -->
                        <form novalidate="" action="{{ url('/backpanel/users/submituser') }}" method="post/">
                            @if(count($errors))
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <br/>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

                            <input type="hidden" name="id" value="@isset($users[0]->id){{ $users[0]->id }}@endisset">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Name" required="" data-validation-required-message="This name field is required" name="name"value="@isset($users[0]->name){{ $users[0]->name }}@endisset">
                                        <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" required="" data-validation-required-message="This password field is required" name="password" value="">
                                        <div class="help-block"></div></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" required="" data-validation-required-message="This email field is required"  value="@isset($users[0]->email){{ $users[0]->email }}@endisset">
                                        <div class="help-block"></div></div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                        @if(isset($users[0]->id))
                                            Update 
                                        @else
                                            Add
                                        @endif
                                    </button>
                                    <button class="btn mb-1 mb-sm-0 mr-0 mr-sm-1 btn-danger glow"><a href="{{ url('/backpanel/users') }}" style="color: white">Cancel</a></button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
