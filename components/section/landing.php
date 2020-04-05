<?php 
function sectionLanding() {
    global $sData;

    return "
        <div class='container-fluid'>
            <div id='landing' class='section row'>
                <div class='col-md-12 text-center'>
                <img src='" . $sData['logo']['100'] . "' alt='logo matrimoniala de sosete' />
                <h1>" . $sData['siteName'] ."</h1>
                <h2>" . $sData['catchline'] ."</h2>
                </div>
            </div>
        </div>   
    ";
};
?>