


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <script src="https://kit.fontawesome.com/c931ac6251.js" crossorigin="anonymous"></script>
    <title>miz's portfolio</title>
    <link rel="stylesheet" href="style-v2.css">
</head>
<body>
    <nav id="nav-placeholder"></nav>

    <div class="scrollable">
    <div class="content">
        <div id="sidebar-placeholder"></div>
        <div class="mainbar">
            <div class="introduction"> 
                <img src="images/Miz-bgless.png" alt="Profile picture"> 
                <h1>Welcome to My Portfolio! ✨</h1>
                <p class="descriptionText">Hey, I'm miz and welcome to my art portfolio! <br>
                Here you'll find my artwork. Feel free to browse and enjoy!</p>
                <hr>
            </div>
            <div class="featuredArtwork">
                <h3>featured artwork ✨</h3> 
                <div class="artwork">
                <?php
                $images = glob("images/artwork/*.{jpg,jpeg,png,webp}", GLOB_BRACE);

                shuffle($images);

                $random_images = array_slice($images, 0, 4);
                foreach ($random_images as $img) {
                    echo '<a target="_blank" href="#" onclick="test(this)">
                        <img src="'.$img.'" alt="galleryPhoto">
                        </a>';
                }
            ?>
                </div>
                <a class="viewAll" href="gallery.php">
                    <button class="button">
                        <span id="viewGalleryText">view all</span>
                    </button>
                </a>
            </div> 
            <br>
            <div class="footer" id="contactBottom">
                <p class="descriptionText">Send me a message via discord</p>
                <p class="descriptionText">@illumiii</p>
            </div>
        </div>
    </div>
    </div>
    <script src="nav.js"></script>
    <script src="sidebar.js"></script>
</body>
</html>