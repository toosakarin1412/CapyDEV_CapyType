<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CapyType</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/css/setting.css') }}">
</head>
<body style="background-color: #262a33;" class="font-mono">
    <!-- awal navbar -->
    @include('layouts.navbar')
    <!-- akhir navbar -->
    <div>
        <div style="justify-content: left; display: flex; margin-left: 115px; margin-bottom: 20px;">
            <div style=" margin-left: 55px; margin-top: 80px; margin-bottom: 10px; color: #526777; font-size: 18px; font-family: Roboto Mono; font-size: 28px; background-color: transparent; display: flex; justify-content: left; align-items: center; width: 110px; color: #526777;"><img src="{{asset('assets/img/setting.png')}}" alt="icon" style="width: 40px; margin-right: 15px;">setting</div>
        </div>

        
        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px;">
            <img src="{{asset('assets/img/speedometercolor.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">live wpm
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Display a live WPMspeed during the test.
        <button class="live-wpm-hide" style="font-size: 20px; margin-left: 65px; background-color: #2aba86; color: #262a33;">hide</button>
        <button class="live-wpm-show" style="font-size: 20px; margin-left: 20px; background-color: #1f232c; color: #526777;">show</button>
        </div>


        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-top: 30px;">
            <img src="{{asset('assets/img/speedometercolor.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">live accuracy
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Display a live accuracy during the test.
        <button class="live-wpm-hide" style="font-size: 20px; margin-left: 65px; background-color: #2aba86; color: #262a33;">hide</button>
        <button class="live-wpm-show" style="font-size: 20px; margin-left: 20px; background-color: #1f232c; color: #526777;">show</button>
        </div>


        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-top: 30px;">
            <img src="{{asset('assets/img/speedometercolor.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">timer/progress
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Display a live timer for time test.
        <button id="hidebutton3" onclick="toggleButtons()" class="live-wpm-hide" style="font-size: 20px; margin-left: 130px; background-color: #1f232c; color: #526777;">hide</button>
        <button id="showbutton3" onclick="toggleButtons()" class="live-wpm-show" style="font-size: 20px; margin-left: 20px; background-color: #2aba86; color: #262a33;">show</button>
        </div>

        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-top: 30px;">
            <img src="{{asset('assets/img/Aa.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">font
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Change font for typing and view.
        <select id="fontselect" onchange="changeFont()" style="font-size: 20px; margin-left: 170px; background-color: #1f232c; color: #526777; width: 390px; height: 62px; border-radius: 8px; border: none; font-weight: 900; padding-left: 15px; cursor: pointer;">
            <option value="Roboto Mono">Roboto Mono</option>
            <option value="Arial">Arial</option>
            <option value="Helvetica">Helvetica</option>
            <option value="Times New Roman">Times New Roman</option>
        </select>
        <script>
            function toggleFontSelect() {
                var fontSelect = document.getElementById("fontselect");
                fontSelect.style.display = (fontSelect.style.display === "none") ? "block" : "none";
            }

            function changeFont() {
                var fontSelect = document.getElementById("fontselect");
                var selectedFont = fontSelect.options[fontSelect.selectedIndex].value;
                document.body.style.fontFamily = selectedFont;
            }
        </script>
        </div>


        <div style="font-size: 20; color: #526777; justify-content: left; display: flex; align-items: center; margin-left: 115px; margin-top: 30px;">
            <img src="{{asset('assets/img/fontsize.png')}}" alt="icon" style="width: 50px; margin-left: 55px; margin-right: 15px;">font-size
        </div>
        <div style="font-size: 20px; justify-content: center; display: flex; color: #e5f7ef; align-items: flex-end;">Change font size for typing and view.
        <button id="hide-button" class="live-wpm-hide-fontsize" style="font-size: 20px; margin-left: 380px; background-color: #1f232c; color: #526777;">28</button>
        </div>

        <!-- awal footer -->
        <div class="pt-10">
            @include('layouts.footer')
        </div>
        <!-- akhir footer -->
    </div>
</body>
</html>