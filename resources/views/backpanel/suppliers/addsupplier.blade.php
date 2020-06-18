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
                            @if(isset($suppliers[0]->id))
                                Edit Supplier 
                            @else
                                Add Supplier
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- suppliers edit account form start -->
                        <form novalidate="" action="{{ url('/backpanel/suppliers/submitsupplier') }}" method="post/">
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
                            <input type="hidden" name="id" value="@isset($suppliers[0]->id){{ $suppliers[0]->id }}@endisset">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" name="companyName" value="@isset($suppliers[0]->companyName){{ $suppliers[0]->companyName }}@endisset">
                                        <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Country</label>
                                            <select name="country" class="form-control" id="country" onchange ="CountrySelectFun();">
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}" {{ (isset($suppliers[0]->country)&& $suppliers[0]->country==$country->id)?'selected':''}}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Company Address</label>
                                            <textarea class="form-control" name="companyAdrs">@isset($suppliers[0]->companyAdrs){{ $suppliers[0]->companyAdrs }}@endisset</textarea>
                                        <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Phone</label>
                                            <input type="number" class="form-control"  name="phone" value="@isset($suppliers[0]->phone){{ $suppliers[0]->phone }}@endisset">
                                        <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control"  name="password_confirmation" value="">
                                        <div class="help-block"></div></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Contact Person</label>
                                            <input type="text" class="form-control" name="contactPerson" value="@isset($suppliers[0]->contactPerson){{ $suppliers[0]->contactPerson }}@endisset">
                                        <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>State</label>
                                            <input type="hidden" id="hiddenState" value="@isset($suppliers[0]->state){{ $suppliers[0]->state }}@endisset">
                                            <select name="state" id="state" class="form-control">
                                                
                                            </select>
                                        <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control"  name="email" value="@isset($suppliers[0]->email){{ $suppliers[0]->email }}@endisset">
                                        <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  name="password" value="">
                                        <div class="help-block"></div></div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                        @if(isset($suppliers[0]->id))
                                            Update 
                                        @else
                                            Add
                                        @endif
                                    </button>
                                    <button class="btn mb-1 mb-sm-0 mr-0 mr-sm-1 btn-danger glow"><a href="{{ url('/backpanel/suppliers') }}" style="color: white">Cancel</a></button>
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
<script type="text/javascript">
    CountrySelectFun();
    function CountrySelectFun(){
        var hiddenState = $("#hiddenState").val();
        $('#state option').remove();
        var country = $('#country').val();
        $.ajax({
            url: '{{ url("/backpanel/suppliers/getStates") }}',
            type: "GET",
            data:{'countryid': country},
            dataType: "json",
            success:function(data) {
                if (hiddenState==v.id) {
                  selected = 'selected';
                } else {
                  selected = '';
                }
                $.each(data, function(i, v) {
                    $('#state').append('<option '+selected+' value="'+ v.id +'">'+ v.name +'</option>');
                });
            }
        });
    }
</script>
@endsection
