<?php get_template_part ( 'header' ); ?>

<table class="table">
<tr>
    <th>ID</th>
    <th>Category</th>
</tr>
<?php
foreach(View::getData('categories') as $id => $name):
?>
<tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $name; ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php get_template_part ( 'footer' ); ?>
