@extends('layouts.app')

@section('content')
    <!-- IMMUNIZATION TAB -->
    <div class="tab-pane fade show active" id="immunization">
        <h2 class="mb-4"><i class="fas fa-syringe"></i> Immunization Monitoring</h2>
        
        <div class="card">
            <div class="card-header">Digital Immunization Records</div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Child Name</th>
                            <th>Age</th>
                            <th>Vaccine Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hansol Vernon</td>
                            <td>2 months</td>
                            <td>BCG</td>
                            <td><span class="badge bg-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Kwon Soonyoung</td>
                            <td>3 months</td>
                            <td>Pentavalent</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">Batch & Expiry Tracking</div>
            <div class="card-body">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Vaccine Type</th>
                            <th>Batch #</th>
                            <th>Expiry Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BCG</td>
                            <td>BCG2024-001</td>
                            <td>05/15/2025</td>
                            <td><span class="badge bg-success">Safe</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection