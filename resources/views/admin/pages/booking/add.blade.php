@extends('admin.layout.master')
@section('master')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin')}}\assets\pages\j-pro\css\j-pro-modern.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin')}}\assets\css\style.css">
@endpush

    <x-PageStart header="Add a new Booking" />
    
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Book Now</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                    <div class="card-block">
                        <form action="j-pro/php/action.php" method="post" class="j-pro j-multistep" id="j-pro" novalidate="">
                            <!-- end /.header-->
                            <div class="j-content">
                                <fieldset class="j-active-fieldset">
                                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                                        <span>Step 1/3 - Personal info</span>
                                    </div>
                                    <!-- start name -->
                                    <div class="j-unit">
                                        <label class="j-label">Your name</label>
                                        <div class="j-input">
                                            <label class="j-icon-right" for="name">
                                                <i class="icofont icofont-ui-user"></i>
                                            </label>
                                            <input type="text" id="name" name="name" />
                                        </div>
                                    </div>
                                    <!-- end name -->
                                    <!-- start email phone -->
                                    <div class="j-row">
                                        <div class="j-span6 j-unit">
                                            <label class="j-label">Your email</label>
                                            <div class="j-input">
                                                <label class="j-icon-right" for="email">
                                                    <i class="icofont icofont-envelope"></i>
                                                </label>
                                                <input type="email" id="email" name="email" />
                                            </div>
                                        </div>
                                        <div class="j-span6 j-unit">
                                            <label class="j-label">Phone/Mobile</label>
                                            <div class="j-input">
                                                <label class="j-icon-right" for="phone">
                                                    <i class="icofont icofont-phone"></i>
                                                </label>
                                                <input type="text" id="phone" name="phone" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end email phone -->
                                </fieldset>
                                <fieldset>
                                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                                        <span>Step 2/3 - Booking details</span>
                                    </div>
                                    <!-- start guests -->
                                    <div class="j-row">
                                        <div class="j-span6 j-unit">
                                            <label class="j-label">Adult guests</label>
                                            <div class="j-input">
                                                <label class="j-icon-right" for="adults">
                                                    <i class="icofont icofont-waiter"></i>
                                                </label>
                                                <input type="text" id="adults" name="adults" />
                                                <span class="j-tooltip j-tooltip-right-top">Number of adult guests</span>
                                            </div>
                                        </div>
                                        <div class="j-span6 j-unit">
                                            <label class="j-label">Children guests</label>
                                            <div class="j-input">
                                                <label class="j-icon-right" for="children">
                                                    <i class="icofont icofont-woman-in-glasses"></i>
                                                </label>
                                                <input type="text" id="children" name="children" />
                                                <span class="j-tooltip j-tooltip-right-top">Number of children</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end guests -->
                                    <!-- start date -->
                                    <div class="j-row">
                                        <div class="j-span6 j-unit">
                                            <label class="j-label">Check-in date</label>
                                            <div class="j-input">
                                                <label class="j-icon-right" for="date_from">
                                                    <i class="icofont icofont-ui-calendar"></i>
                                                </label>
                                                <input type="text" id="date_from" name="date_from" readonly="" class="hasDatepicker" />
                                            </div>
                                        </div>
                                        <div class="j-span6 j-unit">
                                            <label class="j-label">Check-out date</label>
                                            <div class="j-input">
                                                <label class="j-icon-right" for="date_to">
                                                    <i class="icofont icofont-ui-calendar"></i>
                                                </label>
                                                <input type="text" id="date_to" name="date_to" readonly="" class="hasDatepicker" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end date -->
                                </fieldset>
                                <fieldset>
                                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                                        <span>Step 3/3 - Comments</span>
                                    </div>
                                    <!-- start message -->
                                    <div class="j-unit">
                                        <label class="j-label">Comments/Message</label>
                                        <div class="j-input">
                                            <textarea spellcheck="false" name="message"></textarea>
                                        </div>
                                    </div>
                                    <!-- end message -->
                                </fieldset>
                                <!-- start response from server -->
                                <div class="j-response"></div>
                                <!-- end response from server -->
                            </div>
                            <!-- end /.content -->
                            <div class="j-footer">
                                <button type="submit" class="btn btn-primary j-multi-submit-btn j-hiddenBtn">Booking</button>
                                <button type="button" class="btn btn-primary j-multi-next-btn">Next</button>
                                <button type="button" class="btn btn-default m-r-20 j-multi-prev-btn j-hiddenBtn">Back</button>
                            </div>
                            <!-- end /.footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@push('script')
    <script type="text/javascript" src="{{url('assets/admin')}}\assets\pages\j-pro\js\jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="{{url('assets/admin')}}\assets\pages\j-pro\js\jquery.j-pro.js"></script>
    <script type="text/javascript" src="{{url('assets/admin')}}\assets\pages\j-pro\js\custom\booking-multistep.js"></script>
@endpush

@endsection
