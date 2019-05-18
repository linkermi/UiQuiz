<div id="aaa" style="z-index: 4;opacity: 0.5;position: absolute"> 

<?php
$avatars=Core::$view->avatars;
?>
<form id="loginForm" method="post" action="?task=registrieren" data-ajax="false">
	<div class="ui-field-contain">
            <input id="vorname" placeholder="Vorname" name="vorname" />
            <input id="nachname" placeholder="Nachname" name="nachname" />
		<input id="kennung" placeholder="Kennung/Mail" name="kennung" />
                <input id="nickname" placeholder="Nickname" name="nickname" />
		<input id="passwort" placeholder="Kennwort" name="passwort" type="password" />
                <input id="passwort2" placeholder="Kennwort wiederholen" name="passwort2" type="password" />
		 <?php  Help::htmlImageRadioGroup($avatars,array( "label"=>"Avatar","name"=>"avatar", "key"=>"myval"))?>
       <button type="submit" name="login" id="login" value="1">anmelden</button>
	</div>
</form>
</div>

<div style="width: 100%;height: 100%;position: absolute;margin-left: 0px;margin-top: 0px">

<script>
    
function setup() {
  createCanvas(710, 400);
  pixelDensity(1);
  noLoop();
}

function draw() {
  background(0);

  // Establish a range of values on the complex plane
  // A different range will allow us to "zoom" in or out on the fractal

  // It all starts with the width, try higher or lower values
  const w = 4;
  const h = (w * height) / width;

  // Start at negative half the width and height
  const xmin = -w/2;
  const ymin = -h/2;

  // Make sure we can write to the pixels[] array.
  // Only need to do this once since we don't do any other drawing.
  loadPixels();

  // Maximum number of iterations for each point on the complex plane
  const maxiterations = 100;

  // x goes from xmin to xmax
  const xmax = xmin + w;
  // y goes from ymin to ymax
  const ymax = ymin + h;

  // Calculate amount we increment x,y for each pixel
  const dx = (xmax - xmin) / (width);
  const dy = (ymax - ymin) / (height);

  // Start y
  let y = ymin;
  for (let j = 0; j < height; j++) {
    // Start x
    let x = xmin;
    for (let i = 0; i < width; i++) {

      // Now we test, as we iterate z = z^2 + cm does z tend towards infinity?
      let a = x;
      let b = y;
      let n = 0;
      while (n < maxiterations) {
        const aa = a * a;
        const bb = b * b;
        const twoab = 2.0 * a * b;
        a = aa - bb + x;
        b = twoab + y;
        // Infinty in our finite world is simple, let's just consider it 16
        if (dist(aa, bb, 0, 0) > 16) {
          break;  // Bail
        }
        n++;
      }

      // We color each pixel based on how long it takes to get to infinity
      // If we never got there, let's pick the color black
      const pix = (i+j*width)*4;
      const norm = map(n, 0, maxiterations, 0, 1);
      let bright = map(sqrt(norm), 0, 1, 0, 255);
      if (n == maxiterations) {
        bright = 0;
      } else {
        // Gosh, we could make fancy colors here if we wanted
        pixels[pix + 0] = bright;
        pixels[pix + 1] = bright;
        pixels[pix + 2] = bright;
        pixels[pix + 3] = 255;
      }
      x += dx;
    }
    y += dy;
  }
  updatePixels();
}


</script>

<div>