<?php $__env->startSection('cabecalho'); ?>
  Criar Processo
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>
<form method="post">
  <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="nome" class="">Digite o nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <button class="btn btn-primary" style="margin-top:20px">Adicionar</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/darley/gccc/resources/views/processos/create.blade.php ENDPATH**/ ?>