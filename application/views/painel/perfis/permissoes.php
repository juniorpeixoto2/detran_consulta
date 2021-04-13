<div class='row' >
    <div class='col-md-6'>
        <h3>Permissões do perfil</h3>
    </div>
    <div class='col-md-6 text-right'>
        <a class='btn btn-primary' href='<?php echo site_url('painel/perfis') ?>'>
            Voltar
        </a>
    </div>
</div>
<hr>
<div class='row' style="padding: 10px;">
    <div class='col-md-12'>
        <?php echo form_open(); ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="submit" value="SALVAR PERMISSÕES" class="btn btn-primary"><i class="fa fa-save"></i> Salvar permissões</button>
            </div>
            <div class="col-md-4"></div>
        </div>
        <hr>
        <div class="row">
            <ul class="nav nav-pills" role="tablist">
                <?php
                $excluir = array(
                    'PAINEL'
                );
                $i = 0;
                foreach ($classes as $classe) {
                    $class = mb_strtoupper($classe['met_classe']);

                    if (in_array($class, $excluir)) {
                        continue;
                    }
                    $i++;
                    $active = "";
                    if ($i == 1) {
                        $active = "active";
                    }
                    ?>
                    <li role="presentation"  class="<?php echo $active; ?> nav-item ">
                        <a href="#<?php echo $class; ?>" aria-controls="<?php echo $class; ?>" class="nav-link <?php echo $active; ?>" role="tab" data-toggle="tab">
                            <?php echo $class; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="row">


            <div class="tab-content">
                <?php
                $i = 0;
                foreach ($classes as $classe) {
                    $class = mb_strtoupper($classe['met_classe']);
                    if (in_array($class, $excluir)) {
                        continue;
                    }
                    $i++;
                    $active = "";
                    if ($i == 1) {
                        $active = "active";
                    }
                    ?>
                    <div role="tabpanel" class="tab-pane <?php echo $active; ?>" id="<?php echo $class; ?>">
                        <hr>
                        <ul>
                            <?php
                            foreach ($metodos as $metodo) {
                                if ($metodo['met_classe'] == $classe['met_classe']) {
                                    ?>
                                    <li>
                                        <label style="">
                                            <input type='checkbox' name="perm_id[]" value="<?php echo $metodo['met_id']; ?>" <?php if (in_array($metodo['met_id'], $permissoes)) echo 'checked'; ?> >
                                            <?php echo $class . ' / ' . mb_strtoupper($metodo['met_metodo']); ?>
                                        </label>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>