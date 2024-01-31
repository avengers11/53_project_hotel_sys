@extends('admin.layout.master')
@section('master')
    @push('style')
        <link rel="stylesheet" href="{{url('assets/admin/')}}\bower_components\select2\css\select2.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('assets/admin/')}}\assets\css\style.css">
    @endpush
    @include('admin.particles.page-start')

    <div class="row">
        <div class="col-sm-12">

            <form action="{{route('admin.room-settings.roomCategoryAssign', request()->roomCategory)}}" method="post">
                @csrf

                <div class="card">
                    <div class="card-header">
                        <div class="card-header-left">
                            <h5>All Floor & Room List</h5>
                        </div>
                    </div>
                    <div class="card-block">

                        <div class="row">
                            <div class="col-sm-12 col-xl-4 mb-5">
                                <h4 class="sub-title">Select Room Category</h4>
                                <select class="js-example-basic-single col-sm-12" onchange="roomSelect($(this))">
                                        <option value="">Select Room</option>
                                        @foreach ($roomCategories as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        @php
                            $currentRoomNo = $roomCategory->rooms->pluck('room_no')->toArray();
                        @endphp

                        @foreach ($dataType as $index=>$item)
                            @php
                                    $btn = "btn-primary";
                                if($index==0){
                                    $btn = "btn-primary";
                                }else if($index==1){
                                    $btn = "btn-warning";
                                }else{
                                    $btn = "btn-info";
                                }
                            @endphp
                            <div class="col-12">
                                <div class="row mb-5">
                                    
                                    <button style="width: 100%" class="btn btn-success col-12">{{$item->name}}</button>
                                    @foreach ($item->rooms as $room)
                                        @php
                                            $disabled = "disabled";
                                            if(!in_array($room->room_no, $currentRoomNo) && $room->assign == true){
                                                $disabled = "disabled";
                                            }else{
                                                $disabled = "";
                                            }

                                            $isCheck = "checked";
                                            if($room->assign == true){
                                                $isCheck = "checked";
                                            }else{
                                                $isCheck = "";
                                            }
                                        @endphp
                                        <label class="btn btn-out-dotted {{$btn}} btn-square col-xl-2 col-md-3 col-6" for="room_{{$room->room_no}}">
                                            <input type="checkbox" name="rooms[]" id="room_{{$room->room_no}}" class="form-check-input" {{$isCheck}} value="{{$room->room_no}}" {{$disabled}} >
                                            {{$room->room_no}} No Room
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-sm-12 col-xl-4">
                                <button style="width: 100%" class="btn btn-primary col-12">CONFIRM</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>

    @push('script')
        <script type="text/javascript" src="{{url('assets/admin')}}/bower_components\select2\js\select2.full.min.js"></script>
        <script type="text/javascript" src="{{url('assets/admin')}}/assets\pages\advance-elements\select2-custom.js"></script>

        <script>
            function roomSelect(e){
                console.log(e.val());
                window.location.href=`{{url('admin/room-settings/room-category-assign/')}}/${e.val()}`;
            }
        </script>
    @endpush

@endsection
