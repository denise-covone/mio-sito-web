<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Il mio viaggio a Firenze</title>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/miostile.css">
    <style>
        .firenze-container {
            max-width: 1140px;
            padding: 30px;
            margin: 50px auto;
        }

        .firenze-container .card {
            margin: 0 auto;
            border-radius: 15px;
        }

        /* Gestione del titolo delle card di Firenze */
        .firenze-container .card-title {
            color: black;
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        .firenze-container .card-body {
            border: none;
            background-color: rgba(224, 255, 255, 0.85);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-radius: 0 0 15px 15px;
            padding: 30px 25px;
            text-align: center;
            /* Centra i titoli e le descrizioni */
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            box-shadow: 0 10px 20px #1a617aa6;
            justify-content: flex-start;
        }

        .firenze-container .card-text {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #2c3e50;
            font-family: Arial, Helvetica, sans-serif;
            text-align: left;
            margin-top: 0;
            margin-bottom: auto;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 20px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            top: 85%;
            transform: translateY(-50%);
            height: auto;
        }

        .carousel-img-fixed {
            height: auto;
            width: 100%;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .carousel-inner {
            padding: 0;
        }
    </style>
</head>

<body>

    <div class="video-background">
        <video autoplay muted loop playsinline id="bg-video">
            <source src="video/Miglioramento_video_pagine_libro.mp4" type="video/mp4">
        </video>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="home-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                </svg>
            </a>

            <a href="pdf/itinerariofirenze.pdf" download class="btn rounded-pill px-4"
                style="font-family: Georgia, serif; font-size: 0.9rem; font-weight: 500; border: 2px solid #8c7671; color: #8c7671; background-color: transparent; transition: all 0.3s ease;"
                onmouseover="this.style.backgroundColor='#8c7671'; this.style.color='#fdfbf7';"
                onmouseout="this.style.backgroundColor='transparent'; this.style.color='#8c7671';">
                Itinerario per Firenze (PDF)
            </a>

        </div>
    </nav>

    <?php
    $viaggio = [
        [
            "titolo" => "<strong>Dante: padre della letteratura italiana</strong>",
            "descrizione" => "A tu per tu con Dante Alighieri e la sua Divina Commedia. Sullo sfondo appare il celebre affresco di Domenico di Michelino del 1465, custodito nella Cattedrale di Santa Maria del Fiore, dove il Sommo Poeta è raffigurato con Firenze, l'Inferno e il Monte del Purgatorio.",
            "immagine" => "img/firenze/deniedante.jpeg"
        ],

        [
            "titolo" => "<strong>Affresco del Giudizio Universale</strong>",
            "descrizione" => "Immenso ciclo pittorico che decora l'interno della cupola del Duomo di Firenze. Iniziato da Giorgio Vasari nel 1572 e completato da Federico Zuccari, rappresenta scene del Paradiso, dell'Inferno e del Giudizio Finale con straordinaria ricchezza di dettagli.",
            "immagine" => "img/firenze/cupola.png"
        ],

        [
            "titolo" => "<strong>Brunelleschi osserva la sua cupola</strong>",
            "descrizione" => "Statua dedicata a Filippo Brunelleschi, geniale architetto della cupola del Duomo di Firenze. Realizzata da Luigi Pampaloni nel 1830, l'opera lo ritrae seduto mentre contempla simbolicamente la sua più grande creazione rinascimentale.",
            "immagine" => "img/firenze/brunelleschi.jpg"
        ],

        [
            "titolo" => "<strong>La Nascita di Venere - Botticelli</strong>",
            "descrizione" => "Celebre capolavoro di Sandro Botticelli realizzato nella seconda metà del Quattrocento. Il dipinto raffigura la dea Venere emergere dalle acque su una conchiglia, simbolo ideale di bellezza, armonia e rinascita.",
            "immagine" => "img/firenze/venere.jpg"
        ],

        [
            "titolo" => "<strong>Salone dei Cinquecento a Palazzo Vecchio</strong>",
            "descrizione" => "Maestosa sala simbolo del potere fiorentino, il Salone dei Cinquecento fu ampliato da Giorgio Vasari per Cosimo I de' Medici. Le immense pareti affrescate celebrano le vittorie e la grandezza della Firenze rinascimentale.",
            "immagine" => "img/firenze/salonepalazzovecchio.jpg"
        ],

        [
            "titolo" => "<strong>Primavera - Botticelli</strong>",
            "descrizione" => "Tra i più celebri capolavori del Rinascimento italiano, la Primavera di Sandro Botticelli rappresenta una raffinata allegoria della rinascita della natura e dell'armonia. L'opera, ricca di figure mitologiche e dettagli floreali, incarna l'eleganza e la cultura della Firenze medicea.",
            "immagine" => "img/firenze/primavera.jpeg"
        ],

        [
            "titolo" => "<strong>Galleria dell'Accademia</strong>",
            "descrizione" => "Celebre museo fiorentino che custodisce il David di Michelangelo, capolavoro assoluto del Rinascimento. Le sue sale raccolgono opere che raccontano la grandezza artistica della Firenze medicea.",
            "immagine" => "img/firenze/david.jpeg"
        ],

        [
            "titolo" => "<strong>Palazzo Vecchio</strong>",
            "descrizione" => "Storico simbolo del potere civile di Firenze, Palazzo Vecchio domina Piazza della Signoria con la sua imponente Torre di Arnolfo. Ancora oggi conserva sale decorate, affreschi e testimonianze della storia medicea.",
            "immagine" => "img/firenze/palazzovecchio.jpg"
        ],

        [
            "titolo" => "<strong>Palazzo Pitti</strong>",
            "descrizione" => "Grandiosa residenza rinascimentale acquistata dalla famiglia Medici nel XVI secolo. Oggi ospita musei, gallerie d'arte e conduce agli splendidi Giardini di Boboli.",
            "immagine" => "img/firenze/palazzopitti.jpg"
        ],

        [
            "titolo" => "<strong>Palazzo Medici-Riccardi</strong>",
            "descrizione" => "Prima grande dimora della famiglia Medici, progettata da Michelozzo nel cuore di Firenze. Le sue eleganti architetture rappresentano uno dei simboli del Rinascimento fiorentino.",
            "immagine" => "img/firenze/palazzomediciriccardi.jpg"
        ],

        [
            "titolo" => "<strong>Campanile di Giotto</strong>",
            "descrizione" => "Elegante torre campanaria del Duomo di Firenze, progettata da Giotto nel 1334. Rivestito di marmi colorati, è considerato uno dei più belli esempi di gotico italiano.",
            "immagine" => "img/firenze/campanilegiotto.jpg"
        ],

        [
            "titolo" => "<strong>Giardino di Boboli</strong>",
            "descrizione" => "Storico giardino monumentale alle spalle di Palazzo Pitti, ricco di fontane, statue e viali panoramici. Un autentico museo a cielo aperto immerso nel verde della Firenze medicea.",
            "immagine" => "img/firenze/giardinodiboboli.jpg"
        ],
    ];
    ?>

    <div class="hero-title container text-center mt-5 mb-4">
        <h1 id="titolo_principale" class="mb-3">
            Firenze
        </h1>

        <h2 id="sottotitolo">
            il luogo in cui mi sono ritrovata, e solo allora ho capito che ero smarrita da tempo.
        </h2>
    </div>

    <div class="firenze-container">

        <div id="carouselViaggio" class="carousel slide" data-bs-ride="false">

            <div class="carousel-inner">

                <?php
                $chunks = array_chunk($viaggio, 3);

                // Recuperiamo l'indice ($chiave) per capire qual è il primo blocco
                foreach ($chunks as $chiave => $chunk) :
                    // Il primo blocco (indice 0) deve avere la classe 'active' per essere visibile all'avvio
                    $activeClass = ($chiave === 0) ? 'active' : '';
                ?>

                    <div class="carousel-item <?= $activeClass; ?>">

                        <div class="row g-4">

                            <?php foreach ($chunk as $valore) : ?>

                                <div class="col-lg-4">

                                    <div class="card h-100 shadow">

                                        <img
                                            class="card-img-top carousel-img-fixed"
                                            src="<?= $valore["immagine"]; ?>"
                                            alt="<?= strip_tags($valore["titolo"]); ?>">

                                        <div class="card-body">

                                            <h5 class="card-title">
                                                <?= $valore["titolo"]; ?>
                                            </h5>

                                            <p class="card-text">
                                                <?= $valore["descrizione"]; ?>
                                            </p>
                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselViaggio" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Precedente</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselViaggio" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Successivo</span>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>