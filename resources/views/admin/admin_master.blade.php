<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="SISBE">
  <meta name="author" content="Isaac Hernandez">
  <title>SISBE | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('backend/img/AdminLTELogo.png') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Toastr -->  
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css') }}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/bs-stepper/css/bs-stepper.min.css') }}">
  <!-- Dropify -->
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css') }}" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('backend/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Nav -->
  
  @include('admin.body.nav')

  <!-- Aside -->

  @include('admin.body.aside')

  <!-- Content Wrapper. Contains page content -->

  @yield('admin')

  <!-- /.content-wrapper -->

  <!-- Footer -->
  
  @include('admin.body.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/js/adminlte.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
      responsive: true
    });
} );
</script>

<!-- Toastr -->
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js') }}"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

<!-- Sweet Alert -->
<script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>

<script>

  $(function(){

    $(document).on('click', '#delete', function(e){

      e.preventDefault();

      var link = $(this).attr("href");

      Swal.fire({
        title: '¿Está seguro de borrar la información?',
        text: "¡Si no lo está puede cancelar la accíón!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#007bff',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar usuario!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = link
          Swal.fire(
            'Perfecto!',
            'La información se ha borrado.',
            'success'
          )
        }
      })

    });

  });

</script>

<!-- bs-custom-file-input -->
<script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
<!-- BS-Stepper -->
<script src="{{ asset('backend/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
<script>
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
</script>

<!-- Dropify -->
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js') }}" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(document).ready(function() {
    $('.dropify').dropify({
      messages: {
        'default': 'Arrastre o haga clic',
        'replace': 'Arrastrar y soltar o hacer clic para reemplazar',
        'remove':  'Remover',
        'error':   'Ooops, algo malo sucedió.'
       },
       
    });
  });
</script>

</body>
</html>
