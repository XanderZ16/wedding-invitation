<div id="envelope"
    class="w-screen h-screen fixed z-40 top-0 left-0 flex flex-col overflow-x-hidden justify-center items-center bg-gradient-to-tl from-[#5C0202] to-[#000]">
    <img src="/images/envelope/flower-envelope-1.png" alt="flower" class="absolute top-0 left-0 sm:-translate-y-1/3">
    <img src="/images/envelope/flower-envelope-2.png" alt="flower" class="absolute bottom-0 left-0">
    <img src="/images/garnish-1.png" alt="hiasan" class="mb-4 sm:-my-6 sm:scale-75 md:hidden">
    <h1 class="font-montecarlo text-4xl text-white mb-4">Wedding Invitation</h1>
    <h1 class="font-fraunces text-4xl text-white mb-4">{{ $nick_groom }} & {{ $nick_bride }}</h1>
    <h2 class="font-montecarlo text-3xl text-white mb-4">Kepada YTH :</h2>
    <h2 class="font-fraunces text-xl text-white font-light mb-8 sm:mb-2">
        @if ($guest)
            {{ $guest }}
        @else
            Bapak/Ibu Keluarga
        @endif
    </h2>
    <button id="playButton"
        class="bg-black relative z-50 px-6 py-3 rounded-2xl text-white font-jost text-2xl sm:text-lg sm:px-4 sm:py-2">Open
        Invitation</button>
</div>

<audio id="audioPlayer" loop>
    <source src="/sounds/backsound.mp3" type="audio/mpeg">
</audio>

<button id="muteButton" class="fixed bottom-4 left-4 z-30 p-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" id="play" class="fill-white size-6">
        <path
            d="M48 64C21.5 64 0 85.5 0 112L0 400c0 26.5 21.5 48 48 48l32 0c26.5 0 48-21.5 48-48l0-288c0-26.5-21.5-48-48-48L48 64zm192 0c-26.5 0-48 21.5-48 48l0 288c0 26.5 21.5 48 48 48l32 0c26.5 0 48-21.5 48-48l0-288c0-26.5-21.5-48-48-48l-32 0z" />
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" id="pause" class="fill-white size-6 hidden">
        <path
            d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
    </svg>
</button>

<script>
    document.getElementById('playButton').addEventListener('click', () => {
        document.getElementById('envelope').classList.add('!hidden');
    })

    const playButton = document.getElementById('playButton');
    const muteButton = document.getElementById('muteButton');
    const audioPlayer = document.getElementById('audioPlayer');
    const play = document.getElementById('play');
    const pause = document.getElementById('pause');

    // Event listener untuk tombol Play/Pause
    playButton.addEventListener('click', function() {
        if (audioPlayer.paused) {
            audioPlayer.play(); // Memulai pemutaran
            playButton.textContent = 'Pause MP3'; // Ubah teks tombol menjadi "Pause"
        } else {
            audioPlayer.pause(); // Pause jika sedang diputar
            playButton.textContent = 'Play MP3'; // Ubah teks tombol menjadi "Play"
        }
    });

    // Event listener untuk tombol Mute/Unmute
    muteButton.addEventListener('click', function() {
        if (audioPlayer.muted) {
            audioPlayer.muted = false; // Unmute
            play.classList.remove('hidden')
            pause.classList.add('hidden')
        } else {
            audioPlayer.muted = true; // Mute
            play.classList.add('hidden')
            pause.classList.remove('hidden')
        }
    });
</script>
