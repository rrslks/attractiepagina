<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

<div class="filter-bar">
    <select>
      <option value="all">Alle attracties</option>
      <option value="adventure">Avontuur</option>
      <option value="family">Familie</option>
      <option value="thrill">Sensatie</option>
    </select>
    <input type="text" placeholder="Zoek attracties...">
  </div>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <h2>Alle attracties!</h2>
        <main>
            <!-- hier komen de attractiekaartjes -->
        </main>
    </div>

    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Reuzenrad</h1>
                <p>Bekijk het park van grote hoogte met het hele gezin.</p>
                <p>Minimaale lengte: 120 cm</p>
            </div>
        </div>
    </div>
    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/alex-kalinin-6gYjwD4s9xk-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Caroussel</h1>
                <p>Voor kleine kindjes: Maak een rondje in de antieke draaimolen.</p>
                <p>Minimaale lengte: cm</p>
            </div>
        </div>
    </div>
    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/david-murcia-HbYniDwjbVE-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Thunderbolt</h1>
                <p>Adrenaline, gegarandeerd.</p>
                <p>Minimaale lengte: 140 cm lengte</p>
            </div>
        </div>
    </div>
    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Reuzenrad</h1>
                <p>Bekijk het park van grote hoogte met het hele gezin.</p>
                <p>minimaal 120 cm lengte</p>
            </div>
        </div>
    </div>
    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Reuzenrad</h1>
                <p>Bekijk het park van grote hoogte met het hele gezin.</p>
                <p>minimaal 120 cm lengte</p>
            </div>
        </div>
    </div>
    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Reuzenrad</h1>
                <p>Bekijk het park van grote hoogte met het hele gezin.</p>
                <p>minimaal 120 cm lengte</p>
            </div>
        </div>
    </div>
    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Reuzenrad</h1>
                <p>Bekijk het park van grote hoogte met het hele gezin.</p>
                <p>minimaal 120 cm lengte</p>
            </div>
        </div>
    </div>
    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Reuzenrad</h1>
                <p>Bekijk het park van grote hoogte met het hele gezin.</p>
                <p>minimaal 120 cm lengte</p>
            </div>
        </div>
    </div>
    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Reuzenrad</h1>
                <p>Bekijk het park van grote hoogte met het hele gezin.</p>
                <p>minimaal 120 cm lengte</p>
            </div>
        </div>
    </div>
    <div class="attracties">
        <div class="attractie">
            <div class="img" style="background-image: url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg')"></div>
            <div class="attractieinfo">
                <h1>Reuzenrad</h1>
                <p>Bekijk het park van grote hoogte met het hele gezin.</p>
                <p>minimaal 120 cm lengte</p>
            </div>
        </div>
    </div>

</body>

</html>
