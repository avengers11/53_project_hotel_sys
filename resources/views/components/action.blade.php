@if ($type == "edit")
    <a href="{{$href}}" class="label label-primary rounded"><i class="feather icon-edit mr-0"></i></a>
@elseif($type == "delete")
    <a href="{{$href}}" class="label label-danger rounded"><i class="ti-trash"></i></a>
@elseif($type == "add")
    <a href="{{$href}}" class="label label-primary rounded"><i class="ti-plus"></i></a>
@else
    <a href="{{$href}}" class="label label-primary rounded"><i class="feather icon-add mr-0"></i></a>
@endif

