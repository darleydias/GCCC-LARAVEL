<?php $__env->startSection('cabecalho'); ?>
  Processos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>
<?php if(!empty($msg)): ?>
<div class="alert alert-success"><?php echo e($msg); ?></div>
<?php endif; ?>
  <a href="<?php echo e(route('criar_processo')); ?>" class="btn btn-dark mb-2">Adicionar</a>
   <ul class="list-group"></ul> 
      <?php $__currentLoopData = $processos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <?php echo e($p->nome); ?>

          <form action="/processo/<?php echo e($p->id); ?>" method="post" onSubmit="return confirm('Tem certeza?')">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
          </form>
      </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/darley/gccc/resources/views/processos/index.blade.php ENDPATH**/ ?>