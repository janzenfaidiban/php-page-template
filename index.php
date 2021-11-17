<?php

    // header
    include('partials/header.php');

    // navigation
    include('partials/nav.php');
    
    // pages
    
    if(isset($_GET['page']) && $_GET['page'] == 'home') {
        include('home.php');
    } 
    
    elseif(isset($_GET['page']) && $_GET['page'] == 'profile') {
        include('profile.php');
    } 

    elseif(isset($_GET['page']) && $_GET['page'] == 'gallery') {
        include('gallery.php');
    } 

    elseif(isset($_GET['page']) && $_GET['page'] == 'shop') {
        include('shop.php');
    }

    elseif(isset($_GET['page']) && $_GET['page'] == 'contact') {
        include('contact.php');
    }
    
    
    else {
        echo "<p style='color:red;'>Page not found!</p>";
    }
    
    // footer
    include('partials/footer.php');    

?>

