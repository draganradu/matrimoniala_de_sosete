<?php 
    // component
    include '../components/_frame.php';
    include '../components/_head.php';
    include '../components/_footer.php';

    // sections
    include '../components/section/contact_sidebar.php';
    // include '../components/section/landing.php';
    // include '../components/section/cine_suntem.php';
    // include '../components/section/cum_functioneaza.php';
    // include '../components/section/modelul_standard.php';

    // data
    include '../components/buy_btn.php';
    $sData = json_decode(file_get_contents("../data.json"), true);
    $pageName = 'confidentialitate';

    function title($data){
        $data = strtoupper($data);
        $id = preg_replace('/[^a-z0-9]/i', '-', $data);
        return "<h3 id='${id}'>${data}</h3>";
    }
   
?>
<html lang="<?= $sData['lang']; ?>">
<head>
    <title><?= $sData['siteName'] . ' ' . $sData[$pageName]['metaTitle'] ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $sData[$pageName]['description']; ?>">
    <meta name="keywords" content="<?= implode(",", $sData[$pageName]['keywords']); ?>">
    <meta name="author" content="<?= $sData['contact']['name'] ;?>">
<?= cssHead() ?>

</head>
<body>

<?= head(); ?>

<div class='container-fluid'>
    <div id='landing' class='section row'>
    </div>
</div>   

<div class='container'>
    <div id='page-politica-retur' class='section row'>
        <div class='col-xl-8 col-lg-9 col-md-8 text-left'>   
            <h1>Politica de confidențialitate și operare a "<?= $sData['siteName'] ?>"</h1>
            <hr>
<p>
<?= title('Cine este operatorul') ?>
<?= $sData['siteName'] ?> este numele comercial al <?= $sData['legal']['nume'] ?> cu sediul in <?= $sData['legal']['sediuSocial'] ?> înregistrată la Registrul Comerțului sub nr. <?= $sData['legal']['j'] ?>, CUI:  <?= $sData['legal']['cui'] ?>.
<br><br>

Protecția datelor cu caracter personal este foarte importantă pentru "<?= $sData['legal']['nume'] ?>", în conformitate cu Regulamentul (UE) 2016/679 al Parlamentului European și al Consiliului din data de 27 aprilie 2016 privind protecția persoanelor fizice în ceea ce privește prelucrarea datelor cu caracter personal și libera circulație a acestor date (denumit în continuare "GDPR").
<br><br>
Prelucrarea datelor cu caracter personal efectuată de "<?= $sData['legal']['nume'] ?>" se va realiza întotdeauna în conformitate cu prevederile GDPR, precum și cu reglementările privind protecția datelor cu caracter personal. Prin Politica de confidențialitate, "<?= $sData['legal']['nume'] ?>" dorește să informeze persoanele vizate cu privire la natura datelor cu caracter personal pe care le colectăm și le procesăm, precum și cu privire la scopurile prelucrării. În plus, persoanele vizate sunt informate prin intermediul Politicii de confidențialitate și cu privire la drepturile de care beneficiază.
<br><br>

