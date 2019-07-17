<h1>Edit Product</h1>
    <?php
        echo $this->Form->create($product);
        echo $this->Form->input('name');
        echo $this->Form->input('code');
        echo $this->Form->input('price');
        echo $this->Form->button(__('Save Article'));
        echo $this->Form->end();
    ?>