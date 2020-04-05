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

    $pageName = 'landing';
?>

<head>
    <title><?= $sData['siteName'] . ' ' . $sData[$pageName]['metaTitle']; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $sData[$pageName]['description']; ?>">
    <meta name="keywords" content="<?= implode(",", $sData[$pageName]['keywords']); ?>">
    <meta name="author" content="<?= $sData['contact']['name'] ;?>">

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
