<?php $auth =0;  ?>
<?php include ("lib/includes.php")?>
<?php include("partials/header.php"); ?>
<br><br><br><br>
<h1 class="text-center text-white  bg-info border p-2 ">Bienvenue dans mon blog </h1>
<main>
       
        <div id="slider">

            <img src="https://picsum.photos/600/400?random=1" class="w-90" alt="imageSlider" id="slide">
            <div id="precedent" onclick="ChangeSlide(-1)">
                <i class="fa-solid fa-circle-chevron-left"></i>
            </div>
            <div id="suivant" onclick="ChangeSlide(1)">
                <i class="fa-solid fa-circle-chevron-right"></i>
            </div>
        </div>
    </main>


<!-- <?php include("lib/debug.php"); ?> -->
<?php include("partials/footer.php"); ?>