@extends('admin/admin')
   
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$judul}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
      <h2><strong>Selamat Datang di Halaman Admin FELLASTORE</strong></h2>
      <div class="alert alert-info">
        <h3>Script Admin</h3>
        <ol>
        <li>Cara Melihat Member</li>
          <ul>
          <li>Klik pada menu master data</li>
          <li>Klik Member</li>
          <li>Data member akan terlihat</li>
          </ul>
          
        <li>Cara Melihat Layanan</li>
          <ul>
          <li>Klik pada menu master data</li>
          <li>Klik Layanan</li>
          <li>Data Layanan akan terlihat</li>
          </ul>

        <li>Cara Melihat Order</li>
          <ul>
          <li>Klik pada menu master data</li>
          <li>Klik Order</li>
          <li>Data order/pesanan akan terlihat</li>
          </ul>

        <li>Cara Melihat Harga Diamond Terkini</li>
          <ul>
          <li>Klik pada menu master data</li>
          <li>Klik Harga diamond terkini</li>
          <li>Data Harga diamond akan terlihat</li>
          </ul>
          
        </ol>
        
      </div>
    </div>
    <!-- Main content -->
    


@endsection