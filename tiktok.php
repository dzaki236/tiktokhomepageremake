<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: black;
        }

        @media only screen and (max-width: 600px) {
            body {
                margin: 0;
                padding: 0;
                overflow-x: hidden;
                background-color: black;
            }

            .container {
                position: relative;
                right: 10px;
                top: -200px;
                min-width: 100%;
                min-height: 60%;
            }

            .profilepic img {
                border-radius: 100%;
                border: 2px solid white;
                width: 40px;
                height: 40px;
                margin-bottom: 2rem;
            }

            .profilepic i {
                position: absolute;
                left: 32px;
                top: -25px;
            }

            .profilepic {
                position: relative;
            }

            .unameandmusic .descfyp {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <video autoplay muted loop id="myVideo">
            <source src="video/video0.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="control">
            <div class="unameandmusic">
                <p class="text-white h6">@dzaki</p>
                <p class="text-white descfyp">Deskripsi1 #fyp #page #test #position #css</p>
            </div>
            <div class="profilepic text-center w-25">
                <img src="https://cerdika.com/wp-content/uploads/2019/10/contoh-peraturan-perundang-undangan-di-indonesia.jpg" alt="">
                <i class="bi bi-plus-circle-fill bg-white rounded-circle   text-danger mt-5 h4"></i>
            </div>
            <div class="like text-center w-25">
                <i class="bi bi-heart-fill text-danger mt-5 h2"></i>
                <p class="text-white">100</p>
            </div>
            <div class="comment text-center w-25">
                <i class="bi bi-chat-dots-fill text-white mt-2 h2"></i>
                <p class="text-white">20</p>
            </div>
            <div class="share text-center w-25">
                <i class="bi bi-cursor-fill text-white mt-2 h2"></i>
                <p class="text-white">100</p>
            </div>
            <div class="music text-center w-25">
                <i class="bi bi-vinyl-fill text-secondary mt-2 h2"></i>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>