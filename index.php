

<!doctype html>
<html lang="en">
    <head>

        <title>JUKEBOX</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Style CSS -->
        <link rel="stylesheet" href="./asset/css/reset.css">
        <link rel="stylesheet" href="./asset/css/style.css">
        <!-- <link rel="stylesheet" href="./asset/css/media-queries.css"> -->

        <!-- Font style -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

        <!-- Icon style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Favicon -->
        <!-- <link rel="icon" type="image/x-icon" href="./asset/img/favicon.ico"> -->

        <!-- VuejS -->
        <script src="https://unpkg.com/vue@3" defer></script>
        
        <!-- AXIOS -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>

        <!-- Javascript -->
        <script src="./asset/js/main.js" defer></script>

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous" defer></script>

        
    </head>


    <body>

        <div class="col-8 m-auto d-flex flex-column justify-content-center align-items-center h-100" id="app">

            <!-- Title -->
            <h1>JUKEBOX</h1>

            <!-- Dischi -->
            <div class=" col-12 d-flex flex-wrap pt-3 pb-3 justify-content-evenly gap-2" id="container">

                <!-- Disco -->
                <div v-for="(item, index) in data" key="index" class="card col-3 p-2 text-center" @click="showcard(index)">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img :src="item.poster" alt="">
                    <h5>{{item.title}}</h5>
                    <h5>{{item.author}}</h5>
                    <h5>{{item.year}}</h5>
                </a>
                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body card text-center">
                        <img :src="dettagliodisco.poster" alt="">
                        <h5>{{dettagliodisco.title}}</h5>
                        <h5>{{dettagliodisco.author}}</h5>
                        <div class="d-flex justify-content-center gap-3">
                            <h5>YEAR: {{dettagliodisco.year}}</h5>
                            <h5>GENERE: {{dettagliodisco.genre}}</h5>
                        </div>
                    </div>
                </div>
                </div>
            </div>



        </div>

    </body>
    </html>