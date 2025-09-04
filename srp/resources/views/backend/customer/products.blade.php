{{-- @extends('layouts.app')

@section('content') --}}
{{-- <div class="container-fluid"> --}}

    <div class="row">

        {{-- Add New Products Card --}}
        <div class="col-md-12 d-flex">		
            <div class="card flex-fill">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h6 class="mb-0">Add New Products - ABC Pvt Ltd</h6>
                    <div class="dropdown">
                        <a class="dropdown-toggle btn btn-outline-light shadow" data-bs-toggle="dropdown" href="javascript:void(0);">
                            Actions
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">Export</a>
                            <a href="javascript:void(0);" class="dropdown-item">Import</a>
                        </div>
                    </div>							
                </div>
                <div class="card-body">
                    <form>
                        <div class="table-responsive custom-table">
                            <table class="table table-bordered table-nowrap" id="productTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>Shadecard Code</th>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        {{-- <th>Type</th> --}}
                                        {{-- <th>Foil Price</th> --}}
                                        {{-- <th>Cylinder Terms</th> --}}
                                        {{-- <th>Payment Terms</th> --}}
                                        <th>Attached Artwork(pdf)</th>
                                        <th>Artwork Details</th>
                                        <th>Cylinder Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input name="products[0][code]" class="form-control">ab-001</td>
                                        <td><input name="products[0][code]" class="form-control">manually</td>
                                        <td><input name="products[0][name]" class="form-control">manually</td>
                                        {{-- <td>
                                            <select name="products[0][type]" class="form-control">
                                                <option>In-house</option>
                                                <option>Trading</option>
                                            </select>
                                        </td> --}}
                                        <td>
                                            {{-- <input type="number" name="products[0][price_printed]" placeholder="Plain" class="form-control mb-1">
                                            <input type="number" name="products[0][price_plain]" placeholder="Printed" class="form-control"> --}}
                                        </td>
                                        {{-- <td> --}}
                                            {{-- <select name="products[0][cylinder_terms]" class="form-control mb-1">
                                                <option>Paid</option>
                                                <option>To-Pay</option>
                                            </select>
                                            <input type="number" name="products[0][cylinder_rate]" placeholder="Rate" class="form-control"> --}}
                                        {{-- </td> --}}
                                        {{-- <td> --}}
                                            {{-- <input name="products[0][payment_type]" placeholder="Type" class="form-control mb-1">
                                            <input type="number" name="products[0][payment_days]" placeholder="Days" class="form-control mb-1">
                                            <input name="products[0][payment_method]" placeholder="Method" class="form-control"> --}}
                                        {{-- </td> --}}

                                        {{-- Artwork Modal Trigger --}}
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#artworkModal">
                                                Add / Edit Artwork
                                            </button>
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#cylinderModal">
                                                Add / Edit Cylinder
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-danger removeRow">❌</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        {{-- Buttons --}}
                        <div class="mt-3 d-flex justify-content-between">
                            <button type="button" id="addRow" class="btn btn-primary">+ Add Product</button>
                            <button type="submit" class="btn btn-success">Save Products</button>
                        </div>
                    </form>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        {{-- Existing Products Card --}}
        <div class="col-md-12 d-flex mt-4">		
            <div class="card flex-fill">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h6 class="mb-0">Existing Products</h6>
                    <div class="dropdown">
                        <a class="dropdown-toggle btn btn-outline-light shadow" data-bs-toggle="dropdown" href="javascript:void(0);">
                            Filter
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">All</a>
                            <a href="javascript:void(0);" class="dropdown-item">In-house</a>
                            <a href="javascript:void(0);" class="dropdown-item">Trading</a>
                        </div>
                    </div>							
                </div>
                <div class="card-body">
                    <div class="table-responsive custom-table">
                        <table class="table table-bordered table-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Type</th>
                                    <th>Price (Printed)</th>
                                    <th>Price (Plain)</th>
                                    <th>Cylinder Terms</th>
                                    <th>Shadecard Details</th>
                                    <th>Artwork</th>
                                    <th>Cylinder Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PRD001</td>
                                    <td>Olena 30 mg Cap</td>
                                    <td>In-house</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>Paid</td>
                                    <td>30 days (Bank Transfer)</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#artworkModal">View</a>
                                    </td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#cylinderModal">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PRD002</td>
                                    <td>Panado Caps</td>
                                    <td>Trading</td>
                                    <td>80</td>
                                    <td>70</td>
                                    <td>To-Pay</td>
                                    <td>45 days (Cheque)</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>PRD003</td>
                                    <td>Allergex 4 mg</td>
                                    <td>In-house</td>
                                    <td>150</td>
                                    <td>130</td>
                                    <td>Paid</td>
                                    <td>30 days (Cheque)</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#artworkModal">View</a>
                                    </td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#cylinderModal">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

    </div> <!-- end row -->

{{-- </div> --}}

{{-- Artwork Modal --}}
<div class="modal fade" id="artworkModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Artwork Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Artwork Number *</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Specifications</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Width Size</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Status *</label>
                            <select class="form-control">
                                <option>Select Status</option>
                                <option>Pending</option>
                                <option>Approved</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Repeat Length</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">UPS</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-3">
                            <label class="form-label">SUR</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">GSM</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">No. of Colours</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Pantone No</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-3">
                            <label class="form-label d-block">NC Coating</label>
                            <div>
                                <input type="radio" name="nc_coating"> Yes
                                <input type="radio" name="nc_coating"> No
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label d-block">Printing Side</label>
                            <div>
                                <input type="radio" name="printing_side"> Top Side
                                <input type="radio" name="printing_side"> Both Side
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Unwind Direction</label>
                            <select class="form-control">
                                <option>Select Unwind Direction</option>
                                <option>Left</option>
                                <option>Right</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Artwork</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Date of Sample Preparation</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Approval Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Expiry Period (Months)</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>3</option>
                                <option>6</option>
                                <option>12</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Expiry Date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Remarks</label>
                        <textarea class="form-control"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-success">Save Artwork</button>
            </div>
        </div>
    </div>
</div>

{{-- Cylinder Modal --}}
<div class="modal fade" id="cylinderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            {{-- Header --}}
            <div class="modal-header">
                <h5 class="modal-title">Cylinder Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            
            {{-- Body --}}
            <div class="modal-body">
                <form>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Cylinder Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="CYL-2">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Circumference <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value='10"X384.65'>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Length <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="0.0">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Made By <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="ETCHCRAFT ENGRAVURE">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">MFG Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" value="3024-03-18">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Colour <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" value="1">
                        </div>
                    </div>

                </form>
            </div>
            
            {{-- Footer --}}
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-success">Save Cylinder</button>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}
