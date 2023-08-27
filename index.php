<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="SHORTCUT ICON" href="images\1.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mindanao State University - Maigo School of Arts & Trades</title>
    <link href="layout/styles/creative.css" rel="stylesheet">
</head>
<body>
    <style>
        body{
            overflow:hidden;
        }        
        #myVideo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        #myAudio {
            width: 100%;
            background-color: transparent;
            padding:0 10px;
            height:40px;
            border-radius:0;
            margin-top:40px;
        }
        .container{border:1px solid transparent;margin-top:130px;padding:50px 20px 20px 20px;border-radius:10px;
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
    <video autoplay muted loop id="myVideo">
        <source src="videos/video.op.mp4" type="video/mp4">
    </video>
    <header>
        <div class="container">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-12 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">
                        Mindanao State University</h1>
                    <h1 class="text-uppercase text-white font-weight-bold">
                        Maigo School of Arts and Trades</h1>
                    <hr class="divider my-4">
                </div>
                <div class="col-lg-10 align-self-baseline">
                    <h5 class="text-white font-weight-normal text-style mb-5">
                        A renowned learning institution in Industrial Technology and related fields in Southern Philippines.
                    </h5>
                    <a href="home.php"><button class="viewsiteBtn btn-design">Visit Website</button></a>
                </div>
            </div>
            <audio autoplay loop controls id="myAudio">
        <source src="audio/video.op.ogg" type="audio/ogg">
        <source src="audio/video.op.mp3" type="audio/mp3">
    </audio>
        </div>
    </header>
</body>
<script>
        // Autoplay audio after a user action
        function playAudio() {
            var audio = document.getElementById("myAudio");
            audio.play();
        }
        // Trigger audio playback on button click
        document.addEventListener("DOMContentLoaded", function () {
            var button = document.getElementById("playButton");
            button.addEventListener("click", playAudio);
        });
    </script>
</html>
