@extends('main')

@section('title', 'Dosen')

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
            <h6 class="border-bottom pb-2 mb-0">Dosen</h6>

            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenBlockchain }}</strong>
                    Adalah seorang dosen mata kuliah {{ $mkBlockchain }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.

                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenDatmin }}</strong>
                    Adalah seorang dosen mata kuliah {{ $mkDatmin }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenTechnopreneur }}</strong>

                    Adalah seorang dosen mata kuliah {{ $mkTechnopreneur }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenCloudcomputing }}</strong>


                    Adalah seorang dosen mata kuliah {{ $mkCloudcomputing }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenMatematikadiskrit }}</strong>


                    Adalah seorang dosen mata kuliah {{ $mkMatematikadiskrit }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenJaringan }}</strong>


                    Adalah seorang dosen mata kuliah {{ $mkJaringan }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenBahasainggris }}</strong>


                    Adalah seorang dosen mata kuliah {{ $mkBahasainggris }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenPemrogramandasar }}</strong>


                    Adalah seorang dosen mata kuliah {{ $mkPemrogramandasar }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenPemrogramanmobile }}</strong>


                    Adalah seorang dosen mata kuliah {{ $mkPemrogramanmobile }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <img class="me-3 img-thumbnail" src="{{ asset('img/squid.jpg') }}" alt="" width="50" height="48">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">{{ $dosenFrameworkweb }}</strong>

                    Adalah seorang dosen mata kuliah {{ $mkFrameworkweb }} di Fakultas Ilmu Komputer Universitas Singaperbangsa Karawang.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
