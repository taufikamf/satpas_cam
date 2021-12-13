<!DOCTYPE html>
<html>
  <head>
    <title>Recording</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="WebRTC getUserMedia MediaRecorder API">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" src="{{ asset('css/style.css') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
      button{
        margin: 10px 5px;
      }
      li{
        margin: 10px;
        padding
      }
      li video{
        width: 90%;
        margin-right: 20px;
      }
      body{
        width: 90%;
        max-width: 960px;
        margin: 0px auto;
      }
      #btns{
        display: none;
      }
      h1{
        margin: 100px;
      }
    </style>
  </head>
  <body>
    <div>
        <video autoplay="true" id="video-webcam">
            Browser does not support
        </video>
    </div>
    <div id='gUMArea'>
      <div hidden>
      Record:
        <input type="radio" name="media" value="video" checked id='mediaVideo'>Video
        <input type="radio" name="media" value="audio">audio
      </div>
      <button class="btn btn-default"  id='gUMbtn'>Request Stream</button>
    </div>
    <div id='btns'>
      <button  class="btn btn-default" id='start'>Start</button>
      <button  class="btn btn-default" id='stop'>Stop</button>
    </div>
    <div>
      <ul class="list-unstyled" id='ul'></ul>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
  </body>
</html>