<form>

<?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

    <div class="row">
        <div class="col">
            <label class="form-label" for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nome da marca" style="background-color: transparent;">
        </div>
    </div>
</form>
