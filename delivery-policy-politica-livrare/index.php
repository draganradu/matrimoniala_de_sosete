<?php 
    // component
    include '../components/_frame.php';
    include '../components/_head.php';
    include '../components/_footer.php';

    // sections
    include '../components/section/contact_sidebar.php';
    // include '../components/section/landing.php';
    // include '../components/section/cine_suntem.php';
    // include '../components/section/cum_functioneaza.php';
    // include '../components/section/modelul_standard.php';

    // data
    include '../components/buy_btn.php';
    $sData = json_decode(file_get_contents("../data.json"), true);
    $pageName = 'delivery';
   
?>

<head>
    <title><?= $sData['siteName'] . ' ' . $sData[$pageName]['metaTitle'] ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $sData[$pageName]['description']; ?>">
    <meta name="keywords" content="<?= implode(",", $sData[$pageName]['keywords']); ?>">
    <meta name="author" content="<?= $sData['contact']['name'] ;?>">
    
    <?= cssHead() ?>
</head>
<body>

<?= head(); ?>

<div class='container-fluid'>
    <div id='landing' class='section row'>
    </div>
</div>   

<div class='container'>
    <div id='page-politica-retur' class='section row'>
        <div class='col-xl-8 col-lg-9 col-md-8 text-left'>     
            <h1>Livrarea comenzilor</h1>
            <hr>
            <p>Livrare produselor se face prin curier sau Posta Romana. In functie de marimea coletului, destinatarul poate opta pentru ori care din cele 2 moduri de livrare.
            <br><br>
            Livrarea este gratuita doar in cazul coletelor speciale, in cazul acestora destinatarul v-a fi instintat in prealabil de acest lucru. In ori ce alt caz destinatarul v-a suporta costul de transport.
            <br><br>
            Livrare planificata abonamentului.
            <br><br>
            Daca produsul se incadreaza in marimea unui plic A4 acesta v-a fi expediat prin posta romana ca plic, destinatarul poate solicita ori ce alta metoda de livrare contra cost.
            <br><br>
            Livrare speciala.<br>
            In cazuri exceptionale, livrarea poate fi efectuata de catre personalul companiei, utilizator v-a fi notificat de aceasta in prealabil.    
            <br><br>
            Ridicare din showroom
            Ridicarea de la sediul nostru este indisponibila momentan pentru persoane fizice.
            <br><br>
            La receptionarea/ridicarea comenzilor achitate este obligatorie prezentarea unor documente de identitate:
            <br><br>
Modificare sau anulare comanda
<br><br>
Posibilitatea anularii unei comenzi sau livrari este disponibila in contul tau de client sau contactundane telefonic, in acest caz pentru ori ce modificare telefonica o sa fiti instintati prin email.

</p>

        </div>
        <div class="col-xl-1 d-xl-block d-lg-none d-md-none"></div>
        <div class="col-lg-3 col-md-4">
        <?= contact_sidebar() ?>
        </div>
    </div>
</div> 


<?= footer($sData); ?>
</body>