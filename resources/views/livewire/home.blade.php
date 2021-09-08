<div class="container">

    {{-- BANNER --}}
    <div class="banner">
        <img src="{{ url('Assets/slider/Banner.png') }}" alt="">
    </div>

    {{-- KATEGORI --}}
    <section class="pilih-kategori mt-5">
        <h3><strong>Pilih Kategori</strong></h3>
        <div class="row mt-3 text-center">
            @foreach ($kategoris as $kategori)
            <div class="col-6 col-md-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                      <img src="{{ url('Assets/kategori') }}/{{ $kategori->gambar }}" alt="" class="img-fluid"><br>
                      <h5 class="card-subtitle-kategori text-center"><strong>{{ $kategori->nama }}</strong></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>
   

    {{-- PRODUCT--}}
    <section class="product mt-5 mb-5">
        <h3><strong>Best Product</strong></h3>
        <div class="row mt-3">
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ url('Assets/Produk') }}/{{ $product->gambar }}" alt="" class="img-fluid">
                      <div class="row mt-2">
                            <div class="col-md-12">
                              <h5><strong>{{ $product->nama }}</strong></h5>
                              <h5>Rp. {{ number_format($product->harga) }}</h5>
                            </div>                      
                            </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <a href="" class="btn btn-dark btn-block">Detail</a>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>
</div>
