@extends('layouts.Dashboard.app')
@section('content')
        <div class="container-fluid">
            <span class="fw-bold text-warning mb-5" style="font-size: 50px">Hello Sahabat👋</span>
            <h5 class="text-white">Welcome to Kutahu</h5>
          <div class="card">
            <div class="card-body bg-warning shadow rounded-4">
                <div class="row">
                    <div class="">
                        <div class="card-title fw-bold  text-white" style="font-size: 25px;">Trending Video Kutahu !</div>
                        <div class="col-12 d-md-flex justify-content-between">
                            {{-- <video controls  class="col-4"  style="">
                                <source src="{{ asset('image/video-1.mp4') }}"  type="video/mp4" />
                            </video> --}}
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/uqzPk3Sc4Xo?si=7V0b5eNUPogJNlUj" title="YouTube video player" class="img-fluid" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <img src="{{ asset('image/kutahulogo (2).png') }}" class="col-md-4" height="250" alt="">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/nuiMYqMrEf0?si=LU0BW96L-gqliK-x" title="YouTube video player" class="img-fluid" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-title b fw-bold mb-2 mt-2 text-white" style="font-size: 25px;">Trending Cerita Kutahu !</div>
                        <div class="colmd-12 d-md-flex justify-content-between">
                            <a href="{{ route('cerita') }}" class="">
                                <img src="{{ asset('image/jaka-tarub.jpg') }}" class="col-md-12 img-fluid" alt="">
                                <h5 class="fw-bold text-white text-center mt-2">Kisah Jaka Tarub</h5>
                            </a>
                            <img src="{{ asset('image/kutahulogo (2).png') }}" class="col-md-4" height="250" alt="">
                            <a href="{{ route('cerita1') }}" class="">
                                <img src="{{ asset('image/sangkuriang1.jpg') }}" class="col-md-12 img-fluid" alt="">
                                <h5 class="fw-bold text-white mt-2 text-center">Kisah Sangkuriang</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
@endsection