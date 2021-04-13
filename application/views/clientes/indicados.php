<div class="row ">
    <div class="col-md-12">
        <table class='table table-sm table-bordered table-striped table-condensed table-hover'>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th>Data de Cadastro</th>
                    <th>Data de Ativação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($indicados->result() as $indicado) {
                ?>
                    <tr>
                        <td><?php echo $indicado->cli_nome; ?> </td>
                        <td><?php echo $indicado->cli_usuario; ?> </td>
                        <td><?php echo $this->util->data3($indicado->cli_dataCadastro); ?> </td>
                        <td> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</div>

<script>
    $('.indicados').addClass('active');
</script>