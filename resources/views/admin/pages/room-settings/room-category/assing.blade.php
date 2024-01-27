@extends('admin.layout.master')
@section('master')
    @push('style')
        <link rel="stylesheet" href="{{url('assets/admin/')}}\bower_components\select2\css\select2.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('assets/admin/')}}\assets\css\style.css">
    @endpush
    @include('admin.particles.page-start')

    <div class="row">
        <div class="col-sm-12">

            <form action="{{route('admin.room-settings.roomCategoryAssign', request()->room)}}" method="post">
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
                                        @foreach ($roomCategory as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

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
                                    @for ($i = 0; $i < $item->no_room; $i++)
                                        <label class="btn btn-out-dotted {{$btn}} btn-square col-xl-2 col-md-3 col-6" for="room{{$i.$index}}">
                                            @php
                                                $roomData = $item->rooms->pluck('assign_room')->toArray();
                                                $roomIds = $item->rooms->pluck('id')->toArray();
                                                $flattenedArray = call_user_func_array('array_merge', $roomData);
                                                $isCheck = in_array($item->st_room+$i, $flattenedArray) ? 'checked' : '';
                                                $isDisabled = !in_array(request()->room, $roomIds) ? '' : 'disabled';
                                            @endphp

                                            <input type="checkbox" name="rooms[]" id="room{{$i.$index}}" class="form-check-input" value="{{$item->st_room+$i}}" {{$isCheck}} {{$isDisabled}} >

                                            {{$item->st_room+$i}} No Room={{$isDisabled}}

                                        </label>
                                    @endfor
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