<?= title('CE SUNT CONSIDERATE DATELE CU CARACTER PERSONAL') ?>
"Date personale" înseamnă orice informație sau informații care va pot identifica direct sau indirect. Aceasta înseamnă ca datele personale includ lucruri precum adresa de e-mail, domiciliul, telefonul mobil, numele de utilizator, fotografiile de profil, preferințele personale și obiceiurile de cumpărături, conținutul generat de utilizatori, informațiile financiare și informațiile privind situația financiara. Acesta ar putea include și identificatori numerici unici, cum ar fi adresa IP a computerului dumneavoastră, precum și modulele cookie.
<br><br>
<?= title('CE SUNT CONSIDERATE A FII PRELUCRARE A DATELOR CU CARACTER PERSONAL?') ?>
"Prelucrarea" înseamnă orice operațiune sau set de operațiuni efectuate asupra datelor cu caracter personal sau asupra seturilor de date cu caracter personal, cu sau fără utilizarea de mijloace automatizate, cum ar fi colectarea, înregistrarea, organizarea, structurarea, stocarea, adaptarea sau modificarea, extragerea, consultarea, utilizarea, divulgarea prin transmitere, diseminarea sau punerea la dispoziție în orice alt mod, alinierea sau combinarea, restricționarea, ștergerea sau distrugerea.
<br><br>
<?= title('PRINCIPII DE PRELUCRAREA DATELOR') ?>
<?= $sData['legal']['nume'] ?> se obligă să respecte principiile de protecție a datelor cu caracter personal (denumite în continuare "Principiile") prevăzute de GDPR, pentru a se asigura că toate datele sunt:
<br><br>
<?= title('Prelucrate în mod corect, legal și transparent') ?>
Colectate în scopuri specificate, explicite și legitime.<br>
Adecvate, relevante și limitate în raport cu scopurile pentru care sunt prelucrate.<br>
Păstrate într-o formă care nu permite identificarea persoanelor vizate mai mult timp decât este necesar în raport de scopul prelucrării.<br>
Procesate în conformitate cu drepturile persoanei vizate.<br>
<br>
<?= title('TEMEIUL ȘI SCOPURILE PRELUCRĂRII DATELOR CU CARACTER PERSONAL') ?>
În scopul încheierii și executării contractelor – Conform art. 6 alin. 1 lit. b) din GDPR, pot fi prelucrate date personale în scopul încheierii sau executării contractului. Pentru a putea să vă oferim produsele și serviciile noastre, este nevoie să prelucrăm date cu caracter personal care vă aparțin.
<br><br>
În scopul îndeplinirii unor obligații legale – Conform art. 6 alin. 1 lit. c) din GDPR, pot fi prelucrate date personale în scopul îndeplinirii unor obligații legale. Solicităm o serie de date personale, inclusiv, în anumite situații, codul numeric personal, în scopul de a ne îndeplini obligațiile impuse de către autoritățile fiscale în legătură cu facturarea și raportările către autoritățile fiscale.
<br><br>
În scop de marketing – Conform art. 6 alin. 1 lit. a) din GDPR, pot fi prelucrate date personale dacă persoana vizată și-a dat consimțământul pentru prelucrarea datelor sale cu caracter personal pentru unul sau mai multe scopuri specifice. Astfel, în anumite situații, datele dumneavoastră cu caracter personal vor fi utilizate cu scopul de a vă transmite mesaje de marketing, oferte, știri, viitoare campanii, invitații la diverse evenimente.
<br><br>
În scopul îndeplinirii obiectului nostru de activitate – Conform art. 6 alin. 1 lit. a) din GDPR, pot fi prelucrate date personale dacă persoana vizată și-a dat consimțământul pentru prelucrarea datelor sale cu caracter personal pentru unul sau mai multe scopuri specifice. Astfel, vă putem contacta sau putem transmite datele dumneavoastră cu caracter personal în scopul realizării obiectului nostru de activitate.
<br><br>
<?= title('NESWSLETTER') ?>
Dacă ati optat pentru a primii emailuri recurente de informare (Newsletter), datele dumneavoastră cu caracter personal vor fi utilizate cu scopul exclusiv de a vă transmite informări cu conținut de marketing, despre produsele, serviciile și/sau promoțiile desfășurate de către <?= $sData['legal']['nume'] ?> într-o anumita perioada.
<br><br>
Datele dumneavoastră cu caracter personal urmează a fi șterse de îndată, atunci când anulați abonamentul din secțiunea de Newsletter a <?= $sData['legal']['nume'] ?>.
<br><br>
Vă puteți dezabona în orice moment prin intermediul link-ului atașat la finalul Newsletter-ului primit sau printr-o solicitare scrisă adresată pe email la <?= $sData['contact']['email'] ?>.
<br><br>
<?= title('DIVULGAREA DATELOR CU CARACTER PERSONAL CĂTRE TERȚI') ?>
Datele cu caracter personal prelucrate de către <?= $sData['legal']['nume'] ?> vor putea fi divulgate și/sau transferate către terți doar în situația în care există consimțământul dumneavoastră expres pentru a proceda în acest sens, cu excepția situațiilor în care există o obligație legală/contractuală pentru <?= $sData['legal']['nume'] ?> de a proceda în acest mod.
<br><br>
Vă rugăm să aveți în vedere faptul că este posibil ca, în anumite circumstanțe, să avem obligația de a divulga datele dumneavoastră cu caracter personal, partenerilor cu care <?= $sData['legal']['nume'] ?> colaborează și/sau altor terți furnizori de servicii.
<br><br>
<?= title('PRELUCRAREA DATELOR DE CĂTRE TERȚI, ALTE SITE-URI') ?>
Site-ul <?= $sData['legal']['nume'] ?> poate conține, la un moment dat, link-uri de acces către alte site-uri ale căror politici de prelucrare a datelor pot fi diferite de cele ale <?= $sData['legal']['nume'] ?>.
<br><br>
Vă rugăm să aveți în vedere și să consultați politicile privind protecția datelor cu caracter personal ale procesatorilor de plati. <?= $sData['legal']['nume'] ?> nu își asuma responsabilitatea cu privire la informațiile trimise sau colectate de aceste terțe părți.
<br><br>

