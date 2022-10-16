<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tubeness</title>
</head>

<body class="bg-sky-200">
    <section class="flex flex-row w-full justify-evenly">
        <img class="" width="700" height="400" src="./LOGO.png" alt="LOGO">
    </section>

    <?php
require_once 'VideoYouTube.php';
require_once 'VideoVimeo.php';

$videoYT = new VideoYouTube('NszcvRBri5U', 'I WENT TO THE JEFFREY DAHMER HOTEL (HAUNTED!! Slept In His Room!!)');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('5KgRmG3CfCc', 'Dunk on Me for $5000 vs The Hood');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('Rlh1MTD9Z_Q', 'Central Cee Goes Jewelry Shopping At Icebox!');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('ZVA_TdxFEy4', 'Playboi Carti "wokeuplikethis*" Official Lyrics & Meaning | Verified');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('UmvQdCZOqiI', 'BruceDropEmOff Reacts to Levi vs Kenny (Attack on Titan)');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('ElVShISbYS4', '10 Things Lil Baby Cant Live Without | GQ');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('lOpQmPbLLWM', 'Young Thug & Lil Baby at Icebox Together for the First Time!!');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('wgOroKRc8F4', 'Lil Yachty Goes Shopping for Sneakers at Kick Game');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('RPnQbKgotOw', 'O Block');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('ZxtXNfPH-Ac', 'Yeat Interview');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('FJFgIUYBDO4', 'Yeat Pulls Up to Icebox with Ken Carson, Destroy Lonely & SeptembersRich!');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('MgLhuzz09_Q', 'Making A Song With NLE CHOPPA!');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('UpsH40uid1M', 'LIL BABY FUNNIEST MOMENTS🤣');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('nr0AgeNYkEc', 'SIDEMEN HIDE & SEEK IN THE $300,000,000 ROYAL ALBERT HALL');
echo $videoYT->getEmbedHtml();
$videoYT = new VideoYouTube('FjZjQaU76Ag', 'Lil Baby Drops ALL His Cash at Icebox Before Moving to the Metaverse!');
echo $videoYT->getEmbedHtml();


$videoV = new Vimeo('684031096', 'yeat turban.mp4');
echo $videoV->getEmbedHtml();
$videoV = new Vimeo('133838360', 'VARO 3 - ALLE KILLS AUS DER ERSTEN FOLGE');
echo $videoV->getEmbedHtml();
$videoV = new Vimeo('476637522', 'Money Man - 24 (Official Video) (feat. Lil Baby)');
echo $videoV->getEmbedHtml();
$videoV = new Vimeo('477461567', 'LIL+BABY+_+FUNK+FLEX+_+#Freestyle147');
echo $videoV->getEmbedHtml();
$videoV = new Vimeo('686596132', 'Kanye West feat Lil Baby & The Weeknd - Hurricane');
echo $videoV->getEmbedHtml();
?>


   
    

</body>

</html>