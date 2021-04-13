<div class="row ">
    <?php echo form_open() ?>
    <div class="col-md-12">
        <label for="">Instituto </label>
        <div class="row">
            <textarea name="instituto" id="editor1" class="form-control" style="height: 500px !important; width: 100% !important;"><?php echo $param->par_instituto ?></textarea>
        </div>

        <br>
        <div class="row">
            <div class='col-md-4'>
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>