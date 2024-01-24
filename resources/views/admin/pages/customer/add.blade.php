@extends('admin.layout.master')
@section('master')

    @push('style')
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/admin/bower_components\jquery.steps\css\jquery.steps.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/admin/assets\css\style.css">
    @endpush


    <div class="page-wrapper">
        @include('admin.particles.page-start')

        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h5>Add new customer</h5>

                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="wizard2">
                                        <section>
                                            <form class="wizard-form" id="verticle-wizard" action="{{route('admin.customer.add')}}" method="POST">
                                                @csrf
                                                <h3> Customer information </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="fname-2" class="block">First Name *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="fname-22" name="fname" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="lname-2" class="block">Last Name *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="lname-22" name="lname" type="text" class=" form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="Email-2" class="block">Email *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="Email-22" name="email" type="email" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="number-2" class="block">Mobile number *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="number-22" name="number" type="number" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="password-2" class="block">Password *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="password-22" name="password" type="password" class="form-control ">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <h3> Customer Address </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="name-2" class="block">Address</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">Select Country</div>
                                                        <div class="col-sm-12">
                                                            <select class="form-control required" name="country">
                                                                <option value="">Select State</option>
                                                                <option value="Gujarat">Gujarat</option>
                                                                <option value="Kerala">Kerala</option>
                                                                <option value="Manipur">Manipur</option>
                                                                <option value="Tripura">Tripura</option>
                                                                <option value="Sikkim">Sikkim</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="City-2" class="block">City</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="City-22" name="city" type="number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="Postcode-2" class="block">Postcode</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="Postcode-22" name="postcode" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <h3> Final </h3>
                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="Profession-2" class="block">Profession</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="Profession-22" name="profession" type="text" class="form-control required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="Company-2" class="block">Company</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="Company-22" name="company" type="text" class="form-control required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="Position-2" class="block">Position</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="Position-22" name="position" type="text" class="form-control required">
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
        <!-- Page body end -->
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
    @endpush

@endsection
