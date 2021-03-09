<?php $__env->startSection('page-caminho'); ?>
Informações Nutricionais
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
Adicionar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<link href="<?php echo e(asset('template/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo e(asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')); ?>" type="text/javascript"></script>
<link href="<?php echo e(asset('template/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12">
  <div class="card-box">
    <h4 class="m-t-0 header-title"><b>Cadastrar Informações Nutricionais</b></h4>

    <?php echo e(Form::open(['route' => 'informacaonutricional.store', 'files' => true])); ?>

            <div class="row">
              <div class="form-group col-md-4">
                  <?php echo e(Form::label('elemento', 'Garantias')); ?>

                  <?php echo e(Form::text('elemento', null, array('class' => 'form-control','maxlength' => '255'))); ?>

              </div>
              <div class="form-group col-md-4">
                  <?php echo e(Form::label('pp', 'p/p (%)')); ?>

                  <?php echo e(Form::text('pp', null, array('class' => 'form-control','maxlength' => '45'))); ?>

              </div>
              <div class="form-group col-md-4">
                  <?php echo e(Form::label('pv', 'p/v (g/L)')); ?>

                  <?php echo e(Form::text('pv', null, array('class' => 'form-control','maxlength' => '45'))); ?>

              </div>
              <div class="form-group col-md-4" >
                <?php echo e(Form::label('produto', 'Produto')); ?>

                <select class="js-example-basic-multiple" data-style="form-control" name="produtos_id" id="produto">
                  <?php $__empty_1 = true; $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="<?php echo e($produto->id); ?>"><?php echo e($produto->nome); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <option value="">Nenhum item cadastrado</option>
                  <?php endif; ?>
                </select>
              </div>
            </div>


            <div class="row" style="margin-top: 20px">
              <div class="form-group col-12">
                <div class="text-center">
                  <button class="btn btn-success" type="submit" value="Salvar"><i class="fa fa-save m-r-5"></i> Salvar</button>
                  <a href="<?php echo e(route('produto.index')); ?>" class="btn btn-danger"><i class="fa fa-window-close m-r-5"></i> Cancelar</a>
                </div>
              </div>
            </div>
        <?php echo e(Form::close()); ?>


  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('template/plugins/select2/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/js/pages/form_elements.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>
<script src="<?php echo e(asset('template/plugins/tinymce/tinymce.min.js')); ?>"></script>
<script>
    $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
    });

    $(".in").TouchSpin({
      min: 0,
      max: 999999,
      step: 0.1,
      decimals: 2,
      boostat: 5,
      maxboostedstep: 10,
      postfix: 'g'
    });
    $(".en").TouchSpin({
      min: 0,
      max: 99999999,
      step: 0.1,
      decimals: 2,
      boostat: 5,
      maxboostedstep: 10,
      postfix: 'mg'
    });
</script>

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea",
    height:300,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

    tinymce.init(editor_config);
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>