@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
            <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5" style="background-image: url({{asset('images/gambar/math.jpg')}})">
                <div class="opacity-extra-medium bg-blue-whale"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-8 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Prodi Matematika</h1>
                        </div>
                        <div class="down-section text-center" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <a href="#down-section" class="section-link">
                                <div class="text-white">
                                    <i class="feather icon-feather-chevron-down icon-very-medium"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end page title -->
            <!-- start section -->
            <section id="down-section" class="border-bottom border-color-extra-medium-gray">
                <div class="container overlap-gap-section"> 
                    <div class="row align-items-center justify-content-center mb-5 md-mb-40px text-center text-md-start">                    
                        <div class="col-xl-5 col-lg-6 col-md-10 md-mb-20px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Tentang Prodi</span>
                            <h3 class="text-dark-gray fw-700 mb-0 ls-minus-1px">Apa itu Prodi Matematika ?</h3>
                            {{-- @if($tentang && $tentang->thumbnail)
                            <img  class= "tw-my-8" src="{{asset('storage/'.$tentang->thumbnail)}}" alt="">
                            @endif --}}
                            <img  class= "tw-my-8" src="{{asset('images/gambar/math.jpg')}}" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-10 offset-xl-1 text-center text-lg-start last-paragraph-no-margin">
                            {{-- @if ($tentang && $tentang->deskripsi)
                            <p class="w-90 xl-w-100 lg:tw-pt-36" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                {!! $tentang->deskripsi !!}
                            </p>
                            @endif --}}
                            <p class="w-90 xl-w-100 lg:tw-pt-36" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Program Studi Matematika adalah bidang ilmu yang mempelajari struktur, pola, dan hubungan antar konsep yang abstrak maupun aplikatif. Di dalamnya, mahasiswa akan mendalami berbagai cabang matematika seperti aljabar, kalkulus, statistika, analisis, serta pemodelan matematika dan komputasi. Program studi ini cocok bagi mereka yang suka berpikir logis, analitis, dan menyukai tantangan pemecahan masalah. Lulusan matematika memiliki peluang karier yang luas, mulai dari dunia pendidikan, riset, data science, keuangan, hingga teknologi informasi.
                            </p>
                            <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow tw-mt-7">
                                Selengkapnya
                                <span class="bg-orient-blue text-white">
                                    <i class="feather icon-feather-arrow-right icon-small"></i>
                                </span>
                            </a>  
                        </div>
                    </div>
            </section>
            <!-- end section -->
            <!-- start section --> 
            <!-- end section -->
            <!-- start section -->
            <section class="overflow-hidden cover-background position-relative overlap-height" style="background-image: url(https://via.placeholder.com/1920x776)">
                <div class="container overlap-gap-section">
                    <div class="row align-items-center justify-content-center mb-7"> 
                        <div class="col-xl-5 col-lg-6 mb-30px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h3 class="text-dark-gray fw-700 ls-minus-2px mb-50px">Visi, Misi, dan Tujuan</h3>
                            <div class="row row-cols-1">
                                <!-- start process step item -->
                                <div class="col-12 process-step-style-05 position-relative hover-box">
                                    <div class="process-step-item d-flex">
                                        <div class="process-step-icon-wrap position-relative">
                                            <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                                <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-binoculars fs-16"></i></span>
                                                <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                            </div> 
                                            <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                        </div>
                                        <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                            <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Visi</span>
                                            {{-- @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                                                <p class="w-90 sm-w-100">{!! $visiMisiTujuan->visi !!}</p>
                                            @endif --}}
                                            <p class="w-90 sm-w-100">Menjadi Program Studi unggulan dalam bidang akuntansi dan perpajakan yang profesional, berintegritas, dan adaptif terhadap perkembangan teknologi serta kebutuhan dunia kerja di tingkat nasional.</p>
                                        </div>
                                    </div> 
                                </div>
                                <!-- end process step item --> 
                                <!-- start process step item -->
                                <div class="col-12 process-step-style-05 position-relative hover-box">
                                    <div class="process-step-item d-flex">
                                        <div class="process-step-icon-wrap position-relative">
                                            <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                                <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-flag fs-16"></i></span>
                                                <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                            </div> 
                                            <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                        </div>
                                        <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                            <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Misi</span>
                                            {{-- @if ($visiMisiTujuan && $visiMisiTujuan->misi)
                                                <p class="w-90 sm-w-100">{!! $visiMisiTujuan->misi !!}</p>
                                            @endif --}}
                                            <p class="w-90 sm-w-100">Menyelenggarakan pendidikan di bidang akuntansi dan perpajakan yang berbasis kompetensi dan teknologi terkini.</p>
                                        </div>
                                    </div> 
                                </div>
                                <!-- end process step item --> 
                                <!-- start process step item -->
                                <div class="col-12 process-step-style-05 position-relative hover-box">
                                    <div class="process-step-item d-flex">
                                        <div class="process-step-icon-wrap position-relative">
                                            <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                                <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-trophy fs-16"></i></span>
                                                <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                            </div>
                                        </div>
                                        <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-30px">
                                            <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Tujuan</span>
                                            {{-- @if ($visiMisiTujuan && $visiMisiTujuan->tujuan)
                                                <p class="w-90 sm-w-100">{!! $visiMisiTujuan->tujuan !!}</p>
                                            @endif --}}
                                            <p class="w-90 sm-w-100">Mendorong terciptanya inovasi dan solusi praktis melalui kegiatan penelitian dan pengabdian masyarakat.</p>
                                        </div>
                                    </div> 
                                </div>
                                <!-- end process step item --> 
                            </div>  
                        </div> 
                        <div class="col-lg-6 text-center md-mb-20px offset-xl-1"> 
                            <figure class="position-relative mb-0 overflow-hidden" data-shadow-animation="true" data-bottom-top="transform: translateY(70px)" data-top-bottom="transform: translateY(-70px)"> 
                                <img src="{{ asset('images/gambar/math2.jpg') }}" class="w-100 border-radius-6px" alt=""> 
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-0 big-section tw-my-20">
                <div class="container">
                    <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                        <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                            <h3 class="fw-700 text-dark-gray ls-minus-2px">Kata Sambutan</h3> 
                            <div class="tw-space-y-4 tw-text-justify tw-text-base tw-leading-relaxed tw-w-90 lg:tw-w-95 md:tw-w-full">
                                {{-- @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                                    <p>{!! $pimpinanStaff->kata_sambutan !!}</p>
                                @endif --}}
                                <p>Program Studi Matematika hadir sebagai pusat pengembangan ilmu matematika yang tidak hanya fokus pada pemahaman teori, tetapi juga pada penerapan matematika dalam berbagai bidang kehidupan. Kami berkomitmen mencetak lulusan yang unggul, kritis, dan mampu beradaptasi dengan perkembangan teknologi dan kebutuhan industri.
                                Melalui kurikulum yang adaptif, suasana akademik yang kondusif, serta dosen-dosen yang kompeten, kami berharap website ini menjadi jendela informasi bagi mahasiswa, orang tua, calon mahasiswa, dan masyarakat luas untuk mengenal lebih dekat Program Studi Matematika.</p>
                            </div>
                            
                        </div>
                        <div class="col-lg-6 position-relative sm-mt-10"> 
                            <div class="w-70 md-w-75 xs-w-90 lg:tw-ml-32 md:tw-ml-40 tw-ml-20" data-animation-delay="50">
                                {{-- @if ($pimpinanStaff && $pimpinanStaff->foto)
                                    <img src="{{ asset('storage/' . $pimpinanStaff->foto) }}" alt="" class=" border-radius-8px md:tw-w-[80%] tw-w-[70%] lg:tw-w-[100%]">  
                                @endif --}}
                                <img src="{{ asset('images/gambar/alumni2.jpg') }}" alt="" class=" border-radius-8px md:tw-w-[80%] tw-w-[70%] lg:tw-w-[100%]">
                            </div>
                        </div> 
                    </div> 
                    <a href="#" class="tw-ml-24 md:tw-ml-[16rem] lg:tw-ml-24 btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow tw-mt-7">
                        Selengkapnya
                        <span class="bg-orient-blue text-white">
                            <i class="feather icon-feather-arrow-right icon-small"></i>
                        </span>
                    </a>                        
                </div>
            </section>
            <section class="py-0">
                <div class="container">        
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-6 col-md-7 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <h3 class="fw-700 text-dark-gray ls-minus-2px">Berita Terkini</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                <li class="grid-sizer"></li>
                                {{-- @foreach ($publikasi->where('status', 'Berita')->sortByDesc('waktu')->take(3) as $item) --}}
                                {{-- <li class="grid-item">
                                    <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="blog-image" style="height: 200px; overflow: hidden;">
                                            @if ($item->gambar)
                                            <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" class="d-block">
                                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                            </a>
                                            @endif
                                        </div>
                                        <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding-bottom: 0;">
                                            @if ($item->judul)
                                            <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" 
                                            class="card-title mb-3 fw-600 fs-20 text-dark-gray d-inline-block" 
                                            style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                {!! Str::limit($item->judul, 90) !!}
                                            </a>
                                            @endif
                                            @if ($item->deskripsi)
                                            <p style="margin-top: 5px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                {!! Str::limit($item->deskripsi, 120) !!}
                                            </p>
                                            @endif
                                            <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                                <div class="me-auto">
                                                    @if ($item->waktu)
                                                    <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                        {{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y') }}
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                {{-- @endforeach --}}
                                <!-- start blog list -->
                                <li class="grid-item">
                                    <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="blog-image" style="height: 200px; overflow: hidden;">
                                            <a href="#" class="d-block">
                                                <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                            </a>
                                        </div>
                                        <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                            <a href="#" 
                                            class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                            style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                            </a>
                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                            </p>
                                            <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                                <div class="me-auto">
                                                    <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                        15 Maret 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end blog list -->
                                <li class="grid-item">
                                    <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="blog-image" style="height: 200px; overflow: hidden;">
                                            <a href="#" class="d-block">
                                                <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                            </a>
                                        </div>
                                        <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                            <a href="#" 
                                            class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                            style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                            </a>
                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                            </p>
                                            <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                                <div class="me-auto">
                                                    <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                        15 Maret 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end blog list -->
                                <li class="grid-item">
                                    <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="blog-image" style="height: 200px; overflow: hidden;">
                                            <a href="#" class="d-block">
                                                <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                            </a>
                                        </div>
                                        <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                            <a href="#" 
                                            class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                            style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                            </a>
                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                            </p>
                                            <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                                <div class="me-auto">
                                                    <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                        15 Maret 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end blog list -->
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
    </body>
@endsection