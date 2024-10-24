<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/img/logo-cci-rounded.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Kit prévention</title>
</head>

<body>
    <!--NAVBAR-->
    <header></header>

    <!-- MODAL INFORMATION PROJETS -->
    <div class="modal fade bg-dark bg-opacity-75" id="modalInformations" tabindex="-1" aria-labelledby="modalInformationsLabel" aria-hidden="true">
        <div class="modal-dialog custom-modal-dialog" role="document">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalInformationsLabel">Bienvenue</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Ce site a été créé dans le cadre d'un projet de table ronde sur les IA, il
                    permettra d'en apprendre plus sur le fonctionnement des IA, les dangers et les bienfaits de cette
                    nouvelle technologie.</div>
            </div>
        </div>

    </div>

    <!-- TITRE -->

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-xl-2 col-sm-12">
                <img class="w-50" src="./assets/img/cci-campus.png" alt="logo-cci">
            </div>
            <div class="col-xl-7 col-sm-12">
                <h1 class="display-6 align-center archivo-black-regular">Kit de prévention sur les IA</h1>
            </div>
            <div class="col-xl-3 col-sm-12">
                <img class="w-75" src="./assets/img/métropole.png" alt="logo-métropole">
            </div>
        </div>
    </div>


    <!-- CARTES BENTO -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card clickable rounded-5 shadow">
                        <a data-bs-toggle="modal" data-bs-target="#decouvrirModal"><img class="card-img rounded-5" src="/assets/img/decouvrir.png"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card clickable rounded-5 shadow">
                        <a data-bs-toggle="modal" data-bs-target="#listeiaModal"><img class="card-img rounded-5" src="/assets/img/listeia.png"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card clickable rounded-5 shadow">
                        <a data-bs-toggle="modal" data-bs-target="#dangerModal"><img class="card-img rounded-5" src="/assets/img/danger.png"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card clickable rounded-5 shadow">
                        <a data-bs-toggle="modal" data-bs-target="#remplacementModal"><img class="card-img rounded-5" src="/assets/img/remplacement.png"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card clickable rounded-5 shadow">
                        <a data-bs-toggle="modal" data-bs-target="#actualiteModal"><img class="card-img rounded-5" src="/assets/img/actualites.png"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card clickable rounded-5 shadow">
                        <a data-bs-toggle="modal" data-bs-target="#refModal"><img class="card-img rounded-5" src="/assets/img/ref.png"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 d-flex align-items-stretch">
                    <div class="card clickable rounded-5 shadow">
                        <div class="card-body p-3">
                            <h5 class="card-title">Capsules audio</h5>
                            <div class="container">
                                <div class="row mb-xl-4 mb-sm-1">
                                    <label for="player1">Qu'est-ce que le deepfake ?</label>
                                    <audio name="player1" class="audio-controls-1" type='audio/mp3' src="/assets/audio/capsule-deepfake.mp3" controls></audio>
                                </div>
                                <div class="row">
                                    <label for="player2">L'IA et l'école</label>
                                    <audio name="player2" class="audio-controls-2" type='audio/mp3' src="/assets/audio/capsule-soltani-nolwen.mp3" controls></audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card clickable rounded-5 shadow">
                        <a href="/assets/Quizz-IA-Table-Rondes-CCI-GARD.pdf" target="_blank"><img class="card-img rounded-5" src="/assets/img/quizz.png"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card clickable rounded-5 shadow">
                        <a data-bs-toggle="modal" data-bs-target="#videoModal"><img class="card-img rounded-5" src="/assets/img/kit-video.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© 2024 CCI GARD NIMES</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img class="bi me-2" src="/assets/img/cci-campus.png" height="100" alt="" />
        </a>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="/index.php" class="nav-link px-2 text-body-secondary">Accueil</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Carte</a></li>
            <li class="nav-item"><a href="/faq.html" class="nav-link px-2 text-body-secondary">FAQ</a></li>
            <li class="nav-item"><a href="/partenaires.php" class="nav-link px-2 text-body-secondary">Partenaires</a>
            </li>
        </ul>
    </footer>
    <script src="/js/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        window.onload = function () {
            var myModal = new bootstrap.Modal(document.getElementById("modalInformations"));
            myModal.show();
        };
    </script>

</body>
<!-- MODAL DECOUVRIR -->
<?php include 'assets/modals/decouvrir.php' ?>
<?php include 'assets/modals/liste.php' ?>
<?php include 'assets/modals/actualite.php' ?>
<?php include 'assets/modals/danger.php' ?>
<?php include 'assets/modals/ref.php' ?>
<?php include 'assets/modals/remplacement.php' ?>
<?php include 'assets/modals/video.php' ?>

</html>