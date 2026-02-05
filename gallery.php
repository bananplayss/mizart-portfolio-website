


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

    <br>
    <h1 style="color: rgb(128, 121, 161);" class="myArtSection">Gallery</h1>
    <div class="gallery">
        <?php
        $images = glob("images/artwork/*.{jpg,jpeg,png,webp}", GLOB_BRACE);

        foreach ($images as $img) {
        echo '<a target="_blank" href="#" onclick="test(this)">
            <img src="'.$img.'" alt="galleryPhoto">
            </a>';
        }?>
    </div>
    <br>
    </div>
    <script src="gallery.js"></script>
    <script src="nav.js"></script>
</body>
</html>