<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Order
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('order.update', $order->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="user_id" class="block font-medium text-sm text-gray-700">ID User</label>
                            <input type="text" name="user_id" id="user_id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('user_id', $order->user_id) }}" />
                            @error('user_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_supplier" class="block font-medium text-sm text-gray-700">ID Supplier</label>
                            <input type="text" name="id_supplier" id="id_supplier" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id_supplier', $order->id_supplier) }}" />
                            @error('id_supplier')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="date" class="block font-medium text-sm text-gray-700">Date</label>
                            <input type="text" name="date" id="date" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('date', $order->date) }}" />
                            @error('date')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="approved" class="block font-medium text-sm text-gray-700">Approved</label>
                            <input type="text" name="approved" id="approved" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('approved', $order->approved) }}" />
                            @error('approved')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                            <input type="text" name="status" id="status" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('status', $order->status) }}" />
                            @error('status')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="total_harga" class="block font-medium text-sm text-gray-700">Total Harga</label>
                            <input type="text" name="total_harga" id="total_harga" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('total_harga', $order->total_harga) }}" />
                            @error('total_harga')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
