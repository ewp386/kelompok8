<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Supplier
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('supplier.update', $supplier->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
<<<<<<< HEAD
                            <label for="id_supplier" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input type="text" name="id_supplier" id="id_supplier" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id_supplier', $supplier->id_supplier) }}" />
                            @error('id_supplier')
=======
                            <label for="user_id" class="block font-medium text-sm text-gray-700">ID User</label>
                            <input type="text" name="user_id" id="user_id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('user_id', $supplier->user_id) }}" />
                            @error('user_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', $manufaktur->name) }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="username" class="block font-medium text-sm text-gray-700">Username</label>
                            <input type="text" name="username" id="username" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('username', $manufaktur->username) }}" />
                            @error('username')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                            <input type="text" name="password" id="password" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('password', $manufaktur->password) }}" />
                            @error('password')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="role_id" class="block font-medium text-sm text-gray-700">ID Role</label>
                            <input type="text" name="role_id" id="role_id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('role_id', $manufaktur->role_id) }}" />
                            @error('role_id')
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="text" name="email" id="email" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
<<<<<<< HEAD
                                   value="{{ old('email', $supplier->email) }}" />
=======
                                   value="{{ old('email', $manufaktur->email) }}" />
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="notelpon" class="block font-medium text-sm text-gray-700">No Telpon</label>
                            <input type="text" name="notelpon" id="notelpon" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
<<<<<<< HEAD
                                   value="{{ old('notelpon', $supplier->notelpon) }}" />
=======
                                   value="{{ old('notelpon', $manufaktur->notelpon) }}" />
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
                            @error('notelpon')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="alamat" class="block font-medium text-sm text-gray-700">Alamat</label>
                            <input type="text" name="alamat" id="alamat" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
<<<<<<< HEAD
                                   value="{{ old('alamat', $supplier->alamat) }}" />
=======
                                   value="{{ old('alamat', $manufaktur->alamat) }}" />
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
                            @error('alamat')
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
<<<<<<< HEAD
</x-app-layout>
=======
</x-app-layout>
>>>>>>> d7a2dbf885026ab73f8e13b0e0e83ccd4b2cb633
