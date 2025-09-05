
<div class="row">
    <div class="col-md-12 mt-4">
        <div class="card flex-fill">
            <!-- Header with Filters, Search, and Add Button -->
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
                <!-- Left Section -->
                <div class="d-flex align-items-center gap-2 flex-wrap">
                    <!-- Filter Button -->
                    <a href="javascript:void(0);" class="btn btn-outline-light shadow-sm px-3">
                        <i class="ti ti-filter me-2"></i>Filter
                    </a>

                    <!-- Search Box -->
                    <div class="input-icon position-relative">
                        <span class="input-icon-addon text-dark"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control ps-5" placeholder="Search PO">
                    </div>
                </div>

                <!-- Right Section -->
                <div class="d-flex align-items-center gap-2">
                    <!-- View Toggle -->
                    <div class="d-flex align-items-center shadow p-1 rounded border view-icons bg-white">   
                        <a href="javascript:void(0);" class="btn btn-sm p-1 border-0 fs-14 view-toggle active" data-view="table"> <i class="ti ti-list-tree"></i> </a> 
                        <a href="javascript:void(0);" class="btn btn-sm p-1 border-0 ms-1 fs-14 view-toggle" data-view="grid"> <i class="ti ti-grid-dots"></i> </a>
                    </div>

                    <!-- Add PO -->
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#addPOoffcanvas"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add New PO</a>
                </div>
            </div>

            <div class="card-body">
                <!-- Table View -->
                <div id="poTableView">
                    <div class="table-responsive custom-table">
                        <table class="table table-bordered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>PO / Quotation No</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Shadecard Codes</th>
                                    <th>Total Amount</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Row 1 -->
                                <tr>
                                    <td>#PO-001</td>
                                    <td><span class="badge bg-secondary">Draft</span></td>
                                    <td>01-Sep-2025</td>
                                    <td>
                                        <span class="badge bg-light text-dark me-1">SC-101</span>
                                        <span class="badge bg-light text-dark me-1">SC-102</span>
                                        <span class="badge bg-light text-dark">SC-103</span>
                                    </td>
                                    <td>$1,200</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                                            <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-files"></i> Duplicate</a>
                                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Row 2 -->
                                <tr>
                                    <td>#PO-002</td>
                                    <td><span class="badge bg-info text-dark">Sent for Approval</span></td>
                                    <td>03-Sep-2025</td>
                                    <td>
                                        <span class="badge bg-light text-dark me-1">SC-201</span>
                                        <span class="badge bg-light text-dark">SC-202</span>
                                    </td>
                                    <td>$3,500</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                                            <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-files"></i> Duplicate</a>
                                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Row 3 -->
                                <tr>
                                    <td>#PO-003</td>
                                    <td><span class="badge bg-success">Converted to SO</span></td>
                                    <td>04-Sep-2025</td>
                                    <td>
                                        <span class="badge bg-light text-dark">SC-301</span>
                                    </td>
                                    <td>$2,250</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                                            <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-files"></i> Duplicate</a>
                                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Grid View -->
                <div id="poGridView" class="row g-3 d-none">
                    <!-- Card 1 -->
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h6 class="card-title mb-2">#PO-001 <span class="badge bg-secondary ms-2">Draft</span></h6>
                                <p class="mb-1"><strong>Date:</strong> 01-Sep-2025</p>
                                <p class="mb-1"><strong>Shadecards:</strong> 
                                    <span class="badge bg-light text-dark me-1">SC-101</span>
                                    <span class="badge bg-light text-dark me-1">SC-102</span>
                                    <span class="badge bg-light text-dark">SC-103</span>
                                </p>
                                <p class="mb-3"><strong>Total:</strong> $1,200</p>
                                <div class="d-flex gap-2">
                                    <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-files"></i> Duplicate</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h6 class="card-title mb-2">#PO-002 <span class="badge bg-info text-dark ms-2">Sent for Approval</span></h6>
                                <p class="mb-1"><strong>Date:</strong> 03-Sep-2025</p>
                                <p class="mb-1"><strong>Shadecards:</strong> 
                                    <span class="badge bg-light text-dark me-1">SC-201</span>
                                    <span class="badge bg-light text-dark">SC-202</span>
                                </p>
                                <p class="mb-3"><strong>Total:</strong> $3,500</p>
                                <div class="d-flex gap-2">
                                    <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-files"></i> Duplicate</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h6 class="card-title mb-2">#PO-003 <span class="badge bg-success ms-2">Converted to SO</span></h6>
                                <p class="mb-1"><strong>Date:</strong> 04-Sep-2025</p>
                                <p class="mb-1"><strong>Shadecards:</strong> 
                                    <span class="badge bg-light text-dark">SC-301</span>
                                </p>
                                <p class="mb-3"><strong>Total:</strong> $2,250</p>
                                <div class="d-flex gap-2">
                                    <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-files"></i> Duplicate</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Grid View -->
            </div> <!-- End Card Body -->
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="addPOoffcanvas">
    <div class="offcanvas-header border-bottom">
        <h5 class="mb-0">PO Details - ABC Corp</h5>
        <button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <form id="poForm">
            <div class="accordion accordion-bordered" id="po_accordion">

                <!-- Customer & PO Info -->
                <div class="accordion-item rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#po_basic">
                            <span class="avatar avatar-md rounded me-1"><i class="ti ti-user"></i></span>
                            Customer & PO Information
                        </a>
                    </div>
                    <div class="accordion-collapse collapse show" id="po_basic" data-bs-parent="#po_accordion">
                        <div class="accordion-body border-top">
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Customer Name</label>
                                    <input type="text" class="form-control" value="ABC Corp">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">PO Number</label>
                                    <input type="text" class="form-control" value="PO-001">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Billing Address</label>
                                    <textarea class="form-control" rows="2">123 Street, City</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Shipping Address</label>
                                    <textarea class="form-control" rows="2">456 Road, City</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Details -->
                <div class="accordion-item rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#po_order">
                            <span class="avatar avatar-md rounded me-1"><i class="ti ti-file-invoice"></i></span>
                            Order Details
                        </a>
                    </div>
                    <div class="accordion-collapse collapse" id="po_order" data-bs-parent="#po_accordion">
                        <div class="accordion-body border-top">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Order Date</label>
                                    <input type="date" class="form-control" value="2025-08-28">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Transport</label>
                                    <input type="text" class="form-control" value="OM SAI ROADWAYS">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Freight</label>
                                    <input type="text" class="form-control" value="Paid by Customer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products -->
                <div class="accordion-item rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" 
                        class="accordion-button accordion-custom-button rounded"
                        data-bs-toggle="collapse" data-bs-target="#po_products">
                            <span class="avatar avatar-md rounded me-1">
                                <i class="ti ti-package"></i>
                            </span>
                            <span class="fw-semibold">Products</span>
                        </a>
                    </div>

                    <div class="accordion-collapse collapse" id="po_products" data-bs-parent="#po_accordion">
                        <div class="accordion-body border-top">

                            <div id="productFieldsWrapper">
                                <!-- Single Product Accordion -->
                                <div class="accordion mb-2 shadow-sm rounded" id="productAccordion1">
                                    <div class="accordion-header">
                                        <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#product1">
                                            <i class="ti ti-tag me-2 text-muted"></i>
                                            SC-101 - PLAIN ALU ALU FOIL
                                        </a>
                                    </div>
                                    <div id="product1" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="row g-3 mb-3">
                                                <div class="col-md-3">
                                                    <label class="form-label">Job Type</label>
                                                    <input type="text" class="form-control" value="N/A">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Chargeable</label>
                                                    <select class="form-select">
                                                        <option selected>No</option>
                                                        <option>Yes</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Amount / Cylinder</label>
                                                    <input type="number" class="form-control" value="0">
                                                </div>
                                            </div>

                                            <div class="row g-3 mb-3">
                                                <div class="col-md-4">
                                                    <label class="form-label">Material</label>
                                                    <input type="text" class="form-control" value="0.13mm X 224mm">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Size</label>
                                                    <input type="text" class="form-control" value="224mm">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Qty</label>
                                                    <input type="number" class="form-control" value="500">
                                                </div>
                                            </div>

                                            <div class="row g-3">
                                                <div class="col-md-4">
                                                    <label class="form-label">No. of Cylinders</label>
                                                    <input type="number" class="form-control" value="0">
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="ti ti-trash me-1"></i> Remove Product
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Accordion -->
                            </div>

                            <!-- Add Product Button -->
                            <div class="text-center mt-3">
                                <button type="button" id="addProductRow" class="btn btn-outline-primary">
                                    <i class="ti ti-plus me-1"></i> Add Another Product
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="d-flex flex-wrap gap-2 mt-4">
                <button type="button" class="btn btn-secondary shadow-sm">
                    <i class="ti ti-device-floppy me-1"></i> Save Draft
                </button>
                <button type="button" class="btn btn-primary shadow-sm">
                    <i class="ti ti-file-text me-1"></i> Generate PO
                </button>
                <button type="button" class="btn btn-warning shadow-sm text-dark">
                    <i class="ti ti-send me-1"></i> Send for Approval
                </button>
                <button type="button" class="btn btn-success shadow-sm">
                    <i class="ti ti-check me-1"></i> Convert to Sales Order
                </button>
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
                document.getElementById('poTableView').classList.remove('d-none');
                document.getElementById('poGridView').classList.add('d-none');
            } else {
                document.getElementById('poTableView').classList.add('d-none');
                document.getElementById('poGridView').classList.remove('d-none');
            }
        });
    });
</script>
