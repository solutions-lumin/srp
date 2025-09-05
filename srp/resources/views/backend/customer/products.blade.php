
<div class="row">
    {{-- Existing Products --}}
    <div class="col-md-12 d-flex mt-4">
        <div class="card flex-fill">
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
                        <input type="text" class="form-control ps-5" placeholder="Search">
                    </div>
                </div>

                <!-- Right Section -->
                <div class="d-flex align-items-center gap-2">
                    <!-- View Toggle -->
                    <div class="d-flex align-items-center shadow p-1 rounded border view-icons bg-white">   
                        <a href="javascript:void(0);" class="btn btn-sm p-1 border-0 fs-14 view-toggle active" data-view="table"> <i class="ti ti-list-tree"></i> </a> 
                        <a href="javascript:void(0);" class="btn btn-sm p-1 border-0 ms-1 fs-14 view-toggle" data-view="grid"> <i class="ti ti-grid-dots"></i> </a>
                    </div>

                    <!-- Add Product -->
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#addProductOffcanvas"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add Product</a>
                </div>
            </div>


            <div class="card-body">
                {{-- Table View --}}
                <div id="productTableView">
                    <div class="table-responsive custom-table">
                        <table class="table table-bordered table-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>Shadecard Code</th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Shadecard Details</th>
                                    <th>Attached Artwork</th>
                                    <th>Cylinder Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SC001</td>
                                    <td>PRD001</td>
                                    <td>Olena 30 mg Cap</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#artworkModal">View</a></td>
                                    <td><a href="#">View</a></td>
                                    <td>
                                        <!-- Multiple Cylinders -->
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-light text-dark border">
                                                Cyl#101 | Circ: 400 | Len: 800
                                            </span>
                                            <span class="badge bg-light text-dark border">
                                                Cyl#102 | Circ: 350 | Len: 750
                                            </span>
                                            <span class="badge bg-light text-dark border">
                                                Cyl#103 | Circ: 420 | Len: 820
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SC002</td>
                                    <td>PRD002</td>
                                    <td>Panado Caps</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#artworkModal">View</a></td>
                                    <td>View</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#cylinderModal">View</a></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SC003</td>
                                    <td>PRD003</td>
                                    <td>Allergex 4 mg</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#artworkModal">View</a></td>
                                    <td>View</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#cylinderModal">View</a></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Grid View --}}
                <div id="productGridView" class="row g-3 d-none">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h6 class="fw-bold mb-1">Olena 30 mg Cap</h6>
                                <p class="text-muted mb-1">Shadecard: SC001</p>
                                <p class="text-muted mb-1">Code: PRD001</p>
                                <p class="mb-1">Artwork: <a href="#" data-bs-toggle="modal" data-bs-target="#artworkModal">View</a></p>
                                <p class="mb-1">Shadecard Details: High quality CMYK artwork</p>
                                <p class="mb-0">Cylinder: <a href="#" data-bs-toggle="modal" data-bs-target="#cylinderModal">View</a></p>
                                <div class="mt-2">
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h6 class="fw-bold mb-1">Panado Caps</h6>
                                <p class="text-muted mb-1">Shadecard: SC002</p>
                                <p class="text-muted mb-1">Code: PRD002</p>
                                <p class="mb-1">Artwork: -</p>
                                <p class="mb-1">Shadecard Details: -</p>
                                <p class="mb-0">Cylinder: -</p>
                                <div class="mt-2">
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h6 class="fw-bold mb-1">Allergex 4 mg</h6>
                                <p class="text-muted mb-1">Shadecard: SC003</p>
                                <p class="text-muted mb-1">Code: PRD003</p>
                                <p class="mb-1">Artwork: <a href="#" data-bs-toggle="modal" data-bs-target="#artworkModal">View</a></p>
                                <p class="mb-1">Shadecard Details: Monochrome design</p>
                                <p class="mb-0">Cylinder: <a href="#" data-bs-toggle="modal" data-bs-target="#cylinderModal">View</a></p>
                                <div class="mt-2">
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->

</div> <!-- end row -->

