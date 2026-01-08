<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            belum ada Notifikasi
        </h2>
    </x-slot>
    
    <div class="bg-gradient-to-br from-purple-700 via-purple-400 to-white min-h-screen py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white bg-opacity-80 rounded-2xl shadow-xl p-6 hover:shadow-2xl transition">
                <h3 class="text-2xl font-bold text-purple-700 mb-2">Notifikasi Terakhir</h3>
                <p class="text-gray-700">Tidak Ada Notifikasi Terbaru.</p>
                <a href="{{ route('dashboard') }}"
                   class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
</x-app-layout>
