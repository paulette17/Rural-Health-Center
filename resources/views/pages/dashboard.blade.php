@extends('layouts.app')

@section('content')
    <!-- DASHBOARD TAB -->
    <div class="tab-pane fade show active" id="dashboard">
        <h2 class="mb-4"><i class="fas fa-th-large"></i> Dashboard</h2>
        
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 style="color: #3b82f6;">86%</h3>
                        <p>Immunization Coverage</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 style="color: #3b82f6;">247</h3>
                        <p>Appointments</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 style="color: #3b82f6;">3</h3>
                        <p>Low Stock Items</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 style="color: #3b82f6;">12</h3>
                        <p>Missed Appointments</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <i class="fas fa-thermometer-half me-2"></i> Cold Chain Monitoring
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Main Refrigerator</h6>
                        <div class="alert alert-success">
                            <strong>Current Temp: 5.2°C</strong> <span class="badge bg-success">✓ Safe</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Cold Box #1</h6>
                        <div class="alert alert-success">
                            <strong>Current Temp: 6.8°C</strong> <span class="badge bg-success">✓ Safe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection