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
            <div class="col-xs-4 col-sm-3 col-md-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                      <img src="{{ url('Assets/kategori') }}/{{ $kategori->gambar }}" alt="" class="img-fluid"><br>
                      <h5 class="card-subtitle text-center"><strong>{{ $kategori->nama }}</strong></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>
    <section class="pilih-kategori mt-5">
        <h3><strong>Pilih Kategori</strong></h3>
        <div class="row mt-3 text-center">
            @foreach ($kategoris as $kategori)
            <div class="col-xs-4 col-sm-3 col-md-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                      <img src="{{ url('Assets/kategori') }}/{{ $kategori->gambar }}" alt="" class="img-fluid"><br>
                      <h5 class="text-center"><strong>{{ $kategori->nama }}</strong></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>

    {{-- PRODUCT--}}
    <section class="pilih-kategori mt-5">
        <h3><strong>Product</strong></h3>
        <div class="row mt-3">
            @foreach ($products as $product)
            <div class="col-xs-6">
                <div class="card shadow">
                    <div class="card-body text-center">
                      <img src="{{ url('Assets/kategori') }}/{{ $product->gambar }}" alt="" class="img-fluid"><br>
                      <h5 class="card-subtitle text-center"><strong>{{ $product->nama }}</strong></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>
</div>
