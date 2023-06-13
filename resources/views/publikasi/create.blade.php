@extends('layout.layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container py-5">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Buku</h3>
                </div>
                <div class="card-body py-2">
                    <div class="row justify-content-end p-0">
                        <form id="form" action="{{ url('publikasi') }}" name="form" class="form-horizontal"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            @include('publikasi.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
