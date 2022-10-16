<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tubeness</title>
</head>

<body class="bg-sky-200">
    <section class="flex flex-row w-full justify-evenly">
        <img class="" width="700" height="400" src="LOGO.png" alt="LOGO">
    </section>

    <?php
require_once 'VideoYouTube.php';
require_once 'VideoVimeo.php';

$videoYT = new VideoYouTube('https://www.youtube.com/embed/NszcvRBri5U', 'I WENT TO THE JEFFREY DAHMER HOTEL (HAUNTED!! Slept In His Room!!)');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/5KgRmG3CfCc', 'Dunk on Me for $5000 vs The Hood');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/Rlh1MTD9Z_Q', 'Central Cee Goes Jewelry Shopping At Icebox!');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/ZVA_TdxFEy4', 'Playboi Carti "wokeuplikethis*" Official Lyrics & Meaning | Verified');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/UmvQdCZOqiI', 'BruceDropEmOff Reacts to Levi vs Kenny (Attack on Titan)');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/ElVShISbYS4', '10 Things Lil Baby Cant Live Without | GQ');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/lOpQmPbLLWM', 'Young Thug & Lil Baby at Icebox Together for the First Time!!');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/wgOroKRc8F4', 'Lil Yachty Goes Shopping for Sneakers at Kick Game');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/RPnQbKgotOw', 'O Block');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/ZxtXNfPH-Ac', 'Yeat Interview');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/FJFgIUYBDO4', 'Yeat Pulls Up to Icebox with Ken Carson, Destroy Lonely & SeptembersRich!');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/MgLhuzz09_Q', 'Making A Song With NLE CHOPPA!');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/UpsH40uid1M', 'LIL BABY FUNNIEST MOMENTS🤣');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/nr0AgeNYkEc', 'SIDEMEN HIDE & SEEK IN THE $300,000,000 ROYAL ALBERT HALL');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('https://www.youtube.com/embed/FjZjQaU76Ag', 'Lil Baby Drops ALL His Cash at Icebox Before Moving to the Metaverse!');
echo $videoYT->getEmbedHtml();


$videoV = new Vimeo('https://vimeo.com/684031096', 'yeat turban.mp4');
echo $videoV->getEmbedHtml();
$videoV = new Vimeo('https://vimeo.com/133838360', 'VARO 3 - ALLE KILLS AUS DER ERSTEN FOLGE');
echo $videoV->getEmbedHtml();
$videoV = new Vimeo('https://vimeo.com/476637522', 'Money Man - 24 (Official Video) (feat. Lil Baby)');
echo $videoV->getEmbedHtml();
$videoV = new Vimeo('https://vimeo.com/477461567', 'LIL+BABY+_+FUNK+FLEX+_+#Freestyle147');
echo $videoV->getEmbedHtml();
$videoV = new Vimeo('https://vimeo.com/686596132', 'Kanye West feat Lil Baby & The Weeknd - Hurricane');
echo $videoV->getEmbedHtml();
?>


   
    <!--
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/NszcvRBri5U"
            title="I WENT TO THE JEFFREY DAHMER HOTEL (HAUNTED!! Slept In His Room!!)" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </section>
    <br>
    <p class="text-center text-xl font-bold">I WENT TO THE JEFFREY DAHMER HOTEL (HAUNTED!! Slept In His Room!!)</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/5KgRmG3CfCc"
            title="Dunk on Me for $5000 vs The Hood" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Dunk on Me for $5000 vs The Hood</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/Rlh1MTD9Z_Q"
            title="Central Cee Goes Jewelry Shopping At Icebox!" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Central Cee Goes Jewelry Shopping At Icebox!</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/ZVA_TdxFEy4"
            title="Playboi Carti 'wokeuplikethis*' Official Lyrics & Meaning | Verified" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Playboi Carti 'wokeuplikethis*' Official Lyrics & Meaning | Verified</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/UmvQdCZOqiI"
            title="BruceDropEmOff Reacts to Levi vs Kenny (Attack on Titan)" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">BruceDropEmOff Reacts to Levi vs Kenny (Attack on Titan)</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/ElVShISbYS4"
            title="10 Things Lil Baby Can't Live Without | GQ" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">10 Things Lil Baby Can't Live Without | GQ</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/lOpQmPbLLWM"
            title="Young Thug & Lil Baby at Icebox Together for the First Time!!" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Young Thug & Lil Baby at Icebox Together for the First Time!!</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/wgOroKRc8F4"
            title="Lil Yachty Goes Shopping for Sneakers at Kick Game" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Lil Yachty Goes Shopping for Sneakers at Kick Game</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/RPnQbKgotOw" title="O Block" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">O Block</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/ZxtXNfPH-Ac" title="Yeat Interview"
            frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Yeat Interview</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/FJFgIUYBDO4"
            title="Yeat Pulls Up to Icebox with Ken Carson, Destroy Lonely & SeptembersRich!" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Yeat Pulls Up to Icebox with Ken Carson, Destroy Lonely & SeptembersRich!
    </p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/MgLhuzz09_Q"
            title="Making A Song With NLE CHOPPA!" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Making A Song With NLE CHOPPA!</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/JyoYv2NZL9A"
            title="LIL BABY FUNNIEST MOMENTS" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">LIL BABY FUNNIEST MOMENTS🤣</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/UpsH40uid1M"
            title="NERF WAR IN TARGET (WE GOT KICKED OUT!!!)" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">NERF WAR IN TARGET (WE GOT KICKED OUT!!!)</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/nr0AgeNYkEc"
            title="SIDEMEN HIDE & SEEK IN THE $300,000,000 ROYAL ALBERT HALL" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">SIDEMEN HIDE & SEEK IN THE $300,000,000 ROYAL ALBERT HALL</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/ZQgwarjuA2Y"
            title="Pop Smoke 'Welcome To The Party' Official Lyrics & Meaning | Verified" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Pop Smoke 'Welcome To The Party' Official Lyrics & Meaning | Verified</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/FjZjQaU76Ag"
            title="Lil Baby Drops ALL His Cash at Icebox Before Moving to the Metaverse!" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Lil Baby Drops ALL His Cash at Icebox Before Moving to the Metaverse!</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/rgCMNeitkZo"
            title="Pop Smoke Goes Sneaker Shopping With Complex" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">Pop Smoke Goes Sneaker Shopping With Complex</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/nLOA2fn7ERo"
            title="24 Hours With Lil Uzi Vert | Vogue" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">24 Hours With Lil Uzi Vert | Vogue</p>
    <br>
    <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/9m4xUu3NrLA"
            title="The World’s Most Expensive Blunt Costs $50k | MOST EXPENSIVEST" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">The World’s Most Expensive Blunt Costs $50k | MOST EXPENSIVEST</p>
    <br>
        -->

</body>

</html>