@extends('admin.template.default')
@section('additional_css')
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
    @section('page_heading', 'Formulir 1')
    @section('content')
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Formulir</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Fasilitas</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Status</th>
                            <th>Kelola</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Fasilitas</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Status</th>
                            <th>Kelola</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kijang Box - W 9084 NH</td>
                            <td>26/01/2020</td>
                            <td>09:00 - 10:00</td>
                            <td style="text-align: center">
                                <button class="btn btn-md btn-success">
                                    <i class="fas fa-check"></i> Selesai
                                </button>
                            </td>
                            <td>
                                <a href="{{route('formulir1.edit')}}" class="btn btn-primary btn-md" data-title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <button class="btn btn-danger btn-md" data-title="Hapus" data-toggle="modal" data-target="#hapus" >
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
    @section('additional_js')
        <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection
