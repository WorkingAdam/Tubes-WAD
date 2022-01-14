@extends('admin/admin')
   
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0"><?php echo $judul ?></h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active"><?php echo $judul ?></li>
				</ol>
			</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
		<div class="container-fluid">
			<!-- Info boxes -->
      <div class="row">
			<div class="col-md-12">
				<div class="card">
				<div class="card-header">
					<h5 class="card-title"><?php echo $judul ?></h5>

					<div class="card-tools">
					
          <a class="btn btn-tool" href="{{route('admin.layanan')}}"> <i class="fas fa-undo"> </i> Back </a>  

          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
					
					<div class="col-md-3"></div>
					
					<div class="col-md-6">
						<form class="form-horizontal" action="{{ route('admin.layanan.update',$row->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Nama Game</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nama_game" value="{{ old('nama_game', $row->nama_game) }}" placeholder="Nama Lengkap">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Diamonds</label>
							<div class="col-sm-9">
							<select class="form-control select2bs4" name="diamond" style="width: 100%;">
								<option selected="selected" value="{{ ($row->diamond) }}">{{ ($row->diamond) }}</option>
								<option value="100">100 Diamonds</option>
								<option value="200">200 Diamonds</option>
								<option value="200">300 Diamonds</option>
								<option value="200">400 Diamonds</option>
							</select>
						
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tarif</label>
							<div class="col-sm-9">
							<select class="form-control select2bs4" name="tarif" style="width: 100%;">
								<option selected="selected" value="{{ ($row->tarif) }}">{{ ($row->tarif) }}</option>
								<option value="Rp. 100.000">Rp. 100.000</option>
								<option value="Rp. 200.000">Rp. 200.000</option>
								<option value="Rp. 300.000">Rp. 300.000</option>
								<option value="Rp. 400.000">Rp. 400.000</option>
							</select>
						
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Status</label>
							<div class="col-sm-9">
							<select class="form-control select2bs4" name="status" style="width: 100%;">
								<option selected="selected" value="{{ ($row->status) }}">{{ ($row->status) }}</option>
								<option value="Aktif">Aktif</option>
								<option value="Non Aktif">Non Aktif</option>
							</select>
						
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Cover</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="cover">
							</div>
						</div>

						<center>
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
						</center>
						</form>
					</div>

					<div class="col-md-3">
						<center>
							<img src="{{ URL('image/'.$row->cover) }}" width="70%" />
						</center>
					</div>
					<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- ./card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
			</div>
			<!-- /.row -->

		</div><!--/. container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

@endsection