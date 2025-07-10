<form action="{{ route('mbti_test.store') }}" method="post">
    @csrf
    {{-- Introvert (I) vs Extrovert (E) --}}
    <p>1. Saya merasa nyaman berbicara di depan banyak orang</p>
    <input type="radio" name="answer_1" id="opt_1_1" value="sangat tidak setuju">
    <label for="opt_1_1">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju" style="width: 50px;">
    </label>
    <input type="radio" name="answer_1" id="opt_2_1" value="tidak setuju">
    <label for="opt_2_1">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_1" id="opt_3_1" value="netral">
    <label for="opt_3_1">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_1" id="opt_4_1" value="setuju">
    <label for="opt_4_1">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_1" id="opt_5_1" value="sangat setuju">
    <label for="opt_5_1">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>
    <p>2. Saya lebih suka menghabiskan waktu sendiri untuk merenung</p>
    <input type="radio" name="answer_2" id="opt_1_2" value="sangat tidak setuju">
    <label for="opt_1_2">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju" style="width: 50px;">
    </label>
    <input type="radio" name="answer_2" id="opt_2_2" value="tidak setuju">
    <label for="opt_2_2">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_2" id="opt_3_2" value="netral">
    <label for="opt_3_2">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_2" id="opt_4_2" value="setuju">
    <label for="opt_4_2">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_2" id="opt_5_2" value="sangat setuju">
    <label for="opt_5_2">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>

    {{-- Sensing (S) vs Intuition (N) --}}
    <p>3. Saya lebih suka bekerja dengan fakta dan data yang jelas</p>
    <input type="radio" name="answer_3" id="opt_1_3" value="sangat tidak setuju">
    <label for="opt_1_3">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju" style="width: 50px;">
    </label>
    <input type="radio" name="answer_3" id="opt_2_3" value="tidak setuju">
    <label for="opt_2_3">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_3" id="opt_3_3" value="netral">
    <label for="opt_3_3">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_3" id="opt_4_3" value="setuju">
    <label for="opt_4_3">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_3" id="opt_5_3" value="sangat setuju">
    <label for="opt_5_3">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>
    <p>4. Saya sering memikirkan kemungkinan masa depan daripada fokus pada saat ini</p>
    <input type="radio" name="answer_4" id="opt_1_4" value="sangat tidak setuju">
    <label for="opt_1_4">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju"
            style="width: 50px;">
    </label>
    <input type="radio" name="answer_4" id="opt_2_4" value="tidak setuju">
    <label for="opt_2_4">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_4" id="opt_3_4" value="netral">
    <label for="opt_3_4">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_4" id="opt_4_4" value="setuju">
    <label for="opt_4_4">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_4" id="opt_5_4" value="sangat setuju">
    <label for="opt_5_4">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>

    {{-- Thinking (T) vs Feeling (F) --}}
    <p>5. Saya membuat keputusan berdasarkan analisis logis dan objektif</p>
    <input type="radio" name="answer_5" id="opt_1_5" value="sangat tidak setuju">
    <label for="opt_1_5">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju"
            style="width: 50px;">
    </label>
    <input type="radio" name="answer_5" id="opt_2_5" value="tidak setuju">
    <label for="opt_2_5">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_5" id="opt_3_5" value="netral">
    <label for="opt_3_5">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_5" id="opt_4_5" value="setuju">
    <label for="opt_4_5">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_5" id="opt_5_5" value="sangat setuju">
    <label for="opt_5_5">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>
    <p>6. Saya mempertimbangkan perasaan orang lain saat membuat keputusan</p>
    <input type="radio" name="answer_6" id="opt_1_6" value="sangat tidak setuju">
    <label for="opt_1_6">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju"
            style="width: 50px;">
    </label>
    <input type="radio" name="answer_6" id="opt_2_6" value="tidak setuju">
    <label for="opt_2_6">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_6" id="opt_3_6" value="netral">
    <label for="opt_3_6">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_6" id="opt_4_6" value="setuju">
    <label for="opt_4_6">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_6" id="opt_5_6" value="sangat setuju">
    <label for="opt_5_6">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>

    {{-- Judging (J) vs Perceiving (P) --}}
    <p>7. Saya suka membuat rencana dan mengikuti jadwal yang ketat</p>
    <input type="radio" name="answer_7" id="opt_1_7" value="sangat tidak setuju">
    <label for="opt_1_7">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju"
            style="width: 50px;">
    </label>
    <input type="radio" name="answer_7" id="opt_2_7" value="tidak setuju">
    <label for="opt_2_7">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_7" id="opt_3_7" value="netral">
    <label for="opt_3_7">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_7" id="opt_4_7" value="setuju">
    <label for="opt_4_7">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_7" id="opt_5_7" value="sangat setuju">
    <label for="opt_5_7">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>
    <p>8. Saya lebih suka tetap fleksibel dan menyesuaikan diri dengan situasi baru</p>
    <input type="radio" name="answer_8" id="opt_1_8" value="sangat tidak setuju">
    <label for="opt_1_8">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju"
            style="width: 50px;">
    </label>
    <input type="radio" name="answer_8" id="opt_2_8" value="tidak setuju">
    <label for="opt_2_8">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_8" id="opt_3_8" value="netral">
    <label for="opt_3_8">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_8" id="opt_4_8" value="setuju">
    <label for="opt_4_8">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_8" id="opt_5_8" value="sangat setuju">
    <label for="opt_5_8">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>

    {{-- common questions --}}

    {{-- career interest --}}
    <p>9. Bidang apa yang paling menarik untuk kamu pelajari atau kerjakan?</p>
    <input type="radio" name="answer_9" id="opt_1_9" value="teknologi">
    <label for="opt_1_9">
        Teknologi
    </label>
    <input type="radio" name="answer_9" id="opt_2_9" value="seni">
    <label for="opt_2_9">
        Seni
    </label>
    <input type="radio" name="answer_9" id="opt_3_9" value="sains">
    <label for="opt_3_9">
        Sains
    </label>
    <input type="radio" name="answer_9" id="opt_4_9" value="bisnis">
    <label for="opt_4_9">
        Bisnis
    </label>
    <input type="radio" name="answer_9" id="opt_5_9" value="lainnya">
    <label for="opt_5_9">
        lainnya <input type="text" name="answer_9_other" id="answer_9_other" disabled>
    </label>
    <p>10. Apakah kamu lebih suka bekerja di perusahaann besar, startup, atau membangun bisnis sendiri?</p>
    <input type="radio" name="answer_10" id="opt_1_10" value="perusahaan besar">
    <label for="opt_1_10">
        Perusahaan besar
    </label>
    <input type="radio" name="answer_10" id="opt_2_10" value="startup">
    <label for="opt_2_10">
        Startup
    </label>
    <input type="radio" name="answer_10" id="opt_3_10" value="membangun bisnis sendiri">
    <label for="opt_3_10">
        Membangun Bisnis Sendiri
    </label>

    {{-- personal values --}}
    <p>11. Seberapa penting bagi kamu untuk bekerja di bidang yang membantu lingkungan?</p>
    <input type="radio" name="answer_11" id="opt_1_11" value="sangat tidak setuju">
    <label for="opt_1_11">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju"
            style="width: 50px;">
    </label>
    <input type="radio" name="answer_11" id="opt_2_11" value="tidak setuju">
    <label for="opt_2_11">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_11" id="opt_3_11" value="netral">
    <label for="opt_3_11">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_11" id="opt_4_11" value="setuju">
    <label for="opt_4_11">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_11" id="opt_5_11" value="sangat setuju">
    <label for="opt_5_11">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>
    <p>12. Apakah kamu ingin pekerjaan yang memungkinkan kamu membantu orang lain secara langsung?</p>
    <input type="radio" name="answer_12" id="opt_1_12" value="sangat tidak setuju">
    <label for="opt_1_12">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju"
            style="width: 50px;">
    </label>
    <input type="radio" name="answer_12" id="opt_2_12" value="tidak setuju">
    <label for="opt_2_12">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_12" id="opt_3_12" value="netral">
    <label for="opt_3_12">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_12" id="opt_4_12" value="setuju">
    <label for="opt_4_12">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_12" id="opt_5_12" value="sangat setuju">
    <label for="opt_5_12">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>

    {{-- age context --}}
    @if (Auth::user()->age >= 6 && Auth::user()->age <= 16)
        <p>13. Apa mata pelajaran favoritmu di sekolah? mengapa?</p>
        <input type="text" name="answer_13" required />
    @elseif (Auth::user()->age > 16 && Auth::user()->age <= 18)
        <p>13. Setelah lulus SMA/SMK/MA (sederajat), apakah kamu lebih tertarik untuk langsung bekerja, kuliah, atau
            memulai bisnis?</p>
        <input type="radio" name="answer_13" id="opt_1_13" value="bekerja">
        <label for="opt_1_13">
            Langsung Bekerja
        </label>
        <input type="radio" name="answer_13" id="opt_2_13" value="melanjutkan studi">
        <label for="opt_2_13">
            Melanjutkan Studi
        </label>
        <input type="radio" name="answer_13" id="opt_3_13" value="memulai bisnis">
        <label for="opt_3_13">
            Memulai Bisnis
        </label>
    @else
        <p>13. Kamu lebih tertarik untuk bekerja, melanjutkan studi, atau memulai bisnis sendiri?</p>
        <input type="radio" name="answer_13" id="opt_1_13" value="bekerja">
        <label for="opt_1_13">
            Bekerja
        </label>
        <input type="radio" name="answer_13" id="opt_2_13" value="melanjutkan studi">
        <label for="opt_2_13">
            Melanjutkan Studi
        </label>
        <input type="radio" name="answer_13" id="opt_3_13" value="memulai bisnis">
        <label for="opt_3_13">
            Memulai Bisnis
        </label>
    @endif

    {{-- sustainability --}}
    <p>14. Apakah kamu tertarik bekerja di sektor yang mendukung energi terbarukan atau pelestarian lingkungan?</p>
    <input type="radio" name="answer_14" id="opt_1_14" value="sangat tidak setuju">
    <label for="opt_1_14">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju"
            style="width: 50px;">
    </label>
    <input type="radio" name="answer_14" id="opt_2_14" value="tidak setuju">
    <label for="opt_2_14">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_14" id="opt_3_14" value="netral">
    <label for="opt_3_14">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_14" id="opt_4_14" value="setuju">
    <label for="opt_4_14">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_14" id="opt_5_14" value="sangat setuju">
    <label for="opt_5_14">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>
    <p>15. Seberapa besar kamu ingin bisnis atau pekerjaanmu di masa depan berdampak positif pada masyarakat?</p>
    <input type="radio" name="answer_15" id="opt_1_15" value="sangat tidak setuju">
    <label for="opt_1_15">
        <img src="{{ asset('assets/icon/sangat_tidak_setuju.png') }}" alt="sangat tidak setuju"
            style="width: 50px;">
    </label>
    <input type="radio" name="answer_15" id="opt_2_15" value="tidak setuju">
    <label for="opt_2_15">
        <img src="{{ asset('assets/icon/tidak_setuju.png') }}" alt="tidak setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_15" id="opt_3_15" value="netral">
    <label for="opt_3_15">
        <img src="{{ asset('assets/icon/neutral.png') }}" alt="netral" style="width: 50px">
    </label>
    <input type="radio" name="answer_15" id="opt_4_15" value="setuju">
    <label for="opt_4_15">
        <img src="{{ asset('assets/icon/setuju.png') }}" alt="setuju" style="width: 50px">
    </label>
    <input type="radio" name="answer_15" id="opt_5_15" value="sangat setuju">
    <label for="opt_5_15">
        <img src="{{ asset('assets/icon/sangat_setuju.png') }}" alt="sangat setuju" style="width: 50px">
    </label>

    <br><br>
    <button type="submit">Kirim</button>
    <br><br>
    <a href="{{ route('dashboard') }}">kembali</a>
</form>

<script>
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
        })
    });
</script>
