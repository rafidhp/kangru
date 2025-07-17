<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Kangru - Mulailah Perjalanan Karir Anda</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <style>
        /* Efek menyala pada icon saat dipilih */
        input[type="radio"].hidden:checked+label {
            filter: brightness(1.3);
            box-shadow: 0 0 12px 3px rgba(128, 90, 213, 0.85);
            border-radius: 0.75rem;
            transition: all 0.4s ease;
        }
    </style>
</head>

<body class="text-gray-900 bg-gradient-to-br from-purple-50 via-white to-purple-50 min-h-screen font-sans antialiased">

    <form action="{{ route('mbti_test.store') }}" method="post"
        class="max-w-4xl mx-auto py-16 px-8 space-y-12 bg-white rounded-3xl shadow-2xl border border-purple-300">
        @csrf
        <h1 class="text-4xl font-extrabold text-center mb-10 text-purple-700 tracking-wider drop-shadow-md">Tes
            Kepribadian</h1>

        {{-- Cards --}}
        <div class="mb-8">
            <div class="w-full bg-gray-300 rounded-full h-5 shadow-inner">
                <div id="progressBar" class="bg-purple-700 h-5 rounded-full transition-all duration-500 ease-in-out"
                    style="width: 0%; box-shadow: 0 0 10px 2px rgba(128, 90, 213, 0.7);"></div>
            </div>
            <p class="text-center mt-3 text-purple-700 font-semibold tracking-wide" id="progressText">Card 1 of 4</p>
        </div>
        <div id="cardsWrapper" class="space-y-12">
            {{-- Card 1 --}}
            <div id="card-0" class="card bg-white rounded-3xl shadow-xl p-10 space-y-8 border border-purple-200">
                <h2 class="text-2xl font-semibold mb-6 text-purple-700 tracking-wide drop-shadow-sm">Bagian 1</h2>

                {{-- Pertanyaan 1–5 --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-3">1. Saya merasa nyaman berbicara
                        di depan banyak orang</p>
                    <div class="flex space-x-3 mt-3">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_1" id="opt_{{ $j + 1 }}_1"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                            <label for="opt_{{ $j + 1 }}_1"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-600 hover:scale-125 transform duration-300 ease-in-out shadow-lg">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">2. Saya lebih suka menghabiskan waktu sendiri untuk
                        merenung</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_2" id="opt_{{ $j + 1 }}_2"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                            <label for="opt_{{ $j + 1 }}_2"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">2. Saya lebih suka menghabiskan waktu sendiri untuk
                        merenung</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_2" id="opt_{{ $j + 1 }}_2"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                            <label for="opt_{{ $j + 1 }}_2"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">3. Saya lebih suka bekerja dengan fakta dan data yang
                        jelas</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_3" id="opt_{{ $j + 1 }}_3"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                            <label for="opt_{{ $j + 1 }}_3"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">4. Saya sering memikirkan kemungkinan masa depan daripada
                        fokus pada saat ini</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_4" id="opt_{{ $j + 1 }}_4"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                            <label for="opt_{{ $j + 1 }}_4"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">5. Saya membuat keputusan berdasarkan analisis logis dan
                        objektif</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_5" id="opt_{{ $j + 1 }}_5"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                            <label for="opt_{{ $j + 1 }}_5"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div id="card-2"
                class="card bg-white rounded-3xl shadow-lg p-8 space-y-6 border border-purple-100 hidden">
                <h2 class="text-xl font-semibold mb-4 text-purple-600 tracking-wide">Bagian 2</h2>

                <div>
                    <p class="font-medium text-gray-700 mb-3">6. Saya mempertimbangkan perasaan orang lain saat membuat
                        keputusan</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_6" id="opt_{{ $j + 1 }}_6"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                            <label for="opt_{{ $j + 1 }}_6"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">7. Saya suka membuat rencana dan mengikuti jadwal yang
                        ketat</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_7" id="opt_{{ $j + 1 }}_7"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                            <label for="opt_{{ $j + 1 }}_7"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">8. Saya lebih suka tetap fleksibel dan menyesuaikan diri
                        dengan situasi baru</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_8" id="opt_{{ $j + 1 }}_8"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required>
                            <label for="opt_{{ $j + 1 }}_8"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">9. Bidang apa yang paling menarik untuk kamu pelajari
                        atau kerjakan?</p>
                    <div class="flex flex-col space-y-3 mt-2">
                        @foreach (['teknologi', 'seni', 'sains', 'bisnis', 'lainnya'] as $label)
                            <div>
                                <input type="radio" name="answer_9" id="opt_{{ $label }}"
                                    value="{{ $label }}" class="mr-3" />
                                <label for="opt_{{ $label }}"
                                    class="cursor-pointer font-medium text-gray-700">{{ ucfirst($label) }}</label>
                                @if ($label === 'lainnya')
                                    <input type="text" name="answer_9_other" id="answer_9_other"
                                        class="ml-3 border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-purple-500 disabled:opacity-50"
                                        disabled />
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">10. Apakah kamu lebih suka bekerja di perusahaan besar,
                        startup, atau membangun bisnis sendiri?</p>
                    <div class="flex flex-col space-y-3 mt-2">
                        @foreach (['perusahaan besar', 'startup', 'membangun bisnis sendiri'] as $label)
                            <div>
                                <input type="radio" name="answer_10" id="opt_{{ str_replace(' ', '_', $label) }}"
                                    value="{{ $label }}" class="mr-3" />
                                <label for="opt_{{ str_replace(' ', '_', $label) }}"
                                    class="cursor-pointer font-medium text-gray-700">{{ ucfirst($label) }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div id="card-3"
                class="card bg-white rounded-3xl shadow-lg p-8 space-y-6 border border-purple-100 hidden">
                <h2 class="text-xl font-semibold mb-4 text-purple-600 tracking-wide">Bagian 3</h2>

                <div>
                    <p class="font-medium text-gray-700 mb-3">11. Seberapa penting bagi kamu untuk bekerja di bidang
                        yang membantu lingkungan?</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_11" id="opt_{{ $j + 1 }}_11"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                            <label for="opt_{{ $j + 1 }}_11"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">12. Apakah kamu ingin pekerjaan yang memungkinkan kamu
                        membantu orang lain secara langsung?</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_12" id="opt_{{ $j + 1 }}_12"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                            <label for="opt_{{ $j + 1 }}_12"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">13. Kamu lebih tertarik untuk bekerja, melanjutkan studi,
                        atau memulai bisnis sendiri?</p>
                    <div class="flex flex-col space-y-3 mt-2">
                        @foreach (['bekerja', 'melanjutkan studi', 'memulai bisnis'] as $label)
                            <div>
                                <input type="radio" name="answer_13"
                                    id="opt_{{ str_replace(' ', '_', $label) }}_13" value="{{ $label }}"
                                    class="mr-3" />
                                <label for="opt_{{ str_replace(' ', '_', $label) }}_13"
                                    class="cursor-pointer font-medium text-gray-700">{{ ucfirst($label) }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">14. Apakah kamu tertarik bekerja di sektor yang mendukung
                        energi terbarukan atau pelestarian
                        lingkungan?</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_14" id="opt_{{ $j + 1 }}_14"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                            <label for="opt_{{ $j + 1 }}_14"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">15. Seberapa besar kamu ingin bisnis atau pekerjaanmu di
                        masa depan berdampak positif pada
                        masyarakat?</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_15" id="opt_{{ $j + 1 }}_15"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                            <label for="opt_{{ $j + 1 }}_15"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}" alt="{{ $label }}"
                                    class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Tombol submit hanya di card terakhir --}}
            <div id="card-submit"
                class="card bg-white rounded-3xl shadow-lg p-8 space-y-6 border border-purple-100 hidden">
                <h2 class="text-xl font-semibold mb-4 text-purple-600 tracking-wide">Selesai!</h2>
                <p class="text-gray-700">Terima kasih telah menyelesaikan tes kepribadian. Klik tombol di bawah untuk
                    mengirim jawabanmu.</p>
                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="px-8 py-3 bg-purple-600 text-white rounded-2xl hover:bg-purple-700 transition duration-300 ease-in-out shadow-lg">Kirim
                        Jawaban</button>
                </div>
            </div>
            <div class="flex justify-center mt-8 space-x-6" id="navigationButtons">
                <button type="button" id="prevBtn"
                    class="px-8 py-3 bg-gray-300 rounded-2xl hover:bg-gray-400 transition duration-300 ease-in-out shadow-sm">Sebelumnya</button>
                <button type="button" id="nextBtn"
                    class="px-8 py-3 bg-purple-600 text-white rounded-2xl hover:bg-purple-700 transition duration-300 ease-in-out shadow-lg">Berikutnya</button>
            </div>
        </div>
    </form>

    {{-- Tombol kembali fix --}}
    <a href="{{ route('dashboard') }}"
        class="fixed bottom-6 left-6 px-8 py-3 bg-gray-200 rounded-2xl hover:bg-gray-300 transition duration-300 ease-in-out shadow-md">Kembali</a>

    {{-- Script highlight pilihan & pagination --}}
    <script>
        // Highlight label yg dipilih
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', e => {
                let name = radio.name;
                document.querySelectorAll('input[name="' + name + '"]').forEach(r => {
                    let lbl = document.querySelector('label[for="' + r.id + '"]');
                    if (lbl) lbl.classList.remove('border-purple-600');
                });
                let lbl = document.querySelector('label[for="' + radio.id + '"]');
                if (lbl) lbl.classList.add('border-purple-600');
            });
        });

        // Pagination
        const cards = document.querySelectorAll('.card');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const progressBar = document.getElementById('progressBar');
        const progressText = document.getElementById('progressText');
        let current = 0;

        function updateProgress(idx) {
            const total = cards.length;
            const percent = ((idx + 1) / total) * 100;
            progressBar.style.width = percent + '%';
            progressText.textContent = `Card ${idx + 1} of ${total}`;
        }

        function showCard(idx) {
            cards.forEach((card, i) => card.classList.toggle('hidden', i !== idx));
            current = idx;
            updateProgress(idx);
        }

        nextBtn.addEventListener('click', () => {
            if (current < cards.length - 1) {
                showCard(current + 1); // next normal
            }
        });

        prevBtn.addEventListener('click', () => {
            showCard(0); // selalu balik ke card pertama
        });

        showCard(0); // mulai di card pertama

        // Enable "Lainnya" input field
        document.querySelectorAll('input[name="answer_9"]').forEach(input => {
            input.addEventListener('change', e => {
                const otherInput = document.getElementById('answer_9_other');
                if (e.target.value === 'lainnya') {
                    otherInput.disabled = false;
                    otherInput.required = true;
                } else {
                    otherInput.disabled = true;
                    otherInput.required = false;
                    otherInput.value = ''; // Clear the input if not selected
                }
            });
        });
    </script>
</body>

</html>
