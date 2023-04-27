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
                                <h2 class="widget-title text-white d-inline-block">Precisa modificar algo?</h2>
                                <div class="card post-item bg-transparent border-0 ml-5">
                                    <div>
                                        <div class="card-img-top rounded-0 p-3 bg-warning cursor-pointer scale">
                                            <h2 class="mb-0 text-white">Trocar senha</h2>
                                        </div>
                                    </div>
                                </div>          
                                <div class="card post-item bg-transparent ml-5 border-0">
                                    <div>
                                        <div class="card-img-top rounded-0 p-3 bg-danger cursor-pointer scale">
                                            <h2 class="mb-0 text-black">Sair</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-3 pb-3 bg-dark rounded-lg">
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-3">
                                        <h3>Dados da casa</h3>
                                        <p>Modifique as informações da casa</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="name-house">Nome da casa</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="cnpj-house">CNPJ da casa</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="hours-house">Horário de abertura</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="days-house">Dias de funcionamento</label>
                                            <input type="text" class="form-control">
                                            <!-- Inserir modulo de inputtag -->
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="days-house">Estilos musicais</label>
                                            <input type="text" class="form-control">
                                            <!-- Inserir modulo de inputtag -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="px-3 py-1 mb-3 border-bottom border-danger w-auto">Localização da casa</h3>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="cep-house">CEP</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="complement-house">Número</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="complement-house">Complemento</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="street-house">Rua</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="city-house">Cidade</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="state-house">Estado</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary py-3 w-100 border-0">Atualizar dados</button>
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