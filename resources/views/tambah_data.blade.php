<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-3">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-center mb-5">Data produk</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <form action="{{  request('id') ? route('edit-produk') : route('tambah-data')}}" method="POST">
                                @csrf
                                @if(request('id'))
                                <input type="hidden" name="id" value="{{request('id')}}" id="">
                                @endif
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Produk</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $data->nama_produk ?? "" }}" placeholder="Nama Produk">
                                    @error('nama')
                                        <span class="text-danger" style="font-size: 14px">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="nama" class="form-label">Berat Produk</label>
                                  <input type="number" name="berat" class="form-control" value="{{ $data->berat_barang ?? "" }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Berat Produk">
                                  @error('berat')
                                  <span class="text-danger" style="font-size: 14px">{{$message}}</span>
                                 @enderror
                                </div>
                                <div x-data="{ size: '{{ $data->size ?? "" }}'}" class="mb-3">
                                    <label for="jenis kelamin"  class="form-label">Size</label>
                                    <select name="size" class="form-select" x-model="size" id="">
                                    <option value="">Pilih Size</option>
                                      <option value="S">S</option>
                                      <option value="M">M</option>
                                      <option value="L">L</option>
                                      <option value="XL">XL</option>
                                      <option value="XXL">XXL</option>
                                    </select>
                                    @error('size')
                                    <span class="text-danger" style="font-size: 14px">{{$message}}</span>
                                @enderror
                                  </div>
                                <div class="mb-3">
                                  <label for="alamat" class="form-label">Harga</label>
                                  <input type="number" value="{{ $data->harga ?? "" }}" name="harga" class="form-control" id="alamat" placeholder="Harga">
                                  @error('harga')
                                  <span class="text-danger" style="font-size: 14px">{{$message}}</span>
                              @enderror
                                </div>
                                <button type="submit" class="bg-primary text-white btn">Simpan</button>
                              </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>