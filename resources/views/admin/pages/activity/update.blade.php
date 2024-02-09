@extends('admin.layout.master')
@section('master')

    @push('style')
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css'>
    @endpush

    <x-PageStart header="Update Old Activity" />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Update old activity</h5>
                </div>
                <div class="card-block">
                    <div class="row m-b-30">
                        <div class="col-12">
                            <div class="sub-title">Activity</div>
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
                                        <form action="{{route('admin.activity.activityUpdate', $activity)}}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Title <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="title" value="{{$activity['title']}}" placeholder="Title input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Subtitle</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="subtitle" value="{{$activity['subtitle']}}" placeholder="Subtitle input field"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea name="description" cols="20" rows="7" class="form-control">{{$activity['description']}}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Max children <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <select name="max_child" class="form-control" required>
                                                        <option value="{{$activity['max_child']}}" selected="selected">{{$activity['max_child']}}</option>
                                                        @for ($i = 1; $i <= 15; $i++)
                                                            <option value="{{$i}}" @if($activity['max_child'] == $i) class="d-none" @endif>{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Max adults <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <select name="max_adults" value="{{$activity['max_adults']}}" class="form-control" required>
                                                        <option value="{{$activity['max_adults']}}" selected="selected">{{$activity['max_adults']}}</option>
                                                        @for ($i = 1; $i <= 15; $i++)
                                                            <option value="{{$i}}" @if($activity['max_adults'] == $i) class="d-none" @endif>{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Max people <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <select name="max_people" value="{{$activity['max_people']}}" class="form-control" required>
                                                        <option value="{{$activity['max_people']}}" selected="selected">{{$activity['max_people']}}</option>
                                                        @for ($i = 1; $i <= 15; $i++)
                                                            <option value="{{$i}}" @if($activity['max_people'] == $i) class="d-none" @endif>{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Price <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="price" value="{{$activity['price']}}" placeholder="Price input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Duration <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="duration" value="{{$activity['duration']}}" placeholder="Duration input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Duration unit <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <select name="duration_unit" value="{{$activity['duration_unit']}}" class="form-control" required>
                                                        <option value="{{$activity['duration_unit']}}" selected="selected">{{$activity['duration_unit']}}</option>
                                                        <option value="hours" @if($activity['duration_unit'] == "hours") class="d-none" @endif >hour(s)</option>
                                                        <option value="minutes" @if($activity['duration_unit'] == "minutes") class="d-none" @endif >minute(s)</option>
                                                        <option value="days" @if($activity['duration_unit'] == "days") class="d-none" @endif >day(s)</option>
                                                        <option value="weeks" @if($activity['duration_unit'] == "weeks") class="d-none" @endif >week(s)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Latitude <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="latitude" value="{{$activity['latitude']}}" placeholder="Latitude input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Longitude <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="longitude" value="{{$activity['longitude']}}" placeholder="Longitude input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Homepage</label>
                                                <div class="col-sm-10">
                                                    <div class="form-radio">
                                                        <div class="radio radiofill radio-primary radio-inline">
                                                            <label>
                                                                <input type="radio" name="mandatory" value="1" @if($activity['mandatory']) checked @endif data-bv-field="mandatory" />
                                                                <i class="helper"></i>Yes
                                                            </label>
                                                        </div>
                                                        <div class="radio radiofill radio-primary radio-inline">
                                                            <label>
                                                                <input type="radio" name="mandatory" value="0" @if(!$activity['mandatory']) checked @endif data-bv-field="mandatory" />
                                                                <i class="helper"></i>No
                                                            </label>
                                                        </div>
                                                    </div>
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
