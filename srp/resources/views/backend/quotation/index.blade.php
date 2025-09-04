{{-- @extends('layouts.app')

@section('content') --}}
{{-- <div class="container-fluid"> --}}
    <div class="row">

        <!-- Sidebar: List of Quotations / PFI -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Quotations / PFI | ABC Corp </h5>
                    <a href="{{ route('quotation.create') }}">
                        <button class="btn btn-sm btn-primary">+ New</button>
                    </a>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center active">
                            <div>
                                #QTN-001 <br>
                                <small>Status: Draft</small>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-secondary">
                                    <i class="bi bi-files"></i> Duplicate
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                #PFI-002 <br>
                                <small>Status: Sent for Approval</small>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-secondary">
                                    <i class="bi bi-files"></i> Duplicate
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                #QTN-003 <br>
                                <small>Status: Converted to SO</small>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-secondary">
                                    <i class="bi bi-files"></i> Duplicate
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Main Content: Create/Edit/Display -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Quotation / PFI Details</h5>
                </div>
                <div class="card-body">

                    <!-- PO Header Fields -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Customer Name</label>
                            <input type="text" class="form-control" value="ABC Corp" >
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">PO Number</label>
                            <input type="text" class="form-control" value="QTN-001" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Billing Address</label>
                            <textarea class="form-control" rows="2" >123 Street, City</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Shipping Address</label>
                            <textarea class="form-control" rows="2" >456 Road, City</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Order Date</label>
                            <input type="date" class="form-control" value="2025-08-28" >
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Transport</label>
                            <input type="text" class="form-control" value="OM SAI ROADWAYS" >
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Freight</label>
                            <input type="text" class="form-control" value="Paid by Customer" >
                        </div>
                    </div>

                    <!-- Products Table -->
                    <h6 class="mt-4">Products</h6>
                    <table class="table table-bordered table-striped">
                        <thead class="table-light">
                            <tr>
                                <th>Job Type</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Material</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Shadecard</th>
                                <th>Chargeable</th>
                                <th>Amount Per Cylinder</th>
                                <th>No. of Cylinders</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" value="N/A"></td>
                                <td><input type="text" class="form-control" value="NA"></td>
                                <td><input type="text" class="form-control" value="PLAIN ALU ALU FOIL"></td>
                                <td><input type="text" class="form-control" value="0.13mm X 224mm"></td>
                                <td><input type="text" class="form-control" value="224mm"></td>
                                <td><input type="number" class="form-control" value="500"></td>
                                <td><input type="text" class="form-control" value="-"></td>
                                <td>
                                    <select class="form-control">
                                        <option selected>No</option>
                                        <option>Yes</option>
                                    </select>
                                </td>
                                <td><input type="number" class="form-control" value="0"></td>
                                <td><input type="number" class="form-control" value="0"></td>
                                <td><button class="btn btn-sm btn-danger">X</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-sm btn-outline-primary mb-3">+ Add Product</button>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-2">
                        <button class="btn btn-secondary">Save Draft</button>
                        <button class="btn btn-primary">Generate PFI</button>
                        <button class="btn btn-warning">Send for Approval</button>
                        <button class="btn btn-success">Convert to Sales Order</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
{{-- </div>
@endsection --}}
