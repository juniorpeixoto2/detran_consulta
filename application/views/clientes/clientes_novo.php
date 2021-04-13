<div class='row'>
    <div class='col-md-12'>
        <div class=form-horizontal>
            <?php echo form_open() ?>




            <div class="erro">
                <div style='background: red; color: white;'><?php echo validation_errors(); ?></div>
            </div>
            <?php echo form_open('', ['class' => 'user']); ?>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <input name="nome" type="text" value="<?php echo set_value('nome'); ?>" class="form-control form-control-user" id="" placeholder="Nome" required="true">
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="cpf" value="<?php echo set_value('cpf'); ?>" class="form-control form-control-user cpf" id="" placeholder="CPF" required="true">
            </div>
            <div class="form-group">
                <input type="text" name="fone" value="<?php echo set_value('fone'); ?>" class="form-control form-control-user fone" id="" placeholder="Telefone" required="true">
            </div>

            <div class="form-group">
                <input type="text" name="logradouro" placeholder="Logradouro" required="true" value="<?php echo set_value('logradouro'); ?>" class="form-control form-control-user" id="">
            </div>

            <div class="form-group row">
                <div class="col-sm-8 mb-3 mb-sm-0">
                    <input type="text" name="cidade" placeholder="Cidade" required="true" value="<?php echo set_value('cidade'); ?>" class="form-control form-control-user" id="">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="uf" placeholder="UF" required="true" value="<?php echo set_value('uf'); ?>" class="form-control form-control-user" id="">
                </div>
            </div>

            <div class="form-group">
                <input type="text" name="cep" placeholder="CEP" required="true" value="<?php echo set_value('cep'); ?>" class="cep form-control form-control-user" id="">
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" name="email" value="<?php echo set_value('email'); ?>" minlength="6" class="form-control form-control-user" id="" placeholder="email" required="true">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="senha" type="password" value="<?php echo set_value('senha'); ?>" class="form-control form-control-user" id="" placeholder="Senha" required="true">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-contact btn-block">Cadastrar</button>
            </div>

            <p class="account-w3ls text-center text-da">
                Já Tem Cadastro?
                <a href="<?php echo site_url('site/login'); ?>">Login</a>
            </p>

            <?php echo form_close() ?>
        </div>
    </div>
</div>

<style>
    .erro p {
        padding: 5px;
    }
</style>

<script src="<?php echo base_url('assets'); ?>/js/selectize.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/jquery.mask.js"></script>
<script>
    $('.moeda').mask("#.##0,00", {
        reverse: true
    });
    $('.numero').mask("000000000");
    $('.moeda2').mask("#.##0,0000", {
        reverse: true
    });
    $('.data').mask("00/00/0000");
    $('.fone').mask("(99) 9 9999-9999", {
        clearIfNotMatch: true
    });
    $('.cpf').mask("000.000.000-00", {
        clearIfNotMatch: true
    });

    var options = {
        onComplete: function(cep) {
            $.get('<?php echo site_url('site/getCep'); ?>/' + cep, function(result) {

                console.log(result);
                if (result.erro) {
                    $('.bairro').val('')
                    $('.cidade').val('')
                    $('.estado').val('')
                } else {
                    $('.bairro').val(result.bairro)
                    $('.cidade').val(result.localidade)
                    $('.estado').val(result.uf)
                }


            });
        },
        clearIfNotMatch: true
    };
    $('.cep').mask("00.000-000", options);
</script>