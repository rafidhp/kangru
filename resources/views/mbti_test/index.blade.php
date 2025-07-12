@extends('layouts.app')

@section('content')
<div class="bg-purple-700 text-white relative pb-20 pt-10">
    <div class="container mx-auto px-4">
        <h1 class="text-center text-3xl font-semibold mb-10">Tes Kepribadian</h1>
        <div class="flex justify-center space-x-6 mb-16">
            <div class="bg-white bg-opacity-30 rounded-lg p-6 w-1/3 text-center shadow-lg backdrop-blur-sm">
                <h3 class="font-bold mb-2">Selesaikan Tes</h3>
                <p>Jadilah diri Anda sendiri dan jawablah dengan jujur untuk mengetahui tipe kepribadian Anda.</p>
            </div>
            <div class="bg-white bg-opacity-30 rounded-lg p-6 w-1/3 text-center shadow-lg backdrop-blur-sm">
                <h3 class="font-bold mb-2">Lihat Hasil Lengkap</h3>
                <p>Jadilah diri Anda sendiri dan jawablah dengan jujur untuk mengetahui tipe kepribadian Anda.</p>
            </div>
            <div class="bg-white bg-opacity-30 rounded-lg p-6 w-1/3 text-center shadow-lg backdrop-blur-sm">
                <h3 class="font-bold mb-2">Buka Potensi Anda</h3>
                <p>Jadilah diri Anda sendiri dan jawablah dengan jujur untuk mengetahui tipe kepribadian Anda.</p>
            </div>
        </div>
    </div>
    <svg class="absolute bottom-0 left-0 w-full" viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill="#F3F4F6" d="M0 100L1440 0V100H0Z" />
    </svg>
</div>

<div class="bg-gray-100 min-h-screen py-10">
    <div class="container mx-auto px-4">
        <form action="{{ route('mbti_test.store') }}" method="post" class="space-y-10">
            @csrf

            @php
                $questionText = 'I feel energized after interacting with many people.';
                $questionsCount = 6;
            @endphp

            @for ($i = 1; $i <= $questionsCount; $i++)
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="font-semibold mb-6 text-lg">{{ $questionText }}</p>
                <div class="flex items-center space-x-4">
                    <span class="w-16 text-center font-medium">Agree</span>
                    <div class="flex space-x-6 flex-1 justify-center">
                        <style>
                            .rating-icon {
                                width: 40px;
                                height: 40px;
                                transition: transform 0.2s ease;
                                cursor: pointer;
                                opacity: 0.5;
                            }
                            input[type="radio"]:checked + img {
                                opacity: 1;
                                transform: scale(1.2);
                            }
                            label:hover img {
                                transform: scale(1.2);
                                opacity: 0.8;
                            }
                        </style>

                        <label for="q{{ $i }}_1" class="cursor-pointer transition transform hover:scale-110">
                            <input type="radio" name="answer_{{ $i }}" id="q{{ $i }}_1" value="1" class="hidden" />
                            <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="Sangat Tidak Setuju" class="rating-icon" />
                        </label>
                        <label for="q{{ $i }}_2" class="cursor-pointer transition transform hover:scale-110">
                            <input type="radio" name="answer_{{ $i }}" id="q{{ $i }}_2" value="2" class="hidden" />
                            <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="Tidak Setuju" class="rating-icon" />
                        </label>
                        <label for="q{{ $i }}_3" class="cursor-pointer transition transform hover:scale-110">
                            <input type="radio" name="answer_{{ $i }}" id="q{{ $i }}_3" value="3" class="hidden" />
                            <img src="{{ asset('assets/icon/neutral.png') }}" alt="Netral" class="rating-icon" />
                        </label>
                        <label for="q{{ $i }}_4" class="cursor-pointer transition transform hover:scale-110">
                            <input type="radio" name="answer_{{ $i }}" id="q{{ $i }}_4" value="4" class="hidden" />
                            <img src="{{ asset('assets/icon/setuju.png') }}" alt="Setuju" class="rating-icon" />
                        </label>
                        <label for="q{{ $i }}_5" class="cursor-pointer transition transform hover:scale-110">
                            <input type="radio" name="answer_{{ $i }}" id="q{{ $i }}_5" value="5" class="hidden" />
                            <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="Sangat Setuju" class="rating-icon" />
                        </label>
                    </div>
                    <span class="w-20 text-center font-medium">Disagree</span>
                </div>
                <hr class="mt-6 border-gray-300" />
            </div>
            @endfor

            <div class="pt-6">
                <button type="submit" class="bg-purple-700 text-white px-6 py-3 rounded-md hover:bg-purple-800 transition">Kirim</button>
            </div>
        </form>
    </div>
</div>
@endsection
