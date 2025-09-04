{{-- @extends('layouts.app')

@section('content')
<div class="container-fluid"> --}}
    <div class="row">

        <!-- Sidebar: List of Sales Orders -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Sales Orders | ABC Corp</h5>
                    <a href="{{route('sales-order.create')}}">

                        <button class="btn btn-sm btn-primary">+ New</button>
                    </a>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center active">
                            <div>
                                #SO-001 <br>
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
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                #SO-002 <br>
                                <small>Status: Approved</small>
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
                                #SO-003 <br>
                                <small>Status: Processing</small>
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

        <!-- Main Content: Sales Order Details -->

        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Sales Orders</h5>
                </div>
                <div class="card-body">
                    <form>
                        <!-- Customer & PO Number -->
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
        
                        <!-- Billing & Shipping -->
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
        
                        <!-- Order Date, Transport, Freight -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Order Date</label>
                                <input type="date" class="form-control" value="2025-08-28" >
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Transport</label>
                                <input type="text" class="form-control" value="Road" >
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Freight</label>
                                <input type="text" class="form-control" value="Paid by Customer" >
                            </div>
                        </div>
        
                        <!-- Products Table -->
                        <h6 class="mt-4">Products</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Qty</th>
                                        <th>Terms</th>
                                        <th>Artwork Ref</th>
                                        <th>Job Type</th>
                                        <th>Job Id</th>
                                        <th>Material</th>
                                        <th>Size</th>
                                        <th>Chargeable to Customer</th>
                                        <th>Amount Per Cylinder</th>
                                        <th>Number of Cylinders</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ULTRA D3-4K TABS-SALE-BLR-R1</td>
                                        <td>016116R1</td>
                                        <td>100</td>
                                        <td>Net 30</td>
                                        <td>
                                            <a href="#" class="text-primary fw-bold">
                                                MY-241 ULTRA D3-4K TABS-SALE-BLR-R1
                                            </a></td>
                                        <td>New</td>
                                        <td>
                                            <a href="#" class="text-primary fw-bold">
                                                JOB-001
                                            </a>
                                        </td>
                                        <td>0.025mm X 188mm</td>
                                        <td>188mm</td>
                                        <td>No</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>ULTRA PLAIN TABS</td>
                                        <td>017210R2</td>
                                        <td>200</td>
                                        <td>Net 30</td>
                                        <td>
                                            <a href="#" class="text-primary fw-bold">
                                                MY-242 ULTRA PLAIN TABS
                                            </a></td>
                                        <td>Repeat</td>
                                        <td>
                                            <a href="#" class="text-primary fw-bold">
                                                JOB-002
                                            </a>
                                        </td>
                                        <td>0.03mm X 200mm</td>
                                        <td>200mm</td>
                                        <td>Yes</td>
                                        <td>500</td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



        
                        <!-- Status -->
                        <div class="mb-3 mt-4">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option selected>Draft</option>
                                <option>Approved</option>
                                <option>Rejected</option>
                                <option>Processing</option>
                            </select>
                        </div>
        
                        <!-- Submit -->
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2">Cancel</button>
                            <button type="submit" class="btn btn-success">Save Sales Order</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

   
    </div>
{{-- </div>
@endsection --}}
