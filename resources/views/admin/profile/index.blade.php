@extends('admin.layouts.app')
@section('title', 'Dashboard Admin')
@section('kategori', 'Profile')
@section('judul', 'Ini Profile')

@section('content')
    <div class="flex flex-col items-center space-y-8 py-10">
        <div class="flex space-x-6">
            <div class="relative">
                <img src="{{ asset('storage/asset/profile/rel1.jpeg') }}" alt="Profil 1"
                    class="w-48 h-48 rounded-full border-4 border-purple-600 shadow-lg hover:shadow-purple-600/50 transition-all duration-300 ease-in-out">
            </div>
            <div class="relative">
                <img src="{{ asset('storage/asset/profile/we.jpeg') }}" alt="Profil 2"
                    class="w-48 h-48 rounded-full border-4 border-purple-600 shadow-lg hover:shadow-purple-600/50 transition-all duration-300 ease-in-out">
            </div>
            <div class="relative">
                <img src="{{ asset('storage/asset/profile/kiarra1.jpeg') }}" alt="Profil 3"
                    class="w-48 h-48 rounded-full border-4 border-purple-600 shadow-lg hover:shadow-purple-600/50 transition-all duration-300 ease-in-out">
            </div>
        </div>

        <div
            class="w-full max-w-4xl p-6 text-center text-white bg-gray-800 rounded-lg shadow-lg hover:shadow-purple-600/50 transition-all duration-300 ease-in-out">
            <p class="text-lg leading-relaxed">
                Namaku Farel,aku adalah orang yang yang memiliki ambisi tinggi untuk mencapai tujuanku.Aku sangat tertarik
                dalam dunia IT,Semua bidang yang berkaitan dengan IT ingin aku pelajari,namun untuk saat ini aku
                berfokus pada
                project management sebagai Project Manager IT pada salah satu startup di Bandung.Semua hal yang aku lakuin
                atas
                keinginan sendiri dan kesadaran diri-sendiri mengenai persaingan yang ketat dalam dunia IT,aku tidak suka
                mengikuti
                jalan yang sudah ada,aku lebih suka membuat jalanku sendiri.Semua pencapaian yang sudah aku dapatkan tidak
                luput dari support yang diberikan oleh pasanganku.Masih banyak impianku khususnya dalam ruang lingkup kuliah
                ini,karena kiarra sudah menjadi bagian dari mahasiswa prodi Teknologi Informasi juga,jadi menurutku untuk
                mencapai
                impian
                tersebut tidak lah susah.
            </p>
        </div>
    </div>


@endsection
