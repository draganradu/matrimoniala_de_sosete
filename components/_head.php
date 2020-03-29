<?php 
function navItem ($text, $id) {
    return "
    <li class='nav-item'>
        <a class='nav-link' href='${id}'>${text}<span class='sr-only'>(current)</span></a>
    </li>
    ";
};

function head() {
    global $sData;
    global $buyBtn;

    return "
        <nav class='navbar navbar-expand-lg navbar-light bg-light'>
            <a class='navbar-brand' href='#'>". $sData["siteName"] ."</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarText' aria-controls='navbarText' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
        <div class='collapse navbar-collapse' id='navbarText'>
        <ul class='navbar-nav mr-auto'>".
        navItem($sData['cinesuntem']['title'], '#cine_suntem') .
        navItem($sData['cumfunctioneaza']['title'], '#cum_functioneaza') .
            "
        </ul>
        <span class='navbar-text'>
            ${buyBtn}
        </span>
        </div>
    </nav>
    ";
};
?>