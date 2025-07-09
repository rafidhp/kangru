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

    <br><br>
    <button type="submit">Kirim</button>
    <br><br>
    <a href="{{ route('dashboard') }}">kembali</a>
</form>
