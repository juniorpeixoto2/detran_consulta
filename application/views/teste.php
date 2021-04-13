<?php echo form_dropdown('cln_uf', [], $object->c, ['class' => 'form-control', 'required' => 'true']); ?>

<?php
$post['teste'] = str_replace('.', '', $post['teste']);
$post['teste'] = str_replace(',', '.', $post['teste']);
?>



<?php
$this->util->data2();
$this->util->data3();
$this->util->moedaBrasil();
?>





<link href="<?php echo base_url('assets'); ?>/js/selectize.bootstrap3.css" rel="stylesheet">
<script src="<?php echo base_url('assets'); ?>/js/selectize.js"></script>




<script src="<?php echo base_url('assets'); ?>/js/jquery.mask.js"></script>
<script>
    $('.moeda').mask("#.##0,00", {reverse: true});
    $('.numero').mask("000000000");
    $('.moeda2').mask("#.##0,0000", {reverse: true});
    $('.data').mask("00/00/0000");
    $('.fone').mask("(99) 9 9999-9999", {clearIfNotMatch: true});
    $('.cpf').mask("000.000.000-00", {clearIfNotMatch: true});
    $('.cnpj').mask("00.000.000/0000-00", {clearIfNotMatch: true});




    var options = {
        onComplete: function (cep) {
            $.get('<?php echo site_url('site/getCep'); ?>/' + cep, function (result) {

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


<script>

    $('.cep2').mask('99.999-999', {
        completed: function () {
            $.ajax({
                type: 'GET',
                url: "<?php echo site_url('site/getCep'); ?>/" + this.val(),
                success: function (msg) {
                    if (msg.erro) {
                    } else {
                        $('.cidade').val(msg.localidade);
                        $('.endereco').val(msg.logradouro);
                        $('.bairro').val(msg.bairro);
                        $('.uf').val(msg.uf);
                    }
                },
            });
        }
    });

    $('.cpf').blur(function () {
        var cpf = $(this).val();
        validarCPF(cpf);
    })

    function validarCPF(cpf) {
        var filtro = /^\d{3}.\d{3}.\d{3}-\d{2}$/i;
        if (!filtro.test(cpf))
        {
            $('#cpf').val('');
            alert("CPF inválido. Tente novamente.", "error");
            return false;
        }

        cpf = cpf.replace(".", "")
        cpf = cpf.replace(".", "")
        cpf = cpf.replace("-", "");

        if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" ||
                cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" ||
                cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" ||
                cpf == "88888888888" || cpf == "99999999999")
        {
            $('#cpf').val('');
            alert("CPF inválido. Tente novamente.", "error");
            return false;
        }

        soma = 0;
        for (i = 0; i < 9; i++)
        {
            soma += parseInt(cpf.charAt(i)) * (10 - i);
        }

        resto = 11 - (soma % 11);

        if (resto == 10 || resto == 11)
        {
            resto = 0;
        }
        if (resto != parseInt(cpf.charAt(9))) {
            $('#cpf').val('');
            alert("CPF inválido. Tente novamente.", "error");
            return false;
        }

        soma = 0;
        for (i = 0; i < 10; i++)
        {
            soma += parseInt(cpf.charAt(i)) * (11 - i);
        }
        resto = 11 - (soma % 11);
        if (resto == 10 || resto == 11)
        {
            resto = 0;
        }

        if (resto != parseInt(cpf.charAt(10))) {
            $('#cpf').val('');
            alert("CPF inválido. Tente novamente.", "error");
            return false;
        }

        return true;
    }


</script>