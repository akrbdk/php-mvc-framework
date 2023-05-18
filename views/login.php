<?php

/** @var $model User */
/** @var $this \App\Core\View */

$this->title = 'Login';

?>

<h1>Login</h1>

<?php use App\Core\Form\Form;
use App\Models\User;

$form = Form::begin('', 'post') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>

<?php echo Form::end() ?>
