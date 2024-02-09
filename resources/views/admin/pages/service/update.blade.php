@extends('admin.layout.master')
@section('master')

    @push('style')
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css'>
    @endpush

    <x-PageStart header="Add a new service" />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add A New Service</h5>
                </div>
                <div class="card-block">
                    <div class="row m-b-30">
                        <div class="col-12">
                            <div class="sub-title">Service</div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs md-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home3" role="tab">English</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile3" role="tab">Bangla</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages3" role="tab">Hindi</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings3" role="tab">Arabic</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content p-2 card-block">

                                <div class="tab-pane active" id="home3" role="tabpanel">

                                    <div class="card-block pl-0 pr-0">
                                        <h4 class="sub-title">Write in english</h4>
                                        <form action="{{route('admin.service.serviceUpdate', $service)}}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Title *</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="title" value="{{$service['title']}}" placeholder="Title input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Short Description</label>
                                                <div class="col-sm-10">
                                                    <textarea name="short_description" cols="20" rows="7" class="form-control">{{$service['short_description']}}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Long description</label>
                                                <div class="col-sm-10">
                                                    <textarea name="long_description" cols="20" rows="7" class="form-control">{{$service['long_description']}}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Price *</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="price" value="{{$service['price']}}" placeholder="Price input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tax</label>
                                                <div class="col-sm-10">
                                                    <select name="tax" value="{{$service['tax']}}" id="" class="form-control">
                                                        <option value="{{$service['tax']}}">{{$service['tax']}}</option>
                                                        <option value="10" @if($service['tax'] == 10) class="d-none" @endif>10 VAT</option>
                                                        <option value="15" @if($service['tax'] == 15) class="d-none" @endif>15 VAT+Service</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Mandatory *</label>
                                                <div class="col-sm-10">
                                                    <div class="form-radio">
                                                        <div class="radio radiofill radio-primary radio-inline">
                                                            <label>
                                                                <input type="radio" name="mandatory" value="1" @if($service['mandatory']) checked @endif data-bv-field="mandatory" />
                                                                <i class="helper"></i>Yes
                                                            </label>
                                                        </div>
                                                        <div class="radio radiofill radio-primary radio-inline">
                                                            <label>
                                                                <input type="radio" name="mandatory" value="0" @if(!$service['mandatory']) checked @endif data-bv-field="mandatory" />
                                                                <i class="helper"></i>No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Room Category</label>
                                                <div class="col-sm-10">
                                                    <select name="room_ids[]" class="selectpicker form-control" multiple aria-label="Default select example" data-live-search="true">
                                                        <option value="1" @if(in_array(1, json_decode($service['room_ids']))) selected @endif>One</option>
                                                        <option value="2" @if(in_array(2, json_decode($service['room_ids']))) selected @endif>Two</option>
                                                        <option value="3" @if(in_array(3, json_decode($service['room_ids']))) selected @endif>Three</option>
                                                        <option value="4" @if(in_array(4, json_decode($service['room_ids']))) selected @endif>Four</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success">Submit</button>
                                                </div>
                                            </div>

                                        <form>
                                    </div>

                                </div>

                                <div class="tab-pane" id="profile3" role="tabpanel">
                                    <p class="m-0">DISABLED</p>
                                </div>
                                <div class="tab-pane" id="messages3" role="tabpanel">
                                    <p class="m-0">DISABLED</p>
                                </div>
                                <div class="tab-pane" id="settings3" role="tabpanel">
                                    <p class="m-0">DISABLED</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Material tab card end -->
        </div>
    </div>


@push('script')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="{{url('assets/admin')}}/assets\js\script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js'></script>
@endpush

@endsection