<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="addProductOffcanvas">
    <div class="offcanvas-header border-bottom">
        <h5 class="mb-0">Add New Products - ABC Pvt Ltd</h5>
        <button type="button"
            class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close">
        </button>
    </div>

    <div class="offcanvas-body">
        <form id="productForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="accordion accordion-bordered" id="product_accordion">

                <!-- Basic Product Info -->
                <div class="accordion-item rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#product_basic">
                            <span class="avatar avatar-md rounded me-1"><i class="ti ti-package"></i></span>
                            Basic Product Info
                        </a>
                    </div>
                    <div class="accordion-collapse collapse show" id="product_basic" data-bs-parent="#product_accordion">
                        <div class="accordion-body border-top">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Shadecard Code</label>
                                    <input type="text" name="shadecard" class="form-control" placeholder="SC-001">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Product Code</label>
                                    <input type="text" name="code" class="form-control" placeholder="PRD-001">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Product Name">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Artwork File</label>
                                    <input type="file" name="artwork_file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shadecard Details -->
                <div class="accordion-item border-top rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#product_shadecard">
                            <span class="avatar avatar-md rounded me-1"><i class="ti ti-color-swatch"></i></span>
                            Shadecard Details
                        </a>
                    </div>
                    <div class="accordion-collapse collapse" id="product_shadecard" data-bs-parent="#product_accordion">
                        <div class="accordion-body border-top">
                            {{-- Example fields, add more as needed --}}
                           <form>
                                {{-- Row 1 --}}
                                <div class="row g-3 mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">Artwork Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter artwork number">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">Specifications</label>
                                        <input type="text" class="form-control" placeholder="e.g. CMYK, 300 DPI">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">Width Size</label>
                                        <input type="text" class="form-control" placeholder="Width in mm">
                                    </div>
                                </div>

                                {{-- Row 2 --}}
                                <div class="row g-3 mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
                                        <select class="form-select">
                                            <option>Select Status</option>
                                            <option>Pending</option>
                                            <option>Approved</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">Repeat Length</label>
                                        <input type="text" class="form-control" placeholder="Repeat length in mm">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">UPS</label>
                                        <input type="text" class="form-control" placeholder="Units per sheet">
                                    </div>
                                </div>

                                {{-- Row 3 --}}
                                <div class="row g-3 mb-3">
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">SUR</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">GSM</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">No. of Colours</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">Pantone No.</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                {{-- Row 4 (Radio & File) --}}
                                <div class="row g-3 mb-3">
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold d-block">NC Coating</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nc_coating">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nc_coating">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold d-block">Printing Side</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="printing_side">
                                            <label class="form-check-label">Top Side</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="printing_side">
                                            <label class="form-check-label">Both Side</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">Unwind Direction</label>
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>Left</option>
                                            <option>Right</option>
                                        </select>
                                    </div>
                                    {{-- <div class="col-md-3">
                                        <label class="form-label fw-semibold">Upload Artwork</label>
                                        <input type="file" class="form-control">
                                    </div> --}}
                                </div>

                                {{-- Row 5 (Dates) --}}
                                <div class="row g-3 mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">Date of Sample Preparation</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">Approval Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label fw-semibold">Expiry Period</label>
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>3</option>
                                            <option>6</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label fw-semibold">Expiry Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>

                                {{-- Remarks --}}
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Remarks</label>
                                    <textarea class="form-control" rows="3" placeholder="Additional notes..."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Cylinder Details -->
                <div class="accordion-item border-top rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#product_cylinders">
                            <span class="avatar avatar-md rounded me-1"><i class="ti ti-cylinder"></i></span>
                            Cylinder Details
                        </a>
                    </div>
                    <div class="accordion-collapse collapse" id="product_cylinders" data-bs-parent="#product_accordion">
                        <div class="accordion-body border-top">
                            <div id="cylinderFieldsWrapper">
                                <div class="cylinder-group border p-2 rounded mb-2">
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Cylinder Number</label>
                                            <input type="text" class="form-control" name="cylinder_number[]">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Circumference</label>
                                            <input type="text" class="form-control" name="cylinder_circumference[]">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Length</label>
                                            <input type="text" class="form-control" name="cylinder_length[]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="addCylinderRow" class="btn btn-outline-primary btn-sm">
                                + Add Another Cylinder
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="d-flex align-items-center justify-content-end mt-3">
                <button type="button" class="btn btn-light me-2" data-bs-dismiss="offcanvas">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Product</button>
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
                document.getElementById('productTableView').classList.remove('d-none');
                document.getElementById('productGridView').classList.add('d-none');
            } else {
                document.getElementById('productTableView').classList.add('d-none');
                document.getElementById('productGridView').classList.remove('d-none');
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        let currentRowIndex = null;

        // Artwork Modal Open
        document.querySelectorAll(".openArtworkModal").forEach(btn => {
            btn.addEventListener("click", function() {
                currentRowIndex = this.dataset.row;
                document.getElementById("artworkRowIndex").value = currentRowIndex;
            });
        });

        // Save Artwork
        document.querySelector(".saveArtwork").addEventListener("click", function() {
            let rowIndex = document.getElementById("artworkRowIndex").value;
            let remarks = document.getElementById("artworkRemarks").value;
            let targetCell = document.querySelector(`#productRows tr:nth-child(${parseInt(rowIndex)+1}) td:nth-child(5)`);
            targetCell.innerHTML = `<span class="badge bg-success">Artwork Added</span>`;
            bootstrap.Modal.getInstance(document.getElementById("artworkModal")).hide();
        });

        // Cylinder Modal Open
        document.querySelectorAll(".openCylinderModal").forEach(btn => {
            btn.addEventListener("click", function() {
                currentRowIndex = this.dataset.row;
                document.getElementById("cylinderRowIndex").value = currentRowIndex;
            });
        });

        // Add another cylinder row
        document.getElementById("addCylinderRow").addEventListener("click", function() {
            let wrapper = document.getElementById("cylinderFieldsWrapper");
            let clone = wrapper.querySelector(".cylinder-group").cloneNode(true);
            clone.querySelectorAll("input").forEach(i => i.value = "");
            wrapper.appendChild(clone);
        });

        // Save Cylinders
        document.querySelector(".saveCylinder").addEventListener("click", function() {
            let rowIndex = document.getElementById("cylinderRowIndex").value;
            let list = document.getElementById("cylinderList-" + rowIndex);
            list.innerHTML = `<span class="badge bg-info">Cylinders Added</span>`;
            bootstrap.Modal.getInstance(document.getElementById("cylinderModal")).hide();
        });
    });

</script>

{{-- @endsection --}}
