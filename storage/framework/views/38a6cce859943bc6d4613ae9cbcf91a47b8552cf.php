<?php $__env->startSection('page-caminho'); ?>
Produtos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
Editar Produtos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<link href="<?php echo e(asset('template/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo e(asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')); ?>" type="text/javascript"></script>
<link href="<?php echo e(asset('template/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12">
  <div class="card-box">

    <?php echo Form::model($produto, array('route' => ['produto.update', $produto->id], 'method' => 'PUT', 'files' => true)); ?>

        <div class="row">
          <div class="form-group col-md-4">
              <?php echo e(Form::label('nome', 'Nome')); ?>

              <?php echo e(Form::text('nome', null, array('class' => 'form-control', 'maxlength' => '255','required'))); ?>

          </div>
          <div class="form-group col-md-4">
            <?php echo Form::label('imagem', 'Enviar Imagem'); ?>

            <input type="file" name="imagem" class="filestyle" data-placeholder="<?php echo $produto->imagem; ?>" data-btnClass="btn-light">
          </div>
        </div>
        <div class="form-group col-md-4">
          <?php echo Form::label('logo', 'Enviar Logo'); ?>

          <input type="file" name="logo" class="filestyle" data-placeholder="<?php echo $produto->logo; ?>" data-btnClass="btn-light">
        </div>
      </div>
        <div class="row">
          <div class="form-group col-md-12">
            <?php echo Form::label('descricao', 'Descrição:'); ?>

            <?php echo Form::text('descricao', $produto->descricao, array('class' => 'form-control')); ?>

          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
              <?php echo e(Form::label('indicacoes', 'Indicações')); ?>

              <?php echo e(Form::textarea('indicacoes', $produto->indicacoes, array('class' => 'form-control'))); ?>

          </div>
          <div class="form-group col-md-6">
              <?php echo e(Form::label('mododeusar', 'Modo de Usar')); ?>

              <?php echo e(Form::textarea('mododeusar', $produto->mododeusar, array('class' => 'form-control'))); ?>

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
<script src="<?php echo e(asset('template/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')); ?>"></script>
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