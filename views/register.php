<?php

/** @var $model User */
/** @var $this \Akrbdk\PhpMvcCore\View */

$this->title = 'Register';

?>

<h1>Create an account</h1>

<?php use Akrbdk\PhpMvcCore\Form\Form;
use App\Models\User;

$form = Form::begin('', 'post') ?>

<?php echo $form->field($model, 'firstname') ?>
<?php echo $form->field($model, 'lastname') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField() ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php echo Form::end() ?>
