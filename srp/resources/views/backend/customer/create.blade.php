@extends('layouts.app')

@section('title', 'Customer Registration')

@section('content')
<div class="content pb-0">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <!-- card start -->
            <div class="card border-0 rounded-0">
                <div class="card-header d-flex align-items-center justify-content-between gap-2 flex-wrap">
                    <h6 class="fs-18 mb-0">Customer Registration</h6>
                    <a href="customers.html" class="btn btn-primary btn-sm">
                        Back <i class="ti ti-chevron-right ms-1"></i>
                    </a>
                </div>

                <form action="save-customer.html" method="POST" enctype="multipart/form-data">
                    <div class="card-body pb-0">
                        <div class="row">

                            <!-- Basic Info -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Customer Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">GST Number</label>
                                    <input type="text" class="form-control" name="gst">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">PAN Number</label>
                                    <input type="text" class="form-control" name="pan">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Primary Location</label>
                                    <input type="text" class="form-control" name="primary_location">
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="col-lg-12">
                                <h6 class="fw-semibold mt-3">Billing / Shipping Address</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control" name="addresses[0][address]">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" name="addresses[0][city]">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" name="addresses[0][state]">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Pincode</label>
                                            <input type="text" class="form-control" name="addresses[0][pincode]">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm">+ Add Address</button>
                            </div>

                            <!-- Transport & Vendor -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Transporter</label>
                                    <select name="transport_terms" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Paid">abc</option>
                                        <option value="To-Pay">pqr</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Transport Terms</label>
                                    <select name="transport_terms" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Paid">Paid</option>
                                        <option value="To-Pay">To-Pay</option>
                                        <option value="International">International</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Payment Terms</label>
                                     <option value="">Select</option>
                                        <option value="Paid">Paid</option>
                                        <option value="To-Pay">To-Pay</option>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Cylinder terms</label>
                                     <option value="">Select</option>
                                        <option value="Paid">Paid</option>
                                        <option value="To-Pay">To-Pay</option>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Shadecard Validity</label>
                                    <input type="date" class="form-control" name="shadecard_validity">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Preferred Vendor</label>
                                    <input type="text" class="form-control" name="preferred_vendor">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Tolerance Limit</label>
                                    <input type="number" class="form-control" name="tolerance_limit">
                                </div>
                            </div>

                            <!-- Contacts -->
                            <div class="col-lg-12">
                                <h6 class="fw-semibold mt-3">Contacts</h6>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="contacts[0][name]">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Designation</label>
                                            <input type="text" class="form-control" name="contacts[0][designation]">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="contacts[0][email]">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control" name="contacts[0][phone]">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm">+ Add Contact</button>
                            </div>

                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer d-flex align-items-center justify-content-end">
                        <button type="button" class="btn btn-light btn-sm me-2">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm">Save Customer</button>
                    </div>
                </form>
            </div>
            <!-- card end -->
        </div>
    </div>
</div>


@endsection
