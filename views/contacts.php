<?php

/** @var $model \App\models\ContactForm */
/** @var $this \App\Core\View */

use App\Core\Form\Form;
use App\Core\Form\TextareaField;

$this->title = 'Contacts page';

?>

<h1>Contacts page</h1>

<?php $form = Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end(); ?>
