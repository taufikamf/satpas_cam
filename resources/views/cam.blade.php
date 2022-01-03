<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5c183829ec.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Camera</title>
</head>
<body style="height: 100vh; overflow-y:hidden;">
    <div class="container d-flex justify-content-center flex-column">
            <button id="start-camera" class="btn btn-primary mt-5 align-self-center position-absolute" style="z-index: 100;">Start Taking Photos</button>
            <video id="video" width="640" height="480" class="align-self-center mt-5" autoplay></video>
            <div id="container" class="d-flex justify-content-center">

            </div>
    </div>
    <div class="container d-flex justify-content-center flex-column">
        <canvas id="canvas" style="border-radius: 50%;" width="640" height="480" class="align-self-center"></canvas>
        <div class="d-flex row justify-content-center flex-row">
            <div id="container3" class="d-flex justify-content-center">

            </div>
            <form action="{{ route('cam.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="base64" id="input" hidden>
                <div id="container2" class="d-flex justify-content-center">
    
                </div>
            </form>
        </div>
    </div>
</body>
<script>
let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");
let input = document.querySelector("#input");
let container = document.querySelector("#container");
let container2 = document.querySelector("#container2");
let container3 = document.querySelector("#container3");

camera_button.addEventListener('click', async function() {
   	let stream = await navigator.mediaDevices.getUserMedia({ video: {pan: true, tilt: true, zoom: true}, audio: false });
	video.srcObject = stream;
    camera_button.style.visibility = "hidden";
    container.innerHTML = '<button id="click-photo" type="button" style="width: 75px; height: 75px" class="btn btn-danger align-self-center rounded-circle mt-2 mb-5 mx-auto"><i class="fas fa-camera fa-3x"></i></button>';
});

container.addEventListener('click', function() {
   	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	let image_data_url = canvas.toDataURL('image/jpeg');
    container2.innerHTML = '<button type="submit" style="width: 75px; height: 75px" class="btn btn-success align-self-center rounded-circle mt-2 mx-3"><i class="fas fa-check fa-3x"></i></button>';
    container3.innerHTML = '<button type="button" style="width: 75px; height: 75px" class="btn btn-danger align-self-center rounded-circle mt-2 mx-3"><i class="fas fa-redo-alt fa-3x"></i></button>';
    window.scrollTo(0, 700);
    input.value = image_data_url;

   	// data url of the image
   	console.log(image_data_url);
});

container3.addEventListener('click' ,function(){
    window.scrollTo(0, 0);
});
</script>
<style>
    #video {
        border-radius: 50%;
    }
    .container {
        height: 100%;
        position: relative;
        width: 100%;
    }
</style>
</html>