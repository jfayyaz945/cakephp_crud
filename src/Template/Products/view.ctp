<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table border="1" align="center">
    <tr >
    <th colspan="3"><h1>Products Details</h1></th>
    </tr>
    <tr>      
        <th>Name</th>
        <th>Code</th>
        <th>Price</th>
    </tr>
    <tr>
        <td><?= h($products->name)  ?></td>
        <td>
            <?= h($products->code) ?>
        </td>
        <td>
            <?= h($products->price) ?>
        </td>
    </tr>
     <tr>
        <td colspan="3" align="center"> <?= $this->Html->link('Back', ['controller' => 'Products','action' => 'index']) ?></td>       
    </tr>
</table>
</body>