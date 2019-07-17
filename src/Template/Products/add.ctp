<h1>Add Product</h1>
<?php
    echo $this->Form->create($product);
    echo $this->Form->input('name');
    echo $this->Form->input('code');
    echo $this->Form->input('price');
    echo $this->Form->button(__('Save Product'));
    echo $this->Form->end();
?>