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
            <section class="pt-0 big-section tw-mt-10">
                <div class="container">
                    <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                        <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23"> 
                            <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                                {{-- @if ($tentang && $tentang->thumbnail)
                                    <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="" class="border-radius-8px w-100">
                                @endif --}}
                                <img src="{{ asset('images/gambar/hero.jpg') }}" alt="" class="border-radius-8px w-100">
                            </div>
                            <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                                <img src="{{ asset('images/gambar/math2.jpg') }}" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                            </div>
                        </div> 
                        <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                            <h3 class="fw-700 text-dark-gray ls-minus-2px">Apa yang Dipelajari dalam Prodi Matematika?</h3> 
                            {{-- @if ($tentang && $tentang->deskripsi)
                                <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">{!! $tentang->deskripsi !!}></p>
                            @endif --}}
                            <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">Program Studi Matematika adalah bidang ilmu yang mempelajari struktur, pola, dan hubungan antar konsep yang abstrak maupun aplikatif. Di dalamnya, mahasiswa akan mendalami berbagai cabang matematika seperti aljabar, kalkulus, statistika, analisis, serta pemodelan matematika dan komputasi. Program studi ini cocok bagi mereka yang suka berpikir logis, analitis, dan menyukai tantangan pemecahan masalah. Lulusan matematika memiliki peluang karier yang luas, mulai dari dunia pendidikan, riset, data science, keuangan, hingga teknologi informasi.</p> 
                            <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                                Selengkapnya
                                <span class="bg-orient-blue text-white">
                                    <i class="feather icon-feather-arrow-right icon-small"></i>
                                </span>
                            </a>                        
                        </div> 
                    </div> 
                </div>
            </section>  
            <!-- end section -->
            <!-- start section --> 
            <!-- end section -->
            <!-- start section --> 
            <section class="overlap-height">
                <div class="container overlap-gap-section">
                    <div class="row justify-content-center mb-4 sm-mb-10"> 
                        <div class="col-xl-6 col-lg-7 text-center last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="fs-20 text-base-color">Tentang Kami</span>
                            <h3 class="alt-font fw-500 text-dark-gray w-80 xs-w-100 mx-auto ls-minus-1px">Visi, Misi, Tujuan</h3>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-4 justify-content-center gap-4 justify-content-center" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start process step item -->
                        <div class="tw-p-4 tw-h-full tw-flex tw-flex-col tw-justify-between text-center process-step-style-02 hover-box last-paragraph-no-margin md-mb-50px">
                            <i class="bi bi-bullseye text-dark-gray icon-large mb-20px"></i>
                            <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Visi</span>
                            {{-- @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                                <p>{!! $visiMisiTujuan->visi !!}</p>
                            @endif --}}
                            <p>Menjadi Program Studi unggulan dalam bidang Matematika, berintegritas, dan adaptif terhadap perkembangan teknologi serta kebutuhan dunia kerja di tingkat nasional.</p>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="tw-p-4 tw-h-full tw-flex tw-flex-col tw-justify-between text-center process-step-style-02 hover-box last-paragraph-no-margin md-mb-50px">
                            <i class="bi bi-list-task text-dark-gray icon-large mb-20px"></i>     
                            <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Misi</span>
                            {{-- @if ($visiMisiTujuan && $visiMisiTujuan->misi)
                                <p>{!! $visiMisiTujuan->misi !!}</p>
                            @endif --}}
                            <p>Menyelenggarakan pendidikan di bidang akuntansi dan perpajakan yang berbasis kompetensi dan teknologi terkini.</p>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="tw-p-4 tw-h-full tw-flex tw-flex-col tw-justify-between text-center process-step-style-02 hover-box last-paragraph-no-margin xs-mb-50px">
                            <i class="bi bi-stars text-dark-gray icon-large mb-20px"></i>  
                            <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Tujuan</span>
                            {{-- @if ($visiMisiTujuan && $visiMisiTujuan->tujuan)
                                <p>{!! $visiMisiTujuan->tujuan !!}</p>
                            @endif --}}
                            <p>Mendorong terciptanya inovasi dan solusi praktis melalui kegiatan penelitian dan pengabdian masyarakat.</p>
                        </div>
                        <!-- end process step item -->
                    </div>
                    <div class="tw-mt-5 tw-flex tw-justify-center">
                        <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                            Selengkapnya
                            <span class="bg-orient-blue text-white">
                                <i class="feather icon-feather-arrow-right icon-small"></i>
                            </span>
                        </a>
                    </div>                    
                </div>
            </section>
            <!-- end section -->
            {{-- start section --}}
            <section class="pt-0 big-section tw-my-20">
                <div class="container">
                    <div class="tw-flex tw-flex-col-reverse lg:tw-flex-row tw-items-center tw-gap-4" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                        <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                            <h3 class="fw-700 text-dark-gray ls-minus-2px">Kata Sambutan</h3> 
                            <div class="tw-space-y-4 tw-text-justify tw-text-base tw-leading-relaxed tw-w-90 lg:tw-w-95 md:tw-w-full">
                                {{-- @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                                    <p>{!! $pimpinanStaff->kata_sambutan !!}</p>
                                @endif --}}
                                <p>Program Studi Matematika hadir sebagai pusat pengembangan ilmu matematika yang tidak hanya fokus pada pemahaman teori, tetapi juga pada penerapan matematika dalam berbagai bidang kehidupan. Kami berkomitmen mencetak lulusan yang unggul, kritis, dan mampu beradaptasi dengan perkembangan teknologi dan kebutuhan industri.
                                Melalui kurikulum yang adaptif, suasana akademik yang kondusif, serta dosen-dosen yang kompeten, kami berharap website ini menjadi jendela informasi bagi mahasiswa, orang tua, calon mahasiswa, dan masyarakat luas untuk mengenal lebih dekat Program Studi Matematika.</p>
                            </div>
                            
                            <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow tw-mt-7">
                                Selengkapnya
                                <span class="bg-orient-blue text-white">
                                    <i class="feather icon-feather-arrow-right icon-small"></i>
                                </span>
                            </a>                        
                        </div>
                        <div class="col-lg-6 position-relative md-mt-14 sm-mt-17 xs-mt-23"> 
                            <div class="tw-flex tw-justify-center w-100" data-animation-delay="50">
                                {{-- @if ($pimpinanStaff && $pimpinanStaff->foto)
                                    <img src="{{ asset('storage/' . $pimpinanStaff->foto) }}" alt="" class=" border-radius-8px w-100">                                  
                                @endif --}}
                                <img src="{{ asset('images/gambar/alumni2.jpg') }}" alt="" class="border-radius-8px tw-w-[100%] md:tw-w-[60%]">
                            </div>
                        </div>
                    </div> 
                </div>
            </section>  
            {{-- end section  --}}
            <!-- start section --> 
            <!-- end section -->
            <!-- start section -->
            <section class="py-0 tw-mb-10">
                <div class="container">        
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-6 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
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
                                    </li>
                                    @endforeach --}}
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
@endsection