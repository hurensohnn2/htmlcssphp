<link rel="stylesheet" href="galery.css">


<?php include "header.php";


$galleryPath = 'galeria/';

if (is_dir($galleryPath)) {
    $galleryDirs = array_filter(scandir($galleryPath), function ($item) use ($galleryPath) {
        return is_dir($galleryPath . $item) && !in_array($item, ['.', '..']);
    });

    if (!empty($galleryDirs)) {
        echo '<nav>';
        echo '<ul a class="galery">';
        
        foreach ($galleryDirs as $dir) {
            if(isset($_GET['part']) && $_GET['part'] == $dir){
                echo '<li a class="galery"><a class="galery selected" href="?part='.$dir.'">' . $dir . '</a></li>';
            }
            else{
                echo '<li a class="galery"><a class="galery" href="?part='.$dir.'">' . $dir . '</a></li>';
            }
            
        }
        echo '</ul>';
        echo '</nav>';

        if(isset($_GET["part"])){
            $part = $_GET["part"];
            $direct = "./galeria/".$part;
            $images = glob($direct . "/*");
            echo  '<div class="gallery">';
            foreach($images as $image)
            {

                echo '<div class="gallery-item">
                    <img src="'.$image.'" alt="Image 1">
                    </div>';

            }
            echo  '<div class="gallery">';
        }
    }
}

include "functions.php";
pocetobrazkov($images);


include "footer.php";
?>