<?= title('PERIOADA STOCĂRII DATELOR') ?>
<?= $sData['legal']['nume'] ?> poate păstra datele prelucrate pentru diferite perioade de timp, apreciate ca fiind rezonabile, în conformitate cu scopurile indicate anterior. Păstrăm datele dumneavoastră numai pentru perioada necesară pentru atingerea scopului pentru care deținem datele, pentru a satisface nevoile dumneavoastră sau pentru a ne îndeplini obligațiile impuse de lege.
<br><br>
Pentru a ști cât timp pot fi păstrate datele dumneavoastră, folosim următoarele criterii:
<br><br>
Atunci când achiziționați produse și servicii, păstrăm datele dumneavoastră personale pe durata relației noastre contractuale.<br><br>
În cazul în care participați la o ofertă promoțională, păstrăm datele dumneavoastră personale pe durata ofertei promoționale.<br><br>
În cazul în care ne contactați pentru o întrebare, păstrăm datele dumneavoastră personale pe durata necesară procesării întrebărilor dvs., dar nu mai mult de 3 ani de la ultima corespondență trimisă.<br><br>
În cazul în care creați un cont, păstrăm datele dumneavoastră personale până când solicitați să le ștergem sau după o perioadă de inactivitate (fără o interacțiune activă cu noi). În acest sens, menționăm că datele prelucrate pentru acest scop vor fi șterse la 3 ani după ultima interacțiune cu utilizatorul contului (ca de exemplu, login in contul dumneavoastră).<br><br>
În cazul în care v-ați oferit consimțământul pentru marketing, păstrăm datele dumneavoastră personale până când vă dezabonați sau solicitați să le ștergem sau după o perioadă de inactivitate, fără o interacțiune activă definite în conformitate cu reglementările și îndrumările locale. În acest sens, menționăm că datele stocate în bazele noastre de date pentru scopul comunicărilor de marketing direct sunt șterse din evidențele acestor baze de date la 3 ani de ultima interacțiune cu dumneavoastră.<br>
În cazul în care modulele cookie sunt stocate pe computer, le păstrăm atâta timp cât este necesar pentru ca acestea să își atingă scopurile (de exemplu, pe durata unei sesiuni pentru cookie-urile de coș de cumpărături sau cookie-urile pentru ID-uri de sesiune) și pentru o perioadă definită în conformitate cu reglementările și îndrumările locale. În acest sens, menționăm că datele prelucrate prin modulele cookies folosite pentru a furniza publicitate comportamentală online, pentru a ne personaliza serviciile pentru dumneavoastră și pentru a permite distribuirea conținutului nostru pe site-uri de socializare (butoane de distribuire destinate afișării site-ului), vor fi păstrate pentru o perioadă de maxim 3 ani de la colectarea acestora, în baza consimțământului dumneavoastră.<br><br>
<?= title('DREPTURILE PERSOANELOR VIZATE') ?>
În conformitate cu GDPR, aveți o serie de drepturi cu privire la datele personale pe care <?= $sData['legal']['nume'] ?> le prelucrează:
<br>
Dreptul de acces la datele prelucrare – aveți dreptul de a accesa datele personale pe care le deținem. Prima furnizare de informații se va face fără a percepe niciun fel de taxa.<br> Daca veți mai avea nevoie de copii ale informațiilor deja furnizate, este posibil sa percepem o taxa rezonabila ținând cont de costurile administrative de furnizare a informațiilor.<br> Solicitările vădit neîntemeiate, excesive sau repetate pot sa nu primească un răspuns.<br>
Dreptul la rectificarea datelor – aveți dreptul sa cereți ca Datele dumneavoastră sa fie rectificate daca sunt inexacte sau învechite și/sau sa le completați daca acestea sunt incomplete.<br><br>
<?= title('Dreptul la ștergerea datelor') ?>
În unele cazuri, aveți dreptul de a obține ștergerea sau distrugerea Datelor dumneavoastră. Acesta nu este un drept absolut, deoarece uneori s-ar putea sa fim forțați sa păstram Datele dumneavoastră din motive legale sau juridice.<br>
Dreptul la restricționarea prelucrării – Aveți dreptul sa solicitați restricționarea procesării Datelor dumneavoastră. Acest lucru înseamnă ca prelucrarea Datelor dumneavoastră este limitata, astfel încât sa putem păstra Datele, dar sa nu le utilizam sau sa le procesam. Acest drept se aplica in circumstanțe specifice prevăzute de Regulamentul general privind protecția datelor, și anume:<br>
exactitatea Datelor este contestata de persoana vizata (adică de dumneavoastră), pentru o perioada care permite operatorului sa verifice corectitudinea Datelor.<br>
prelucrarea este ilegala și persoana vizata (adică dumneavoastră) se opune ștergerii Datelor și solicita restricția de utilizare a acestora.<br>
Operatorul nu mai are nevoie de Date pentru prelucrare, dar acestea sunt solicitate de persoana vizata (adică de dumneavoastră) pentru stabilirea, exercitarea sau apărarea unor pretenții legale.<br>
Persoana vizata (adică dumneavoastră) a ridicat obiecții procesării bazata pe motive legitime din partea operatorului in temeiul verificării daca motivele legitime ale operatorului depășesc pe cele ale persoanei vizate (adică dumneavoastră).<br>
Dreptul la portabilitatea datelor – aveți dreptul sa mutați, sa copiați sau sa transferați datele care va interesează din baza noastră de date într-o alta. Acest lucru se aplica numai datelor pe care le-ați furnizat, atunci când procesarea se bazează pe consimțământul dumneavoastră sau pe baza unui contract și este implementata prin mijloace automate.
Dreptul de opoziție – va puteți opune în orice moment prelucrării datelor dumneavoastră atunci când o astfel de prelucrare se bazează pe un interes legitim.<br>
Dreptul de a retrage consimțământul în orice moment – va puteți retrage consimțământul în ceea ce privește prelucrarea datelor dumneavoastră atunci când o astfel de procesare se bazează pe consimțământ. Retragerea consimțământului nu afectează legalitatea prelucrării pe baza consimțământului înainte de retragerea acestuia.<br>
Dreptul de a depune o plângere la autoritatea de supraveghere competentă – aveți dreptul sa depuneți o plângere în fața autorității de protecție a datelor din țara dumneavoastră de reședință sau de domiciliu pentru a contesta practicile de protecție a datelor oferite de noi.<br>
Dreptul de a vă opune prelucrării datelor dumneavoastră în scopuri de marketing direct – Va puteți dezabona sau renunța la comunicarea noastră de marketing direct în orice moment. Este mai ușor sa faceți acest lucru via linkul "dezabonare" în orice e-mail sau comunicare pe care vi le transmitem.<br>
Dreptul de a vă opune prelucrării datelor dumneavoastră de către noi atunci când desfășurăm acțiuni în interes public sau în interesele legitime proprii sau ale unui terț – va puteți opune în orice moment prelucrării datelor dumneavoastră atunci când o astfel de prelucrare se bazează pe un interes legitim.<br>
Dreptul de a dezactiva Cookies – aveți dreptul sa dezactivați modulele cookie. Setările din browser-ele de Internet sunt de obicei programate în mod implicit pentru a accepta modulele cookie, dar puteți sa le reglați ușor modificând setările browser ului. Multe module cookie sunt utilizate pentru a spori gradul de utilizare sau funcționalitate a site-urilor web / aplicațiilor, prin urmare, dezactivarea modulelor cookie va poate împiedica sa utilizați anumite părți ale site-urilor sau aplicațiilor noastre, așa cum este detaliat în tabelul Cookie relevant. Daca doriți sa restricționați sau sa blocați toate cookie-urile stabilite de site-urile web / aplicațiile noastre (care va pot împiedica sa utilizați anumite părți ale site-ului, <?= $sData['url'] ?>) sau orice alte site-uri / aplicații, puteți face acest lucru prin setările browser-ului.<br>
Vă puteți exercita oricare dintre aceste drepturi în ceea ce privește datele personale pe care <?= $sData['legal']['nume'] ?> le prelucrează prin adresarea unei simple cereri către <?= $sData['contact']['email'] ?>. Într-o astfel de situație este foarte posibil să solicităm o dovadă a identității dumneavoastră.<br><br>
<?= title('SOLICITĂRI JURIDICE') ?>
Accesăm, păstrăm și oferim informațiile dumneavoastră autorităților de reglementare, factorilor de aplicare a legii sau altor entități:<br><br>

