<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Gallery</title>
    <link rel="stylesheet" href="gallery.css">
</head>

<div class="artwork">
            <h2><center> Art Works of some artists </center></h2>
            <p> <center> Meet the Artists "Behind every artwork is a story, a passion, and a soul. Get to know the talented artists whose visions bring our gallery to life." </center></p>
        </div>
    </section>

    
        <section>
        <div class="gallery">
            <a target="_blank" href="img_5terre.jpg">
              <img src="images/coloreye.jpg" width="600" height="400">
            </a>
            <div class="desc">Artist: Chitra Bannerji</div>
            <center><button onclick="myFunction()">299.99</button> </center>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="images/waterlife.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Artist: Anushka Sharma</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="img_lights.jpg">
              <img src="images/eyekiss.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Artist: Ray Mathav</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/murlikrishna.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Murlidhar Das</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div> 

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/krishnaradha.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Priya Darshan</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/lilrk.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Kavya Mehta</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/lonelygirl.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Drishti Rupareliya</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/natraj.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Dhawani Shekhavat</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/dreamygirl.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Ananya Pandey</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/rain.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Alina Gomez</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/sideeye.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Prachi Verma</div>
            <center><button onclick="myFunction()">399.99</button> </center>
          </div>

    </section>
</div>

    <script>
function myFunction() {
  alert("Added to cart");
}
</script>