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
                        <a href="{{route('admin.customer.add.view')}}" id="addRow" class="btn btn-primary m-b-20">+ Add {{request()->segment(2)}}</a>
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
                                                    <th
                                                        class="sorting_asc"
                                                        tabindex="0"
                                                        aria-controls="add-row-table"
                                                        rowspan="1"
                                                        colspan="1"
                                                        aria-label="Column 1:-"
                                                        aria-sort="ascending"
                                                        style="width: 267.641px;"
                                                    >
                                                        #
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" aria-label="Full Name:-" style="width: 267.641px;">Full Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" aria-label="Email:-" style="width: 267.641px;">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" aria-label="Number:-" style="width: 267.641px;">Number</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" aria-label="Column 5:-" style="width: 267.641px;">Balance</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row-table" rowspan="1" colspan="1" aria-label="Column 5:-" style="width: 267.641px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $item)
                                                    <tr role="row" class="odd">
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$item->fname}} {{$item->lname}}</td>
                                                        <td>{{$item->email}}</td>
                                                        <td>{{$item->number}}</td>
                                                        <td>{{$item->balance}}</td>
                                                        <td>
                                                            <a href="{{route('admin.customer.delete', $item)}}" class="btn btn-danger"><i class="feather icon-delete mr-0"></i></a>
                                                            <a href="{{route('admin.customer.view', ['id' => $item->id])}}" class="btn btn-primary"><i class="feather icon-eye mr-0"></i></a>
                                                            <a href="{{route('admin.customer.update.view', ['id' => $item])}}" class="btn btn-success"><i class="feather icon-edit mr-0"></i></a>
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
                                            {{$users->onEachSide(1)->links()}}
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

@endsection