Ca răspuns la o solicitare de natură juridică, atunci când considerăm, cu bună-credință, că legea ne impune acest lucru.<br>
Ca răspuns la solicitări de natură juridică atunci când considerăm, cu bună-credință, că răspunsul impus de legile din jurisdicția respectivă afectează utilizatorii din acea jurisdicție și este conform cu standardele recunoscute la nivel internațional.<br>
Atunci când considerăm, cu bună credință, că este necesar pentru: a detecta, a preveni și a răspunde la acte de fraudă, utilizarea neautorizată a oricărui material care ne aparține, încălcări ale condițiilor sau politicilor noastre sau alte activități dăunătoare sau ilegale, pentru a ne proteja pe noi (inclusiv drepturile, bunurile sau materialele noastre), pe dumneavoastră și pe alții, inclusiv în cadrul investigațiilor sau al anchetelor autorităților de reglementare sau pentru a preveni decesul sau vătămarea corporală iminentă. De exemplu, dacă este relevant, furnizăm informații către și primim informații de la terți parteneri despre fiabilitatea contului dumneavoastră, pentru a preveni frauda, abuzul și alte activități dăunătoare în cadrul și în afara materialelor noastre.<br>
Informațiile pe care le primim despre dumneavoastră pot fi accesate și stocate o perioadă mai lungă de timp atunci când fac obiectul unei solicitări de natură juridică sau unei obligații legale, al unei anchete guvernamentale, sau al unor investigații privind posibile încălcări ale condițiilor sau politicilor noastre, sau în alte cazuri pentru a preveni prejudiciile.<br><br>

