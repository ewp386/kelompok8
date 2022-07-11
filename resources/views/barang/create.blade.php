<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Barang
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('barang.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="harga" class="block font-medium text-sm text-gray-700">Harga/$</label>
                            <input type="text" name="harga" id="harga" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('harga', '') }}" />
                            @error('harga')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_gudang" class="block font-medium text-sm text-gray-700">Gudang</label>
                            <select class="form-control select" style="width: 100%" name="id_gudang" id="id_gudang">
                                <option disabled value>Pilih Gudang</option>
                                @foreach ($gudang as $barang )
                                <option value="{{ $barang->id }}">{{  $barang->id_gudang }}</option>                                    
                                @endforeach
                            </select>  
                            @error('id_gudang')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_supplier" class="block font-medium text-sm text-gray-700">Supplier</label>
                            <select class="form-control select" style="width: 100%" name="id_supplier" id="id_supplier">
                                <option disabled value>Pilih Supplier</option>
                                @foreach ($supplier as $barang )
                                <option value="{{ $barang->id }}">{{  $barang->id_supplier }}</option>                                    
                                @endforeach
                            </select>   
                            @error('id_supplier')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="kategori" class="block font-medium text-sm text-gray-700">ID Kategori</label>
                            <select name="kategori" id="description" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                <option value="Smartphone">Smartphone</option>
                                <option value="PC">PC</option>
                                <option value="AC">AC</option>
                                <option value="TV">TV</option>
                            </select>
                            @error('kategori')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="notelpon" class="block font-medium text-sm text-gray-700">Stok</label>
                            <input type="text" name="notelpon" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('notelpon', '') }}" />
                            @error('notelpon')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-app-layout>