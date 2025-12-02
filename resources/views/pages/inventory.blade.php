@extends('layouts.app')

@section('content')
    <!-- INVENTORY TAB -->
    <div class="tab-pane fade show active" id="inventory">
        <h2 class="mb-4"><i class="fas fa-boxes"></i> Medical Supplies Inventory</h2>
        
        <div class="card">
            <div class="card-header">Stock Levels</div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Item Name</th>
                            <th>Current Stock</th>
                            <th>Min. Threshold</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pentavalent Vaccine</td>
                            <td>15 vials</td>
                            <td>20 vials</td>
                            <td><span class="badge bg-danger">Low Stock</span></td>
                        </tr>
                        <tr>
                            <td>Syringes (10ml)</td>
                            <td>250 pcs</td>
                            <td>100 pcs</td>
                            <td><span class="badge bg-success">Adequate</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">Low Stock Alerts</div>
            <div class="card-body">
                <div class="alert alert-danger">Hepatitis B: 8 vials (Critical)</div>
                <div class="alert alert-warning">Pentavalent: 15 vials (Below threshold)</div>
            </div>
        </div>
    </div>
@endsection