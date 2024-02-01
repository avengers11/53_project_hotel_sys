@extends('admin.layout.master')
@section('master')
    <div class="page-body">
        @include('admin.particles.page-start')

        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <div class="card-header-left">
                            <h5>All Floor & Room List</h5>
                        </div>
                    </div>
                    <div class="card-block">

                        @foreach ($dataType as $i=>$item)
                            @php
                                    $btn = "btn-primary";
                                if($i==0){
                                    $btn = "btn-primary";
                                }else if($i==1){
                                    $btn = "btn-warning";
                                }else{
                                    $btn = "btn-info";
                                }
                            @endphp
                            <div class="col-12">
                                <div class="row mb-5">
                                    <button style="width: 100%" class="btn btn-success col-12">{{$item->name}}</button>
                                    @for ($i = 0; $i < $item->no_room; $i++)
                                        <button class="btn btn-out-dotted {{$btn}} btn-square col-xl-2 col-md-3 col-4">{{$item->st_room+$i}} No Room</button>
                                    @endfor
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
