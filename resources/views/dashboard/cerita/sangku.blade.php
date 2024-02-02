@extends('layouts.Dashboard.app')
@section('content')
        <div class="container-fluid">
            <div class="card shadow bg-warning rounded-4">
                <div class="card-body">
                    <div class="mt-3">
                        <div class="text-center">
                            <span class="text-white fw-bold" style="font-size: 40px">Cerita Sangkuriang</span>
                        </div>
                        <div class="p-3">
                            <div class="my-3 col-auto mx-auto text-center ">
                                <img src="{{ asset('image/sangkuriang1.jpg') }}" class="img-fluid rounded-3" alt="">
                            </div>
                            <p class="text-white fs-4" style="font-size: 20px">
                                Sangkuriang merupakan cerita rakyat dari Jawa Barat. Dilansir dari buku Sangkuriang oleh Kak Seno, dahulu kala hiduplah seorang pangeran dari kayangan yang ingin menikahi seorang gadis cantik dan pintar bernama Dayang Sumbi.

                                Sang pangeran pun menikahi Dayang Sumbi. Meskipun sang pangeran akan berubah menjadi anjing ketika memiliki anak dengan manusia karena orang dari kayangan tidak bisa hidup berdampingan.

                                Benar saja, sang pangeran menjadi seekor anjing bernama Tumang setelah menikah dengan Dayang Sumbi dan melahirkan seorang anak laki-laki bernama Sangkuriang. Sangkuriang tumbuh menjadi cerdas dan tambah, selain itu ia juga suka berburu.

                                Saat berburu, Sangkuriang tidak sengaja membunuh Tumang dan dia memberitahu ibunya tentang Tumang. Dayang Sumbi sangat marah dan memukul kepala Sangkuriang hingga membekaskan luka. Sangkuriang yang sakit hati melihat Ibunya lebih sayang dengan anjing daripada dirinya pun memutuskan kabur dari rumahnya.

                                Setelah bertahun-tahun kabur, Sangkuriang bertemu seorang wanita cantik dan jatuh cinta kepada wanita itu yang Sangkuriang tidak tahu bahwa wanita itu adalah Ibunya. Sangkuriang terus ingin menikahi Dayang Sumbi, namun bekas luka di kepalanya membuat Dayang Sumbi tahu bahwa ini merupakan anak laki-lakinya.

                                Akhirnya, untuk mencegah Sangkuriang menikahinya, Dayang sumbi meminta Sangkuriang untuk dibuatkan sebuah perahu besar dalam semalam untuk syarat menikahinya. Sangkuriang menerimanya dan ia melakukannya dengan bantuan para jin.

                                Hingga saat menjelang subuh, perahu yang dibuatnya hampir selesai. Dayang Sumbi pun memikirkan cara untuk menghentikannya, ia segera membangunkan semua wanita untuk melambaikan selendang merah seolah matahari telah muncul. Melihat selendang itu para ayam jantang berkokok dan petani beranjak ke ladang seolah hari telah pagi.

                                Sangkuriang yang melihat jin-jinnya pergi menghilang karena dikira fajar telah muncul pun marah. Ia menendang perahu yang belum selesai itu lalu perahu mendarat dengan terbalik dan kini disebut dengan nama Tangkuban Perahu.
                            </p>
                        </div>
                        <div class="d-md-flex align-items-center">
                            <div class=" col-md-8 text-end ">
                                <div class="me-4 align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" height="28" width="28"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"/></svg>
                                    <span class=" ms-3 fw-semibold" style="font-size: 12px;">48</span>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M313.4 479.1c26-5.2 42.9-30.5 37.7-56.5l-2.3-11.4c-5.3-26.7-15.1-52.1-28.8-75.2H464c26.5 0 48-21.5 48-48c0-18.5-10.5-34.6-25.9-42.6C497 236.6 504 223.1 504 208c0-23.4-16.8-42.9-38.9-47.1c4.4-7.3 6.9-15.8 6.9-24.9c0-21.3-13.9-39.4-33.1-45.6c.7-3.3 1.1-6.8 1.1-10.4c0-26.5-21.5-48-48-48H294.5c-19 0-37.5 5.6-53.3 16.1L202.7 73.8C176 91.6 160 121.6 160 153.7V192v48 24.9c0 29.2 13.3 56.7 36 75l7.4 5.9c26.5 21.2 44.6 51 51.2 84.2l2.3 11.4c5.2 26 30.5 42.9 56.5 37.7zM32 384H96c17.7 0 32-14.3 32-32V128c0-17.7-14.3-32-32-32H32C14.3 96 0 110.3 0 128V352c0 17.7 14.3 32 32 32z"/></svg>
                                <span class="ms-3 fw-semibold">6</span>
                                <span class="text-end ms-3">235 x dibaca <span class="ms-4">14 hari yang lalu</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
@endsection
