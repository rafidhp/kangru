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

        /* Loading spinner animation */
        .spinner {
            border: 4px solid rgba(124, 58, 237, 0.2);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border-left-color: #7c3aed;
            border-top-color: #7c3aed;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Loading pulse animation */
        .loading-pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Loading dots animation */
        .loading-dots::after {
            content: '';
            animation: dots 1.5s infinite;
        }

        @keyframes dots {
            0%, 20% { content: '.'; }
            40% { content: '..'; }
            60%, 100% { content: '...'; }
        }

        /* Modal backdrop blur effect */
        .modal-backdrop {
            backdrop-filter: blur(8px);
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Smooth fade in animation */
        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>

<body
    class="text-gray-900 bg-gradient-to-br my-10 from-purple-50 via-white to-purple-50 min-h-screen font-sans antialiased">

    <form action="{{ route('mbti_test.store') }}" method="post" id="mbtiForm"
        class="max-w-4xl mx-auto py-16 px-8 space-y-12 bg-white rounded-3xl shadow-2xl border border-purple-300">
        @csrf
        <h1 class="text-4xl font-extrabold text-center mb-10 text-purple-700 tracking-wider drop-shadow-md">Tes
            Kepribadian</h1>

        {{-- Progress Bar --}}
        <div class="mb-8">
            <div class="w-full bg-gray-300 rounded-full h-5 shadow-inner">
                <div id="progressBar" class="bg-purple-700 h-5 rounded-full transition-all duration-500 ease-in-out"
                    style="width: 0%; box-shadow: 0 0 10px 2px rgba(128, 90, 213, 0.7);"></div>
            </div>
            <p class="text-center mt-3 text-purple-700 font-semibold tracking-wide" id="progressText">Card 1 of 4
            </p>
        </div>

        <div id="cardsWrapper" class="space-y-12">
            {{-- Card 1 --}}
            <div id="card-0" class="card bg-white rounded-3xl shadow-xl p-10 space-y-8 border border-purple-200">
                <h2 class="text-2xl font-semibold mb-6 text-purple-700 tracking-wide drop-shadow-sm">Bagian 1</h2>

                <div>
                    <p class="font-semibold text-gray-700 mb-3">1. Saya merasa nyaman berbicara di depan banyak orang</p>
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
                    <p class="font-medium text-gray-700 mb-3">2. Saya lebih suka menghabiskan waktu sendiri untuk merenung</p>
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
                    <p class="font-medium text-gray-700 mb-3">3. Saya lebih suka bekerja dengan fakta dan data yang jelas</p>
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
                    <p class="font-medium text-gray-700 mb-3">4. Saya sering memikirkan kemungkinan masa depan daripada fokus pada saat ini</p>
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
                    <p class="font-medium text-gray-700 mb-3">5. Saya membuat keputusan berdasarkan analisis logis dan objektif</p>
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
            <div id="card-1" class="card bg-white rounded-3xl shadow-lg p-8 space-y-6 border border-purple-100 hidden">
                <h2 class="text-xl font-semibold mb-4 text-purple-600 tracking-wide">Bagian 2</h2>

                <div>
                    <p class="font-medium text-gray-700 mb-3">6. Saya mempertimbangkan perasaan orang lain saat membuat keputusan</p>
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
                    <p class="font-medium text-gray-700 mb-3">7. Saya suka membuat rencana dan mengikuti jadwal yang ketat</p>
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
                    <p class="font-medium text-gray-700 mb-3">8. Saya lebih suka tetap fleksibel dan menyesuaikan diri dengan situasi baru</p>
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
                    <p class="font-medium text-gray-700 mb-3">9. Bidang apa yang paling menarik untuk kamu pelajari atau kerjakan?</p>
                    <div class="flex flex-col space-y-3 mt-2">
                        @foreach (['teknologi', 'seni', 'sains', 'bisnis', 'lainnya'] as $label)
                            <div>
                                <input type="radio" name="answer_9" id="opt_{{ $label }}"
                                    value="{{ $label }}" class="mr-3" required />
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
                    <p class="font-medium text-gray-700 mb-3">10. Apakah kamu lebih suka bekerja di perusahaan besar, startup, atau membangun bisnis sendiri?</p>
                    <div class="flex flex-col space-y-3 mt-2">
                        @foreach (['perusahaan besar', 'startup', 'membangun bisnis sendiri'] as $label)
                            <div>
                                <input type="radio" name="answer_10"
                                    id="opt_{{ str_replace(' ', '_', $label) }}" value="{{ $label }}"
                                    class="mr-3" required />
                                <label for="opt_{{ str_replace(' ', '_', $label) }}"
                                    class="cursor-pointer font-medium text-gray-700">{{ ucfirst($label) }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div id="card-2" class="card bg-white rounded-3xl shadow-lg p-8 space-y-6 border border-purple-100 hidden">
                <h2 class="text-xl font-semibold mb-4 text-purple-600 tracking-wide">Bagian 3</h2>

                <div>
                    <p class="font-medium text-gray-700 mb-3">11. Seberapa penting bagi kamu untuk bekerja di bidang yang membantu lingkungan?</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_11" id="opt_{{ $j + 1 }}_11"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                            <label for="opt_{{ $j + 1 }}_11"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}"
                                    alt="{{ $label }}" class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">12. Apakah kamu ingin pekerjaan yang memungkinkan kamu membantu orang lain secara langsung?</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_12" id="opt_{{ $j + 1 }}_12"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                            <label for="opt_{{ $j + 1 }}_12"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}"
                                    alt="{{ $label }}" class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    @php
                        $age = Auth::user()->age;
                        if ($age >= 6 && $age <= 16) {
                            $question_13 = 'Apa mata pelajaran favoritmu di sekolah? mengapa?';
                            $options = ['Matematika', 'Bahasa Indonesia', 'IPA', 'IPS', 'Bahasa Inggris'];
                        } elseif ($age > 16 && $age <= 18) {
                            $question_13 =
                                'Setelah lulus SMA/SMK/MA (sederajat), apakah kamu lebih tertarik untuk langsung bekerja, kuliah, atau memulai bisnis?';
                            $options = ['Langsung bekerja', 'Kuliah', 'Memulai bisnis'];
                        } else {
                            $question_13 =
                                'Kamu lebih tertarik untuk bekerja, melanjutkan studi, atau memulai bisnis sendiri?';
                            $options = ['Bekerja', 'Melanjutkan studi', 'Memulai bisnis sendiri'];
                        }
                    @endphp

                    <p class="font-medium text-gray-700 mb-3">13. {{ $question_13 }}</p>
                    <div class="flex flex-col space-y-3 mt-2">
                        @foreach ($options as $label)
                            @php $id = 'opt_' . str_replace(' ', '_', strtolower($label)) . '_13'; @endphp
                            <div>
                                <input type="radio" name="answer_13" id="{{ $id }}"
                                    value="{{ $label }}" class="mr-3" required />
                                <label for="{{ $id }}"
                                    class="cursor-pointer font-medium text-gray-700">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">14. Apakah kamu tertarik bekerja di sektor yang mendukung energi terbarukan atau pelestarian lingkungan?</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_14" id="opt_{{ $j + 1 }}_14"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                            <label for="opt_{{ $j + 1 }}_14"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}"
                                    alt="{{ $label }}" class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium text-gray-700 mb-3">15. Seberapa besar kamu ingin bisnis atau pekerjaanmu di masa depan berdampak positif pada masyarakat?</p>
                    <div class="flex space-x-3 mt-2">
                        @foreach (['sangat_tidak_setuju', 'tidak_setuju', 'neutral', 'setuju', 'sangat_setuju'] as $j => $label)
                            <input type="radio" name="answer_15" id="opt_{{ $j + 1 }}_15"
                                value="{{ str_replace('_', ' ', $label) }}" class="hidden" required />
                            <label for="opt_{{ $j + 1 }}_15"
                                class="cursor-pointer transition rounded-full border-2 border-transparent hover:border-purple-500 hover:scale-110 transform duration-300 ease-in-out shadow-md">
                                <img src="{{ asset('assets/icon/' . $label . '.png') }}"
                                    alt="{{ $label }}" class="w-12 h-12" />
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Card 4 --}}
            <div id="card-3" class="card bg-white rounded-3xl shadow-lg p-8 space-y-6 border border-purple-100 hidden">
                <h2 class="text-xl font-semibold mb-4 text-purple-600 tracking-wide">Bagian 4 - Selesai</h2>
                <p class="text-gray-700">Terima kasih telah menyelesaikan tes kepribadian. Klik tombol di bawah untuk mengirim jawabanmu.</p>
            </div>
        </div>

        {{-- Navigation Buttons --}}
        <div class="flex justify-center mt-8 space-x-6" id="navigationButtons">
            <button type="button" id="prevBtn"
                class="px-8 py-3 bg-gray-300 rounded-2xl hover:bg-gray-400 transition duration-300 ease-in-out shadow-sm">Sebelumnya</button>
            <button type="button" id="nextBtn"
                class="px-8 py-3 bg-purple-600 text-white rounded-2xl hover:bg-purple-700 transition duration-300 ease-in-out shadow-lg">Berikutnya</button>
        </div>

        {{-- Submit Button - Initially Hidden --}}
        <div class="flex justify-center mt-8 space-x-6 hidden" id="submitButtons">
            <button type="button" id="backBtn"
                class="px-8 py-3 bg-gray-300 rounded-2xl hover:bg-gray-400 transition duration-300 ease-in-out shadow-sm">Kembali</button>
            <button type="button" id="submitBtn"
                class="px-8 py-3 bg-purple-600 text-white rounded-2xl hover:bg-purple-700 transition duration-300 ease-in-out shadow-lg">Kirim Jawaban</button>
        </div>
    </form>

    {{-- Modal for Test Completion --}}
    <div id="completionModal" class="fixed inset-0 z-50 hidden">
        <div class="modal-backdrop absolute inset-0"></div>
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-3xl shadow-2xl p-8 max-w-md w-full fade-in">
                <div class="text-center">
                    <div id="loadingSpinner" class="hidden">
                        <div class="spinner mx-auto mb-6"></div>
                        <p class="text-xl font-bold text-purple-700 mb-2 loading-pulse">Mengirim jawaban<span class="loading-dots"></span></p>
                        <p class="text-gray-600 loading-pulse">Mohon tunggu sebentar, kami sedang memproses hasil tes Anda</p>
                    </div>
                    <div id="completionMessage" class="hidden">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Tes Selesai!</h3>
                        <p class="text-gray-600 mb-4">Jawaban Anda telah berhasil dikirim. Anda akan diarahkan ke halaman hasil.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tombol kembali fix --}}
    <a href="{{ route('dashboard') }}"
        class="fixed bottom-6 left-6 px-8 py-3 bg-gray-200 rounded-2xl hover:bg-gray-300 transition duration-300 ease-in-out shadow-md">Kembali</a>

    @if (Auth::user()->mbti_type != null)
        <a href="{{ route('mbti_test.result') }}"
            class="fixed bottom-6 right-6 px-8 py-3 bg-gray-200 rounded-2xl hover:bg-gray-300 transition duration-300 ease-in-out shadow-md">Previous
            Result</a>
    @endif

    <script>
        // Pagination and form handling
        const cards = document.querySelectorAll('.card');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const submitBtn = document.getElementById('submitBtn');
        const backBtn = document.getElementById('backBtn');
        const navigationButtons = document.getElementById('navigationButtons');
        const submitButtons = document.getElementById('submitButtons');
        const progressBar = document.getElementById('progressBar');
        const progressText = document.getElementById('progressText');

        let currentCard = 0;
        const totalCards = cards.length;

        // Fungsi untuk update progress bar
        function updateProgress() {
            const progress = ((currentCard + 1) / totalCards) * 100;
            progressBar.style.width = progress + '%';
            progressText.textContent = `Card ${currentCard + 1} of ${totalCards}`;
        }

        // Fungsi untuk validasi card saat ini
        function validateCurrentCard() {
            const currentCardElement = cards[currentCard];

            // Cek semua radio button groups
            const radioGroups = currentCardElement.querySelectorAll('input[type="radio"][required]');
            const radioNames = [...new Set(Array.from(radioGroups).map(radio => radio.name))];

            for (let name of radioNames) {
                const checkedRadio = currentCardElement.querySelector(`input[name="${name}"]:checked`);
                if (!checkedRadio) {
                    return false;
                }
                
                // Validasi khusus untuk answer_9 jika pilihan "lainnya"
                if (name === 'answer_9' && checkedRadio.value === 'lainnya') {
                    const otherInput = currentCardElement.querySelector('#answer_9_other');
                    if (!otherInput || !otherInput.value.trim()) {
                        return false;
                    }
                }
            }

            // Cek text input yang required
            const textInputs = currentCardElement.querySelectorAll('input[type="text"][required]');
            for (let input of textInputs) {
                if (!input.value.trim()) {
                    return false;
                }
            }

            return true;
        }

        // Fungsi untuk show/hide tombol
        function updateButtons() {
            // Update prev button
            prevBtn.style.display = currentCard === 0 ? 'none' : 'inline-block';

            // Update next/submit button
            if (currentCard === totalCards - 1) {
                navigationButtons.classList.add('hidden');
                submitButtons.classList.remove('hidden');
            } else {
                navigationButtons.classList.remove('hidden');
                submitButtons.classList.add('hidden');
            }

            // Enable/disable next button berdasarkan validasi
            const isValid = validateCurrentCard();
            nextBtn.disabled = !isValid;
            nextBtn.style.opacity = isValid ? '1' : '0.5';
            nextBtn.style.cursor = isValid ? 'pointer' : 'not-allowed';
        }

        // Fungsi untuk navigasi ke card berikutnya
        function showCard(cardIndex) {
            cards.forEach((card, index) => {
                if (index === cardIndex) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });

            currentCard = cardIndex;
            updateProgress();
            updateButtons();

            // Scroll ke atas
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Event listeners untuk tombol
        nextBtn.addEventListener('click', () => {
            if (currentCard < totalCards - 1 && validateCurrentCard()) {
                showCard(currentCard + 1);
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentCard > 0) {
                showCard(currentCard - 1);
            }
        });

        backBtn.addEventListener('click', () => {
            showCard(totalCards - 2);
        });

        // Event listener untuk radio buttons
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', () => {
                updateButtons();
            });
        });

        // Event listener untuk text input
        document.querySelectorAll('input[type="text"]').forEach(text => {
            text.addEventListener('input', () => {
                updateButtons();
            });
        });

        // Handle radio button "lainnya"
        document.querySelectorAll('input[name="answer_9"]').forEach(radio => {
            radio.addEventListener('change', () => {
                const otherInput = document.getElementById('answer_9_other');
                if (radio.value === 'lainnya') {
                    otherInput.disabled = false;
                    otherInput.required = true;
                    otherInput.focus();
                } else {
                    otherInput.disabled = true;
                    otherInput.required = false;
                    otherInput.value = '';
                }
                updateButtons();
            });
        });
        
        // Event listener untuk answer_9_other
        const answer9OtherInput = document.getElementById('answer_9_other');
        if (answer9OtherInput) {
            answer9OtherInput.addEventListener('input', () => {
                updateButtons();
            });
        }

        // Submit button handler
        submitBtn.addEventListener('click', () => {
            // Validasi final semua jawaban
            const form = document.getElementById('mbtiForm');
            const requiredInputs = form.querySelectorAll('input[required]');
            let allValid = true;
            let missingAnswers = [];
            
            // Cek semua radio button groups
            const radioNames = ['answer_1', 'answer_2', 'answer_3', 'answer_4', 'answer_5', 'answer_6', 'answer_7', 'answer_8', 'answer_9', 'answer_10', 'answer_11', 'answer_12', 'answer_13', 'answer_14', 'answer_15'];
            
            radioNames.forEach(name => {
                const checkedRadio = form.querySelector(`input[name="${name}"]:checked`);
                if (!checkedRadio) {
                    allValid = false;
                    missingAnswers.push(name.replace('answer_', 'Pertanyaan '));
                } else if (name === 'answer_9' && checkedRadio.value === 'lainnya') {
                    const otherInput = form.querySelector('#answer_9_other');
                    if (!otherInput || !otherInput.value.trim()) {
                        allValid = false;
                        missingAnswers.push('Pertanyaan 9 (bidang lainnya)');
                    }
                }
            });
            
            if (!allValid) {
                alert('Mohon lengkapi jawaban untuk: ' + missingAnswers.join(', '));
                return;
            }
            
            showLoadingModal();
            setTimeout(() => {
                document.getElementById('mbtiForm').submit();
            }, 500);
        });



        // Show loading modal
        function showLoadingModal() {
            const modal = document.getElementById('completionModal');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const completionMessage = document.getElementById('completionMessage');
            
            modal.classList.remove('hidden');
            loadingSpinner.classList.remove('hidden');
            completionMessage.classList.add('hidden');
        }

        // Initialize
        updateProgress();
        updateButtons();
    </script>
</body>
</html>
