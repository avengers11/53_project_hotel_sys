@extends('admin.layout.master')
@section('master')

    @push('style')
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css'>
        <link rel="stylesheet" type="text/css" href="{{url('assets/admin')}}/assets\pages\advance-elements\css\bootstrap-datetimepicker.css">
        <link rel="stylesheet" type="text/css" href="{{url('assets/admin')}}/bower_components\bootstrap-daterangepicker\css\daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="{{url('assets/admin')}}/bower_components\datedropper\css\datedropper.min.css">
    @endpush

    <x-PageStart header="Add a new booking" />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-block pl-0 pr-0 pt-0">
                        <form action="{{route('admin.service.serviceAdd')}}" method="post">
                            @csrf

                            <h4 class="sub-title mt-0">User details</h4>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Checkin <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control dropper-animation" type="text" name="checkin" placeholder="Select your checkin date" readonly="readonly" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Checkout <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control dropper-animation" type="text" name="checkout" placeholder="Select your checkout date" readonly="readonly" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Total Night <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="total_night" placeholder="Total night input field" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Max Adults</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="max_adults" placeholder="Max adults input field" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Max Children</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="max_child" placeholder="Max children input field" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Assign a customer<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="selectpicker form-control bg-light border" placeholder="Old customer" data-live-search="true">
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                        </select>
                                        <button type="button" class="btn btn-primary form-control">New Customer</button>
                                        <input type="hidden" name="customer_id">
                                    </div>
                                </div>
                            </div>


                            <h4 class="sub-title mt-5">Assign a room</h4>
                            <div class="dt-responsive table-responsive">
                                <button type="button" class="label label-success btn mb-2" id="assign_new_room"><i class="feather icon-plus mr-0"></i> NEW</button>
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <table id="add-row-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="add-row-table_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Room Category</th>
                                                <th>Room No</th>
                                                <th>Adults</th>
                                                <th>Children</th>
                                                <th>Tax(%)</th>
                                                <th>Amount($)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="assign_room_wrapper">
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <h4 class="sub-title mt-5">Assign extra service</h4>
                            <div class="dt-responsive table-responsive">
                                <button type="button" class="label label-success btn mb-2" id="assign_new_service"><i class="feather icon-plus mr-0"></i> NEW</button>
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <table id="add-row-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="add-row-table_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Service Name</th>
                                                <th>Service Quantity</th>
                                                <th>Tax(%)</th>
                                                <th>Amount($)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="assign_service_wrapper">
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <h4 class="sub-title mt-5">Assign activity</h4>
                            <div class="dt-responsive table-responsive">
                                <button type="button" class="label label-success btn mb-2" id="assign_new_activity"><i class="feather icon-plus mr-0"></i> NEW</button>
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <table id="add-row-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="add-row-table_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Activity Name</th>
                                                <th>Adults</th>
                                                <th>Children</th>
                                                <th>Duration</th>
                                                <th>Date</th>
                                                <th>Tax(%)</th>
                                                <th>Amount($)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="assign_activity_wrapper">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <h4 class="sub-title mt-5">Payments</h4>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Total Tax Amount($)</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="total_tax" id="total_tax" value="00" disabled/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Total Fee($)</label>
                                <div class="col-sm-10">
                                    <input type="number" id="total_fee" class="form-control" name="total_fee" value="00" disabled/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Grand Total Amount($)</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="grand_total" value="00" disabled/>
                                </div>
                            </div>

                            <div class="dt-responsive table-responsive">
                                <button type="button" class="label label-success btn mb-2" id="assign_new_payment"><i class="feather icon-plus mr-0"></i> NEW</button>
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <table id="add-row-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="add-row-table_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Payment method</th>
                                                <th>Transaction ID</th>
                                                <th>Amount($)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="assign_payment_wrapper">
                                            <tr role="row" class="odd">
                                                <td>
                                                    <textarea name="payment_descriptions[]" class="form-control" style="width: 150px" rows="1"></textarea>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="datetime-local" name="payment_dates[]" required>
                                                </td>
                                                <td>
                                                    <select class="form-control bg-light border" name="payment_methods[]" placeholder="Select payment method" data-live-search="true">
                                                        <option value="1">Paypal</option>
                                                        <option value="2">Payonner</option>
                                                        <option value="3">Bitcoin</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" style="width: 150px" name="payment_trxs[]" class="form-control"></td>
                                                <td><input type="text" style="width: 80px" name="payment_amounts[]" class="form-control"></td>
                                                <td>
                                                    <button type="button" class="btn close-btn label label-danger rounded"><i class="mr-0 ti-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group row mt-5">
                                <div class="col-12">
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        <form>
                    </div>
                </div>
            </div>
            <!-- Material tab card end -->
        </div>
    </div>

