<?php $__env->startSection('cabecalho'); ?>
  Criar usuário
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>
<form method="post">
    <div class="form-group">
        <label for="nome">Digite o nome</label>
        <input type="text" class="form-control" name="nome" id="nome"/>
    </div>
    <div class="btn btn-primary" style="margin-top:20px">Adicionar</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/darley/gccc/resources/views/users/create.blade.php ENDPATH**/ ?>