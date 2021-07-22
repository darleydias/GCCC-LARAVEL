<?php $__env->startSection('cabecalho'); ?>
  Usuários
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>
  <a href="/user/criar" class="btn btn-dark mb-2">Adicionar</a>
   <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nome</th>
        </tr>
      </thead>     
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr><td><?php echo($u)?></td></tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/darley/gccc/resources/views/users/index.blade.php ENDPATH**/ ?>