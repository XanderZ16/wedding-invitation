<div class="flex gap-4 relative z-50">
    {{-- Form untuk input nama tamu --}}
    <input type="text" wire:model="name" placeholder="Nama Tamu" required class="bg-transparent w-full border-b-2 border-white focus:border-white focus:outline-none">
    <button wire:click="generateUrl" class="px-4 py-2 rounded-2xl transition hover:bg-black">Generate URL</button>
</div>

@script
    <script>
        $wire.on('urlGenerated', url => {
            // Menyalin URL ke clipboard
            navigator.clipboard.writeText(url);
            alert('URL berhasil disalin ke clipboard!');
        });
    </script>
@endscript
