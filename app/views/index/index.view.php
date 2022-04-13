<?php get_template_part ( 'header' ); ?>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Barcode</th>
</tr>
<?php
foreach(View::getData('listProducts') as $p):
?>
<tr>
    <td><?php echo $p->id; ?></td>
    <td><?php echo $p->name; ?></td>
    <td><?php echo $p->qty; ?></td>
    <td><?php echo $p->price; ?></td>
    <td><?php echo $p->barcode; ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php get_template_part ( 'footer' ); ?>
