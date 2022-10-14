@extends('main')

@section('title', 'Mahasiswa')
@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-8">

        <div class="d-flex align-items-center p-3 mt-5 text-white bg-danger rounded shadow-sm">
            <img class="me-3" src="{{ asset('img/logo_unsika.png') }}" alt="" width="48" height="38">

            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Fasilkom Unsika</h1>
                <small>Informatika 2022</small>
            </div>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Mahasiswa</h6>

            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa1 }}</strong>
                    Adalah seorang mahasiswa informatika kelas 5C di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa2 }}</strong>

                    Adalah seorang mahasiswa informatika kelas 5D di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa3 }}</strong>


                    Adalah seorang mahasiswa informatika kelas 5F di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa4 }}</strong>



                    Adalah seorang mahasiswa informatika kelas 5A di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa5 }}</strong>



                    Adalah seorang mahasiswa informatika kelas 5E di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa6 }}</strong>



                    Adalah seorang mahasiswa informatika kelas 5B di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa7 }}</strong>



                    Adalah seorang mahasiswa informatika kelas 5C di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa8 }}</strong>



                    Adalah seorang mahasiswa informatika kelas 5A di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa9 }}</strong>

                    Adalah seorang mahasiswa informatika kelas 5D di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $mahasiswa10 }}</strong>


                    Adalah seorang mahasiswa informatika kelas 5F di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
        </div>
    </div>
</div>

@endsection
