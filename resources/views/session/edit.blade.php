<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Session
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('session.update', $session->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id" class="block font-medium text-sm text-gray-700">ID</label>
                            <input type="text" name="id" id="id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id', $session->id) }}" />
                            @error('id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="user_id" class="block font-medium text-sm text-gray-700">ID User</label>
                            <input type="text" name="user_id" id="user_id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('user_id', $session->user_id) }}" />
                            @error('user_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="ip_address" class="block font-medium text-sm text-gray-700">IP Address</label>
                            <input type="text" name="ip_address" id="ip_address" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('ip_address', $session->ip_address) }}" />
                            @error('ip_address')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="user_agent" class="block font-medium text-sm text-gray-700">User Agent</label>
                            <input type="text" name="user_agent" id="user_agent" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('user_agent', $session->user_agent) }}" />
                            @error('user_agent')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="payload" class="block font-medium text-sm text-gray-700">Payload</label>
                            <input type="text" name="payload" id="payload" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('payload', $session->payload) }}" />
                            @error('payload')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="last_activity" class="block font-medium text-sm text-gray-700">Last Activity</label>
                            <input type="text" name="last_activity" id="last_activity" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('last_activity', $session->last_activity) }}" />
                            @error('last_activity')
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
