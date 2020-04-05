<?php

function contact_sidebar (){
    $siteData = json_decode(file_get_contents("../data.json"), true);

    return "
        <div class='card'>
            <img class='bd-placeholder-img card-img-top' src='./assets/radu_dragan_matrimoniala_de_sosete.jpg' alt='Radu Dragan CEO of matrimoniala de sosete'/> 
            <div class='card-body'>
                <h5 class='card-title'>Eu sunt Radu,</h5>
                <p class='card-text'>Buna, sunt CEO-ul companiei, personal cred ca daca ai nevoie de ajutor trebuie sa fie cineva disponibil sa faca asta. Cred atat de mult in acest lucru incat nr de telefon pentru support este nr meu de telefon.</p>
            </div>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item bg-success text-white'><b>t:</b> " . $siteData["contact"]["tel"]  ."</li>
                    <li class='list-group-item'><b>a:</b> " . $siteData["contact"]["adresa"]  ."</li>
                    <li class='list-group-item break-all'><b>e:</b> " . $siteData["contact"]["email"] . "</li>
                    
                </ul>
        </div>
  ";
};

?>
