<h1>Create an account</h1>

<?php $form = \App\Core\Form\Form::begin('', 'post') ?>

    <?php echo $form->field($model, 'firstname') ?>
    <?php echo $form->field($model, 'lastname') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>

    <button type="submit" class="btn btn-primary">Submit</button>

<?php echo \App\Core\Form\Form::end() ?>
