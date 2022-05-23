<?php

$header = [
    'logo' => 'https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg',
    'text' => 'Privacy & Termini',
    'user' => 'R',
    'nav-list' => ['Introduzione', 'Norme sulla privacy', 'Termini di servizio', 'Tecnologie', 'Domande frequenti']
];

$main_content = [
    [
        "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
        "answer" =>
        "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. <br><br>
            Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.<br><br>
            Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese. <br><br>
            Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.<br><br>
            Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
    ],

    [
        "question" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
        "answer" =>
        "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno. <br><br>
            Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo. <br><br>
            Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online. <br><br>
            Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."

    ],

    [
        "question" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
        "answer" => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."
    ],

    [
        "question" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
        "answer" => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
    ]
];

$footer = ['Google', 'Tutto su Google', 'Privacy', 'Termini'];


$nav_list = $header['nav-list'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Domande frequenti-Privacy e termini </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header class="site-header">
        <div class="nav">
            <div class="nav-top d-flex j-space-b">

                <div class="nav-left d-flex">
                    <div class="logo">
                        <img height="18px" src="<?= $header['logo'] ?>" alt="">
                    </div>
                    <div class="nav-text">
                        <h4> <?= $header['text'] ?> </h4>
                    </div>
                </div>
                <!-- /.nav-left -->

                <div class="nav-right d-flex">
                    <i class="fas fa-th"></i>
                    <div class="user">
                        <p><?= $header['user'] ?></p>
                    </div>
                </div>
            </div><!-- /.nav-top -->
            <div class="nav-bot">
                <ul class="d-flex">
                    <?php foreach ($nav_list as $list) : ?>
                        <li class=" <?= $list === 'Domande frequenti' ? 'nav-border-bot' : '' ?>"> <?= $list ?> </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- /.nav-bot -->
        </div>
        <!-- /.nav -->

    </header>
    <!-- /.site-header -->

    <main class="site-main">
        <div class="container m-auto">
            <?php foreach ($main_content as $data) : ?>
                <div class="frequent-questions">
                    <div class="question">
                        <h2>
                            <?= $data['question'] ?>
                        </h2>
                    </div>
                    <div class="answer">
                        <p>
                            <?= $data['answer'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- /.frequent-questions -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /.site-main -->

    <footer class="site_footer">
        <div class="container m-auto">
            <div class="infos d-flex j-space-b">
                <div class="left-side">
                    <ul class="d-flex">
                        <?php foreach ($footer as $info) : ?>
                            <li>
                                <?= $info ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- /.left-side -->

                <div class="right-side d-flex">
                    <i class="fas fa-language"></i>
                    <label for="language"></label>
                    <select class="iCthae" id="i3" jsname="O1htCb">
                        <option value="af">Afrikaans</option>
                        <option value="id">Bahasa Indonesia</option>
                        <option value="ms">Bahasa Melayu</option>
                        <option value="ca">Català</option>
                        <option value="cs">Čeština</option>
                        <option value="da">Dansk</option>
                        <option value="de">Deutsch</option>
                        <option value="et">Eesti</option>
                        <option value="en">English</option>
                        <option value="en-GB">English (United Kingdom)</option>
                        <option value="es">Español</option>
                        <option value="es-419">Español (Latinoamérica)</option>
                        <option value="eu">Euskara</option>
                        <option value="fil">Filipino</option>
                        <option value="fr">Français</option>
                        <option value="fr-CA">Français (Canada)</option>
                        <option value="gl">Galego</option>
                        <option value="hr">Hrvatski</option>
                        <option value="zu">Isizulu</option>
                        <option value="is">Íslenska</option>
                        <option selected="" value="it">Italiano</option>
                        <option value="sw">Kiswahili</option>
                        <option value="lv">Latviešu</option>
                        <option value="lt">Lietuvių</option>
                        <option value="hu">Magyar</option>
                        <option value="nl">Nederlands</option>
                        <option value="no">Norsk</option>
                        <option value="pl">Polski</option>
                        <option value="pt-BR">Português (Brasil)</option>
                        <option value="pt-PT">Português (Portugal)</option>
                        <option value="ro">Română</option>
                        <option value="sk">Slovenčina</option>
                        <option value="sl">Slovenščina</option>
                        <option value="sr-Latn">Srpski</option>
                        <option value="fi">Suomi</option>
                        <option value="sv">Svenska</option>
                        <option value="vi">Tiếng Việt</option>
                        <option value="tr">Türkçe</option>
                        <option value="el">Ελληνικά</option>
                        <option value="bg">Български</option>
                        <option value="ru">Русский</option>
                        <option value="sr">Српски</option>
                        <option value="uk">Українська</option>
                        <option value="iw">&#x202B;עברית&#x202C;</option>
                        <option value="ur">&#x202B;اردو&#x202C;</option>
                        <option value="ar">&#x202B;العربية&#x202C;</option>
                        <option value="fa">&#x202B;فارسی&#x202C;</option>
                        <option value="am">አማርኛ</option>
                        <option value="mr">मराठी</option>
                        <option value="hi">हिन्दी</option>
                        <option value="bn">বাংলা</option>
                        <option value="gu">ગુજરાતી</option>
                        <option value="ta">தமிழ்</option>
                        <option value="te">తెలుగు</option>
                        <option value="kn">ಕನ್ನಡ</option>
                        <option value="ml">മലയാളം</option>
                        <option value="th">ไทย</option>
                        <option value="ko">한국어</option>
                        <option value="zh-HK">中文 (香港)</option>
                        <option value="zh-CN">中文（简体中文）</option>
                        <option value="zh-TW">中文（繁體中文）</option>
                        <option value="ja">日本語</option>
                    </select>
                </div>
                <!-- /.right-side -->
            </div>
            <!-- /.infos -->
        </div>
    </footer>
    <!-- /.site_footer -->

</body>

</html>