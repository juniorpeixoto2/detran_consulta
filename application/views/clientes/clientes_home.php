<hr style="margin: 0 0 0 0">
<div class='row'>
    <div class='col-md-11'>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo $tab == 'editar_dados' ? 'active' : ''; ?>" href="<?php echo site_url('clientes/editar_dados/' . $id); ?>">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo $tab == 'trades' ? 'active' : ''; ?>" href="<?php echo site_url('clientes/trades/' . $id); ?>">Trades</a>
            </li>

        </ul>
    </div>
    <div class='col-md-1 text-right'>
        <a class='btn btn-primary' href='<?php echo site_url('clientes') ?>'>
            Voltar
        </a>
    </div>
</div>
<hr style="margin: 0 0 10px 0">
<?php $this->load->view($pagina2) ?>