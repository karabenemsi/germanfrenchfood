
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GermanFrenchFood</title>
    <link rel="stylesheet" href="<?php echo '//' . $_SERVER['HTTP_HOST'] . '/css/main.css';?>">

</head>
<body>
  <header <?php if(HOME_SITE){echo 'class="home"';}?> id="js_header">
    <div class="menu" id="menu">
      <div class="background"></div>
      <div class="nav-button" id="button">
        <div class="ham"></div>
      </div>
      <nav> 
        <ul>
          <li><a href="./index.php">Home</a></li>
        </ul>
        <ul>
          <li><a href="./about.php">About Us</a></li>
        </ul>
        <ul>
          <li><a href="">Download Menu</a></li>
        </ul>
        <ul>
          <li><a href="./dish_overview.php?category=french">French Menu</a></li>
        </ul>
        <ul>
          <li><a href="./dish_overview.php?category=german">German Menu</a></li>
        </ul>
        <ul>
          <li><a href="./locations.php">Locations</a></li>
        </ul>
      </nav>
    </div>


    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="600" height="600" viewBox="0 0 600 600">
        <g>
          <path id="Pfad_11" data-name="Pfad 11" d="M0,0H600V200H200Z"/>
          <path id="Pfad_10" data-name="Pfad 10" d="M0,0H400V200H200Z" transform="translate(200 200)" fill="red"/>
          <path id="Pfad_9" data-name="Pfad 9" d="M0,0H200V200Z" transform="translate(400 400)" fill="#fc0"/>
          <path id="Pfad_6" data-name="Pfad 6" d="M0,0,200,200V600H0Z" fill="#0055a4"/>
          <path id="Pfad_7" data-name="Pfad 7" d="M0,0,200,200V400H0Z" transform="translate(200 200)" fill="#fff"/>
          <path id="Pfad_8" data-name="Pfad 8" d="M0,0,200,200H0Z" transform="translate(400 400)" fill="#ef4531"/>
          <g id="Hat" transform="translate(-25 -33.695)">
          <path id="Pfad_2" data-name="Pfad 2" d="M355.882,707.424,573.664,708.7l.194-144.423S705.517,571.154,706,444.979,564.823,331.651,564.823,331.651s7.409-102.227-99.535-102.952S361.529,331.651,361.529,331.651,226.041,304.021,226,444.979,355.882,564.272,355.882,564.272Z" transform="translate(-141 -135)" fill="#fff" stroke="#000" stroke-width="10"/>
          <path id="Pfad_3" data-name="Pfad 3" d="M346,445s17.88,73.029,101.117,73.029S548.235,445,548.235,445" transform="translate(-124.952 -93.995)" fill="#fff" stroke="#000" stroke-linecap="round" stroke-width="10"/>
          <path id="Pfad_4" data-name="Pfad 4" d="M535.941,512.339C505.207,512.613,491,491.065,491,491.065" transform="translate(-106.545 -83.481)" fill="#fff" stroke="#000" stroke-linecap="round" stroke-width="10"/>
          <path id="Pfad_5" data-name="Pfad 5" d="M341,512.471C365.78,511.534,380.323,490,380.323,490" transform="translate(-126.057 -83.638)" fill="#fff" stroke="#000" stroke-linecap="round" stroke-width="10"/>
          <line id="Linie_1" data-name="Linie 1" x2="213.47" transform="translate(215.429 533.175)" fill="none" stroke="#000" stroke-width="10"/>
          </g>
        </g>
      </svg>
    </div>
        <div class="logo-text">
          German French Food
        </div>
  </header>