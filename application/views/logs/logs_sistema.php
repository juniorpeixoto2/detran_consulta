<div class="box box-primary">
    <div class="box-header ui-sortable-handle">
        <i class="fa fa-align-justify"></i>

        <h3 class="box-title"><?php echo ucfirst($titulo); ?></h3>
        <div class="box-tools pull-right">
            <a class='btn btn-primary' href='<?php echo site_url('logs') ?>'>
                Voltar
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12" style="min-height: 200px;">
            <hr>
            <?php
            $this->load->helper('directory');
            $maps = directory_map(APPPATH . 'logs');
            sort($maps);
            foreach ($maps as $map) {
                if (is_array($map)) {
                    continue;
                }

                if ($map == 'index.html') {
                    continue;
                }
                ?>
                <a href="<?php echo site_url('logs/load/' . $map); ?>" style="margin: 5px;" class="btn btn-primary">
                    <?php echo $map; ?>
                </a>
                <?php
            }
            ?>
        </div>
    </div>
</div>