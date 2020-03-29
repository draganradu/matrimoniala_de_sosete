<?php 
// include_once '../../buy_btn.php';

// var_dump($sData);

function cardDeck() {
  global $sData;
  $i = 0;

    return '
    <hr>
    <div class="card-deck text-center">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">' . $sData['bi']['p1'][$i++] . '</h4>
      <p class="card-text">buc</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">putine</small>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h4 class="card-title">' . $sData['bi']['p1'][$i++] . '</h4>
      <p class="card-text">buc</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">câteva</small>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h4 class="card-title">' . $sData['bi']['p1'][$i++] . '</h4>
      <p class="card-text">buc</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">multe</small>
    </div>
  </div>
</div>
<hr>
';
}

function subscriptionDeck() {
  global $sData;
  $i = 0;
    return '
    <hr>
    <div class="card-deck text-center">
    
  <div class="card text-white bg-info">
    <div class="card-body">
      <h4 class="card-title">' . $sData['bi']['p2'][$i++] . '</h4>
      <p class="card-text">/luna</p>
    </div>
  </div>

  <div class="card text-white bg-info">
    <div class="card-body">
      <h4 class="card-title">' . $sData['bi']['p2'][$i++] . '</h4>
      <p class="card-text">/luna</p>
    </div>
  </div>

  <div class="card text-white bg-info">
    <div class="card-body">
      <h4 class="card-title">' . $sData['bi']['p2'][$i++] . '</h4>
      <p class="card-text">/luna</p>
    </div>
  </div>
</div>
<hr>
';
}

function sectionCumFunctioneaza() {
    global $buyBtn;
    global $sData;

    $i = 0;
    $titles = $sData['cumfunctioneaza']['subTitlu'];

    function titleH3($count, $titles ){
      return "<h3 class='font-weight-bold'>" . ($count + 1) . ". " . $titles[$count] . "</h3>";
    }

    return "
    <div class='container section' id='cum_functioneaza'>
            <div class='row'>
                <div class='col-md-12'>
                    <h2>".  $sData['cumfunctioneaza']['title'] ."</h2>
                    <p>" . $sData['cumfunctioneaza']['slogan']. "</p>
                    <hr>
                </div>
            </div>
            <div id='cumfunctioneaza-body' class='row'>
                <div class='col-md'>
                    " . titleH3($i, $titles) . "
                    <p>" . 
                    str_replace('${a}', cardDeck() ,$sData['cumfunctioneaza']['sections'][$i++])."                 
                    </p>
                </div>
                <div class='spacer'></div>
                <div class='col-md'>
                    " . titleH3($i, $titles) . "
                    <p>" . str_replace('${a}', subscriptionDeck() ,$sData['cumfunctioneaza']['sections'][$i++]). "
                    </p>
                </div>
                <div class='spacer'></div>
                <div class='col-md'>
                    " . titleH3($i, $titles) . "
                    <p>" . str_replace('${a}', $buyBtn ,$sData['cumfunctioneaza']['sections'][$i++]). "
                </div>
            </div>
        </div>
    ";
};
?>