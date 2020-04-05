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
    $pageName = 'retur';
   
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
            <h1>Termeni si conditii pentru returnarea produselor</h1>
            <hr>
            <p>In majoritatea cazurilor in care se solicita returnarea produselor, aceasta se datoreaza asteptari diferite a cumparatorului fata de produsul livrat de catre noi.<br>
            Ne pare sincer rau de acest lucru, va rugam ca inainte de a incepe procedurile de returnare, sa aveti o convorbire cu unul din colegii nostri pentru a vedea daca aceasta este decizia corecta pentru situatia cu care va confruntati. 
            Te rugam sa ne suni la <b><?= $sData['contact']['tel'] ?></b>.
            <br>
            <br>
            Produsele achizitionate online se pot returna conform Ordonantei de Urgenta nr. 34 din 2014. Consumatorul (tu) are dreptul sa notifice in scris comerciantului ca renunta la cumparare, fara penalitati si fara invocarea unui motiv, in termen de 14 zile calendaristice de la intrarea in posesie fizica a produsului (data la care ati primit produsul de la curier/ data la care acesta a fost livrat de factorul postal).
            <br>
            Produsul returnat trebuie sa fie in aceeasi stare in care a fost livrat, in cazul sosetelor asta inseamna nepurtate.
            <br>
            Cheltuielile de returnare sunt suportate de consumator. Iar rambursarea contravalorii produsului se va face in 14 zile de la receptia produsului.
            <br>
In cazul returnarii produselor conform Ordonantei de Urgenta 34 din 2014, din suma de rambursat se vor retine taxele de transport.
<br>
Daca produsul este returnat intr-o stare in care nu mai poate fi vandut din cauza deteriorarii (pete, rupturi, purtare) ne rezervam dreptul de a solicita o taxa intre 10% si 100% pentru a acoperi diferenta de pret rezultata din vanzarea produsului ca second-hand. In cazul in care gradul de deteriorare duce la imposibilitatea utilizarii produsului nu vom accepta returnarea produsului.
<br>
Incheierea contractului are loc in momentul emiterii mailului automat de primire a acestei comenzi de catre procesatorul de plati.
<br>
Ne rezervam dreptul de a refuza returul in situatia unor practici abuzive, de solicitari repetate de retur.
<br>
Puteti solicita returul de produse si pentru urmatoarele situatii:
<br>
Pentru produsele ale caror colete prezinta deteriorari vizibile la primirea prin curier, va recomandam sa refuzati receptia lor si sa solicitati curierului completarea unui proces verbal in care veti mentiona motivul refuzului (colet deteriorat). In cazul sosetelor nu credem ca deterioarea poate aparea din cauza lovirii, soetele nefiind fragile dar lichidele pot deteriora usor pachetul asa ca va rugam refuzati ori ce pachet ce pare sa fi intrat in contact cu ori ce fel de lichide pe parcursul procesului de livrare.
<br><br>
<b>Produse livrate gresit</b><br>
Daca vi s-a livrat un alt produs, sau alta marime de produs, decat cel comandat va rugam sa semnalati cat mai curand acest lucru pentru a returna produsul si a fi inlocuit cu cel corect. Toate costurile de retur si transport al produsului corect vor fi suportate de noi.
</b><br><br>
<b>Returnarea produselor peste perioada de 14 zile</b>
<br>
Cererile de retur ce depasesc perioada de 14 zile calendaristice se vor trimite doar pe e-mail, la adresa retur@matrimonialadesosete.ro Cererile vor fi analizate de catre iar termenul de raspuns este de 72 de ore lucratoare. In cazul in care o cerere peste perioada de retur va fi acceptata, ea va contine automat o penalizare la valoarea produsului situata intre 15% si 100%.
<br>
In cazul in care produsul achizitionat a fost livrat cu vicii de fabricatie, rupturi, pete, etc. Acesta va fi inlocuit cu un produs functional, cu conditia notificarii in scris pe adresa de mail: retur@matrimonialadesosete.ro in termen de 48 de ore de la primirea produsului.
<br><br>
<b>Returnarea contravalorii</b><br>

Termenul de returnare al banilor, pentru cererile aprobate, este de 14 de zile calendaristice de la data aprobarii returului.
<br>
In cazul in care a fost aprobata cererea de retur si clientul doreste restituirea sumei de bani, suma va fi transferata in contul bancar indicat de catre client in cererea de retur, in termen de 14 zile de la aprobare, aceasta plata reprezentand contravaloarea produsului asa cum a fost ea inscrisa in documentul fiscal ce probeaza achizitia.
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