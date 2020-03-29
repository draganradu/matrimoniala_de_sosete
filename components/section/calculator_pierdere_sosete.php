<?php 
    function calculatorPierdereSosete() {
        return "
        <div id='calculator-sosete-pierdute' class='section standard-section-spacing'>
            
            <div class='container'>
                <div class='row'>
                    <div class='col sidebar-calculator'>
                        <div id='initial-calc'>
                            <h2 class='text-left'>Cate sosete o sa pierzi luna aceasta?</h2>
                            <p>Cel mai proabail</p>
                        </div>
                        <div id='calc-output'></div>
                    </div>
                    <div class='col-md-5 calculator-form'>
                        <div class='card'>
                            <div class='card-header'>
                                <h2 class='card-title'>Cate sosete o sa pierzi luna aceasta?</h2>
                            </div>
                            <div class='card-body'>
                                <div class='form-row'>
                                    <div class='form-group col-md-12'>
                                        <label for='inputAddress2'>Numar de persoane</label>
                                        <input type='number' class='form-control' id='numar-persoane' placeholder='Nr de persoane in casa' value='2'>
                                    </div>

                                    <div class='form-group col-md-12'>
                                        <label for='inputAddress2'>Frecventa de spalare saptamanala</label>
                                        <input type='number' class='form-control' id='frecventa-saptamanala-de-spalare' placeholder='Frecventa saptamanala' value='1'>
                                    </div>

                                    <div class='form-group col-md-12'>
                                        <label for='inputAddress2'>Cate masini sunt spalate pe ciclu de spalare</label>
                                        <input type='number' class='form-control' id='nr-de-masini' placeholder='nr de masini' value='3'>
                                    </div>

                                    <div class='form-group col-md-12'>
                                        <label for='inputAddress2'>Numar de sosetes spalate saptamanal (buc)</label>
                                        <input type='number' class='form-control' id='nr-de-sosete-spalate-saptamanal' placeholder='sosete-pe-saptamana'  value='28'>
                                    </div>

                                    <div class='form-group col-md-12'>
                                        <label for='inputAddress2'>Cat de mult iti place sa sortezi sosete?</label>
                                        <select class='form-control' id='cat-de-mult-iti-place'>
                                        <option value='1'>NU!, Oare pot face un streang daca inod sosetele?</option>
                                        <option value='2'>Nu, prefer sa fac ori ce altceva</option>
                                        <option value='3'>Daca trebuie, le sortam</option>
                                        <option value='4'>Da, sortam sosete</option>
                                        <option value='5'>DA!, scopul vietii mele este sa sortez sosete</option>
                                    </select>
                                    </div>
                                    
                                    <div class='form-check-group form-check-border'>
                                        <div class='form-check'>
                                            <input class='form-check-input' type='checkbox' id='check3' >
                                            <label class='form-check-label' for='check3'>Intorc sosetele pe fata</label>
                                        </div>

                                        <div class='form-check'>
                                            <input class='form-check-input' type='checkbox' id='check1' >
                                            <label class='form-check-label' for='check1'>Verific cu atentie buzunarele tuturor hainelor inainte si dupa spalare</label>
                                        </div>

                                        <div class='form-check'>
                                            <input class='form-check-input' type='checkbox' id='check2' >
                                            <label class='form-check-label' for='check2'>Desuflec sosetele</label>
                                        </div>

                                        <div class='form-check'>
                                            <input class='form-check-input' type='checkbox' id='check4' >
                                            <label class='form-check-label' for='check4'>Pun toate hainele pe fata inainte de spalare</label>
                                        </div>
                                    </div>

                                    <div class='form-group col-md-12'>
                                        <button id='calculate' class='btn btn-primary btn-lg mt-2'>Calculeaza</button>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
    };
?>