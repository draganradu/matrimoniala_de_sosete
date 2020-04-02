<?php 
    // component
    include '../components/_frame.php';
    include '../components/_head.php';
    include '../components/_footer.php';

    // sections
    // include '../components/section/landing.php';
    // include '../components/section/cine_suntem.php';
    // include '../components/section/cum_functioneaza.php';
    // include '../components/section/modelul_standard.php';

    // data
    include '../components/buy_btn.php';
    $sData = json_decode(file_get_contents("../data.json"), true);
   
?>

<head>
<title><?= $sData['siteName'] . ' ' . $sData['sosetaStandard']['metaTitle'] ?></title>
<?= cssHead() ?>

</head>
<body>

<?= head(); ?>

<div class='container-fluid'>
    <div id='landing' class='section row'>
    </div>
</div>   

<div class='container'>
    <div id='page-model-unic' class='section row'>
        <div class='col-md-12 text-left'>   
            <h1>Soseta Standard</h1>
            <hr>
            <h3>Daca ai un singur model de soseta, toate sosetele tale sunt perechi.</h3>
            <p>In aceast moment distribuim un singur model de soseta. Versiunea pentru barbati se numeste <b>Adam</b> iar versiunea pentru vemei se numeste <b>Eva</b>.<br>

            <h5>Material</h5>
            <p>100% Bumbac | Materialul folosit pentru soseta standard este bumbac. Pentru ca sosetele sintetice fac picioarele purtatorului sa 'miroasa'. Matrimoniala de sosete este un nume glumet dar 'miroasa' este un eufemism pentru painpoint-ul urat mirositor. Market resochul nostru a descoperit ca acest lucru este nedorit pentru cel care le poarta dar mai ales pentru cei din proximitate. Oamenii de stiinta britanici au descoperit ca exista o raza de aproximativ 22.4m la care participantii studiului au fost nemultumiti de mirosul sosetelor din fibre sintetice. Cand experimentul a fost repetat intr-un mijloc de transport in comun persoanele aflate la sub 4m au inceput sa devina vocale cand au fost confruntati cu mirosul sosetelor sintetice. Chiar mai mult persoanele aflate in proximitate directa au decis sa se mute dincole de linia imaginara de 4m. Unii din participanti au devenit brusc religiosi, apeland numele Domnului in diferite expresii, unele chiar injurioase.<br>Astfel matrimoniala de sosete a decis ca utilizarea fibrelor naturale este solutia optima pentru sosete.</p>

            <h5>Dimensiune</h5>
            <p>Este important pentru noi ca sosetele sa fie de aceiasi dimensiune intre loturi pentru ca ideea de soseta unica trimisa prin abonament sa poata functiona.<br>
            Raportul intre lungimea si inaltimea sosetei sa fie 1 la 1 (lungimea si intaltimea sunt egale) 
            </p>            

            <table class="table">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Adam</th>
                <th scope="col">Eva</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">S</th>
                <td>38 - 42</td>
                <td>35 - 38</td>
                </tr>
                <tr>
                <th scope="row">L</th>
                <td>43 - 46</td>
                <td>39 - 42</td>
                </tr>
            </tbody>
            </table> 

            <h5>Culoare</h5>
            <p>Poti sa alegi ori ce culoare, cat timp este negru. Henry Ford stia el ceva, in viitor o sa avem si alte culori de soete, dar acum modelul standard este negru, nuanta numita nu ne deculoram la spalare pentru ca am investit in calitate nu in variatie.</p>

        </div>
    </div>
</div> 


<?= footer($sData); ?>
</body>