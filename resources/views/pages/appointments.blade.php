@extends('layouts.app')

@section('content')
    <h2 class="mb-4"><i class="fas fa-calendar"></i> Patient Appointment Scheduler</h2>
    
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span>Digital Appointment Booking</span>
                <button class="btn btn-light btn-sm"><i class="fas fa-plus"></i> New Appointment</button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Patient Name</th>
                        <th>Contact</th>
                        <th>Appointment Type</th>
                        <th>Scheduled Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jeon Wonwoo</td>
                        <td>09171234567</td>
                        <td><span class="badge bg-info">Immunization</span></td>
                        <td>11/28/2025</td>
                        <td>9:00 AM</td>
                        <td><span class="badge bg-success">Confirmed</span></td>
                    </tr>
                    <tr>
                        <td>Jeonghan</td>
                        <td>09189876543</td>
                        <td><span class="badge bg-secondary">Check-up</span></td>
                        <td>11/28/2025</td>
                        <td>10:30 AM</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header"><i class="fas fa-list-ol"></i> Today's Queue</div>
        <div class="card-body">
            <div class="alert alert-info">Today: 11/27/2024 - Total: 11 Appointments</div>
            <div class="list-group">
                <div class="list-group-item">
                    <h6>1. Cheol - 8:30 AM <span class="badge bg-success">Checked In</span></h6>
                </div>
                <div class="list-group-item">
                    <h6>2. Kim Mingyu - 9:00 AM <span class="badge bg-warning">Waiting</span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection