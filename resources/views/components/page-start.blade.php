<!-- Page-header start -->
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4 class="text-capitalize">{{$header}}</h4>
                    <span><code class="text-uppercase">{{request()->segment(2)}}</code> Portal</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    @if (!empty(request()->segment(1)))
                        <li class="breadcrumb-item text-capitalize"><a href="{{url('/admin')}}"> {{request()->segment(1)}} </a></li>
                    @endif

                    @if (!empty(request()->segment(2)))
                        <li class="breadcrumb-item text-capitalize"><a href="{{url('/admin/'.request()->segment(2))}}">{{request()->segment(2)}}</a></li>
                    @endif

                    @if (!empty(request()->segment(3)))
                        <li class="breadcrumb-item text-capitalize"><a href="{{url()->current()}}">{{request()->segment(3)}}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
