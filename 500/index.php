<?php 
    header('500 Internal Server Error');

    // component
    include '../components/_frame.php';
    include '../components/_head.php';
    include '../components/_footer.php';

    // sections
    include '../components/section/contact_sidebar.php';

    // data
    include '../components/buy_btn.php';
    $sData = json_decode(file_get_contents("../data.json"), true);
    $pageName = '500';
   
?>

<!DOCTYPE html>
<html lang="<?= $sData['lang']; ?>">
<head>
    <title><?= $sData['siteName'] . ' ' . $sData[$pageName]['metaTitle'] ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $sData[$pageName]['description']; ?>">
    <meta name="keywords" content="<?= implode(",", $sData[$pageName]['keywords']); ?>">
    <meta name="author" content="<?= $sData['contact']['name'] ;?>">
    <?= canonicalUrl(basename(__DIR__)) ?>
    <?= cssHead() ?>
    <?= googleAnalitycs() ?>
</head>
<body>

<?= head(); ?>

<div class='container-fluid'>
    <div id='landing' class='section row'>
    </div>
</div>   

<div class='container'>
    <div id='page-politica-retur' class='section row'>
        <div class='col-xl-12 text-left'>     
            <h1><?= $sData[$pageName]['metaTitle'] ?></h1>
            <hr>
            <p><?= $sData[$pageName]['text'] ?></p>
        </div>
    </div>
</div> 


<?= footer($sData); ?>
</body>
</html>