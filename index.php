<?php
    include('partials/header.html');
    include('partials/sidenav.php');

    session_start();
    if(!isset($_SESSION['ucn_house'])){
        session_destroy();
        header('Location: login.php');
    }
?>
    <div class="main-content">
        <?php
            include('partials/mobile-nav.html');
        ?>

        <div class="container pt-4 mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-7 px-0">
                    <div class="card post-item bg-transparent border-0 mb-5">
                        <div class="widget">
                            <div class="d-flex align-items-center">
                                <div class="ping pr-2">
                                    <div class="positive bg-success rounded-pill px-2 text-white" title="Aberta">A</div>
                                    <div class="negative bg-danger rounded-pill px-2 text-white d-none" title="Fechada">F</div>
                                </div>
                                <h2 class="widget-title text-white d-inline-block pb-0">Casa atualmente aberta</h2>
                            </div>
                            <p class="mt-4"><!--Não há eventos próximos-->Próximo evento acontecerá dia 20/05/2023 às 21:00</p>

                            <div class="card mt-3 pb-3 bg-dark rounded-lg">
                                <div class="row mt-4">
                                    <div class="col-12 shadow rounded-lg px-2 py-4">
                                        <div class="row align-items-center">
                                            <div class="col-8"><h2>Iceland | Mc Pipokinha ft. Mc Daniel | 31/03/2023</h2></div>
                                            <div class="col-4 text-center"><img src="images/music.jpg" alt="" class="w-100 rounded-lg shadow-lg"></div>
                                        </div>
                                    </div>
                                    <div class="col-6 shadow rounded-lg px-2 py-4">
                                        <div class="row align-items-center">
                                            <div class="col-9"><h3>Convidados</h3></div>
                                            <div class="col-3 text-center"><h3>867</h3></div>
                                        </div>
                                    </div>
                                    <div class="col-6 shadow rounded-lg px-2 py-4">
                                        <div class="row align-items-center">
                                            <div class="col-9"><h3>Presentes</h3></div>
                                            <div class="col-3 text-center"><h3>962</h3></div>
                                        </div>
                                    </div>
                                    <div class="col-6 shadow rounded-lg px-2 py-4">
                                        <div class="row align-items-center">
                                            <div class="col-9"><h3>Comandas Abertas</h3></div>
                                            <div class="col-3 text-center"><h3>0</h3></div>
                                        </div>
                                    </div>
                                    <div class="col-6 shadow rounded-lg px-2 py-4">
                                        <div class="row align-items-center">
                                            <div class="col-9"><h3>Comandas Fechadas</h3></div>
                                            <div class="col-3 text-center"><h3>356</h3></div>
                                        </div>
                                    </div>
                                    <div class="col-6 shadow rounded-lg px-2 py-4">
                                        <div class="row align-items-center">
                                            <div class="col-9"><h3>Produtos Disponíveis</h3></div>
                                            <div class="col-3 text-center"><h3>23</h3></div>
                                        </div>
                                    </div>
                                    <div class="col-6 shadow rounded-lg px-2 py-4">
                                        <div class="row align-items-center">
                                            <div class="col-9"><h3>Produtos Vendidos</h3></div>
                                            <div class="col-3 text-center"><h3>12</h3></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-md-12 fixed-workspace pt-4 mt-5">
                    <div class="widget text-center">
                        <h2 class="widget-title text-white d-inline-block">Vamos criar algo novo?</h2>
                        <p class="mt-4">Escolha um card, você pode criar um novo evento, ingresso, comanda, etc.</p>
                        <div class="row px-3 py-3 d-flex align-items-center justify-content-center">
                            <div class="card post-item bg-transparent border-0 mb-5">
                                <div>
                                    <div class="card-img-top rounded-pill p-3 card-event">
                                        <h2 class="mb-0 text-white">Criar novo evento</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card post-item bg-transparent border-0 mb-5">
                                <div>
                                    <div class="card-img-top rounded-pill p-3 card-vouncher">
                                        <h2 class="mb-0 text-black">Criar novo ingresso</h2>
                                    </div>
                                </div>
                            </div>                            
                            <div class="card post-item bg-transparent border-0 mb-5">
                                <div>
                                    <div class="card-img-top rounded-pill p-3 card-drink">
                                        <h2 class="mb-0 text-black">Criar nova comanda</h2>
                                    </div>
                                </div>
                            </div>                       
                            <div class="card post-item bg-transparent border-0 mb-5">
                                <div>
                                    <div class="card-img-top rounded-pill p-3 card-product">
                                        <h2 class="mb-0 text-white">Criar novo produto</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal backdrop-blur d-block" id="newEventModal" tabindex="-1" role="dialog" aria-labelledby="newEventModal" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content bg-dark-1 shadow-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Conte mais sobre seu evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-dark rounded-lg mx-2 my-1">
                    <form method="POST" id="new-event-form">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name-event">Nome do evento</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="start-date-event">Dia e horário do evento</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="end-date-event">Dia e horário da finalização</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="lot-config">Configurações de lotes</label>
                                            <div class="d-flex">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="unique" id="unique-lot-check" onchange="defineLotConfig(this)">
                                                    <label class="form-check-label" for="unique-lot-check">
                                                        Lote único
                                                    </label>
                                                </div>
                                                <div class="form-check ml-3">
                                                    <input class="form-check-input" type="checkbox" value="manual" id="manual-value-lot-check" onchange="defineLotConfig(this)">
                                                    <label class="form-check-label" for="manual-value-lot-check">
                                                        Valor manual por lote
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lot-sell">Quantidade de lotes</label>
                                            <input type="number" class="form-control" id="lot-units" name="lot-units" oninput="defineLotConfig(this)">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="value-sell">Valor da venda</label>
                                            <input type="number" class="form-control" id="lot-sell" name="lot-sell">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="percentage-sell">Valor em % por lote</label>
                                            <select class="form-control" id="lot-percent" name="lot-percent">
                                                <option value="" disabled selected>Escolha uma opção</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="percent-demo d-none">
                                        <p class="bg-dark text-white px-3 py-2 pb-3">
                                            1º Lote - 45 reais<br>
                                            2º Lote - 60 reais<br>
                                            3º Lote - 75 reais
                                        </p>
                                    </div>
                                    <div class="manual-inputs d-contents d-none">
                                        <h3 class="w-100 px-3 my-2 mt-3">Lote 1</h3>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Valor do lote</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Último dia de venda</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description-event">Descrição do evento</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="place-event">Local do evento</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled selected>Escolha uma opção</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                                <div class="image-event w-100">
                                    <div class="load-image-default">
                                        <h2 class="text-center text-primary px-3 py-5 border border-3 border-secondary mb-3 rounded-lg">
                                            Carregue uma<br>imagem
                                        </h2>
                                    </div>
                                    <div class="image-uploaded d-none">
                                        <img src="" alt="" id="uploaded-img">
                                    </div>
                                </div>
                                <div class="upload-image-event d-flex align-items-center justify-content-center flex-column">
                                    <p class="text-center">Defina uma imagem para chamar atenção do seu público</p>
                                    <button class="btn-primary px-2 py-2 border-0 mt-3">Enviar uma imagem</button>
                                <input type="file" class="form-control d-none"> 
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary border-0" onclick="newEvent()">Criar evento</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal backdrop-blur">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content bg-dark-1 shadow-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Quem será o convidado?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-dark rounded-lg mx-2 my-1">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name-guest">Nome do convidado</label>
                                        <input type="text" class="form-control" id="name-guest" name="name-guest">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpg-guest">CPF do convidado</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date-birthday">Data de nascimento</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email-guest">E-mail do convidado</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="phone-guest">Celular do convidado</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="event-guest">Qual evento estará presente?</label>
                                        <select name="" id="" class="form-control">
                                            <option value="" disabled selected>Escolha um evento</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                            <div class="qrcode-generated d-none">
                                <img src="" alt="">
                            </div>
                            <div class="qrcode-default d-flex align-items-center justify-content-center">
                                <img src="images/favicon.png" class="w-50">
                            </div>
                            <p class="text-center mt-3">O QRCode é gerado dinamicamente, assim que terminar, o convidado poderá acessar o ingresso digital.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary border-0">Gerar ingresso</button>
                </div>
            </div>
        </div>
    </div>

<?php
    include('partials/footer.html');
?>