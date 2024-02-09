@extends('admin.layout.master')
@section('master')

    @push('style')
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css'>
    @endpush

    <x-PageStart header="Add a new activity" />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add A New Activity</h5>
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
                                        <form action="{{route('admin.activity.activityAdd')}}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Title <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="title" placeholder="Title input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Subtitle</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="subtitle" placeholder="Subtitle input field"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea name="description" cols="20" rows="7" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Max children <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <select name="max_child" class="form-control" required>
                                                        <option value="" selected="selected">-</option>
                                                        @for ($i = 1; $i <= 15; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Max adults <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <select name="max_adults" class="form-control" required>
                                                        <option value="" selected="selected">-</option>
                                                        @for ($i = 1; $i <= 15; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Max people <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <select name="max_people" class="form-control" required>
                                                        <option value="" selected="selected">-</option>
                                                        @for ($i = 1; $i <= 15; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Price <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="price" placeholder="Price input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Duration <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="duration" placeholder="Duration input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Duration unit <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <select name="duration_unit" class="form-control" required>
                                                        <option value="" selected="selected">-</option>
                                                        <option value="hours">hour(s)</option>
                                                        <option value="minutes">minute(s)</option>
                                                        <option value="days">day(s)</option>
                                                        <option value="weeks">week(s)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Latitude <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="latitude" placeholder="Latitude input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Longitude <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="longitude" placeholder="Longitude input field" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Homepage</label>
                                                <div class="col-sm-10">
                                                    <div class="form-radio">
                                                        <div class="radio radiofill radio-primary radio-inline">
                                                            <label>
                                                                <input type="radio" name="mandatory" value="1" data-bv-field="mandatory" />
                                                                <i class="helper"></i>Yes
                                                            </label>
                                                        </div>
                                                        <div class="radio radiofill radio-primary radio-inline">
                                                            <label>
                                                                <input type="radio" name="mandatory" value="0" data-bv-field="mandatory" checked />
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
