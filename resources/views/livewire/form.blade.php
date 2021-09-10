<div class="flex justify-center items-center mt-24 ">
    
<form class="w-full max-w-lg bg-white px-2 rounded-lg md:mx-0 sm:mx-2">
    <div class="flex flex-row">
        <h1 class="text-3xl font-semibold color-white mr-3">Wings</h1>
        <h1 class="text-3xl text-blue-400 font-semibold">Airland</h1>
    </div>
    
    <div class="flex flex-row pt-2 text-xs pt-2 pb-3">
        <span class="font-bold">Home</span>
        <small class="text-gray-400 ml-1">></small>
        <span class="text-gray-400 ml-1">Pesan Tiket</span>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Dari
            </label>
            <input wire:model="dari_kota" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Kota Keberangkatan">
            @error('dari_kota') <span class="error text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Ke
            </label>
            <input wire:model="ke_kota" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Kota Tujuan">
            @error('ke_kota') <span class="error text-red-400">{{ $message }}</span> @enderror
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Tanggal Pergi
            </label>
            <input wire:model="tanggal_pergi" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="datepicker" type="text" placeholder="10 Oktober 2021">
            @error('tanggal_pergi') <span class="error text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Tanggal Pulang
            </label>
            <input wire:model="tanggal_pulang" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left" id="datepicker2" type="text" placeholder="17 Oktober 2021">
            @error('tanggal_pulang') <span class="error text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/3 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Dewasa
            </label>
            <select wire:model="dewasa" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left" id="" type="text" placeholder="17 Oktober 2021">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>        
            </select>
            @error('dewasa') <span class="error text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="w-full md:w-1/3 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Anak
            </label>
            <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left" id="" type="text" placeholder="17 Oktober 2021">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>        
            </select>
        </div>
        <div class="w-full md:w-1/3 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Bayi
            </label>
            <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left" id="" type="text" placeholder="17 Oktober 2021">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>        
            </select>
        </div>

        
    </div>
    <div class="md:w-full mb-2">
            <button class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-xl text-white font-bold py-2 px-4 rounded" type="button">
                Pesan Tiket
            </button>
        </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#datepicker", { dateFormat: "d-m-Y"});
    flatpickr("#datepicker2", { dateFormat: "d-m-Y"});
</script>

</div>


