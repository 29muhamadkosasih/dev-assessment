<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .wrapper {
        position: relative;
        width: 400px;
        height: 200px;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .signature-pad {
        position: absolute;
        left: 0;
        top: 0;
        width: 400px;
        height: 200px;
        background-color: white;
    }
</style>

<body>

    <div class="wrapper">
        <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
    </div>

    <button id="save-png">Save as PNG</button>
    <button id="save-jpeg">Save as JPEG</button>
    <button id="save-svg">Save as SVG</button>
    <button id="draw">Draw</button>
    <button id="erase">Erase</button>
    <button id="undo">Undo</button>
    <button id="clear">Clear</button>
</body>
<script>
    var canvas = document.getElementById('signature-pad');

    // Adjust canvas coordinate space taking into account pixel ratio,
    // to make it look crisp on mobile devices.
    // This also causes canvas to be cleared.
    function resizeCanvas() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio = Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
    }

    window.onresize = resizeCanvas;
    resizeCanvas();

    var signaturePad = new SignaturePad(canvas, {
    backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
    });

    document.getElementById('save-png').addEventListener('click', function () {
    if (signaturePad.isEmpty()) {
    return alert("Please provide a signature first.");
    }

    var data = signaturePad.toDataURL('image/png');
    console.log(data);
    window.open(data);
    });

    document.getElementById('save-jpeg').addEventListener('click', function () {
    if (signaturePad.isEmpty()) {
    return alert("Please provide a signature first.");
    }

    var data = signaturePad.toDataURL('image/jpeg');
    console.log(data);
    window.open(data);
    });

    document.getElementById('save-svg').addEventListener('click', function () {
    if (signaturePad.isEmpty()) {
    return alert("Please provide a signature first.");
    }

    var data = signaturePad.toDataURL('image/svg+xml');
    console.log(data);
    console.log(atob(data.split(',')[1]));
    window.open(data);
    });

    document.getElementById('clear').addEventListener('click', function () {
    signaturePad.clear();
    });

    document.getElementById('draw').addEventListener('click', function () {
    signaturePad.compositeOperation = 'source-over'; // default value
    });

    document.getElementById('erase').addEventListener('click', function () {
    signaturePad.compositeOperation = 'destination-out';
    });

    document.getElementById('undo').addEventListener('click', function () {
    var data = signaturePad.toData();
    if (data) {
    data.pop(); // remove the last dot or line
    signaturePad.fromData(data);
    }
    });
</script>

</html>