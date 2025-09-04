@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Purchase Order</h5>
            <a href="#" class="btn btn-secondary btn-sm">Back</a>
        </div>
        <div class="card-body">
            <form action="#" method="POST">
                @csrf

                <!-- SO Number -->
                <div class="mb-3">
                    <label for="po_number" class="form-label">SO Number</label>
                    <input type="text" class="form-control" id="po_number" name="po_number" value="SO-{{ time() }}" readonly>
                </div>

                <!-- Billing Address -->
                <div class="mb-3">
                    <label for="billing_address" class="form-label">Billing Address</label>
                    <textarea class="form-control" id="billing_address" name="billing_address" rows="2"></textarea>
                </div>

                <!-- Shipping Address -->
                <div class="mb-3">
                    <label for="shipping_address" class="form-label">Shipping Address</label>
                    <textarea class="form-control" id="shipping_address" name="shipping_address" rows="2"></textarea>
                </div>

                <!-- Order Date -->
                <div class="mb-3">
                    <label for="order_date" class="form-label">Order Date</label>
                    <input type="date" class="form-control" id="order_date" name="order_date" value="{{ date('Y-m-d') }}">
                </div>

                <!-- Transport -->
                <div class="mb-3">
                    <label for="transport" class="form-label">Transport</label>
                    <input type="text" class="form-control" id="transport" name="transport" placeholder="Enter transport details">
                </div>

                <!-- Freight -->
                <div class="mb-3">
                    <label for="freight" class="form-label">Freight</label>
                    <input type="text" class="form-control" id="freight" name="freight" placeholder="Enter freight details">
                </div>

                <!-- Products Table (Static) -->
                <div class="mb-3">
                    <label class="form-label">Products</label>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Shadecard Code</th>
                                <th>Job Type</th>
                                <th>Name</th>
                                <th>Material</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Shadecard</th>
                                <th>Chargeable</th>
                                <th>Amount Per Cylinder</th>
                                <th>Number of Cylinders</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="code_1" class="form-control"></td>
                                <td><input type="text" name="job_type_1" class="form-control"></td>
                                <td><input type="text" name="name_1" class="form-control"></td>
                                <td><input type="text" name="material_1" class="form-control"></td>
                                <td><input type="text" name="size_1" class="form-control"></td>
                                <td><input type="number" name="quantity_1" class="form-control"></td>
                                <td><input type="text" name="shadecard_1" class="form-control"></td>
                                <td>
                                    <select name="chargeable_1" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </td>
                                <td><input type="number" name="amount_per_cylinder_1" class="form-control"></td>
                                <td><input type="number" name="num_cylinders_1" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="job_type_2" class="form-control"></td>
                                <td><input type="text" name="code_2" class="form-control"></td>
                                <td><input type="text" name="name_2" class="form-control"></td>
                                <td><input type="text" name="material_2" class="form-control"></td>
                                <td><input type="text" name="size_2" class="form-control"></td>
                                <td><input type="number" name="quantity_2" class="form-control"></td>
                                <td><input type="text" name="shadecard_2" class="form-control"></td>
                                <td>
                                    <select name="chargeable_2" class="form-control">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </td>
                                <td><input type="number" name="amount_per_cylinder_2" class="form-control"></td>
                                <td><input type="number" name="num_cylinders_2" class="form-control"></td>
                            </tr>
                        </tbody>

                    </table>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-success">Save SO</button>
            </form>
        </div>
    </div>
</div>
@endsection
