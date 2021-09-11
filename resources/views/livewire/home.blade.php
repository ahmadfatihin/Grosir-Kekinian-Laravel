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
                <div class="col-6 col-md-3 mb-3">
                    <a href="{{ route('products.kategori', $kategori->id) }}">
                    <div class="card shadow mb-3">
                        <div class="card-body text-center">
                          <img src="{{ url('Assets/kategori') }}/{{ $kategori->gambar }}" alt="" class="img-fluid"><br>
                          <h5 class="card-subtitle-kategori text text-center"><strong>{{ $kategori->nama }}</strong></h5>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>           
       
    </section>
   

    {{-- PRODUCT--}}
    <section class="product mt-5 mb-5">
        <h3>
            <strong>Best Products</strong>
            <a href="{{ route('products') }}" class="btn btn-dark float-right"> &emsp;Lihat Semua &emsp;<i class="fas fa-eye"></i>&ensp;</a>
        </h3>
        <div class="row mt-4">
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
                                    <a href="{{ route('products.detail', $product->id) }}" class="btn btn-success btn-block">Beli</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>
</div>
