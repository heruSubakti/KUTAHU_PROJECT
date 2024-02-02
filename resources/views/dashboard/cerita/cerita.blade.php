@extends('layouts.Dashboard.app')
@section('content')
        <div class="container-fluid">
          <div class="card">
            <div class="card-body shadow bg-warning rounded-4">
                <div class="">
                    <div class="">
                       <div class="fw-bold text-center mb-3 text-white" style="font-size: 30px;">KUMPULAN CERITA KUTAHU</div>
                    </div>
                    <div class="">
                        <div class="d-md-flex mb-3">
                            <div class="col-md-6">
                                <a href="{{ route('cerita') }}" class="">
                                    <img src="{{ asset('image/jaka-tarub.jpg') }}" class="col-md-12 img-fluid rounded-4" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 p-3">
                                <div class="fw-bold text-white text-center mt-2" style="font-size: 30px;">Kisah Jaka Tarub</div>
                                <span class="" style="font-size: 20px;">Jaka Tarub merupakan cerita rakyat dari Jawa Tengah. Dilansir dari buku Cerita Rakyat Nusantara oleh Sumbi Sambangsari, cerita rakyat ini berkisah tentang seorang pemuda bernama Jaka Tarub.</span>
                            </div>
                        </div>
                        <div class="d-md-flex mb-3">
                            <div class="col-md-6">
                                <a href="{{ route('cerita1') }}" class="">
                                    <img src="{{ asset('image/sangkuriang1.jpg') }}" class="col-md-12 img-fluid rounded-4" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 p-3">
                                <div class="fw-bold text-white text-center mt-2" style="font-size: 30px;">Kisah Sangkuriang</div>
                                <span class="" style="font-size: 20px;">Sangkuriang merupakan cerita rakyat dari Jawa Barat. Dilansir dari buku Sangkuriang oleh Kak Seno, dahulu kala hiduplah seorang pangeran dari kayangan yang ingin menikahi seorang gadis cantik dan pintar bernama Dayang Sumbi.</span>
                            </div>
                        </div>
                        <div class="d-md-flex mb-3">
                            <div class="col-md-6">
                                <a href="{{ route('joko_kendil') }}" class="">
                                    <img src="{{ asset('assets/img/joko_kendil.jpeg') }}" class="col-md-12 img-fluid rounded-4" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 p-3">
                                <div class="fw-bold text-white text-center mt-2" style="font-size: 30px;">Joko Kendil</div>
                                <span class="" style="font-size: 20px;">Joko Kendil merupakan salah satu cerita rakyat populer juga dari Nusantara, tepatnya di Jawa Tengah. Dilansir dari buku Cerita Rakyat dari Jawa Tengah Volume 1 oleh James Danandjaja, cerita rakyat ini mengisahkan seorang Raja Asmawikana yang memiliki satu permaisuri dan satu selir. </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
@endsection