<?= title('RELAȚIILE CU ALȚI OPERATORI') ?>
În funcție de context, s-ar putea să ne găsim în situația necesității absolute de a oferi informații la un nivel mai înalt, atât global, cât și intern sau extern, partenerilor noștri și celor cu care facem transfer de date cu respectarea GDPR, în virtutea asigurării oferirii unor servicii cât mai profesionale cu putință. Informațiile controlate de <?= $sData['legal']['nume'] ?> ar putea fi transferate, transmise sau stocate și prelucrate în UE sau în alte țări decât țara în care locuiți, în scopurile descrise în această politică. Aceste transferuri de date sunt necesare pentru a putea furniza servicii la cel mai înalt nivel, precum și a continua să vă furnizăm materialele noastre la cel mai bun nivel profesional. Utilizăm clauze contractuale standard aprobate de Comisia Europeană și ne bazăm pe deciziile privind caracterul adecvat emise de Comisia Europeană cu privire la anumite țări, după caz, în ceea ce privește transferurile de date din SEE către Statele Unite și către alte țări.<br><br>

<?= title('SECURITATEA PRELUCRĂRII') ?>
<?= $sData['legal']['nume'] ?> a adoptat măsuri tehnice și organizatorice de prelucrare a datelor, actualizate în conformitate cu cerințele GDPR, cu scopul de a proteja datele dumneavoastră cu caracter personal împotriva oricăror acțiuni de acces neautorizat, utilizare necorespunzătoare sau divulgare, modificare neautorizată, distrugere sau pierdere accidentală. Toți angajații și colaboratorii <?= $sData['legal']['nume'] ?>, precum și orice terțe părți care acționează în numele și pe seama <?= $sData['legal']['nume'] ?> sunt obligați să respecte confidențialitatea informațiilor dumneavoastră și cerințele GDPR, în conformitate cu prevederile Politicii de confidențialitate.<br><br>

