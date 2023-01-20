@extends('layouts.frontend.master')

@section('title')
    Selamat Datang di Website TokoToku ID
@endsection

@section('content')
    <main>
        <div class="container">
            <!-- start section list product -->
            <section class="product">
                <div class="d-flex justify-content-between">
                    <div class="title">
                        <p class="text-success">Recomended Product</p>
                        <h2>Our Popular Product</h2>
                    </div>
                    <button class="btn btn-primary lihat d-none d-md-block">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>
                <div class="row justify-content-center" id="list-product">
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">
                            <img class="rounded-20 mb-3" height="150" src="" alt="">
                            <div class="topic">
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. </p>
                                    </div>
                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 d-md-none d-lg-none d-xl-none">
                    <button class="btn btn-primary lihat">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>
            </section>
            <!-- end section list product -->
        </div>
    </main>
@endsection
