@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')
        <!-- end header --> 
        <!-- start section --> 
        <section class="pb-0" style="margin-top: 50px;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 md-mb-50px animation-float" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'> 
                        @if ($tentang && $tentang->thumbnail)
                            <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="" class="tw-my-4 w-70" alt="">
                        @endif
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="fw-700 text-dark-gray ls-minus-1px">Tentang Matematika</h2>
                        @if ($tentang && $tentang->deskripsi)
                        <p class="w-95 lg-w-100 mb-30px">{!! $tentang->deskripsi !!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection