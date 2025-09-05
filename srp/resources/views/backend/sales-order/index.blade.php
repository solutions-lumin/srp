
<div class="card mt-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0 fw-bold">Sales Orders</h6>
        <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#salesOrderOffcanvas">
            <i class="ti ti-square-rounded-plus-filled me-1"></i> Add Sales Order
        </a>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-bordered table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>PO Number</th>
                        <th>PO Date</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Transport</th>
                        <th>Freight</th>
                        <th>Products</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row -->
                    <tr>
                        <td>#SO-001</td>
                        <td>ABC Corp</td>
                        <td>QTN-001</td>
                        <td>2025-08-12</td>
                        <td>2025-08-28</td>
                        <td><span class="badge bg-warning">Draft</span></td>
                        <td>Road</td>
                        <td>Paid by Customer</td>
                        <td>
                            <ul class="list-unstyled mb-0">
                                <li><strong>JOB-001:</strong> ULTRA D3-4K TABS (Qty: 1000)</li>
                                <li><strong>JOB-002:</strong> OMEGA-3 CAPS (Qty: 5000)</li>
                            </ul>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="offcanvas" data-bs-target="#salesOrderOffcanvas">Edit</a>
                                <button class="btn btn-sm btn-secondary"><i class="bi bi-files"></i> Duplicate</button>
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>
                            </div>
                        </td>
                    </tr>

                    <!-- Second Example -->
                    <tr>
                        <td>#SO-002</td>
                        <td>XYZ Pharma</td>
                        <td>QTN-002</td>
                        <td>2025-08-20</td>
                        <td>2025-08-28</td>
                        <td><span class="badge bg-success">Approved</span></td>
                        <td>Air</td>
                        <td>Paid by Vendor</td>
                        <td>
                            <ul class="list-unstyled mb-0">
                                <li><strong>JOB-010:</strong> CALCIUM TABS (Qty: 2000)</li>
                            </ul>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="offcanvas" data-bs-target="#salesOrderOffcanvas">Edit</a>
                                <button class="btn btn-sm btn-secondary"><i class="bi bi-files"></i> Duplicate</button>
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Offcanvas: Add/Edit Sales Order -->
<!-- Offcanvas: Add/Edit Sales Order -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="salesOrderOffcanvas" aria-labelledby="salesOrderOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="salesOrderOffcanvasLabel">Sales Order Details</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <form>
            <!-- Customer & PO Number -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Customer Name</label>
                    <input type="text" class="form-control" value="ABC Corp">
                </div>
                <div class="col-md-4">
                    <label class="form-label">PO Number</label>
                    <input type="text" class="form-control" value="QTN-001">
                </div>
                <div class="col-md-4">
                        <label class="form-label fw-bold">PO Date</label>
                        <p class="mb-0">2025-08-12</p>
                </div>
            </div>

            <!-- Billing & Shipping -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Billing Address</label>
                    <textarea class="form-control" rows="2">123 Street, City</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Shipping Address</label>
                    <textarea class="form-control" rows="2">456 Road, City</textarea>
            </div>
            </div>

            <!-- Order Date, Transport, Freight -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Order Date</label>
                    <input type="date" class="form-control" value="2025-08-28">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Transport</label>
                    <input type="text" class="form-control" value="Road">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Freight</label>
                    <input type="text" class="form-control" value="Paid by Customer">
            </div>
            </div>

            <!-- Products Accordion -->
            <h6 class="mt-4">Products</h6>
            <div class="accordion" id="productsAccordion">

                <!-- Product 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header d-flex justify-content-between align-items-center bg-light p-2 rounded" 
                        id="productHeading1">
                        
                        <button class="accordion-button bg-light shadow-none" type="button" 
                                data-bs-toggle="collapse"
                                data-bs-target="#productCollapse1" aria-expanded="false"
                                aria-controls="productCollapse1">
                            JOB-001 - New - ULTRA D3-4K TABS-SALE-BLR-R1 (Job Quantity: 1000)
                        </button>

                        <a href="{{ url()->current() }}?tab=job&offcanvas=add" 
                        class="btn btn-secondary btn-sm ms-2">
                            Edit
                        </a>

                    </h2>

                    <div id="productCollapse1" class="accordion-collapse collapse show" aria-labelledby="productHeading1" data-bs-parent="#productsAccordion">
                        <div class="accordion-body">

                            <div class="row g-4">
                                <!-- Left Column -->
                                <div class="col-md-6">
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Job Card Date: </span>
                                        <span>2025-08-12</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Shade Card No: </span>
                                        <span>PEL-17</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Shade Card Expiry Date: </span>
                                        <span>2026-05-20</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Product Code: </span>
                                        <span>PALP283/0A06</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Specification: </span>
                                        <span>0.025mm</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">GSM: </span>
                                        <span>120 GSM</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Width: </span>
                                        <span>250mm</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Surface: </span>
                                        <span>DSO</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">NC Coating: </span>
                                        <span>Yes</span>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="col-md-6">
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Winding Direction: </span>
                                        <span>UNIVERSAL 111</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Tolerance Limit: </span>
                                        <span>±0.5mm</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">No of Colours: </span>
                                        <span>4</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Pantone Nos: </span>
                                        <span>Black, Blue, Red, Yellow</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Machine No: </span>
                                        <span>MC-102</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">SOP No: </span>
                                        <span>FISOPPRD/IG</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Start Time: </span>
                                        <span>09:00 AM</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">End Time: </span>
                                        <span>05:00 PM</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Operator: </span>
                                        <span>John Doe</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Row for remaining -->
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Material Issued: </span>
                                        <span>150 kg</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Material Returned: </span>
                                        <span>20 kg</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Quantity Printed: </span>
                                        <span>48,000</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">QC Name: </span>
                                        <span>David Smith</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">QC Sign: </span>
                                        <span>✔️ Signed</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Preferred Vendor: </span>
                                        <span>John Doe</span>
                                    </div>
                                    <div class="mb-2 d-flex  border-bottom pb-1">
                                        <span class="fw-bold">Remarks: </span>
                                        <span>All parameters within tolerance, approved for dispatch.</span>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>


                <!-- Product 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header d-flex justify-content-between align-items-center bg-light p-2 rounded" 
                        id="productHeading2">
                        
                        <button class="accordion-button collapsed bg-light shadow-none" type="button" 
                                data-bs-toggle="collapse"
                                data-bs-target="#productCollapse2" aria-expanded="false"
                                aria-controls="productCollapse2">
                            JOB-002 - In Progress - OMEGA-3 CAPS-SALE-DEL-R2 (Job Quantity: 5000)
                        </button>

                        <a href="{{ url()->current() }}?tab=job" 
                        class="btn btn-secondary btn-sm ms-2">
                            Edit
                        </a>
                    </h2>

                    <div id="productCollapse2" class="accordion-collapse collapse" aria-labelledby="productHeading2" data-bs-parent="#productsAccordion">
                        <div class="accordion-body">

                            <div class="row g-4">
                                <!-- Left Column -->
                                <div class="col-md-6">
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Job Card Date: </span>
                                        <span>2025-08-18</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Shade Card No: </span>
                                        <span>DEL-23</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Shade Card Expiry Date: </span>
                                        <span>2026-07-12</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Product Code: </span>
                                        <span>OMEGA5000/DEL</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Specification: </span>
                                        <span>0.030mm</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">GSM: </span>
                                        <span>150 GSM</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Width: </span>
                                        <span>300mm</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Surface: </span>
                                        <span>Glossy</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">NC Coating: </span>
                                        <span>No</span>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="col-md-6">
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Winding Direction: </span>
                                        <span>LEFT-HAND</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Tolerance Limit: </span>
                                        <span>±1.0mm</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">No of Colours: </span>
                                        <span>6</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Pantone Nos: </span>
                                        <span>Green, Orange, Silver, Blue, Black, White</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Machine No: </span>
                                        <span>MC-205</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">SOP No: </span>
                                        <span>OMEGA-SOP-DEL</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Start Time: </span>
                                        <span>07:30 AM</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">End Time: </span>
                                        <span>04:30 PM</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Operator: </span>
                                        <span>Jane Smith</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Row for remaining -->
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Material Issued: </span>
                                        <span>300 kg</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Material Returned: </span>
                                        <span>50 kg</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Quantity Printed: </span>
                                        <span>95,000</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">QC Name: </span>
                                        <span>Michael Brown</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">QC Sign: </span>
                                        <span>✔️ Approved</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Preferred Vendor: </span>
                                        <span>Omega Pharma</span>
                                    </div>
                                    <div class="mb-2 d-flex border-bottom pb-1">
                                        <span class="fw-bold">Remarks: </span>
                                        <span>Batch partially approved, final QC pending.</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div> <!-- end accordion -->

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
            <div class="d-flex justify-content-end mt-3">
                <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="offcanvas">Cancel</button>
                <button type="submit" class="btn btn-success">Save Sales Order</button>
            </div>
        </form>
    </div>
</div>


<script>
    document.querySelectorAll('.view-toggle').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.view-toggle').forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            let view = this.getAttribute('data-view');
            if (view === 'table') {
                document.getElementById('salesOrderTableView').classList.remove('d-none');
                document.getElementById('salesOrderGridView').classList.add('d-none');
            } else {
                document.getElementById('salesOrderTableView').classList.add('d-none');
                document.getElementById('salesOrderGridView').classList.remove('d-none');
            }
        });
    });
</script>
