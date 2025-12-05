@extends('layouts.app')

@section('content')
    <h2 class="mb-4"><i class="fas fa-sitemap"></i> Enterprise Architecture</h2>
    
    <!-- System Overview -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-cube me-2"></i> Three Core Systems
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5><i class="fas fa-syringe" style="color: #3b82f6;"></i> IMS</h5>
                            <p><strong>Immunization Monitoring System</strong></p>
                            <p class="text-muted small">Records administered vaccines, monitors usage, identifies schedules, generates reports</p>
                            <hr>
                            <strong>Key Features:</strong>
                            <ul style="font-size: 12px; margin-bottom: 0;">
                                <li>Digital vaccine records</li>
                                <li>Batch tracking</li>
                                <li>Cold chain monitoring</li>
                                <li>SMS reminders</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5><i class="fas fa-boxes" style="color: #10b981;"></i> MSIS</h5>
                            <p><strong>Medical Supplies Inventory System</strong></p>
                            <p class="text-muted small">Records usage, checks stock levels, generates reorder requests, monthly reports</p>
                            <hr>
                            <strong>Key Features:</strong>
                            <ul style="font-size: 12px; margin-bottom: 0;">
                                <li>Stock monitoring</li>
                                <li>Low stock alerts</li>
                                <li>Expiry tracking</li>
                                <li>Reorder requests</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5><i class="fas fa-calendar" style="color: #f59e0b;"></i> PAS</h5>
                            <p><strong>Patient Appointment Scheduler</strong></p>
                            <p class="text-muted small">Manages appointments, checks availability, sends notifications, records service details</p>
                            <hr>
                            <strong>Key Features:</strong>
                            <ul style="font-size: 12px; margin-bottom: 0;">
                                <li>Digital booking</li>
                                <li>Real-time availability</li>
                                <li>Patient notifications</li>
                                <li>Queue management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- System Integration -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-link me-2"></i> System Integration Points
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6><strong>IMS ↔ Inventory</strong></h6>
                    <ul>
                        <li>Auto vaccine deduction when administered</li>
                        <li>Real-time stock level updates</li>
                        <li>Batch and expiry tracking shared</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6><strong>IMS ↔ Scheduler</strong></h6>
                    <ul>
                        <li>Immunization appointment integration</li>
                        <li>Schedule verification</li>
                        <li>Attendance tracking</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <h6><strong>Inventory ↔ Scheduler</strong></h6>
                    <ul>
                        <li>Supply demand forecasting</li>
                        <li>Resource allocation optimization</li>
                        <li>Campaign preparation</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6><strong>All Systems ↔ Reporting</strong></h6>
                    <ul>
                        <li>DOH compliance reports</li>
                        <li>PhilHealth claims documentation</li>
                        <li>LGU analytics dashboards</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Flow -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-arrows me-2"></i> Data Flow Architecture
        </div>
        <div class="card-body">
            <div style="background-color: #f3f4f6; padding: 20px; border-radius: 10px; text-align: center;">
                <p><strong>Rural Health Center (RHC)</strong></p>
                <p style="margin: 20px 0;">↓ Data Collection ↓</p>
                
                <div style="display: flex; justify-content: space-around; margin: 20px 0; gap: 10px;">
                    <div style="flex: 1; background: white; padding: 15px; border-radius: 8px; border: 2px solid #3b82f6;">
                        <strong>IMS</strong><br><small>Vaccine Records</small>
                    </div>
                    <div style="flex: 1; background: white; padding: 15px; border-radius: 8px; border: 2px solid #10b981;">
                        <strong>MSIS</strong><br><small>Supply Data</small>
                    </div>
                    <div style="flex: 1; background: white; padding: 15px; border-radius: 8px; border: 2px solid #f59e0b;">
                        <strong>PAS</strong><br><small>Appointments</small>
                    </div>
                </div>

                <p style="margin: 20px 0;">↓ Consolidated Report ↓</p>
                
                <div style="display: flex; justify-content: space-around; gap: 10px;">
                    <div style="flex: 1; background: #e0e7ff; padding: 15px; border-radius: 8px;">
                        <strong>MHO</strong><br><small>Municipal Health Office</small>
                    </div>
                    <div style="flex: 1; background: #dcfce7; padding: 15px; border-radius: 8px;">
                        <strong>DOH</strong><br><small>Department of Health</small>
                    </div>
                    <div style="flex: 1; background: #fef3c7; padding: 15px; border-radius: 8px;">
                        <strong>PhilHealth</strong><br><small>Reimbursement</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Database Structure -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-database me-2"></i> Centralized Relational Database
        </div>
        <div class="card-body">
            <p>All three systems connect to a unified database structure:</p>
            <div class="row mt-3">
                <div class="col-md-4">
                    <strong>Patient Data</strong>
                    <ul class="list-group mt-2">
                        <li class="list-group-item">Patient ID</li>
                        <li class="list-group-item">Demographics</li>
                        <li class="list-group-item">Contact Info</li>
                        <li class="list-group-item">Barangay</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>Health Services</strong>
                    <ul class="list-group mt-2">
                        <li class="list-group-item">Immunization Records</li>
                        <li class="list-group-item">Appointments</li>
                        <li class="list-group-item">Consultations</li>
                        <li class="list-group-item">Service History</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>Inventory & Resources</strong>
                    <ul class="list-group mt-2">
                        <li class="list-group-item">Supply Items</li>
                        <li class="list-group-item">Stock Levels</li>
                        <li class="list-group-item">Batch Info</li>
                        <li class="list-group-item">Suppliers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits -->
    <div class="card">
        <div class="card-header">
            <i class="fas fa-star me-2"></i> Enterprise Architecture Benefits
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6><strong>✓ Data Consistency</strong></h6>
                    <p class="text-muted small">Single source of truth across all systems</p>
                    
                    <h6 class="mt-3"><strong>✓ Real-time Reporting</strong></h6>
                    <p class="text-muted small">Instant data for DOH, MHO, and PhilHealth</p>
                    
                    <h6 class="mt-3"><strong>✓ Improved Efficiency</strong></h6>
                    <p class="text-muted small">Automated workflows reduce manual work</p>
                </div>
                <div class="col-md-6">
                    <h6><strong>✓ Better Coordination</strong></h6>
                    <p class="text-muted small">All health units work with same data</p>
                    
                    <h6 class="mt-3"><strong>✓ Compliance Ready</strong></h6>
                    <p class="text-muted small">Meets DOH standards and PhilHealth requirements</p>
                    
                    <h6 class="mt-3"><strong>✓ Scalability</strong></h6>
                    <p class="text-muted small">Can expand to more facilities easily</p>
                </div>
            </div>
        </div>
    </div>
@endsection