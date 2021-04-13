<a href="<?php echo site_url('painel/backups/fazerBackup'); ?>" class="btn btn-primary btn-lg">
    Fazer Backup Agora
</a>
<hr>
<ul>
    <?php
    $this->load->helper('directory');
    $mapa = directory_map($pasta);
    sort($mapa, 1);
    foreach ($mapa as $map) {
        ?>
        <li style="margin-top: 5px;">
            <?php echo $map; ?>
            &nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url('painel/backups/download/' . $map); ?>" target="_blanck" class="btn btn-primary btn-xs">
                &nbsp;&nbsp;&nbsp;
                <span class="fa fa-download"></span>
                &nbsp;&nbsp;&nbsp;
            </a>
            &nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url('painel/backups/excluir/' . $map); ?>" class="btn btn-primary btn-xs">
                &nbsp;&nbsp;&nbsp;
                <span class="fa fa-trash-o"></span>
                &nbsp;&nbsp;&nbsp;
            </a>
        </li>
    <?php } ?>
</ul>