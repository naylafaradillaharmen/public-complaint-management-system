<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login, LAPOR!</title>
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="login-page">
      <div class="container">
        <div class="login-left">
          <div class="login-title">
            <h2>LAPOR!</h2>
            <p>Sistem Pengaduan Masyarakat</p>
          </div>
          <div class="login-image">
            <img
              src="https://i.pinimg.com/1200x/08/d1/98/08d198c10eef13f9a8c19826ebc0b55a.jpg"
              alt="" />
          </div>
        </div>
        <div class="login-right">
          <div class="login-title-right">
            <h2>Selamat Datang, Halo, SIap, Mantap!</h2>
            <p class="login-subtitle-right">Silahkan login untuk mengadu</p>

            <form action="{{ route('login') }}" method="post">
              @csrf
              <div class="form-group">
                <label>Email</label>
                <div class="input-icon">
                  <span>📧</span>
                  <input
                    type="email"
                    name="email"
                    placeholder="nayyy@gmail.com"
                    required />
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <div class="input-icon">
                  <span>🔪</span>
                  <input
                    type="password"
                    name="password"
                    placeholder="Tebak apa"
                    required />
                </div>
              </div>

              <div class="form-remember">
                <label class="remember-me">
                  <input type="checkbox" name="remember" />
                  <span>Ingat Saya</span>
                </label>
                <a href="" class="forgot-password">Lupa password?</a>
              </div>

              <button type="submit" class="btn btn-primary btn-logis">
                Masuk
              </button>

              <div class="login-divider">
                <span>atau</span>
              </div>

              <p class="register-link">
                Belum punya aku? <a href="">Daftar Sekarang, yok!</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
