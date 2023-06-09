<?php
    include('partials/header.html');
    include('partials/sidenav.php');
?>
    <div class="main-content">
        <?php
            include('partials/mobile-nav.html');
        ?>

        <div class="container pt-4 mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-12 px-0">
                    <div class="card post-item bg-transparent border-0 mb-5">
                        <div class="widget">
                            <div class="d-flex align-items-center">
                                <h2 class="widget-title text-white d-inline-block">Produtos</h2>               
                                <div class="card post-item bg-transparent border-0 ml-5">
                                    <div>
                                        <div class="card-img-top rounded-pill p-3 card-product">
                                            <h3 class="mb-0 text-white">Criar novo produto</h3>
                                        </div>
                                    </div>
                                </div>          
                                <div class="card post-item bg-transparent ml-5 border-0">
                                    <div>
                                        <div class="card-img-top rounded-pill p-3 bg-success cursor-pointer scale">
                                            <h3 class="mb-0 text-black">Adicionar novo produto</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-3 pb-3 bg-transparent rounded-lg">
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-3">
                                        <h3>Dados da comanda e convidado</h3>
                                        <p>Você pode escanear um QRCode para identificar o convidado ou solicitar o CPF.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">CPF</label>
                                            <input type="text" class="form-control" value="999.999.999-99">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Chave única</label>
                                            <input type="text" class="form-control" value="1PKwhdcNtRiuTpOpZkLL6wbCh1DSYiGjFjDxhVGnKZiQ6DdNVoASRnmt9Q9P" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Valor da comanda</label>
                                            <input type="text" class="form-control" value="89,90" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 data-bs-toggle="collapse" href="#ticket-description" role="button" aria-expanded="true" aria-controls="ticket-description">
                                            Ver comanda detalhada

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right ml-1" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0v6z"/>
                                            </svg>
                                        </h3>
                                        <div class="collapse" id="ticket-description">
                                            <div class="card card-body bg-dark-1 mt-3 pt-0">
                                                1x Gin Tônica
                                                2x Agua
                                                1x Whisky com RedBull
                                                1x Whisky com Vibe

                                                Total estimado: R$ 89,90
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3 mb-3">
                                        <h3>Produtos</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-dark-1">
                                            <img src="https://th.bing.com/th/id/OIP.HEc4kbRSpl9L4sZX4Z0axwHaHa?pid=ImgDet&rs=1" alt="" class="rounded-lg px-3 py-3">
                                            <p class="py-2 px-2 text-center">Pochete Iceland</p>
                                            <p class="small py-1 px-1 text-center">R$ 49,90</p>
                                            <div class="number-input py-3">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity text-white bg-transparent border-0" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-dark-1">
                                            <img src="https://th.bing.com/th/id/OIP.m7Kvwh6uKH-7hk8zg84H_QHaHa?pid=ImgDet&rs=1" alt="" class="rounded-lg px-3 py-3">
                                            <p class="py-2 px-2 text-center">Eco Copo Iceland</p>
                                            <p class="small py-1 px-1 text-center">R$ 19,90</p>
                                            <div class="number-input py-3">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity text-white bg-transparent border-0" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-3">
                                        <div class="card bg-dark-1">
                                            <img src="https://i.pinimg.com/originals/b7/e1/1a/b7e11ac1f90372b964cb7f9ff59866f0.jpg" alt="" class="rounded-lg px-3 py-3">
                                            <p class="py-2 px-2 text-center">Narguilé Nay S. Essence</p>
                                            <p class="small py-1 px-1 text-center">R$ 32,90</p>
                                            <div class="number-input py-3">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity text-white bg-transparent border-0" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-dark-1">
                                            <img src="https://th.bing.com/th/id/OIP.TUARmCbDH-GxYwwTxWSM_wHaHa?pid=ImgDet&rs=1" alt="" class="rounded-lg px-3 py-3">
                                            <p class="py-2 px-2 text-center">Narguilé Zomo Essence</p>
                                            <p class="small py-1 px-1 text-center">R$ 24,90</p>
                                            <div class="number-input py-3">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity text-white bg-transparent border-0" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-3 mt-3">
                                        <div class="card bg-dark-1">
                                            <img src="https://th.bing.com/th/id/OIP.HEc4kbRSpl9L4sZX4Z0axwHaHa?pid=ImgDet&rs=1" alt="" class="rounded-lg px-3 py-3">
                                            <p class="py-2 px-2 text-center">Pochete Iceland</p>
                                            <p class="small py-1 px-1 text-center">R$ 49,90</p>
                                            <div class="number-input py-3">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity text-white bg-transparent border-0" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <div class="card bg-dark-1">
                                            <img src="https://th.bing.com/th/id/OIP.m7Kvwh6uKH-7hk8zg84H_QHaHa?pid=ImgDet&rs=1" alt="" class="rounded-lg px-3 py-3">
                                            <p class="py-2 px-2 text-center">Eco Copo Iceland</p>
                                            <p class="small py-1 px-1 text-center">R$ 19,90</p>
                                            <div class="number-input py-3">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity text-white bg-transparent border-0" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-3 mt-3">
                                        <div class="card bg-dark-1">
                                            <img src="https://i.pinimg.com/originals/b7/e1/1a/b7e11ac1f90372b964cb7f9ff59866f0.jpg" alt="" class="rounded-lg px-3 py-3">
                                            <p class="py-2 px-2 text-center">Narguilé Nay S. Essence</p>
                                            <p class="small py-1 px-1 text-center">R$ 32,90</p>
                                            <div class="number-input py-3">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity text-white bg-transparent border-0" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <div class="card bg-dark-1">
                                            <img src="https://th.bing.com/th/id/OIP.TUARmCbDH-GxYwwTxWSM_wHaHa?pid=ImgDet&rs=1" alt="" class="rounded-lg px-3 py-3">
                                            <p class="py-2 px-2 text-center">Narguilé Zomo Essence</p>
                                            <p class="small py-1 px-1 text-center">R$ 24,90</p>
                                            <div class="number-input py-3">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity text-white bg-transparent border-0" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include('partials/footer.html');
?>