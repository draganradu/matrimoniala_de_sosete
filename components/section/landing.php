<?php 
function sectionLanding($tagLine, $headLine, $logo) {
    return "
        <div class='container-fluid'>
            <div id='landing' class='section row'>
                <div class='col-md-12 text-center'>
                <img src='${logo}' />
                <h1>${tagLine}</h1>
                <h2>${headLine}</h2>
                </div>
            </div>
        </div>   
    ";
};
?>