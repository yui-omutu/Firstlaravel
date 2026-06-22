<table>
    <tr>
      <th>id</th>
      <td><?php echo e($author->id); ?></td>
    </tr>
    <tr>
      <th>name</th>
      <td><?php echo e($author->name); ?></td>
    </tr>
    <tr>
      <th>age</th>
      <td><?php echo e($author->age); ?></td>
    </tr>
    <tr>
      <th>nationality</th>
      <td><?php echo e($author->nationality); ?></td>
    </tr>
    <tr>
      <th></th>
      <td>
        <form action="/delete?id=<?php echo e($author->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button>送信</button>
        </form>
    </td>
    </tr>
</table>
<?php /**PATH /var/www/resources/views/delete.blade.php ENDPATH**/ ?>