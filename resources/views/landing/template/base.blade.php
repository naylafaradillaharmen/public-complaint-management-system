<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Cursive:wght@400..700&family=Gaegu&family=Macondo&family=Mozilla+Text:wght@200..700&family=Nata+Sans:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Playwrite+AU+QLD:wght@100..400&family=Roboto:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet" />
  </head>
  <body>
    <!-- Navbar -->
    @include('landing.template.navbar')
    <!-- End Navbar -->

   <!-- COntent -->
    @yield('content')
   <!-- End COntent -->
    <!-- Footer -->
    @include('landing.template.footer')
    <!-- End Footer -->

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
      integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
      crossorigin="anonymous"></script>
    <script>
      // Tampilkan nama file yang dipilih
      (function () {
        const fileInput = document.querySelector('.file-upload input[type="file"]');
        const fileName = document.querySelector('.file-upload .file-name');
        if (fileInput && fileName) {
          fileInput.addEventListener('change', function () {
            fileName.textContent = this.files && this.files.length > 0 ? this.files[0].name : 'Belum ada file dipilih';
          });
        }
      })();
    </script>

    <script>
      const userMenuBtn = document.querySelector(".user-menu-btn");
      const dropdownMenu = document.querySelector(".dropdown-menu");

      if(userMenuBtn){
        userMenuBtn.addEventListener('click', function (e) {
          e.stopPropagation();
          dropdownMenu.classList.toggle("show");
        })
        document.addEventListener('click', function () {
          dropdownMenu.classList.remove("show");
        });
      }
    </script>
  </body>
</html>
