<?php 
function head($sitename) {
    global $buyBtn;
    return "
        <nav class='navbar navbar-expand-lg navbar-light bg-light'>
            <a class='navbar-brand' href='#'>${sitename}</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarText' aria-controls='navbarText' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
        <div class='collapse navbar-collapse' id='navbarText'>
        <ul class='navbar-nav mr-auto'>
            <li class='nav-item active'>
            <a class='nav-link' href='#cine_suntem'>Cine Suntem <span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item'>
            <a class='nav-link' href='#cum-functioneaza'>Cum functionează</a>
            </li>

        </ul>
        <span class='navbar-text'>
            ${buyBtn}
        </span>
        </div>
    </nav>
    ";
};
?>