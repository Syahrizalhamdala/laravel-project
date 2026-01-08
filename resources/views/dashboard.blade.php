{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            Selamat Datang, {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="bg-gradient-to-br from-purple-700 via-purple-400 to-white min-h-screen py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Card 1 -->
                <div class="bg-white bg-opacity-80 rounded-2xl shadow-xl p-6 hover:shadow-2xl transition">
                    <h3 class="text-2xl font-bold text-purple-700 mb-2">Profil Saya</h3>
                    <p class="text-gray-700">Lihat dan ubah informasi pribadi Anda.</p>
                    <a href="{{ route('profile.edit') }}"
                       class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                        Edit Profil
                    </a>
                </div>
                

                <!-- Card 2 -->
                <div class="bg-white bg-opacity-80 rounded-2xl shadow-xl p-6 hover:shadow-2xl transition">
                    <h3 class="text-2xl font-bold text-purple-700 mb-2">Aktivitas Terakhir</h3>
                    <p class="text-gray-700">Tidak ada aktivitas terbaru.</p>
                    <a href="{{ route('aktivitas') }}"
                       class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                         Buka Aktivitas 
                    </a>
                </div>

                <!-- Card 3 (Notifikasi) -->
                <div class="bg-white bg-opacity-80 rounded-2xl shadow-xl p-6 hover:shadow-2xl transition">
                    <h3 class="text-2xl font-bold text-purple-700 mb-2">Notifikasi</h3>
                    <p class="text-gray-700">Belum ada notifikasi baru.</p>
                    <a href="{{ route('notifikasi') }}"
                       class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                        Buka Notifikasi
                    </a>
                </div>

               
                <!-- Card 4 -->
                <div class="bg-white bg-opacity-80 rounded-2xl shadow-xl p-6 hover:shadow-2xl transition">
                    <h3 class="text-2xl font-bold text-purple-700 mb-2">Pengaturan</h3>
                    <p class="text-gray-700">Atur preferensi akun dan aplikasi Anda.</p>
                    <a href="{{ route('profile.edit') }}"
                       class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                        Buka Pengaturan
                    </a>
                </div>
                 <!-- Card 5-->
                <div class="md:col-span-2 flex justify-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="bg-red-600 text-white px-6 py-3 rounded-xl hover:bg-red-700 transition">
                            Logout
                        </button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
