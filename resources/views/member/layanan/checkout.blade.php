<html lang="en">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset ('lte/lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- DataTables -->
	<link rel="stylesheet" type="text/css" href="{{asset('lte/plugins/datatable/jquery.dataTables.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lte/plugins/datatable/jquery.dataTables.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/datatable/dataTables.bootstrap5.min.css')}}">

  <!-- Select2 -->
	<link rel="stylesheet" href="{{asset('lte/plugins/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/plugins/select2/select2-bootstrap4.min.css')}}">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('lte/lte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <?php 
    foreach($q as $k => $item): ?>
		<!-- Main content -->
		<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Fellastore
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Pemesan
                  <?php 
                    foreach($members as $dt): ?>
                  <address>
                    <strong><?= $dt['name'] ?></strong><br>
                    Email: <?= $dt['email'] ?>
                  </address>
                  <?php endforeach ?>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  FELLASTORE
                  <address>
                    <strong>Edward Yuliano</strong><br>
                    Ngawi<br>
                    Jawa Timur<br>
                    Phone: 081234567890<br>
                    Email: fellastore@gmail.com.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Order Code #{{$item->code}}</b><br>
                  <br>
                  <b>Tanggal Order:</b> <?php echo date('d/m/Y') ?><br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Nama Game</th>
                      <th>NickName Game</th>
                      <th>Diamond</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                      <td>{{$item->nama_game}}</td>
                      <td>{{$item->nickname}}</td>
                      <td>
                                {{$item->diamond}}
            </td>
                      <td>
                      {{$item->harga_order}}
                            </td>
                    </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-3">
                  <p class="lead">Metode Pembayaran:</p>
                  

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    BANK BNI<br>
                    No. Rekening : 12345678<br>
                    a.n Edward Yuliano<br>
                    </p>
                    <hr>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">  
                    Go Pay<br>
                    No. Hp : 0812345678<br>
                    a.n Edward Yuliano
                  </p>
                </div>
                <div class="col-3">
                  <p class="lead">&nbsp;</p>
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Dana<br>
                    No. Hp : 0812345678<br>
                    a.n Edward Yuliano<br>
                    </p>
                    <hr>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">  
                    Ovo<br>
                    No. Hp : 0812345678<br>
                    a.n Edward Yuliano
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Tanggal Bayar: <?php echo date('d/m/Y') ?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td> {{$item->diamond}}</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>{{$item->harga_order}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <a href="{{ route('member.layanan.cetakinvoice',$item->code) }}" target="_blank" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Bayar</a>
              <a href="/member/layanan" class="btn btn-success right"> Home</a>
              <form action="{{ route('member.layanan.batalorder',$item->code) }}" method="POST">
                    @csrf
							      @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Batalkan order ini?')"><i class="fas fa-undo"> </i> Batalkan Order</button>
                	</form>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php endforeach ?>
        
	</div>
	<!-- /.content-wrapper -->

<!-- jQuery -->
<script src="{{asset ('lte/lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ('lte/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script type="text/javascript" charset="utf8" src="{{asset('lte/plugins/datatable/jquery.dataTables.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('lte/plugins/select2/select2.full.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset ('lte/lte/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('lte/lte/dist/js/pages/dashboard2.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>

	$(document).ready( function () {
		$('#myTable').DataTable( {
        "scrollX": true
    	});
	});

  $(document).ready(function() {
    $('#myTable2').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
  } );

    $(function () {
		//Initialize Select2 Elements
    	$('.select2').select2()

		//Initialize Select2 Elements
		$('.select2bs4').select2({
      		theme: 'bootstrap4'
    	})
    });
    </script>

</body>
</html>