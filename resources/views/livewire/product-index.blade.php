<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="text-dark breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">List Produk</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h2>{{ $title }}</h2>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                      <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    
    
    <section class="product mb-5">
        <div class="row mt-4 mb-2">
            @foreach ($products as $product)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ url('Assets/Produk') }}/{{ $product->gambar }}" alt="" class="img-fluid">
                      <div class="row mt-2">
                        <div class="col-md-12">
                            <h5><strong>{{ $product->nama }}</strong></h5>
                            <h5>Rp. {{ number_format($product->harga) }}</h5>
                          </div>                      
                          </div>
                              <div class="row mt-2 justify-content-center">
                                  <div class="col-sm-11 col-md-12 ">
                                      <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block ">Detail</a>
                                  </div>
                              </div>
                          </div>     
                    </div>
                </div>
            @endforeach
            
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
        

    </section>
</div>
