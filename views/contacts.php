<?php

/** @var $model \App\models\ContactForm */
/** @var $this \Akrbdk\PhpMvcCore\View */

use Akrbdk\PhpMvcCore\Form\Form;
use Akrbdk\PhpMvcCore\Form\TextareaField;

$this->title = 'Contacts page';

?>

<h1>Contacts page</h1>

<?php $form = Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end(); ?>
