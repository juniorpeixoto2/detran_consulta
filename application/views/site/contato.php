<div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
        <li class="breadcrumb-item">
            <a href="<?php echo site_url() ?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Contato</li>
    </ol>
</div>

<div class="container">
    <div class="my-4 border-bottom">
        <h2 class="text-center text-uppercase h4">Contato</h2>
    </div>
    <div class="row mb-5">
        <div class="col">
            <div>
                <div class="screen-reader-response"></div>
                <?php echo form_open() ?>
                <div class="form-group">
                    <span class="wpcf7-form-control-wrap your-name"><input type="text" required name="nome" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control-lg" aria-required="true" aria-invalid="false" placeholder="Nome"></span>
                </div>
                <div class="form-group">
                    <span class="wpcf7-form-control-wrap your-email"><input type="email" required name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control form-control-lg" aria-required="true" aria-invalid="false" placeholder="E-mail"></span>
                </div>
                <div class="form-group">
                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" required name="assunto" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control-lg" aria-required="true" aria-invalid="false" placeholder="Assunto"></span>
                </div>
                <p><span class="wpcf7-form-control-wrap site-email"></span></p>
                <div class="form-group">
                    <span class="wpcf7-form-control-wrap your-message"><textarea name="mensagem" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Mensagem"></textarea></span>
                    <p></p>
                </div>
                <div class="form-group text-center">
                    <input type="submit" value="Enviar informações" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-lg"><span class="ajax-loader"></span>
                </div>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>