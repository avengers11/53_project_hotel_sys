@extends('admin.layout.master')
@section('master')

    @push('style')
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/admin/bower_components\jquery.steps\css\jquery.steps.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/admin/assets\css\style.css">
        <style>
            #img_container{
                display: flex;
                align-items: stretch;
                gap: 10px;
                flex-wrap: wrap;
            }
            #img_container img{
                height: 4rem;
                border-radius: 7px;
            }
            #img_container2{
                display: flex;
                align-items: stretch;
                gap: 10px;
                flex-wrap: wrap;
            }
            #img_container2 img{
                height: 5rem;
                border-radius: 7px;
            }
            .tox-promotion {
                display: none;
            }
            span.tox-statusbar__branding {
                display: none;
            }
        </style>
    @endpush


        @include('admin.particles.page-start')
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h5>Add new room category</h5>

                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="wizard2">
                                        <section>
                                            <form class="wizard-form" id="verticle-wizard" action="{{route('admin.room-settings.roomCategoryUpdate', ['room' => $roomCategory->id])}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <h3>Information </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="title-2" class="block">Title *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="title-2" name="title" value="{{$roomCategory['title']}}" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="subtitle-2" class="block">Subtitle *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <textarea name="subtitle" value="{{$roomCategory['subtitle']}}" id="subtitle" cols="30" rows="10" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <h3>Description </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <textarea name="description" value="{{$roomCategory['description']}}" id="description" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <h3>Facility</h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="max_child-2" class="block">Max Children's *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="max_child-2" name="number" value="{{$roomCategory['number']}}" type="max_child" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="max_adults-2" class="block">Max Adults *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="max_adults-2" name="max_adults" value="{{$roomCategory['max_adults']}}" type="number" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">Select Facility</div>
                                                        <div class="col-sm-12">
                                                            <select class="form-control required" name="facility" id="facility" onchange="faciltySelect($(this))">
                                                                <option value="">Select Facility</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12" id="facility_container">
                                                            @if (!empty($roomCategory['facility']))
                                                                @foreach (json_decode($roomCategory['facility']) as $data)
                                                                    <button class="btn btn-primary btn-outline-primary">{{$data}}</button>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>

                                                </fieldset>
                                                <h3> Pricing </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="price-2" class="block">Price/Night *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="price-2" name="price" value="{{$roomCategory['price']}}" type="text" class="form-control required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="room_size-2" class="block">Room Size</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <select class="form-control required" name="bed_id" value="{{$roomCategory['bed_id']}}" >
                                                                <option value="">Select Room Size</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="bed_no-2" class="block">Total Bed</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="bed_no-2" name="bed_no" value="{{$roomCategory['bed_no']}}" type="text" class="form-control required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="bed_no-2" class="block">Bed Name</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <select class="form-control required" name="bed_id" value="{{$roomCategory['bed_id']}}" >
                                                                <option value="">Select Bed</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <h3> Final </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="img-2" class="block">Add Images</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input onchange="previewImages()" id="imageInput" name="img[]" multiple accept="image/*" type="file" class="form-control required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12" id="img_container">
                                                            @if (!empty($roomCategory['img']))
                                                                @foreach (json_decode($roomCategory['img']) as $img)
                                                                    <img style="height: 3rem" src="{{asset('images/rooms/'.$img)}}" alt="">
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="img-2" class="block">Cover Images</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input onchange="previewImages2()" id="imageInput2" name="cover" accept="image/*" type="file" class="form-control required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12" id="img_container2">
                                                            <img style="height: 3rem" src="{{asset('images/rooms/'.$roomCategory['cover'])}}" alt="">
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    @push('script')
        <!-- modernizr js -->
        <script type="text/javascript" src="{{url('/')}}/assets/admin/bower_components\modernizr\js\css-scrollbars.js"></script>
        <!-- i18next.min.js -->
        <script type="text/javascript" src="{{url('/')}}/assets/admin/bower_components\i18next\js\i18next.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/assets/admin/bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/assets/admin/bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/assets/admin/bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
        <!--Forms - Wizard js-->
        <script src="{{url('/')}}/assets/admin/bower_components\jquery.cookie\js\jquery.cookie.js"></script>
        <script src="{{url('/')}}/assets/admin/bower_components\jquery.steps\js\jquery.steps.js"></script>
        <script src="{{url('/')}}/assets/admin/bower_components\jquery-validation\js\jquery.validate.js"></script>
        <!-- Validation js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/assets/admin/assets\pages\form-validation\validate.js"></script>
        <!-- Custom js -->
        <script src="{{url('/')}}/assets/admin/assets\pages\forms-wizard-validation\form-wizard.js"></script>
        <script src="{{url('/')}}/assets/admin/assets\js\pcoded.min.js"></script>
        <script src="{{url('/')}}/assets/admin/assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/assets/admin/assets\js\script.js"></script>
        <script src="{{url('/')}}/assets\admin\bower_components\tinymce_6.8.2\js\tinymce\tinymce.min.js"></script>
        <script>
            function faciltySelect(e){
                $("#facility_container").append(`<input type="hidden" value='${e.val()}' name='facility[]' /><button class="btn btn-primary btn-outline-primary">${e.val()}</button>`);
            }

            // previewImages
            function previewImages() {
                const input = document.getElementById('imageInput');
                const previewContainer = document.getElementById('img_container');
                previewContainer.innerHTML = '';

                if (input.files) {
                    const files = Array.from(input.files);

                    files.forEach(file => {
                        const reader = new FileReader();

                        reader.onload = () => {
                            const img = document.createElement('img');
                            img.src = reader.result;
                            img.classList.add('preview-image');
                            previewContainer.appendChild(img);
                        };

                        reader.readAsDataURL(file);
                    });
                }
            }


            // previewImages2
            function previewImages2() {
                const input2 = document.getElementById('imageInput2');
                const previewContainer2 = document.getElementById('img_container2');
                previewContainer2.innerHTML = '';

                if (input2.files) {
                    const files2 = Array.from(input2.files);

                    files2.forEach(file => {
                        const reader2 = new FileReader();

                        reader2.onload = () => {
                            const img = document.createElement('img');
                            img.src = reader2.result;
                            img.classList.add('preview-image');
                            previewContainer2.appendChild(img);
                        };

                        reader2.readAsDataURL(file);
                    });
                }
            }

            $(document).ready(function(){
                tinymce.init({
                selector: '#description',
                height: 350,
            });
            })

        </script>




    @endpush

@endsection
