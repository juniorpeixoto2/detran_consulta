<div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
        <li class="breadcrumb-item">
            <a href="<?php echo site_url() ?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Recupera</li>
    </ol>
</div>
<div class="login-contect py-5">
    <div class="container py-xl-5 py-3">
        <div class="login-body">
            <div class="login p-4 mx-auto">
                <h5 class="text-center mb-4">Recuperação de Senha</h5>
                <div class="erro">
                    <div style='background: red; color: white;'><?php echo validation_errors(); ?></div>
                </div>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" autofocus placeholder="" required="">
                    </div>
                    <button type="submit" class="btn submit mb-4">Recuperar</button>
                    <p class="account-w3ls text-center text-da">
                        Não tem cadastro?
                        <a href="<?php echo site_url('site/cadastro'); ?>">Cadastrar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>