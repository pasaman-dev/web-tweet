<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-base-100 shadow-xl border-b-4 border-gray-100 mb-6">
                <div class="card-body">
                    @if (session()->has('success'))
                        <small>Status berhasil di update</small>
                    @elseif(session()->has('error'))
                        <small>Status gagal di update</small>
                    @endif
                    <form action="{{ route('dashboard.create') }}" method="POST" class="mb-4" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <input type="file" name="image" id="image" class="file-input-bordered">
                            <div class="mt-4">
                                @error('image')
                                    <small>Image wajib diisi</small>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-6">
                            <textarea name="content" id="content" placeholder="Apa yang anda pikirkan?" class="textarea textarea-bordered w-full">{{ old('content') }}</textarea>
                            <div class="mt-4">
                                @error('content')
                                    <small>Konten wajib diisi</small>
                                @enderror
                            </div>
                        </div>
                        <input type="submit" value="Tweet" class="btn btn-primary">
                    </form>
                </div>
            </div>

            <div class="card card-compact w-96 bg-base-200 shadow-xl">
                <div class="card-body">
                    <figure><img src="https://placehold.co/600x400/EEE/31343C" alt="Shoes" /></figure>
                    <h2>Gibranda</h2>
                    <p>Selamat datang di tweet pertama saya</p>
                    <p class="text-right text-sm"> Waktu</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
