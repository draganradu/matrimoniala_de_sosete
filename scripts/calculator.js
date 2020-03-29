function scrollTo(element, to, duration) {
    if (duration <= 0) return;
    var difference = to - element.scrollTop;
    var perTick = difference / duration * 10;

    setTimeout(function() {
        element.scrollTop = element.scrollTop + perTick;
        if (element.scrollTop === to) return;
        scrollTo(element, to, duration - 10);
    }, 10);
}

function inputChecked() {
    let total = 0
    for (let index = 1; index <= 4; index++) {
        if (document.getElementById('check' + index).checked ) {
            total++
        }
    }
    return total
}

function getVal(id){
    return Number(document.getElementById(id).value);
}

function formulaCalcul() {
    let data = {
        numarPersoane: getVal('numar-persoane'),
        frecventaSpalare: getVal('frecventa-saptamanala-de-spalare'),
        masiniPeCiclu: getVal('nr-de-masini'),
        totalSoseteSpalateSaptamanal: getVal('nr-de-sosete-spalate-saptamanal'),
        placere: getVal('cat-de-mult-iti-place'),
        atentie: inputChecked(),
    }



    data.computed = {
        L : data.numarPersoane * data.frecventaSpalare,
        C : data.masiniPeCiclu * data.totalSoseteSpalateSaptamanal,
        P : data.placere,
        A : data.atentie,
    }

    data.formula = (0.38 + (0.005 * data.computed.L) + (0.0012 * data.computed.C) - (0.0159 * data.computed.P * data.computed.A)) * 2.1 ;
    data.sosete = Math.ceil(data.formula);

    document.getElementById('calc-output').innerHTML = `<p>O sa pierzi aproximativ</p>
    <div class="card text-white bg-success">
        <div class="card-body text-center">
        <h4 class="card-title">${data.sosete}</h4>
        <p class="card-text">sosete saptamana aceasta</p>
        </div>
    </div>
    <p> Mai exact <b>${data.formula}</b> pierdute saptamana asta.</p>` 
    document.getElementById('initial-calc').classList.add('d-none');

    scrollTo(document.body, document.getElementById('calculator-sosete-pierdute').offsetTop, 600);

    return data.formula;
};

document.getElementById("calculate").addEventListener("click", function(){
    console.log(formulaCalcul());
}, false);