@extends('layouts.frontend')
@section('content')
<!-- promosi -->
{{-- <div class="promosi pt-3 pb-3">
    <div class="container text-center blink_me">
    </div>
</div> --}}
<!-- end promosi -->
<!-- carausel -->
<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    {{-- <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
    </ol> --}}
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="https://img.freepik.com/premium-photo/vegetables-fruits-white_55883-892.jpg?w=1380" class="img-fluid w-100" id="gambar_slider" alt="First slide">
        </div>
    </div>
        <div class="carousel-item">
            <img src="https://img.freepik.com/free-photo/top-view-vegetables-fruits-bag_23-2148949707.jpg?w=1380&t=st=1657380080~exp=1657380680~hmac=ca7df654ee27d0e8f491d179bfef0a31552d22425290606e58e197d53c1da8a7" class="img-fluid w-100" id="gambar_slider" alt="Second slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <!--product -->
            <div class="product">
                <h4 class="mb-4"><b>Produk Unggulan</b></h4>
                @include('components.frontend.produk_list')
            </div>
            <!-- end product -->
            <div class="official mt-3">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="official-content">
                            <h4><b>Pratama Aulia Jaya</b></h4>
                            <p>Solusi tepercaya untuk memenuhi semua kebutuhan usaha Anda. Lewat ribuan produk segar terbaik yang dapat disesuaikan dengan kebutuhan usaha serta didukung oleh ekosistem logistik dan penyimpanan yang mutakhir, Pratama Aulia Jaya berkomitmen untuk mewujudkan potensi usaha Anda menjadi hasil nyata.</p>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <img src="{{ asset('assets/img/paj.png') }}" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')

@endsection