@extends('admin.layout.master')
@section('master')

    @push('style')
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/admin/bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/admin/assets\pages\data-table\css\buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/admin/bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    @endpush

    <div class="page-body">
        <!-- Page-header start -->
        @include('admin.particles.page-start')

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <a href="{{route('admin.room-settings.roomCategoryAdd.view')}}" class="btn btn-success m-b-20 text-light">Add New</a>
                        <a href="{{route('admin.room-settings.roomCategoryAssign.view', $roomCategory)}}" class="btn btn-info m-b-20">Assign Room</a>
                        <div class="dt-responsive table-responsive">
                            <div id="add-row-table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="add-row-table_length">
                                            <label>
                                                Show
                                                <select name="add-row-table_length" aria-controls="add-row-table" class="form-control input-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                                entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div id="add-row-table_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="add-row-table" /></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <table id="add-row-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="add-row-table_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" aria-label="#:-" style="width: 267.641px;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" style="width: 267.641px;">Img</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" style="width: 267.641px;">Room Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" style="width: 267.641px;">Max Children</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" style="width: 267.641px;">Max Adults</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" style="width: 267.641px;">Room Size</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" style="width: 267.641px;">Total Bed</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" style="width: 267.641px;">Bed Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" aria-label="Column 5:-" style="width: 267.641px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($dataType as $item)
                                                    <tr role="row" class="odd">
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>
                                                            <img style="height: 3rem" src="{{asset('images/rooms/'.$item->cover)}}" alt="">
                                                        </td>
                                                        <td>{{$item->title}}</td>
                                                        <td>{{$item->max_child}}</td>
                                                        <td>{{$item->max_adults}}</td>
                                                        <td>{{$item->room_size}}</td>
                                                        <td>{{$item->bed_no}}</td>
                                                        <td>{{$item->bed_id}}</td>
                                                        <td>
                                                            <a href="{{route('admin.room-settings.roomCategoryDelete', $item)}}" class="btn btn-danger"><i class="feather icon-delete mr-0"></i></a>
                                                            <a href="{{route('admin.room-settings.roomCategoryUpdate.view', $item)}}" class="btn btn-success"><i class="feather icon-edit mr-0"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="add-row-table_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div>
                                    <div class="col-xs-12 col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="add-row-table_paginate">
                                            {{$dataType->onEachSide(1)->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    {{-- model  --}}
    <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{route('admin.room-settings.floorAdd')}}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewLabel">Add new floor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-block">
                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">Floor Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"/>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">Total Room</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="no_room"/>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">Start Room No</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="st_room"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
