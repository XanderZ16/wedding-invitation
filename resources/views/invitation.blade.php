@extends('layouts.main')

@section('content')
    @include('partials.envelope')

    <div class="relative w-screen max-w-screen-sm mx-auto overflow-hidden">
        @include('partials.header')
        {{-- Page 1 --}}
        <div
            class="bg-gradient-to-br from-black to-[#5C0202] h-[70vh] sm:h-screen max-h-screen relative z-20 flex justify-center items-center px-4">
            <div class="relative flex flex-col items-end justify-center w-full my-24">
                {{-- Ring garnish --}}
                <img src="/images/ring.png" alt="ring" data-aos="fade-up" data-aos-duration="1000"
                    class="relative right-0 z-0 scale-150 sm:scale-100 -translate-x-1/4">
                <h1 data-aos="zoom-in-right" data-aos-duration="1000"
                    class="absolute top-0 left-0 self-start font-light text-white uppercase sm:left-12 -z-10 text-7xl font-fraunces">
                    {{ $nick_groom }}</h1>
                <span class="absolute font-light text-white text-8xl font-fraunces">&</span>
                <h1 data-aos="zoom-in-left" data-aos-duration="1000"
                    class="absolute bottom-0 right-0 z-10 font-light text-white uppercase sm:right-12 text-7xl font-fraunces">
                    {{ $nick_bride }}</h1>
            </div>

            {{-- Shadow --}}
            {{-- <div class="absolute bottom-0 -z-20 translate-y-1/4">
                    <img src="/images/shadow-1.png" alt="shadow" class="scale-150">
                </div> --}}

            {{-- Flower Barrier --}}
            <div class="absolute bottom-0 left-0 w-full translate-y-1/2 -z-10">
                <img src="/images/flower-1.png" alt="flower" class="absolute w-full rotate-180 sm:h-52">
                <img src="/images/flower-1.png" alt="flower" class="w-full sm:h-52">
            </div>
        </div>
        {{-- Page 2 --}}
        <div
            class="bg-gradient-to-b from-[#5C0202] to-black h-[55vh] sm:h-screen relative z-10 flex flex-col items-center justify-center">
            {{-- <div class="h-[80vh] w-full absolute bg-gradient-to-b to-80% from-[#fff] to-[#0000]"></div> --}}
            <div class="absolute flex flex-col items-center">
                <img src="/images/garnish-1.png" alt="garnish" class="mb-6 h-60" data-aos="zoom-in-down"
                    data-aos-duration="1000">
                {{-- Foreword --}}
                <h2 class="mb-2 text-4xl text-white font-montecarlo" data-aos="fade-up" data-aos-duration="1000">We Are
                    Getting Married</h2>
                <p class="px-20 text-xl text-center text-white font-montecarlo" data-aos="fade-up" data-aos-duration="1000">
                    “The greatest marriages are built on
                    teamwork, a mutual respect, a
                    healthy dose
                    of admiration, and a never-ending porion of love and grace.”</p>
            </div>
            <div class="absolute bottom-0 left-0 scale-[40%] origin-bottom-left">
                <img src="/images/flower-2.png" alt="" class="rotate-45 -translate-x-1/3">
            </div>
            <div class="absolute bottom-0 -right-6 scale-[40%] origin-bottom-right">
                <img src="/images/flower-2.png" alt=""
                    class="absolute rotate-[-35deg] translate-x-1/4 -translate-y-1/3">
                <img src="/images/flower-2.png" alt="" class="rotate-[-50deg] translate-x-1/3">
            </div>
        </div>

        {{-- Page 3 --}}
        <div class="bg-gradient-to-b from-black to-[#5C0202] relative pt-20 pb-6">
            <div class="flex flex-col items-center *:flex *:flex-col">
                <h2 class="mx-auto mb-10 text-5xl text-white font-montecarlo" data-aos="zoom-in-down"
                    data-aos-duration="1000">The Couple</h2>
                {{-- groom --}}
                <div class="relative flex flex-col items-center w-full" data-aos="fade-right" data-aos-offset="300"
                    data-aos-duration="1000">
                    <div class="absolute top-0 bg-[#ffffff99] w-1/2 h-full blur-[200px]"></div>
                    <img src="/images/flower-3.png" alt="flower" class="absolute left-0 -translate-x-1/2">
                    <div
                        class="w-1/2 h-[35vh] sm:h-[80vh] mb-4 relative z-10 rounded-t-full border-2 border-white overflow-hidden">
                        <img src="/images/mate/groom.jpg" alt="Pengantin Pria" class="object-cover w-full h-full">
                    </div>
                    <h3 class="mb-2 text-4xl text-white font-fraunces">{{ $groom }}</h3>
                    <h4 class="text-xl text-white font-fraunces">Lorem ipsum dolor sit amet.</h4>
                </div>
                <h3 class="my-16 text-white text-7xl font-fraunces sm:my-12" data-aos="fade">&</h3>
                {{-- Bride --}}
                <div class="relative flex flex-col items-center w-full" data-aos="fade-left" data-aos-offset="300"
                    data-aos-duration="1000">
                    <div class="absolute top-0 bg-[#ffffff99] w-1/2 h-full blur-[200px]"></div>
                    <img src="/images/flower-3.png" alt="flower" class="absolute right-0 translate-x-1/2 rotate-[-65deg]">
                    <div
                        class="w-1/2 h-[35vh] sm:h-[80vh] mb-4 relative z-10 rounded-t-full border-2 border-white overflow-hidden">
                        <img src="/images/mate/bride.jpg" alt="Pengantin Wanita" class="object-cover w-full h-full">
                    </div>
                    <h3 class="mb-2 text-4xl text-white font-fraunces">{{ $bride }}</h3>
                    <h4 class="text-xl text-white font-fraunces">Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
        </div>

        {{-- Page 4 --}}
        <div class="h-[40vh] bg-white flex flex-col items-center sm:h-fit sm:pb-24"
            style="background-image: url('/images/bg-2.png')">
            <div class="relative mb-16 sm:mb-20" data-aos="zoom-in-right" data-aos-duration="1000">
                <h1 class="text-[#5C0202] font-semibold text-center text-6xl font-montecarlo translate-y-1/2">Time</h1>
                <h1 class="text-6xl font-semibold text-center text-white font-fraunces">Down</h1>
            </div>
            <div class="relative flex flex-wrap justify-center w-full gap-2 px-12" data-aos="flip-right"
                data-aos-duration="1000">
                <img src="/images/flower-4.png" alt="flower" class="absolute top-0 -translate-y-2/3">
                <img src="/images/flower-4.png" alt="flower" class="absolute bottom-0 rotate-180 translate-y-2/3">
                <div class="bg-[#C28381] w-[23%] rounded-md py-5">
                    <h4 class="text-center text-[12px] font-semibold sm:text-base">
                        <span class="block" id="days">00</span>
                        Days
                    </h4>
                </div>
                <div class="bg-[#C28381] w-[23%] rounded-md py-5">
                    <h4 class="text-center text-[12px] font-semibold sm:text-base">
                        <span class="block" id="hours">00</span>
                        Hours
                    </h4>
                </div>
                <div class="bg-[#C28381] w-[23%] rounded-md py-5">
                    <h4 class="text-center text-[12px] font-semibold sm:text-base">
                        <span class="block" id="minutes">00</span>
                        Minute
                    </h4>
                </div>
                <div class="bg-[#C28381] w-[23%] rounded-md py-5">
                    <h4 class="text-center text-[12px] font-semibold sm:text-base">
                        <span class="block" id="seconds">00</span>
                        Seconds
                    </h4>
                </div>
            </div>
        </div>

        {{-- Page 5 --}}
        <div class="bg-[#5C0202] h-fit flex flex-col items-center px-16 pt-4 pb-10"
            style="background-image: url('/images/bg-1.png')">
            <div data-aos="zoom-in-right" data-aos-duration="1000">
                <img src="/images/garnish-2.png" alt="garnish">
                <h1 class="mb-10 text-5xl text-center text-white font-montecarlo">Wedding Event</h1>
            </div>
            <div class="bg-white w-full flex flex-col items-center rounded-[50px] overflow-hidden py-6"
                style="background-image: url('/images/bg-1.png')">
                <img src="/images/ring-2.png" alt="ring" data-aos="fade-down" data-aos-duration="1000">
                <h2 class="mb-4 text-3xl" data-aos="fade-down" data-aos-duration="1000">Akad Nikah</h2>
                <p class="mb-2 text-xs" data-aos="fade-down" data-aos-duration="1000">Acara ini akan dilaksanakan pada
                </p>
                <h3 class="mb-2 text-4xl font-montecarlo" data-aos="fade-down" data-aos-duration="1000">
                    {{ $day }}</h3>
                <h3 class="font-fraunces text-4xl text-[#FF9490] mb-2" data-aos="fade-down" data-aos-duration="1000">
                    {{ $date }}.{{ $month }}.{{ $year }}</h3>
                <h3 class="text-[#FF9490] mb-3" data-aos="fade-down" data-aos-duration="1000">Pukul
                    {{ $hour }}:{{ $minute }} -
                    {{ $reception_hour }}:{{ $reception_minute }}</h3>
                <p class="mb-1" data-aos="fade-down" data-aos-duration="1000">Bertempat di:</p>
                <p class="mb-6 uppercase" data-aos="fade-down" data-aos-duration="1000">{{ $location }}</p>
                <div class="relative w-full h-[60vh] mb-6 sm:h-[80vh] sm:w-[80%] sm:rounded-xl sm:overflow-hidden">
                    <div class="w-full min-h-full mx-auto bg-center bg-no-repeat bg-contain sm:bg-fixed"
                        style="background-image: url('/images/mate/couple.jpg')"></div>
                    <div class="w-full h-1/5 absolute -bottom-[1px] bg-gradient-to-b from-transparent to-white"></div>
                </div>
                <div class="relative flex justify-center pt-6 mb-4" data-aos="fade-down" data-aos-duration="1000">
                    <img src="/images/flower-5.png" alt="flower" class="absolute top-0">
                    <h2 class="text-3xl bg-gradient-to-br from-[#DB8289] to-[#5C7456] bg-clip-text text-transparent">
                        Resepsi</h2>
                </div>
                <p class="mb-2 text-xs" data-aos="fade-down" data-aos-duration="1000">Acara ini akan dilaksanakan pada
                </p>
                <h3 class="mb-2 text-4xl font-montecarlo" data-aos="fade-down" data-aos-duration="1000">
                    {{ $day }}</h3>
                <h3 class="font-fraunces text-4xl text-[#FF9490] mb-2" data-aos="fade-down" data-aos-duration="1000">
                    {{ $date }}.{{ $month }}.{{ $year }}</h3>
                <h3 class="text-[#FF9490] mb-3" data-aos="fade-down" data-aos-duration="1000">Pukul
                    {{ $reception_hour }}:{{ $reception_minute }} - Selesai</h3>
                <p class="mb-1" data-aos="fade-down" data-aos-duration="1000">Bertempat di:</p>
                <p class="mb-4 uppercase" data-aos="fade-down" data-aos-duration="1000">{{ $location }}</p>
                <a href="{{ $locationUrl }}" target="_blank"
                    class="flex items-center px-3 py-2 mb-2 bg-white border-black shadow-lg rounded-xl hover:shadow-xl hover:border"
                    data-aos="fade-down" data-aos-duration="1000">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-4">
                        <path
                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span class="ml-2">Kunjungi Lokasi</span>
                </a>
            </div>
        </div>
        {{-- Page 6 --}}
        <div class="px-8 pb-8 bg-white">
            <div class="relative mb-12" data-aos="zoom-in-right" data-aos-duration="1000">
                <h1 class="text-[#5C0202] font-semibold text-center text-6xl font-montecarlo translate-y-1/3">Glimpse
                </h1>
                <h1 class="text-6xl font-semibold text-center text-black font-fraunces">Of Us</h1>
            </div>
            <div class="w-full h-[40vh] sm:h-[80vh] grid grid-rows-12 grid-cols-4 gap-1 sm:gap-2">
                {{-- Left --}}
                <div class="row-span-12" data-aos="zoom-in-down" data-aos-duration="1000">
                    <div class="bg-[#5C0202] h-2/5 p-2 rounded-xl text-white">
                        <h2 class="text-[10px] text-center font-semibold sm:text-xs sm:mb-1">Awal Bertemu</h2>
                        <p class="text-justify text-[8px] sm:text-xs">Kisah Kami berawal dari perkenalan di Media Sosial
                            Pada
                            Bulan
                            Januari 2022, kemudian kami bertemu
                            dan seiring berjalannya waktu kami saling berbagi cerita sebagai teman baik.</p>
                    </div>
                    <div class="h-3/5">
                        <h2 class="text-[10px] text-center font-semibold sm:text-xs sm:mb-1">Lamaran</h2>
                        <p class="text-justify text-[9px] sm:text-xs">Ketika berjalan 1 Tahun akhirnya kami memantapkan
                            hati kami
                            untuk membawa hubungan ini ke jenjang yang lebih serius dengan mempertemukan kedua orang tua
                            dan keluarga besar dalam acara silaturahmi dan tunangan pada tanggal 01 Oktober 2023</p>
                    </div>
                </div>
                {{-- Top --}}
                <div class="flex items-center justify-between col-span-2 row-span-3 gap-2" data-aos="zoom-in-right"
                    data-aos-duration="1000">
                    <div class="flex flex-col items-center justify-center w-1/3 h-full sm:text-xl">
                        <h2 class="font-semibold">2022</h2>
                        <h2 class="font-semibold">2024</h2>
                    </div>
                    <div class="w-2/3">
                        <h2 class="font-semibold text-[10px] text-end sm:text-xs sm:mb-1">Menjalin Hubungan</h2>
                        <p class="text-[8px] text-end sm:text-xs">Setelah kami merasa cukup mengenal satu sama lain, kami
                            memutuskan untuk menjalin hubungan
                            pada tanggal 5 September 2022</p>
                    </div>
                </div>
                {{-- Right --}}
                <div class="bg-[#5C0202] row-span-9 relative rounded-xl" data-aos="zoom-in-down" data-aos-duration="1000"
                    data-aos-delay style="background-image: url('/images/bg-1.png')">
                    <img src="/images/flower-5.png" alt="flower" class="absolute top-0 -translate-x-1/2 left-1/2">
                    <img src="/images/flower-5.png" alt="flower"
                        class="absolute bottom-0 rotate-180 -translate-x-1/2 left-1/2">
                    <div class="flex flex-col items-center justify-center h-full text-white rotate-90">
                        <h2 class="text-xl font-montecarlo sm:text-2xl">Wedding</h2>
                        <h3 class="text-2xl font-semibold uppercase font-jost text-nowrap sm:text-4xl">{{ $date }}
                            {{ $Month }} {{ $year }}</h3>
                    </div>
                </div>
                {{-- Center --}}
                <div class="bg-[#5C0202] col-span-2 row-span-6 relative rounded-xl flex flex-col justify-between items-center"
                    data-aos="zoom-in" data-aos-duration="1000" style="background-image: url('/images/bg-1.png')">
                    <img src="/images/mate/couple.png" alt="couple" class="absolute bottom-0 h-full">
                    <h2 class="text-5xl font-semibold text-white font-jost">{{ $nick_groom }}</h2>
                    <h2 class="relative z-10 text-5xl font-semibold text-white font-jost">{{ $nick_bride }}</h2>
                </div>
                {{-- Bottom --}}
                <div class="col-span-3 row-span-3" data-aos="zoom-in-left" data-aos-duration="1000">
                    <h2 class="font-semibold text-center sm:text-xs sm:mb-1">Menuju Hari Bahagia</h2>
                    <p class="text-[8px] text-center sm:text-xs">Atas Izin Allah SWT, restu dan ridho dari kedua orang tua.
                        Serta
                        dukungan dari keluarga besar
                        kedua belah pihak akhirnya kami memutuskan bahwa insya allah akan melangsungkan pernikahan kami
                        pada tanggal 18 Agustus 2024. Serta memulai kisah baru kami dalam suatu ikatan suci pernikahan.
                        Yang semoga senantiasa di berkahi oleh Allah SWT</p>
                </div>
            </div>
        </div>
        {{-- Page 7 --}}
        <div
            class="bg-gradient-to-br from-black to-[#5C0202] relative z-20 flex flex-col justify-center items-center pt-6">
            <img src="/images/garnish-2.png" alt="garnish" data-aos="zoom-in-down" data-aos-duration="1000">
            <h1 class="mb-10 text-5xl text-white font-montecarlo" data-aos="zoom-in-down" data-aos-duration="1000">Our
                Captured Moment</h1>
            <div class="relative w-1/3 my-56">
                {{-- Center Image --}}
                <img src="/images/gallery/1.jpg" alt="couple" class="w-full h-48 object-cover sm:h-[50vh]">
                {{-- Sub Images --}}
                {{-- Top --}}
                <div
                    class="w-full absolute -top-1 -left-1 -translate-x-[calc(60%)] -translate-y-full flex items-end gap-1 *:object-cover">
                    <img src="/images/mate/couple.jpg" alt="couple" class="w-3/5 h-3/5">
                    <img src="/images/mate/couple.jpg" alt="couple" class="w-5/6 h-48">
                    <img src="/images/mate/couple.jpg" alt="couple" class="w-3/4 h-3/4">
                </div>
                {{-- Right --}}
                <div class="h-full w-5/6 absolute top-0 -right-1 translate-x-full flex flex-col gap-1 pb-1 *:object-cover">
                    <img src="/images/gallery/4.jpg" alt="couple" class="w-full h-1/2">
                    <img src="/images/gallery/4.jpg" alt="couple" class="w-full h-1/2">
                </div>
                {{-- Bottom --}}
                <div class="w-[150%] h-full absolute -bottom-1 translate-y-full overflow-hidden">
                    <div id="scroll-container"
                        class="w-full h-full absolute -bottom-1 translate-y-full inline-flex space-x-2 *:object-cover">
                        <img src="/images/gallery/5.jpg" alt="image1" class="min-w-[80%] h-1/2">
                        <img src="/images/gallery/5.jpg" alt="image2" class="min-w-[80%] h-1/2">
                        <img src="/images/gallery/5.jpg" alt="image3" class="min-w-[80%] h-1/2">
                        <img src="/images/gallery/5.jpg" alt="image4" class="min-w-[80%] h-1/2">
                        <img src="/images/gallery/5.jpg" alt="image5" class="min-w-[80%] h-1/2">
                        <img src="/images/gallery/5.jpg" alt="image6" class="min-w-[80%] h-1/2">
                    </div>
                </div>
                {{-- Left --}}
                <div
                    class="w-full h-full absolute top-0 -left-1 -translate-x-full flex flex-col items-end gap-1 *:object-cover">
                    <img src="/images/gallery/3.jpg" alt="couple" class="w-5/6 h-2/3">
                    <img src="/images/gallery/3.jpg" alt="couple" class="w-2/3 h-3/4">
                </div>
            </div>
        </div>
        <div class="relative flex flex-col items-center justify-center pt-6 pb-12 bg-white"
            style="background-image: url('/images/bg-1.png')">
            <img src="/images/flower-6.png" alt="flower"
                class="absolute top-0 left-0 z-10 -translate-x-1/4 -translate-y-1/4">
            <img src="/images/flower-6.png" alt="flower"
                class="absolute top-0 right-0 z-10 rotate-45 translate-x-1/4 -translate-y-1/4">
            <img src="/images/flower-6.png" alt="flower"
                class="absolute bottom-0 left-0 z-10 -translate-x-1/4 translate-y-2/3">
            <img src="/images/flower-6.png" alt="flower"
                class="absolute bottom-0 right-0 z-10 rotate-180 translate-x-1/4 translate-y-2/3">
            <h1 class="mb-2 text-5xl text-center font-montecarlo" data-aos="zoom-in-down" data-aos-duration="1000">RVSP
            </h1>
            <h2 class="w-1/2 mb-8 text-base leading-none text-center font-jost" data-aos="zoom-in-down"
                data-aos-duration="1000">Konfirmasi kehadiran Anda dengan mengisi
                form berikut.</h2>

            {{-- Formulir --}}
            @livewire('invitation-form')
        </div>
        @livewire('comments')
    </div>

    <script>
        let date = @json($date);
        let month = @json($month);
        let year = @json($year);
        let hour = @json($hour);
        let minute = @json($minute);

        // Set the date we're counting down to
        let countDownDate = new Date(`${year}-${month}-${date}T${hour}:${minute}`).getTime();

        // Update the count down every 1 second
        let x = setInterval(function() {
            // Get today's date and time
            let now = new Date().getTime();

            // Find the distance between now and the count down date
            let distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <script src="/js/scroller.js"></script>
@endsection
