<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Gallery</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <h1> <center>Welcome to Our Art Gallery </center> </h1>
        <p> <center>"Discover a world where creativity knows no bounds. Our collection showcases the beauty and diversity of artistic expression from around the globe."</p> </center>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="artist.php">Artists</a></li>
                <li><a href="review.php">Review Us</a></li>
              </ul>
        </nav>
    </header>
    
    <section id="home">
        <h2> <center> Discover the Art</h2> </center>
        <p> <center>Explore our collection of magnificent artworks from various artists around the world.
             Explore the Masterpieces "Dive into an enchanting journey through timeless art. From classical masterpieces to contemporary wonders, our gallery celebrates the brilliance of every brushstroke."
        </p> </center>
    </section>
    
    <section id="gallery">
        <h1> <center> Featured Artworks </center></h1>
        <p><center> Art for Everyone "Whether you're an art connoisseur or a curious explorer, our gallery offers something for everyone. Embrace the beauty, the emotion, and the inspiration that art provides."

            Experience the Magic "Step into a realm where art speaks to the heart. Our carefully curated exhibitions promise to leave you inspired and awestruck."</center></p>
        <div class="artwork">
            <h2><center> Art Works of some artists </center></h2>
            <p> <center> Meet the Artists "Behind every artwork is a story, a passion, and a soul. Get to know the talented artists whose visions bring our gallery to life." </center></p>
        </div>
    </section>

    
        <section>
        <div class="gallery">
            <a target="_blank" href="img_5terre.jpg">
              <img src="images/download.jpeg" width="600" height="400">
            </a>
            <div class="desc">Artist: Nila Sangani</div>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="images/download2.jpeg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Artist: Piya Tank</div>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="img_lights.jpg">
              <img src="images/download3.jpeg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Artist: Ray Mathav</div>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/d4.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Yash Solanki</div>
          </div> 

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/d5.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Nupur Rathod</div>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/d7c51bf3-e117-4561-b71b-f613f965f648.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Navin Desai</div>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/9073a61c-eb17-4663-8306-966ba468c2d6.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Het Makvana</div>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/horizontal.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Diya Vyas</div>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/hope.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Drishti Rupareliya</div>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/krishna.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Kunal Mehta</div>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/pichwai.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Rajesh Waghle</div>
          </div>

          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="images/girl.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Artist: Jethalal Gada</div>
          </div>

    </section>
    
    <footer>
        <p> <center>Stay Connected "Join our community of art lovers. 
            Stay updated with the latest exhibitions, events, and art news by subscribing to our newsletter."
        </center> </p>
       <center> <p>&copy; 2025 Art Gallery. All rights reserved.</center></p>
    </footer>
</body>
</html>
