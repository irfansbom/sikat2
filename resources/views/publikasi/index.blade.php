@extends('layout.layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container py-5">
            <div class="card">
                <div class="card-body py-2">
                    <div class="row justify-content-end p-0 mb-2">
                        <div class="col-2 text-end p-0">
                            <a class="btn btn-primary p-1" href="{{ url('publikasi/create') }}">
                                <i class="uil uil-plus"> Tambah</i>
                            </a>
                        </div>
                    </div>

                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <table class="table table-striped table-sm table-bordered text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">No Rak</th>
                                    <th scope="col">Domain</th>
                                    <th scope="col">Scan Terakhir</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i => $dt)
                                    <tr>
                                        <th scope="row">{{ $i + 1 }}</th>
                                        <td class="text-start">{{ $dt->title }}</td>
                                        <td>{{ $dt->no_rak }}</td>
                                        <td>{{ $dt->domain }}</td>
                                        <td>{{ $dt->last_scan }}</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm p-1">
                                                <i class="uil uil-illustration"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm p-1">
                                                <i class="uil uil-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--/column -->

                        {{ $data->links() }}
                    </div>

                </div>
            </div>

            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
