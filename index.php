<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>TECNOPTICON</title>
    <link href="app.css?v=1" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <div id="instructions">
        <img id="logo" src="logo.png" />
        <div class="small">PRESS BUTTON FOR 3 SEC COUNTDOWN</div>
        <div>TechNopTiCon</div>
        <div id="all-url">#Launch2015 #CODAME #gif</div>
      </div>
      <div id="message">
        <div id="message-inner">
          <div id="message-text"></div>
        </div>
      </div>
      <div id="progress"></div>
      <div id="video-container">
        <button id="record-button"></button>
        <div id="indicator">
          <svg height="40" width="40">
            <circle cx="20" cy="20" r="20" fill="#d900f9" />
          </svg>
        </div>
      </div>
    </div>
    <output id="gifs-go-here"></output>
    <canvas id="gif-canvas"></canvas>
    <img id="gif-logo" src="gif-logo.png" />

    <script src="./js/camerafx/vendor/three.min.js"></script>
    <script src="./js/camerafx/vendor/CopyShader.js"></script>
    <script src="./js/camerafx/vendor/MaskPass.js"></script>
    <script src="./js/camerafx/vendor/EffectComposer.js"></script>
    <script src="./js/camerafx/vendor/RenderPass.js"></script>
    <script src="./js/camerafx/vendor/ShaderPass.js"></script>
    <script src="./js/camerafx/camerafx.js"></script>

    <script src="js/vendor/jquery-1.11.0.min.js"></script>
    <script src="js/vendor/gif.js"></script>
    <script src="js/vendor/parse.js"></script>
    <script src="js/app.js?v=1"></script>
  </body>
</html>
