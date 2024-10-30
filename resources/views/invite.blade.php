@extends('layouts.main')

@section('content')
    <div id="envelope"
        class="w-screen h-screen fixed z-50 top-0 left-0 flex flex-col overflow-x-hidden justify-center items-center bg-gradient-to-tl from-[#5C0202] to-[#000]">
        <img src="/images/envelope/flower-envelope-1.png" alt="flower" class="absolute top-0 left-0 sm:-translate-y-1/3">
        <img src="/images/envelope/flower-envelope-2.png" alt="flower" class="absolute bottom-0 left-0">
        <img src="/images/garnish-1.png" alt="hiasan" class="mb-4 sm:-my-6 sm:scale-75 md:hidden">
        <h1 class="font-montecarlo text-4xl text-white mb-4">Wedding Invitation</h1>
        <h1 class="font-fraunces text-4xl text-white mb-4">{{ $nick_groom }} & {{ $nick_bride }}</h1>
        <h2 class="font-montecarlo text-3xl text-white mb-4">Kepada YTH :</h2>
        <h2 class="font-fraunces text-xl text-white font-light mb-8 sm:mb-2">
            @livewire('generate-url')
        </h2>
    </div>
@endsection
