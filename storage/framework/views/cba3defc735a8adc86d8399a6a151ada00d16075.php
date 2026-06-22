<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
<?php $__env->startSection('title', 'add.blade.php'); ?>

<?php $__env->startSection('content'); ?>
<form action="" method="post">
  <table>
  <?php echo csrf_field(); ?>
    <tr>
      <th>name</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>age</th>
      <td><input type="text" name="age"></td>
    </tr>
    <tr>
      <th>nationality</th>
      <td><input type="text" name="nationality"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/add.blade.php ENDPATH**/ ?>