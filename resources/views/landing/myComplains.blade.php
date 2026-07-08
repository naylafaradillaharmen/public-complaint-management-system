@extends('landing.template.base')

@section('title', 'My Complains')

@section('content')
<!-- Main Content -->
<section class="complain-section">
    <div class="container">
        <div class="page-header">
            <h2>My Complains</h2>
            <p>Daftar Pengaduan Yang Telah Anda Kirimkan</p>
        </div>

        <!-- Filter & Search -->
        <div class="complains-terse">
            <div class="search-box">
                <input type="text" placeholder="Cari Pengaduan ..." />
                <button class="btn-search">👽</button>
            </div>
            <div class="filter-box">
                <select name="">
                    <option value="">Semua Status</option>
                    <option value="">Pending</option>
                    <option value="">Diproses</option>
                    <option value="">Selesai</option>
                    <option value="">Ditolak</option>
                </select>
            </div>
        </div>

        <div class="complain-list">
            <!-- Card -->
            @foreach ($complain as $jay)
            <div class="complain-card">
                <div class="complain-header">
                    <div class="complain-no">
                        <span class="label-no">No. Aduan :</span>
                        <span class="value">{{ $jay->no_aduan }}</span>
                    </div>
                    @if($jay->status == 'pending')
                    <span class="badge badge-status badge-pending">Pending</span>
                    @elseif($jay->status == 'in_progress')
                    <span class="badge badge-status badge-process">Diproses</span>
                    @elseif($jay->status == 'resolve')
                    <span class="badge badge-status badge-resolved">Selesai</span>
                    @elseif($jay->status == 'rejected')
                    <span class="badge badge-status badge-rejected">Ditolak</span>
                    @endif
                </div>
                <div class="complain-body">
                    <h3 class="complain-title">{{ $jay->judul }}</h3>
                    <div class="complain-row">
                        <div class="row-tanggal">
                            <span class="icon">🗓️</span>
                            <span>{{ \Carbon\Carbon::parse($jay->tanggal_aduan)->format('d F Y H:i') }}</span>
                        </div>
                        <div class="row-tanggal">
                            <span class="icon">📍</span>
                            <span>{{ $jay->lokasi }}</span>
                        </div>
                        <div class="row-tanggal">
                            <span class="icon">🗿</span>
                            <span>{{ $jay->kate->category }}</span>
                        </div>
                    </div>
                    <p class="complain-text">
                        {{ $jay->keterangan }}
                    </p>
                    @if($jay->status == 'resolve' && $jay->response != null)
                    <div class="alasan-ditolak alasan-resolved">
                        <strong>Admin Penerima aduan : {{ $jay->response->namaAdmin->name }}</strong> <br>
                        <strong>Tanggal Response :</strong> {{ \Carbon\Carbon::parse($jay->response->created_at)->format('d F Y') }} <br>
                        <strong>Alasan Penyelesaian :</strong> {{ $jay->response->response }}
                    </div>
                    @elseif($jay->status == 'rejected' && $jay->response != null)
                    <div class="alasan-ditolak">
                        <strong>Admin Penerima aduan : {{ $jay->response->namaAdmin->name }}</strong> <br>
                        <strong>Tanggal Response :</strong> {{ \Carbon\Carbon::parse($jay->response->created_at)->format('d F Y') }} <br>
                        <strong>Alasan Penolakan :</strong> {{ $jay->response->response }}
                    </div>
                    @endif
                </div>
                <div class="complain-foot">
                    <a href="" class="btn btn-detail">Lihat Detail</a>
                    <a href="" class="btn btn-delete">Hapus Laporan</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Content -->

<!-- Section Cek Status -->
<section class="cek-status-section" id="status">
    <div class="container">
        <h2 class="status-title">Cek Status Aduan</h2>
        <div class="cek-status">
            <input
                type="text"
                placeholder="Masukkan nomor aduan anda ( Contoh : ADUAN-2025)" />
            <button class="btn btn-primary">Cek Status</button>
        </div>
    </div>
</section>
<!-- End Cek Status -->


@endsection