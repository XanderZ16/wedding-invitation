@if (session()->has('register_guest_success'))
    <div class="bg-green-500 fixed bottom-4 left-4 text-white p-4 rounded mb-4">
        {{ session('message') }}
    </div>
@endif

<form wire:submit.prevent="submit" class="w-3/5">
    <div class="flex flex-col gap-2 mb-2 *:font-jost">
        <label for="name" class="text-lg">Nama</label>
        <input type="text" id="name" wire:model="name" placeholder="masukkan nama"
            class="bg-[#5C0202] px-4 py-2 rounded-xl text-white">
    </div>
    <div class="flex flex-col gap-2 mb-4 *:font-jost">
        <label for="attendance" class="text-lg">Jumlah Kehadiran</label>
        <input type="text" id="attendance" wire:model="attendance" placeholder="masukkan jumlah"
            class="bg-[#5C0202] px-4 py-2 rounded-xl text-white">
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-[#5C0202] px-6 py-2 rounded-xl font-jost text-lg text-white">Kirim</button>
    </div>
</form>
