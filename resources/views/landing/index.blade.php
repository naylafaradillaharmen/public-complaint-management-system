@extends('landing.template.base')

@section('title', 'Pengaduan Masyarakat')



@section('content')
 <!-- Hero Section -->
    <section class="hero" id="hero">
      <div class="container">
        <div class="hero-content">
          <h2>Suara Anda, Perubahan Kita, Roso!</h2>
          <p>
            Laporkan keluhan dan aspirasi Anda untuk kemajuan daerah bersama,
            aamiin
          </p>
          <a href="" class="btn btn-primary">Buat Pengaduan Sekarang !</a>
        </div>
        <div class="hero-image">
          <div class="image">
            <img
              src="{{ asset('landing/images/hero-cat.jpg') }}"
              alt="Cat typing on laptop I'm Ok" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- Layanan Section -->
    <section class="layanan" id="layanan">
      <div class="container">
        <h2 class="layanan-title">Tentang Layanan</h2>
        <div class="layanan-grid">
          <div class="layanan-card">
            <div class="icon">📝</div>
            <h3>Mudah Digunakan</h3>
            <p>
              Landing Page sederhana yang mudah dipahami untuk semua kalangan.
            </p>
          </div>
          <div class="layanan-card">
            <div class="icon">⚡</div>
            <h3>Respon Cepat</h3>
            <p>Tim kami akan cepat memproses pengaduan Anda.</p>
          </div>
          <div class="layanan-card">
            <div class="icon">🔒</div>
            <h3>Keamanan Terjamin</h3>
            <p>Data Anda dijamin aman dan kerahasiaannya terjaga.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End layanan Section -->

    <!-- Section Ngadu -->
    <section class="form-ngadu" id="form-ngadu">
      <div class="container">
        <h2 class="ngadu-title">Buat Pengaduan</h2>
        <p class="ngadu-subtitle">
          Silahkan isi form berikut untuk membuat pengaduan
        </p>

        <form action="{{ route('store.aduan') }}" method="post" class="form-complaint" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label>Kategori Aduan</label>
            <select name="category_id" class="form-group" required>
              <option value="">Pilih Kategori</option>
              @foreach ($kategori as $row)
              <option value="{{ $row->id }}">{{ $row->category }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Judul Aduan</label>
            <input
              type="text"
              name="judul"
              placeholder="Contoh : Jalan Rusak Depan Indosiar" />
          </div>
          <div class="form-group">
            <label>Lokasi Kejadian</label>
            <input
              type="text"
              name="lokasi"
              placeholder="Contoh : Jl. Merdeka No.45, Jakarta" />
          </div>
          <div class="form-group">
            <label>Tanggal Kejadian</label>
            <input type="date" name="tanggal_aduan" />
          </div>
          <div class="form-group">
            <label>Keterangan Kejadian</label>
            <textarea name="keterangan" id="" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label>Upload Foto</label>
            <div class="file-upload">
              <input type="file" id="foto" name="image" accept="image/*" />
              <label class="file-label" for="foto">
                <span>📷 Pilih Foto</span>
              </label>
              <span class="file-name">Belum ada file dipilih</span>
            </div>
            <small>Format: JPEG, PNG, JPG. Maksimal 5MB</small>
          </div>
          <button type="submit" class="btn btn-submit btn-primary">Kirim Aduan</button>
        </form>
      </div>
    </section>
    <!-- End Section Ngadu -->

    <!-- Section Cek Status -->
     <section class="cek-status-section" id="status">
      <div class="container">
        <h2 class="status-title">Cek Status Aduan</h2>
        <div class="cek-status">
          <input type="text" placeholder="Masukkan nomor aduan anda ( Contoh : ADUAN-2025)">
          <button class="btn btn-primary">Cek Status</button>
        </div>
      </div>
     </section>
    <!-- End Cek Status -->

@endsection