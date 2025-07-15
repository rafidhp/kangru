<<<<<<< HEAD
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kangru - Mulailah Perjalanan Karir Anda</title>
    <style>
        /* Efek menyala pada icon saat dipilih */
        input[type="radio"].hidden:checked + label {
            filter: brightness(1.2);
            box-shadow: 0 0 8px 2px rgba(128, 90, 213, 0.7);
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="text-gray-800">

    <form action="{{ route('mbti_test.store') }}" method="post" class="max-w-4xl mx-auto py-10 px-4 space-y-8">
        @csrf
        <h1 class="text-2xl font-bold text-center mb-6">Tes Kepribadian</h1>

        {{-- Card 1: Pertanyaan 1–5 --}}
        <div id="card-1" class="card bg-white rounded-2xl shadow-lg p-6 space-y-4">
            <h2 class="text-lg font-semibold mb-2">Bagian 1</h2>

            <div>
                <p>1. Saya merasa nyaman berbicara di depan banyak orang</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_1" id="opt_{{ $j + 1 }}_1"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                        <label for="opt_{{ $j + 1 }}_1" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>2. Saya lebih suka menghabiskan waktu sendiri untuk merenung</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_2" id="opt_{{ $j + 1 }}_2"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                        <label for="opt_{{ $j + 1 }}_2" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>3. Saya lebih suka bekerja dengan fakta dan data yang jelas</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_3" id="opt_{{ $j + 1 }}_3"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                        <label for="opt_{{ $j + 1 }}_3" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>4. Saya sering memikirkan kemungkinan masa depan daripada fokus pada saat ini</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_4" id="opt_{{ $j + 1 }}_4"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                        <label for="opt_{{ $j + 1 }}_4" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>5. Saya membuat keputusan berdasarkan analisis logis dan objektif</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_5" id="opt_{{ $j + 1 }}_5"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                        <label for="opt_{{ $j + 1 }}_5" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Card 2: Pertanyaan 6–10 --}}
        <div id="card-2" class="card bg-white rounded-2xl shadow-lg p-6 space-y-4 hidden">
            <h2 class="text-lg font-semibold mb-2">Bagian 2</h2>

            <div>
                <p>6. Saya mempertimbangkan perasaan orang lain saat membuat keputusan</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_6" id="opt_{{ $j + 1 }}_6"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                        <label for="opt_{{ $j + 1 }}_6" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>7. Saya suka membuat rencana dan mengikuti jadwal yang ketat</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_7" id="opt_{{ $j + 1 }}_7"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                        <label for="opt_{{ $j + 1 }}_7" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>8. Saya lebih suka tetap fleksibel dan menyesuaikan diri dengan situasi baru</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_8" id="opt_{{ $j + 1 }}_8"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                        <label for="opt_{{ $j + 1 }}_8" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>9. Bidang apa yang paling menarik untuk kamu pelajari atau kerjakan?</p>
                <div class="flex flex-col space-y-2 mt-2">
                    @foreach (['teknologi', 'seni', 'sains', 'bisnis', 'lainnya'] as $label)
                        <div>
                            <input type="radio" name="answer_9" id="opt_{{ $label }}"
                                value="{{ $label }}" class="mr-2" />
                            <label for="opt_{{ $label }}">{{ ucfirst($label) }}</label>
                            @if ($label === 'lainnya')
                                <input type="text" name="answer_9_other" id="answer_9_other"
                                    class="ml-2 border rounded p-1" disabled />
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                <p>10. Apakah kamu lebih suka bekerja di perusahaan besar, startup, atau membangun bisnis sendiri?</p>
                <div class="flex flex-col space-y-2 mt-2">
                    @foreach (['perusahaan besar', 'startup', 'membangun bisnis sendiri'] as $label)
                        <div>
                            <input type="radio" name="answer_10" id="opt_{{ str_replace(' ', '_', $label) }}"
                                value="{{ $label }}" class="mr-2" />
                            <label for="opt_{{ str_replace(' ', '_', $label) }}">{{ ucfirst($label) }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Card 3: Pertanyaan 11–15 --}}
        <div id="card-3" class="card bg-white rounded-2xl shadow-lg p-6 space-y-4 hidden">
            <h2 class="text-lg font-semibold mb-2">Bagian 3</h2>

            <div>
                <p>11. Seberapa penting bagi kamu untuk bekerja di bidang yang membantu lingkungan?</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_11" id="opt_{{ $j + 1 }}_11"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                        <label for="opt_{{ $j + 1 }}_11" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>12. Apakah kamu ingin pekerjaan yang memungkinkan kamu membantu orang lain secara langsung?</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_12" id="opt_{{ $j + 1 }}_12"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                        <label for="opt_{{ $j + 1 }}_12" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>13. Kamu lebih tertarik untuk bekerja, melanjutkan studi, atau memulai bisnis sendiri?</p>
                <div class="flex flex-col space-y-2 mt-2">
                    @foreach (['bekerja', 'melanjutkan studi', 'memulai bisnis'] as $label)
                        <div>
                            <input type="radio" name="answer_13" id="opt_{{ str_replace(' ', '_', $label) }}_13"
                                value="{{ $label }}" class="mr-2" />
                            <label for="opt_{{ str_replace(' ', '_', $label) }}_13">{{ ucfirst($label) }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                <p>14. Apakah kamu tertarik bekerja di sektor yang mendukung energi terbarukan atau pelestarian
                    lingkungan?</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_14" id="opt_{{ $j + 1 }}_14"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                        <label for="opt_{{ $j + 1 }}_14" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <p>15. Seberapa besar kamu ingin bisnis atau pekerjaanmu di masa depan berdampak positif pada
                    masyarakat?</p>
                <div class="flex space-x-2 mt-2">
                    @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                        <input type="radio" name="answer_15" id="opt_{{ $j + 1 }}_15"
                            value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                        <label for="opt_{{ $j + 1 }}_15" class="cursor-pointer transition">
                            <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                class="w-10" />
                        </label>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Tombol Navigasi Pagination --}}
        <div class="flex justify-center space-x-4 mt-8">
            <button type="button" id="prevBtn"
                class="px-6 py-2 bg-gray-300 rounded-xl hover:bg-gray-400 transition" disabled>
                Sebelumnya
            </button>
            <button type="button" id="nextBtn"
                class="px-6 py-2 bg-purple-600 text-white rounded-xl hover:bg-purple-700 transition">
                Berikutnya
            </button>
        </div>

        {{-- Tombol Submit dan Kembali --}}
        <div class="flex justify-center space-x-4 mt-4">
            <button type="submit"
                class="px-6 py-2 bg-purple-600 text-white rounded-xl hover:bg-purple-700 transition">
                Kirim Jawaban
            </button>
            <a href="{{ route('dashboard') }}"
                class="px-6 py-2 bg-gray-200 rounded-xl hover:bg-gray-300 transition">Kembali</a>
        </div>
    </form>

    {{-- Script untuk pagination dan input lainnya --}}
    <script>
        // Pagination logic
        const cards = document.querySelectorAll('.card');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentCard = 0;

        function showCard(index) {
            cards.forEach((card, i) => {
                card.classList.toggle('hidden', i !== index);
            });
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index === cards.length - 1;
        }

        prevBtn.addEventListener('click', () => {
            if (currentCard > 0) {
                currentCard--;
                showCard(currentCard);
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentCard < cards.length - 1) {
                currentCard++;
                showCard(currentCard);
            }
        });

        showCard(currentCard);

        // Script untuk input answer_9 lainnya
        const radios = document.querySelectorAll('input[name="answer_9"]');
        const otherInput = document.getElementById('answer_9_other');

        radios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.value === 'lainnya' && radio.checked) {
                    otherInput.disabled = false;
                    otherInput.focus();
                    otherInput.required = true;
                } else {
                    otherInput.value = '';
                    otherInput.disabled = true;
                    otherInput.required = false;
                }
            });
        });
    </script>

</body>

</html>
=======
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
>>>>>>> 09cb92cddcabb9306c7eef6e99bb3b24c0310d5b
