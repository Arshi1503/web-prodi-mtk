<header>
    <div class="header-top-bar top-bar-dark bg-very-light-gray">
        <div class="tw-w-full tw-bg-[#1e3a8a] tw-shadow tw-pt-3 tw-pb-0.5 tw-px-6 tw-flex tw-justify-between tw-items-center tw-text-sm tw-font-medium tw-sticky tw-top-0">

            <!-- Kiri: Logo atau Judul -->
          
            <!-- Tengah: Menu Navigasi -->
            <div class="tw-hidden lg:tw-flex tw-gap-6">
              <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
                <i class="bi bi-mortarboard"></i> Dashboard
              </a>
              <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
                <i class="bi bi-journal-bookmark"></i> LMS IWU
              </a>
              <a href="https://pmb.iwu.ac.id/" class="tw-flex tw-text-gray-200 tw-text-base tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
                <i class="bi bi-book"></i> PMB IWU
              </a>
            </div>
          
            <!-- Kanan: Pilihan Bahasa -->
            <div class="tw-hidden lg:tw-flex tw-gap-2">
              <button class="tw-bg-[#1e3a8a] tw-px-3 tw-py-1 tw-rounded hover:tw-bg-[#344d95] tw-text-gray-300 hover:tw-text-gray-100 transition">
                <img src="{{asset ('images/gambar/idn-flag.png')}}" alt="" width="20">🇮🇩</button>
              <button class="tw-bg-[#1e3a8a] tw-px-3 tw-py-1 tw-rounded hover:tw-bg-[#344d95] tw-text-gray-300 hover:tw-text-gray-100 transition">
                <img src="{{asset ('images/gambar/eng-flag.png')}}" alt="" width="20">🇺🇸</button>
              <button class="tw-bg-[#1e3a8a] tw-px-3 tw-py-1 tw-rounded hover:tw-bg-[#344d95] tw-text-gray-300 hover:tw-text-gray-100 transition">
                <img src="{{asset ('images/gambar/kr-flag.png')}}" alt=" " width="20">🇰🇷</button>
            </div>
          
          </div>
          
    </div> 
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light bg-white disable-fixed">
        <div class="container-fluid">
            <div class="col-auto col-xl-3 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="demo-corporate.html">
                    <img src="{{asset('images/gambar/logo.png')}}" alt="" class="default-logo">
                    <img src="{{asset('images/gambar/logo.png')}}" alt="" class="alt-logo">
                    <img src="{{asset('images/gambar/logo.png')}}" alt="" class="mobile-logo"> 
                </a>
            </div>
            <div class="col-auto col-xl-6 col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                    <ul class="navbar-nav"> 
                        <li class="nav-item"><a href="demo-corporate.html" class="nav-link">Beranda</a></li>
                        <li class="nav-item"><a href="demo-corporate-about.html" class="nav-link">Tentang Kami</a></li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="demo-corporate-services.html" class="nav-link">Akademik</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                <li><a href="demo-corporate-services-details.html"><i class="line-icon-Medal-2"></i>Business planning</a></li>
                                <li><a href="demo-corporate-services-details.html"><i class="line-icon-Archery-2"></i>Market research</a></li>
                                <li><a href="demo-corporate-services-details.html"><i class="line-icon-Financial"></i>Business consulting</a></li>
                                <li><a href="demo-corporate-services-details.html"><i class="line-icon-Money-Bag"></i>Audience analysis</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="demo-corporate-customer-stories.html" class="nav-link">Publikasi</a></li>
                        <li class="nav-item"><a href="demo-corporate-pricing.html" class="nav-link">Daftar Sekarang</a></li> 
                    </ul>
                </div>
            </div>
            <div class="col-auto col-xl-3 col-lg-2 text-end md-pe-0">
                <div class="header-icon">
                    <div class="header-button ms-20px d-none d-xl-inline-block">
                        <a href="demo-corporate-contact.html" class="btn btn-rounded btn-transparent-light-gray border-1 btn-medium btn-switch-text text-transform-none">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>