@extends('template.base')

@section('nayyy')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $pending }}</h3>
                        <p>Menunggu Response</p>
                    </div>
                    <div class="icon"><i class="ion ion-bag"></i></div>
                    <a href="" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $resolve }}</h3>
                        <p>Laporan Selesai</p>
                    </div>
                    <div class="icon"><i class="ion ion-stats-bars"></i></div>
                    <a href="" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $user }}</h3>
                        <p>Jumlah User</p>
                    </div>
                    <div class="icon"><i class="ion ion-person-add"></i></div>
                    <a href="" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $rejected }}</h3>
                        <p>Laporan Tertolak</p>
                    </div>
                    <div class="icon"><i class="ion ion-pie-graph"></i></div>
                    <a href="" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Statistik Pengaduan</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="pengaduanChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById('pengaduanChart');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');

    const stats = [
        {{ $pending ?? 0 }},
        {{ $resolve ?? 0 }},
        {{ $rejected ?? 0 }},
        {{ $user ?? 0 }}
    ];

    console.log('Chart Data:', stats); 

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Menunggu Response', 'Laporan Selesai', 'Laporan Tertolak', 'Jumlah User'],
            datasets: [{
                label: 'Statistik Pengaduan',
                data: stats,
                backgroundColor: [
                    'rgba(23, 162, 184, 0.7)',   
                    'rgba(40, 167, 69, 0.7)',    
                    'rgba(220, 53, 69, 0.7)',   
                    'rgba(255, 193, 7, 0.7)'     
                ],
                borderColor: [
                    'rgba(23, 162, 184, 1)',
                    'rgba(40, 167, 69, 1)',
                    'rgba(220, 53, 69, 1)',
                    'rgba(255, 193, 7, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { 
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        precision: 0
                    }
                }
            }
        }
    });
});
</script>
@endpush
