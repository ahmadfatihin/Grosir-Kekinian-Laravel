<div class="container">

    {{-- BANNER --}}
    <div class="banner">
        <img src="{{ url('Assets/slider/Banner.png') }}" alt="">
    </div>

    {{-- PILIH KATEGORI --}}
    <section class="pilih-kategori mt-5">
        <h3><strong>Pilih Kategori</strong></h3>
        <div class="row mt-3">
            @foreach ($kategoris as $kategori)
            <div class="col-sm-3">
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
</div>
