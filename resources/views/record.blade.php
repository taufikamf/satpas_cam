<!DOCTYPE html>
<html>
  <head>
    <title>Media Recorder in Javascript</title>
    <link rel="stylesheet" type="text/css" src="{{ asset('css/record.css') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <div id="bigPutih">
    </div>
    <div id="container">
      <video id="gum" playsinline autoplay muted></video>
      <!-- <video id="recorded" playsinline loop></video> -->

      <div>
        <button id="start">Start camera</button>
        <button id="record" disabled>Record</button>
        <!-- <button id="play" disabled>Play</button> -->
        <button id="download" disabled>Download</button>
      </div>
      <div>
        <span id="errorMsg"></span>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="{{ URL::asset('js/record.js') }}"></script>
</html>