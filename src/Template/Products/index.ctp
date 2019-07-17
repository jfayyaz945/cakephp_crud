<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    <table border="1" align="center">
        <tr >
        <th colspan="4"><h1>Products</h1></br>
        
        <p><?= $this->Html->link("Add New Product", ['controller'=>'Products','action' => 'add']) ?></p></br></br>
        <span style="color:red"><?= $this->Flash->render('flash') ?></span></br>
        </th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Code</th>
            <th>Price</th>
        </tr>
        
        <!-- Here is where we iterate through our $products query object, printing out product info -->
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product->id ?></td>
            <td>
                <?= $this->Html->link($product->name, ['controller' => 'Products','action' => 'view', $product->id]) ?>
            </td>
            <td>
                <?= $product->code ?>
            </td>
            <td>
                <?= $product->price ?>
            </td>
             <td>
               
               <?= $this->Html->link('Edit', ['action' => 'edit', $product->id]) ?>
                <?= $this->Form->postLink(
                    'Delete',
                    ['action' => 'delete', $product->id],
                    ['confirm' => 'Are you sure?'])
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </body>
    </html>