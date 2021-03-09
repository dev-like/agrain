<?php $__env->startSection('page-caminho'); ?>
Produtos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
Informações Nutricionais
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Sweet Alert css -->
  <link href="<?php echo e(asset('template/plugins/sweet-alert/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-12">

  <div class="card-box">
    <a href="<?php echo e(route('informacaonutricional.create',$produto)); ?>" style="margin-bottom: 15px" class="btn btn-info waves-effect waves-light pull-right"><i class="fa fa-plus m-r-5"></i> Adicionar</a>
      <h4 class="m-t-0 header-title">Listagem de Informações Nutricionais</h4>

    <table class="table table-striped">
        <thead>
        <tr>
          <th>Garantias</th>
          <th>p/p (%)</th>
          <th>p/v (g/L)</th>
        </tr>
        </thead>
        <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $informacaonutricional; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informacaonutricional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($informacaonutricional -> elemento); ?></td>
                <td><?php echo e($informacaonutricional -> pp); ?></td>
                <td><?php echo e($informacaonutricional -> pv); ?></td>
                <td width="10%">
                  
                    <span class="hint--top" aria-label="Editar Infomação Nutricional"><a href="<?php echo e(route('informacaonutricional.edit', $informacaonutricional->id)); ?>" style="border-radius: 50%" class="btn btn-warning waves-effect"> <i class="fa fa-pencil m-r-5"></i></a></span>
                    <span class="hint--top" aria-label="Deletar Informação Nutricional"><button type="button" onclick="goswet(<?php echo e($informacaonutricional->id); ?>, '<?php echo e($informacaonutricional->nome); ?>')" style="border-radius: 50%" class="btn btn-danger waves-effect"> <i class="fa fa-trash m-r-5"></i></button></span>
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5" class="text-center">Nenhum Item cadastrado</td>
            </tr>
          <?php endif; ?>
        </tbody>
    </table>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  function goswet(id, elemento){
    swal.setDefaults({
      reverseButtons: true
    })
    swal({
        title: "Deseja excluir "+elemento+"?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Deletar"
    }).then(
      function(){
        $.ajax({
          type: "DELETE",
          url: "<?php echo e(url('admin/informacaonutricional')); ?>/"+id,
          data: {'id': id},
          success: function(data){
            swal({
             title: "Elemento deletado!",
             type: "success",
             timer: 2000,
             showConfirmButton: false
           }).then(
             function () {
             },
             function(){
               window.location = "<?php echo e(route('informacaonutricional.index',$produto)); ?>";
             }
           );
          },
          error: function(xhr,status, data) {
            swal("Não foi possível deletar item");
          }

        });
      }
    );
  }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>