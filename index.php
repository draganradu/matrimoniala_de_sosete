<?php 
    // component
    include 'components/_frame.php';
    include 'components/_head.php';
    include 'components/_footer.php';

    // sections
    include 'components/section/landing.php';
    include 'components/section/cine_suntem.php';
    include 'components/section/cum_functioneaza.php';
    include 'components/section/modelul_standard.php';

    // data
    include 'components/buy_btn.php';
    $string = json_decode(file_get_contents("data.json"), true);
   
?>

<head>

<?= cssHead() ?>

</head>
<body>

<?= head($string['siteName']); ?>
<?= sectionLanding($string['siteName'], $string['catchline'], $string['logo']['100']); ?>

<?= sectionCumFunctioneaza(); ?>
<?= modelulStandard() ?>
<?= sectionCineSuntem($string['text']['cineSuntem']); ?>

<?= footer($string); ?>

</body>
