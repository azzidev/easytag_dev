<?php
    include('partials/header.html');
    $name_error = "";
    $description_error = "";
    $class_error = "";
    $modal_error = "d-none";
    
    if(isset($_GET['error'])){
        if($_GET['error'] == "ERR00001"){
            $name_error = "Ops! Informe suas credenciais";
            $description_error = "Digite novamente suas informações de acesso, parece que você esqueceu alguma delas";
            $class_error = "warning";
            $modal_error = "d-block";
        }elseif($_GET['error'] == "ERR00002"){
            $name_error = "Ops! Não há contas associadas a este e-mail";
            $description_error = "Este e-mail não está asssociado a nenhuma conta. Você pode solicitar um orçamento <a href='https://brtoworldagency.com' class='text-primary' target='_blank'>clicando aqui</a>";
            $class_error = "warning";
            $modal_error = "d-block";
        }elseif($_GET['error'] == "ERR00003"){
            $name_error = "Ops! Credenciais inválidas";
            $description_error = "As informações informadas não coincidem com nenhuma conta cadastrada. Se esqueceu sua senha, recupere <a href='https://brtoworldagency.com' class='text-primary' target='_blank'>clicando aqui</a>";
            $class_error = "warning";
            $modal_error = "d-block";
        }
    }
?>
<div class="fixed-centered">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 d-flex align-items-center justify-content-center h-auto px-0">
                <img src="images/easytag.png" class="w-100">
            </div>
            <div class="col-lg-7 px-0">
                <form action="modules/auth-credential.php" method="POST">
                    <div class="row rounded-lg bg-dark-1 py-4">
                        <p class="px-3 py-2 mt-3">EasyTAG é uma solução para distribuição de ingresso digital, comanda pós-paga e pré-paga, loja virtual e muito mais.</p>
                        <h3 class="pt-3 pb-1 mx-3 mb-4 border-bottom border-danger">Insira suas credenciais para realizar o login</h3>
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label for="email-credential">E-mail</label>
                                <input type="text" class="form-control bg-transparent text-white" name="email-house" id="email-house">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group m-0">
                                <label for="password-credential">Senha</label>
                                <input type="password" class="form-control bg-transparent text-white" name="password-house" id="password-house">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 mb-4">
                        <button class="btn btn-primary w-100 py-3 border-0">Entrar no sistema</button>
                        </div>
                        <div class="col-md-12 text-center"><a href="" class="text-primary">Recuperar senha</a></div>
                        <div class="col-md-12 text-center mt-2">Para adquirir o EasyTAG, <a class="text-primary" href="">realize um orçamento conosco</a></div> 
                        <div class="col-md-12 text-center mt-2 mb-3">Uma solução <a href="https://brtoworldagency.com" class="text-primary" target="_blank">BR2World Agency</a></div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal backdrop-blur <?=$modal_error?> click_fademe">
    <div class="modal-dialog modal-xs modal-dialog-centered" role="document">
        <div class="modal-content bg-dark-1 shadow-lg border border-<?=$class_error?> py-4">
            <div class="modal-header border-0 pt-0">
                <h4 class="modal-title" id="exampleModalLongTitle"><?=$name_error?></h4>
            </div>
            <div class="modal-body bg-dark rounded-lg mx-2">
                <?=$description_error?>
            </div>
        </div>
    </div>
</div>

<?php
    include('partials/footer.html');
?>