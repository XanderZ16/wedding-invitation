<div class="relative flex flex-col items-center p-8 py-16 bg-white" style="background-image: url('/images/bg-1.png')">
    {{-- Background --}}
    <div class="absolute z-20 w-[150%] h-full top-0 rounded-t-full bg-[#5C0202]"></div>
    {{-- Title --}}
    <div class="relative z-20 flex flex-col items-center">
        <img src="/images/garnish-1.png" alt="garnish" class="mb-2">
        <h1 class="text-5xl text-white font-montecarlo">Best Wishes</h1>
        <p class="mb-4 text-lg text-white font-jost">Sampaikan doa dan ucapan terbaik Anda</p>
    </div>

    <div class="bg-[#ffffff50] w-4/5 relative z-20 backdrop-blur-[50px] rounded-xl p-4">
        <h3 class="mb-4 text-sm text-center text-white font-jost">{{ $comments->count() }} Komentar</h3>
        {{-- Form untuk Komentar Baru --}}
        <form wire:submit.prevent="submitComment" class="space-y-4">
            <div class="space-y-2">
                <label for="name" class="text-xs text-white font-jost">Nama</label>
                <input type="text" id="name" wire:model="name" placeholder="Nama Anda" required
                    class="w-full px-4 py-2 placeholder-gray-500 bg-white rounded-xl focus:outline-none focus:ring-2 focus:ring-white">
            </div>
            <div class="space-y-2">
                <label for="message" class="text-xs text-white font-jost">Ucapan</label>
                <textarea id="message" wire:model="message" rows="3" placeholder="Tulis komentar Anda..." required
                    class="w-full px-4 py-2 placeholder-gray-500 bg-white rounded-xl focus:outline-none focus:ring-2 focus:ring-white"></textarea>
            </div>
            <button type="submit"
                class="px-4 py-2 bg-white text-[#5C0202] font-semibold rounded-xl hover:bg-[#5C0202] hover:text-white">
                Kirim Komentar
            </button>
        </form>

        {{-- Menampilkan Komentar --}}
        <div class="mt-10 space-y-6">
            @foreach ($comments->whereNull('parent_id') as $comment)
                <div class="p-2 bg-white rounded-xl">
                    <div class="flex gap-2">
                        <div class="m-0 text-center text-white bg-black rounded-full min-w-6 size-6">
                            {{ $comment->name[0] }}</div>
                        <div>
                            <h5 class="font-semibold">{{ $comment->name }}</h5>
                            <p class="">{{ $comment->message }}</p>
                            <button wire:click="reply({{ $comment->id }})"
                                class="text-sm text-[#C28381] hover:underline mb-2">
                                Balas
                            </button>
                            {{-- Form Balasan --}}
                            @if ($parent_id == $comment->id)
                                <form wire:submit.prevent="submitComment" class="mb-3 space-y-2">
                                    <div class="space-y-2">
                                        <label for="name" class="text-sm font-jost">Nama</label>
                                        <input type="text" id="name" wire:model="name" placeholder="Nama Anda"
                                            required
                                            class="w-full px-3 py-1.5 bg-white placeholder-gray-500 rounded-xl border border-[#5C0202] focus:outline-none focus:ring-2 focus:ring-white">
                                    </div>
                                    <div class="space-y-2">
                                        <label for="message" class="text-sm font-jost">Ucapan</label>
                                        <textarea id="message" wire:model="message" rows="3" placeholder="Tulis komentar Anda..." required
                                            class="w-full px-3 py-1.5 bg-white placeholder-gray-500 rounded-xl border border-[#5C0202] focus:outline-none focus:ring-2 focus:ring-white"></textarea>
                                    </div>
                                    <button type="submit"
                                        class="px-4 py-1.5 bg-white text-[#5C0202] border border-[#5C0202] font-semibold rounded-xl hover:bg-[#5C0202] hover:text-white">
                                        Kirim Balasan
                                    </button>
                                </form>
                            @endif
                            {{-- Menampilkan Balasan --}}
                            @foreach ($comment->replies as $reply)
                                <div class="flex gap-2">
                                    <div class="m-0 text-center text-white bg-black rounded-full min-w-6 size-6">
                                        {{ $reply->name[0] }}</div>
                                    <div>
                                        <h5 class="font-semibold">{{ $reply->name }}</h5>
                                        <p>{{ $reply->message }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    {{-- Pagination
    <div class="mt-8">
        {{ $comments->links('pagination::tailwind') }}
    </div> --}}
</div>
