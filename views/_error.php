<?php

/** @var $exception \Exception */
/** @var $this \App\Core\View */

$this->title = 'Error page';

?>

<h1>
    <?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?>
</h1>