<?= title('EXONERARE DE RĂSPUNDERE') ?>
Site-ul <?= $sData['legal']['nume'] ?> poate conține legături către alte site-uri și/sau alte pagini web care nu sunt proprietatea <?= $sData['legal']['nume'] ?> nu își asumă nicio responsabilitate cu privire la conținutul acestor site-uri și, prin urmare, nu va putea fi ținută răspunzătoare pentru conținutul, publicitatea, bunurile, serviciile, software-ul, informațiile sau alte materiale disponibile pe sau prin intermediul acestor site-uri. <?= $sData['legal']['nume'] ?> nu va fi responsabilă de pierderea datelor cu caracter personal, de orice efecte negative asupra datelor personale ale vizitatorilor sau de alte daune morale și/ sau patrimoniale cauzate de accesul la respectivele site-uri.<br><br>

<?= title('ACTUALIZAREA POLITICII DE PROTECȚIE ȘI PRELUCRARE A DATELOR CU CARACTER PERSONAL') ?>
Vă rugăm să aveți în vedere faptul că prezenta Politică poate face obiectul unor modificări periodice de conținut, prin actualizarea site-ului nostru.<br><br>

Vă vom trimite o notificare înainte de a aduce orice modificări acestei Politici și vă vom oferi posibilitatea să consultați Politica de confidențialitate revizuita înainte de a alege să continuați să utilizați materialele noastre.<br><br>

Vă rugăm să nu continuați să utilizați site-ul <?= $sData['url'] ?> dacă nu sunteți de acord cu astfel de modificări. De asemenea, vă recomandăm să verificați această pagină pentru orice actualizare.<br><br>

<?= title('Termenii Politicii de confidențialitate se interpretează în conformitate cu legislația aplicabilă.') ?>
<br><br>
<?= title('VARSTA MINIMA PENTRU UTILIZARE') ?>
Prin continuarea folosirii website-ului <?= $sData['url'] ?> declar ca sunt major. In caz contrar voi înceta utilizarea site-ului si voi trimite o solicitare la adresa de e-mail <?= $sData['contact']['email'] ?> în vederea ștergerii datelor mele.<br><br>    
</p>

        </div>
        <div class="col-xl-1 d-xl-block d-lg-none d-md-none"></div>
        <div class="col-lg-3 col-md-4">
        <?= contact_sidebar() ?>
        </div>
    </div>
</div> 


<?= footer($sData); ?>
</body>
</html>