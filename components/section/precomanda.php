<?php 
function iframePrecomanda() {
    return "
        <iframe src='https://docs.google.com/forms/d/e/1FAIpQLSdNz8DLXM8vt82JcL-uQy_tsBM95k9zyGaE3uKjpsWGqeNVVA/viewform?embedded=true' width='640' height='1260' frameborder='0' marginheight='0' marginwidth='0'>Loading…</iframe>
    ";
}

function templateColor($color) {
    return "
    <div class='progress'>
        <div class='progress-bar progress-bar-striped' role='progressbar' style='width: 25%; background-color:" . $color['culoare']['hex'] . "' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
    </div>
    <b>Antracit cu " . $color['culoare']['nume'] . "</b><br>
    #383e42 | " . $color['culoare']['hex'] ." 

    <br><br>
    ";
}

function precomanda() {
    global $sData;

    $culoareSosete = '';
    $culoareLiteral = array();
    $material = '';

    foreach (array_keys($sData['marimi']) as $key => $value) {
        $culoareSosete .=  templateColor($sData['marimi'][$value]);
        array_push($culoareLiteral, $sData['marimi'][$value]['culoare']['nume']);
    }

    foreach ($sData['material'] as $key => $value) {
        $material .= "<b class='text-capitalize'>${key}</b>: ${value}%</br>";
    }
  
    return "
    <div id='precomanda' class='section'>
        <div class='container-fluid'>
            <div class='row'>
                <div id='precomandaIframe' class='col bg-warning standard-section-spacing'>
                    " . iframePrecomanda() . "
                    <ul class='list-unstyled text-white pl-5 pt-5'>
                    <li><a href='tel:" . $sData["contact"]["tel"] . "'>Contact: <b>" . $sData["contact"]["tel"] . "</b></a></li>
                    <li><a href='refund-policy-termeni-conditii-politic-retur-produse-defecte/'>Politica Retur</a></li>
                    <li><a href='delivery-policy-politica-livrare'>Politica Livrare</a></li>
                    <li><a href='politica-de-confidentialitate'>Politica de Confidențialitate</a></li></ul>
                </div>

                <div id='precomandaText' class='col standard-section-spacing'>
                    <div class='subsection row'>
                        
                        <div class='col-md-8'>
                        <h2> Modele | Soseta Standard</h2>


                            <p>
                            Singurul lucru mai rau decat punga cu pungi este punga cu sosete desperechiate.
                            </p>
                            <p>
                            De asta producem un singur model de soseta pentru ca nimic nu ne displace mai tare decat sa cautam perechea sosetelor. Nu mai vreau sa am o punga de sosete pe care scrie 'Soseta singura caut pereche'. Nu vrem sa aruncam 50% din sosetele bune pentru ca perechea ei s-a rupt, sau nu a aparut nici dupa ce ai spalat ultimul cos de rufe (cu totii stim ca exista posibilitatea sa reapara 2 luni mai tarziu).
                            </p>

                            <P> In aceast moment o sa producem <b>1 singur model de soseta</b> color coaded pe marimi [ " . 
                            
                            implode(" , ", $culoareLiteral )
                            
                            ." ], versiunea pentru barbati se numeste Adam respectiv Eva pentru femei. </P>
                        </div>

                            <div class='col-md-3  offset-md-1'>
                                <img src='assets/soseta-unu.png' alt='soseta standard'>
                            </div>    

                    </div>

                    <div class='subsection'>
                        <h2> Culori </h2>
                        <p> Am descoperit ca a avea 2 sosete cu model identic de marimi diferite, una pentru el una pentru ea face ca sortarea sa fie imposibila. Singurul mod de a sorta sosetele este prin masurarea fiecarei sosete.<br>
                        Pentru a rezolva aceasta problema folosim culoarea calcaiului pentru color coading. <br>
                            ${culoareSosete}
                        </p>
                    </div>

                    <div class='subsection row'>
                        <h2 class='col-md-12'> Material </h2>
                        <div class='col-md-8'>
                        <p>Sosetele sunt in mare parte bumbac pentru ca picoarele tale sa nu miroasa ca tricoul unui maratonist, iar restul sunt elastan pentru ca soseta ta sa ramana pe picior. Daca optam pentru 100% bumbac puteam spune ca este un produs high-end dar soseta ta s-ar fi alfat in permanenta la calcai. </p>
                        <p> ${material} </p>
                        </div>
                        <div class='col-md-2  offset-md-1'>
                            <img src='assets/box.svg' class='box' alt='placeholder for future image'>
                        </div>  
                    </div>

                    <div class='subsection'>
                        <h2> Dimensiune </h2>
                        <p> Avem 2 marimi pentru barbati si 2 marimi pentru femei, inaltimea de la calcai pana la varf este egala cu inaltimea de la calcai pana la manseta. Ca sa nu iti fie frig la glezne dar nici cald la genunghi. <br>
                        M-B : 18cm <br> 
                        M-B : 15cm <br>
                        M-F : 15cm <br>
                        S-F : 13cm <br>    

                        </p>
                    </div>

                    <div class='subsection'>
                        <h2>Abonament</h2>
                        <p>Am ales 3 pachete standard pentru a simplifica procesul, dar putem sa iti livram ori cat de multe sosete vrei lunar.
                        Iti recomandam 29/1 (29 la inceput cu 1 luna) ca  

                        </p>
                    </div>        

                    <div class='subsection'>
                        <h2>Produs in romania [Made in Romania]</h2>
                        <p>Chiar daca afacerea noastra este mica, incercam sa producem responsabil si sa alegem furnizori locali. Chiar daca acest lucru este greu, credem ca este singurul mod in care un produs poate sa functioneze pe piata. </p>
                    </div> 
                    
                </div>     
            </div> 
        </div>
    </div>
    ";
};

?>