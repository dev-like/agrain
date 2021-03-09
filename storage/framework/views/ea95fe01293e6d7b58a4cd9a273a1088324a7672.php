<?php $__env->startSection('page-caminho'); ?>
  Produtos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
Produtos Cadastrados
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Sweet Alert css -->
  <link href="<?php echo e(asset('template/plugins/sweet-alert/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-12">

  <div class="card-box">
    <a href="<?php echo e(route('produto.create')); ?>" style="margin-bottom: 15px" class="btn btn-info waves-effect waves-light pull-right"><i class="fa fa-plus m-r-5"></i> Adicionar</a>

    <table class="table table-striped">
        <thead>
        <tr>
          <th>Nome</th>
          <th>Linha</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($produto -> nome); ?></td>
                <td width="15%">
                    <span class="hint--top" aria-label="Informações Nutricionais"><a href="<?php echo e(route('informacaonutricional.index', $produto->id)); ?>" style="border-radius: 50%" class="btn btn-success waves-effect"> <i class="fa  fa-bar-chart-o"></i></a></span>
                    <span class="hint--top" aria-label="Editar produto"><a href="<?php echo e(route('produto.edit', $produto->id)); ?>" style="border-radius: 50%" class="btn btn-warning waves-effect"> <i class="fa fa-pencil m-r-5"></i></a></span>
                    <span class="hint--top" aria-label="Deletar produto"><button type="button" onclick="goswet(<?php echo e($produto->id); ?>, '<?php echo e($produto->nome); ?>')" style="border-radius: 50%" class="btn btn-danger waves-effect"> <i class="fa fa-trash m-r-5"></i></button></span>
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5" class="text-center">Nenhum Item cadastrado</td>
            </tr>
          <?php endif; ?>
        </tbody>
    </table>

    <?php if($produtos->lastPage() > 1): ?>
          <ul class="pagination ml-auto">
              <li class="<?php echo e(($produtos->currentPage() == 1) ? ' disabled' : ''); ?> page-item">
                  <a class=" page-link " href="<?php echo e($produtos->url(1)); ?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                  </a>
              </li>
              <?php for($i = 1; $i <= $produtos->lastPage(); $i++): ?>
                  <li class="<?php echo e(($produtos->currentPage() == $i) ? ' active' : ''); ?> page-item">
                      <a class=" page-link " href="<?php echo e($produtos->url($i)); ?>"><?php echo e($i); ?></a>
                  </li>
              <?php endfor; ?>
              <li class="<?php echo e(($produtos->currentPage() == $produtos->lastPage()) ? ' disabled' : ''); ?> page-item">
                  <a href="<?php echo e($produtos->url($produtos->currentPage()+1)); ?>" class="page-link" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                  </a>
              </li>
          </ul>
      <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  function goswet(id, nome){
    swal.setDefaults({
      reverseButtons: true
    })
    swal({
        title: "Deseja excluir "+nome+"?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Deletar"
    }).then(
      function(){
        $.ajax({
          type: "DELETE",
          url: "<?php echo e(url('admin/produto')); ?>/"+id,
          data: {'id': id},
          success: function(data){
            swal({
             title: "Produto deletado!",
             type: "success",
             timer: 2000,
             showConfirmButton: false
           }).then(
             function () {
             },
             function(){
               window.location = "<?php echo e(route('produto.index')); ?>";
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