@push('script')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="{{url('assets/admin')}}/assets\pages\advance-elements\moment-with-locales.min.js"></script>
    <script type="text/javascript" src="{{url('assets/admin')}}/assets\pages\advance-elements\bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="{{url('assets/admin')}}/bower_components\bootstrap-daterangepicker\js\daterangepicker.js"></script>
    <script type="text/javascript" src="{{url('assets/admin')}}/bower_components\datedropper\js\datedropper.min.js"></script>
    <script type="text/javascript" src="{{url('assets/admin')}}/assets\pages\advance-elements\custom-picker.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js'></script>

    <script>
        $(document).ready(function(){
            // assign room
            $("#assign_new_room").click(function(){
                $("#assign_room_wrapper").append(`
                <tr role="row" class="odd">
                    <td>
                        <select name="room_ids[]" class="form-control bg-light border" placeholder="Select room category" data-live-search="true">
                            <option value="1">Room 1</option>
                            <option value="2">Room 2</option>
                            <option value="3">Room 3</option>
                        </select>
                    </td>
                    <td>
                        <select name="room_nos"[] class="form-control bg-light border" placeholder="Select room no" data-live-search="true">
                            <option value="1">Room No 100</option>
                            <option value="1">Room No 101</option>
                            <option value="1">Room No 102</option>
                            <option value="1">Room No 103</option>
                        </select>
                    </td>
                    <td>5</td>
                    <td>2</td>
                    <td>
                        <input type="text" style="width: 80px" name="room_taxs[]" class="form-control tax_rat assign_room_tax">
                    </td>
                    <td>
                        <input type="text" style="width: 80px" name="room_amounts[]" class="form-control fee_amount assign_room_amount">
                    </td>
                    <td>
                        <button type="button" class="close-btn btn label label-danger rounded"><i class="mr-0 ti-trash"></i></button>
                    </td>
                </tr>
                `);
            });

            // assign service
            $("#assign_new_activity").click(function(){
                $("#assign_activity_wrapper").append(`
                <tr role="row" class="odd">
                    <td>
                        <select name="activity_ids[]" class="form-control bg-light border" placeholder="Select activity" data-live-search="true">
                            <option value="1">Activity 1</option>
                            <option value="2">Activity 2</option>
                            <option value="3">Activity 3</option>
                        </select>
                    </td>
                    <td>10</td>
                    <td>5</td>
                    <td>3 Days</td>
                    <td><input class="form-control" type="datetime-local"></td>
                    <td><input type="text" style="width: 80px" name="activity_taxs[]" class="form-control tax_rat"></td>
                    <td><input type="text" style="width: 80px" name="activity_amounts[]" class="form-control fee_amount"></td>
                    <td>
                        <button type="button" class="btn close-btn label label-danger rounded"><i class="mr-0 ti-trash"></i></button>
                    </td>
                </tr>
                `);
            });

            // assign service
            $("#assign_new_service").click(function(){
                $("#assign_service_wrapper").append(`
                <tr role="row" class="odd">
                    <td>
                        <select name="service_ids[]" class="form-control bg-light border" placeholder="Select services" data-live-search="true">
                            <option value="1">Service 1</option>
                            <option value="2">Service 2</option>
                            <option value="3">Service 3</option>
                        </select>
                    </td>
                    <td><input type="text" style="width: 80px" name="service_quantitys[]" class="form-control"></td>
                    <td><input type="text" style="width: 80px" name="service_taxs[]" class="form-control tax_rat"></td>
                    <td><input type="text" style="width: 80px" name="service_amounts" class="form-control fee_amount"></td>
                    <td>
                        <button type="button" class="btn close-btn label label-danger rounded close-btn"><i class="mr-0 ti-trash"></i></button>
                    </td>
                </tr>
                `);
            });

            // assign payment
            $("#assign_new_payment").click(function(){
                $("#assign_payment_wrapper").append(`
                <tr role="row" class="odd">
                    <td>
                        <textarea name="payment_descriptions[]" class="form-control" style="width: 150px" rows="1"></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="datetime-local" name="payment_dates[]" required>
                    </td>
                    <td>
                        <select class="form-control bg-light border" name="payment_methods[]" placeholder="Select payment method" data-live-search="true">
                            <option value="1">Paypal</option>
                            <option value="2">Payonner</option>
                            <option value="3">Bitcoin</option>
                        </select>
                    </td>
                    <td><input type="text" style="width: 150px" name="payment_trxs[]" class="form-control"></td>
                    <td><input type="text" style="width: 80px" name="payment_amounts[]" class="form-control"></td>
                    <td>
                        <button type="button" class="btn close-btn label label-danger rounded"><i class="mr-0 ti-trash"></i></button>
                    </td>
                </tr>
                `);
            });

            $("tbody").on('click', '.close-btn', function(){
                $(this).closest('tr').remove();
            })

            // Update total sum when fee_amount changes
            // $("tbody").on('input', '.fee_amount', function(){
            //     let feeAmount = parseFloat($(this).val());

            //     totalFeeAmount = 0;
            //     $(".fee_amount").each(function(){
            //         let value = parseFloat($(this).val());
            //         if (!isNaN(value)) {
            //             totalFeeAmount += value;
            //         }
            //     });

            //     $("#total_fee").val(totalFeeAmount);
            // });

            // // Update total sum when tax_rat changes
            // var totaltax = 0;
            // $("tbody").on('input', '.tax_rat', function(){
            //     let tax = parseFloat($(this).val());

            //     totaltax = 0;
            //     $(".tax_rat").each(function(){
            //         let value = parseFloat($(this).val());
            //         if (!isNaN(value)) {
            //             totaltax += value;
            //         }
            //     });

            //     console.log(totaltax);
            // });

            // Update total sum when tax_rat changes


            $("tbody").on('input', '.assign_room_amount', function(){
                let oldTaxs = $(this).closest('tr').find('.assign_room_tax').attr('');

                let amountValue = Number($(this).val());
                let taxValue = Number($(this).closest('tr').find('.assign_room_tax').val());

                let taxAmount = Number((amountValue*taxValue)/100).toFixed(0);

                let oldAmount = $("#total_fee");
                let totalTax = $("#total_tax");

                console.log(taxAmount);
                // oldAmount.val(Number(oldAmount.val())+amountValue);
                totalTax.val(Number(totalTax.val())-oldTaxs.val());
                totalTax.val(Number(Number(totalTax.val())+taxAmount).toFixed(2));

                oldTaxs.val(taxAmount);
            });

        });
    </script>
@endpush

@endsection
