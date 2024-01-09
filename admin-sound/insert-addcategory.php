<?php 
include("config.php");

if(isset($_POST['addcat'])){
    $cat_genre = $_POST['cat-genre'];
    $cat_year = $_POST['cat-year'];
    $cat_artist = $_POST['cat-artist'];
    $cat_album = $_POST['cat-album'];

    if(!empty($cat_genre) AND !empty($cat_year) AND !empty($cat_artist) AND !empty($cat_album)){

        $insert_cat = "INSERT INTO `categories` (`c_id`, `c_genre`, `c_year`, `c_artist`, `c_album`) 
        VALUES (NULL, '$cat_genre', '$cat_year', '$cat_artist', '$cat_album')";

        $cat_result = mysqli_query($connection, $insert_cat);
        if($cat_result){
            echo "<script> 
            alert('Category added successfully');
            window.location.href='admin-category.php'
            </script>";
            `<div class="alert alert-warning alert-dismissible fade show">
            <strong>Congrates</strong> Product Add in DataBase
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`;
        }
    }
}
?>