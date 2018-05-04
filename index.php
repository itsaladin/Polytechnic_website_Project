<?php  include 'head.php';?>
<body class="body">
<div class="container border bg-secondary text-muted">
    <?php include 'banner.php';?>
    <?php include 'nav.php';?>
    <?php
        if(($_GET['page'])){
            $page = $_GET['page'];
        }
        else{
            $page = '';
        }
        if($page === 'home') {
             include 'owl_carousel.php';
             include 'content.php';
        }
        elseif($page === 'about') {include 'about.php';}
        elseif($page === 'gallery') {include 'gallery.php';}
        elseif($page === 'civil') {include 'civil.php';}
        elseif($page === 'staff') {include 'staff.php';}
        elseif($page === 'studentlist') {include 'student.php';}
        elseif($page === 'notice') {include 'notice.php';}
        elseif($page === 'contact') {include 'contact.php';}
        elseif($page === 'portal') {include 'portal.php';}
        elseif($page === 'portal') {include 'portal.php';}
        else{
             include 'owl_carousel.php';
             include 'content.php';
        }

    ?>
    <?php include 'footer.php';?>
</div>
    <?php include 'script.php';?>
</body>