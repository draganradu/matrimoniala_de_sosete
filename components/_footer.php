<?php 
function footer($siteData) {
    function buildfooterlinks($array){
        $output = '';

        for ($i=0; $i < count($array) ; $i++) { 
            $output .= "<li><a href='". $array[$i][1] ."'>". $array[$i][0] ."</a></li>";
        }

        return "<ul class='list-unstyled'>${output}</ul>";
    }

    return "
        <footer class='bg-secondary text-white' >
            <div class='container'>
                <div class='row'>
                    <div class='col-md-4'>
                        <h3>Contact</h3>
                        " . 
                        buildfooterlinks([
                            ["<b>f</b>: @matrimonialadesoete", $siteData["contact"]["facebook"]],
                            ["t: " . $siteData["contact"]["tel"],"model-unic-soeta-descriere/"],
                            ["a: " . $siteData["contact"]["adresa"],"model-unic-soeta-descriere/"],
                        ])   
                        . "
                    </div>
                    <div class='col-md-4'>
                        <h3>Pagini</h3>
                        " . 
                        buildfooterlinks([
                            ["Produs | soseta standard","model-unic-soeta-descriere/"],
                            ["Retur","refund-policy-termeni-conditii-politic-retur-produse-defecte/"],
                            ["Livrare","delivery-policy-politica-livrare"],
                            ["Politica de Confidențialitate","politica-de-confidentialitate"],
                        ])   
                        . "
                    </div>
                    <div class='col-md-4'>
                        Matrimoniala de sosete este un proiect creat si intretinut de ".  $siteData["legal"]["nume"] .".
                        <hr>
                        Copyright © 2020 ".  $siteData["legal"]["nume"] ."
                    </div>
                </div>
            </div>
        </footer>
        ";
};
?>