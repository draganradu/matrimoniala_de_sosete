<?php 
function sectionCineSuntem($founderText) {
    global $buyBtn;
    return "
        <div id='cine_suntem' class='container section'>
            <div class='row'>
                <div class='col-md-6 offset-md-4'>
                    <h2>Cine Suntem</h2>
                </div>
                <div class='col-md-4'>
                    <img src='assets/box.svg' class='box'>
                </div>
                <div class='col-md-6'>
                    <p class='pre'>${founderText}</p>
                    <p>${buyBtn}</p>
                </div>
            </div>
        </div>
    ";
};
?>