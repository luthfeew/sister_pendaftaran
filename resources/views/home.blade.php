@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Data Pemohon</h1>
@stop

@section('content')
<div class="row">
    <div class="col">
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal Daftar</th>
                    <th>Nomor ID</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Nama Ibu Kandung</th>
                    <th>Jenis ID</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Status Perkawinan</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->idNumber}}</td>
                    <td>{{$row->fullname}}</td>
                    <td>{{$row->gender}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->religion}}</td>
                    <td>{{$row->pob}}</td>
                    <td>{{$row->dob}}</td>
                    <td>{{$row->noTelp}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->motherMaidenName}}</td>
                    <td>{{$row->IDType}}</td>
                    <td>{{$row->lastEduBg}}</td>
                    <td>{{$row->maritalStatus}}</td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    <tr>
                        <td colspan="15" class="text-center">Tidak ada data</td>
                    </tr>
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@stop

@section('footer')
<!-- <h1>Footer</h1> -->
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
@stop

@section('js')
<!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            responsive: true
        });
    });
</script>
@stop