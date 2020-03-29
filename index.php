<?php 
    // data
    include 'components/buy_btn.php';
    $sData = json_decode(file_get_contents("data.json"), true);

    // component
    include 'components/_frame.php';
    include 'components/_head.php';
    include 'components/_footer.php';
    
    // sections
    include 'components/section/landing.php';
    include 'components/section/cine_suntem.php';
    include 'components/section/cum_functioneaza.php'; 
    include 'components/section/precomanda.php';
    include 'components/section/calculator_pierdere_sosete.php';
?>

<head>
    <?= cssHead() ?>
</head>
<body>

    <?= head(); ?>
    <?= sectionLanding(); ?>
    <?= sectionCumFunctioneaza(); ?>
    <?= calculatorPierdereSosete() ?>
    <?= precomanda() ?>
    <?= sectionCineSuntem($sData['text']['cineSuntem']); ?>

    <?= footer($sData); ?>

    <script src='scripts/calculator.js'></script>
</body>
