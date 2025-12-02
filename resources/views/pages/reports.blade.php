@extends('layouts.app')

@section('content')
    <!-- REPORTS TAB -->
    <div class="tab-pane fade show active" id="reports">
        <h2 class="mb-4"><i class="fas fa-file-chart-line"></i> Reports & Analytics</h2>
        
        <div class="card">
            <div class="card-header">Coverage Analytics Dashboard</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Immunization Coverage by Vaccine</h6>
                        <ul class="list-group">
                            <li class="list-group-item">BCG: 96%</li>
                            <li class="list-group-item">Pentavalent: 92%</li>
                            <li class="list-group-item">Hepatitis B: 89%</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>Coverage by Barangay</h6>
                        <ul class="list-group">
                            <li class="list-group-item">Barangay A: 95%</li>
                            <li class="list-group-item">Barangay B: 92%</li>
                            <li class="list-group-item">Barangay C: 88%</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">Generate Reports</div>
            <div class="card-body">
                <button class="btn btn-primary"><i class="fas fa-file-pdf"></i> DOH Quarterly Report</button>
                <button class="btn btn-primary"><i class="fas fa-file-excel"></i> Inventory Report</button>
                <button class="btn btn-primary"><i class="fas fa-file-pdf"></i> PhilHealth Claims</button>
            </div>
        </div>
    </div>
@endsection