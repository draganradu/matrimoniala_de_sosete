<?php 
// include_once '../../buy_btn.php';

function cardDeck() {
    return '
    <hr>
    <div class="card-deck text-center">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">5</h4>
      <p class="card-text">buc</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">putine</small>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h4 class="card-title text-center">11</h4>
      <p class="card-text">buc</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">câteva</small>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h4 class="card-title text-center">29</h4>
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
    return '
    <hr>
    <div class="card-deck text-center">
    
  <div class="card text-white bg-info">
    <div class="card-body">
      <h4 class="card-title">1</h4>
      <p class="card-text">/luna</p>
    </div>
  </div>

  <div class="card text-white bg-info">
    <div class="card-body">
      <h4 class="card-title text-center">3</h4>
      <p class="card-text">/luna</p>
    </div>
  </div>

  <div class="card text-white bg-info">
    <div class="card-body">
      <h4 class="card-title text-center">5</h4>
      <p class="card-text">/luna</p>
    </div>
  </div>
</div>
<hr>
';
}

function sectionCumFunctioneaza() {
    global $buyBtn;
    $cardDeck = cardDeck();
    $subscriptionDeck = subscriptionDeck();

    return "
    <div class='container section' id='cum-functioneaza'>
            <div class='row'>
                <div class='col-md-12'>
                    <h2>Cum Functionează</h2>
                    <p>Daca ai un singur model de sosete nu o sa ai nici o data sosete fara pereche.</p>
                    <hr>
                </div>
            </div>
            <div id='cumfunctioneaza-body' class='row'>
                <div class='col-md'>
                    <h3>1. Starter Sosete</h3>
                    <p>Pentru a începe trebuie să iți comanzi unul dintre cele 3 pachete. Pachetele sunt bazate pe cât de mult din setul tău de sosete vrei să înlocuiești (putin, câteva sau multe). 
                
                    ${cardDeck}        

                    In acest moment vindem 1 singur model de sosete <a href='#promisiune'>(de ce)</a>.</p>
                </div>
                <div class='spacer'></div>
                <div class='col-md'>
                    <h3>2. Abonamentul de soseta</h3>
                    <p>Acum ca ai comandat Starter Setul de sosete. Trebuie sa iti configurezi abondamentul de sosete, cate sosete primesti in fiecare luna.

                    ${subscriptionDeck}

                    </p>
                </div>
                <div class='spacer'></div>
                <div class='col-md'>
                    <h3>3. Livram soseta</h3>
                    <p>Acesta este linkul catre shoping cartul nostru.</p>
                    <p>${buyBtn}</p>
                    <p>In 7 zile (cel mult) primesti starter pack-ul</p>
                    <p>In fiecare luna primesti prin poștă, un plic cu șosete.</p>
                </div>
            </div>
        </div>
    ";
};
?>