<?php $__env->startSection('page-caminho'); ?>
Quem Somos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
Cadastro
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<link href="<?php echo e(asset('template/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="col-12">
  <div class="card-box">

      <?php if(!isset($quemsomos->id)): ?>
        <p id="req-cad">
          As informações da empresa ainda não foram cadastradas,
          <a id="cad" class="text-success" href="#">Clique aqui para Realizar Cadastro</a>
        </p>
        <div id="form-cad" class="col-sm-12 col-xs-12" style="display:none">
          <?php echo e(Form::open(['route' => 'quemsomos.store'])); ?>

      <?php else: ?>
          <div id="form-cad" class="col-sm-12 col-xs-12">
          <?php echo e(Form::model($quemsomos, ['route' => ['quemsomos.update', $quemsomos->id], 'enctype'=>'multipart/form-data','method' => 'PUT'])); ?>

      <?php endif; ?>

      <div class="row">
        <div class="form-group col-md-3">
          <?php echo e(Form::label('razaosocial', 'Razão Social')); ?>

          <?php echo e(Form::text('razaosocial', null, array('class' => 'form-control','maxlength' => '255'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('nomefantasia', 'Nome Fantasia')); ?>

          <?php echo e(Form::text('nomefantasia', null, array('class' => 'form-control','maxlength' => '255','required'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('cnpj', 'CNPJ')); ?>

          <?php echo e(Form::text('cnpj', null, array('class' => 'form-control','maxlength' => '18'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('ie', 'Inscrição Estadual')); ?>

          <?php echo e(Form::text('ie', null, array('class' => 'form-control','maxlength' => '45'))); ?>

        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
          <?php echo e(Form::label('email', 'E-mail')); ?>

          <?php echo e(Form::email('email', null, array('class' => 'form-control','maxlength' => '255','required'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('telefone1', 'Telefone')); ?>

          <?php echo e(Form::text('telefone1', null, array('class' => 'form-control'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('telefone2', 'Telefone 2')); ?>

          <?php echo e(Form::text('telefone2', null, array('class' => 'form-control'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('sac', 'SAC')); ?>

          <?php echo e(Form::text('sac', null, array('class' => 'form-control','maxlength' => '20'))); ?>

        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
          <?php echo e(Form::label('endereco', 'Endereço')); ?>

          <?php echo e(Form::text('endereco', null, array('class' => 'form-control','maxlength' => '255'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('bairro', 'Bairro')); ?>

          <?php echo e(Form::text('bairro', null, array('class' => 'form-control','maxlength' => '255'))); ?>

        </div>

        <div class="form-group col-md-3 ">
          <?php echo e(Form::label('estado', 'Estado')); ?>

          <br>
          <select class="js-example-basic-single" name="estado">
            <option value="AC" <?php echo e(($quemsomos->estado=="AC")?'selected':''); ?>>Acre</option>
            <option value="AL" <?php echo e(($quemsomos->estado=="AL")?'selected':''); ?>>Alagoas</option>
            <option value="AP" <?php echo e(($quemsomos->estado=="AP")?'selected':''); ?>>Amapá</option>
            <option value="AM" <?php echo e(($quemsomos->estado=="AM")?'selected':''); ?>>Amazonas</option>
            <option value="BA" <?php echo e(($quemsomos->estado=="BA")?'selected':''); ?>>Bahia</option>
            <option value="CE" <?php echo e(($quemsomos->estado=="CE")?'selected':''); ?>>Ceará</option>
            <option value="DF" <?php echo e(($quemsomos->estado=="DF")?'selected':''); ?>>Distrito Federal</option>
            <option value="ES" <?php echo e(($quemsomos->estado=="ES")?'selected':''); ?>>Espírito Santo</option>
            <option value="GO" <?php echo e(($quemsomos->estado=="GO")?'selected':''); ?>>Goiás</option>
            <option value="MA" <?php echo e(($quemsomos->estado=="MA")?'selected':''); ?>>Maranhão</option>
            <option value="MT" <?php echo e(($quemsomos->estado=="MT")?'selected':''); ?>>Mato Grosso</option>
            <option value="MS" <?php echo e(($quemsomos->estado=="MS")?'selected':''); ?>>Mato Grosso do Sul</option>
            <option value="MG" <?php echo e(($quemsomos->estado=="MG")?'selected':''); ?>>Minas Gerais</option>
            <option value="PA" <?php echo e(($quemsomos->estado=="PA")?'selected':''); ?>>Pará</option>
            <option value="PB" <?php echo e(($quemsomos->estado=="PB")?'selected':''); ?>>Paraíba</option>
            <option value="PR" <?php echo e(($quemsomos->estado=="PR")?'selected':''); ?>>Paraná</option>
            <option value="PE" <?php echo e(($quemsomos->estado=="PE")?'selected':''); ?>>Pernambuco</option>
            <option value="PI" <?php echo e(($quemsomos->estado=="PI")?'selected':''); ?>>Piauí</option>
            <option value="RJ" <?php echo e(($quemsomos->estado=="RJ")?'selected':''); ?>>Rio de Janeiro</option>
            <option value="RN" <?php echo e(($quemsomos->estado=="RN")?'selected':''); ?>>Rio Grande do Norte</option>
            <option value="RS" <?php echo e(($quemsomos->estado=="RS")?'selected':''); ?>>Rio Grande do Sul</option>
            <option value="RO" <?php echo e(($quemsomos->estado=="RO")?'selected':''); ?>>Rondônia</option>
            <option value="RR" <?php echo e(($quemsomos->estado=="RR")?'selected':''); ?>>Roraima</option>
            <option value="SC" <?php echo e(($quemsomos->estado=="SC")?'selected':''); ?>>Santa Catarina</option>
            <option value="SP" <?php echo e(($quemsomos->estado=="SP")?'selected':''); ?>>São Paulo</option>
            <option value="SE" <?php echo e(($quemsomos->estado=="SE")?'selected':''); ?>>Sergipe</option>
            <option value="TO" <?php echo e(($quemsomos->estado=="TO")?'selected':''); ?>>Tocantins</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('cidade', 'Cidade')); ?>

          <?php echo e(Form::text('cidade', null, array('class' => 'form-control','maxlength' => '255'))); ?>

        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
          <?php echo e(Form::label('cep', 'CEP')); ?>

          <?php echo e(Form::text('cep', null, array('class' => 'form-control','maxlength' => '10'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('facebook', 'Facebook')); ?>

          <?php echo e(Form::url('facebook', null, array('class' => 'form-control','maxlength' => '255'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('instagram', 'Instagram')); ?>

          <?php echo e(Form::url('instagram', null, array('class' => 'form-control','maxlength' => '255'))); ?>

        </div>
        <div class="form-group col-md-3">
          <?php echo e(Form::label('youtube', 'YouTube')); ?>

          <?php echo e(Form::url('youtube', null, array('class' => 'form-control','maxlength' => '255'))); ?>

        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-4" style="margin-top: 20px">
          <?php echo Form::label('missao', 'Missão'); ?>

          <?php echo Form::textarea('missao', null, array('class' => 'form-control','maxlength' => '2500','rows'=>'8')); ?>

        </div>
        <div class="form-group col-md-4" style="margin-top: 20px">
          <?php echo Form::label('visao', 'Visão'); ?>

          <?php echo Form::textarea('visao', null, array('class' => 'form-control','maxlength' => '2500')); ?>

        </div>
        <div class="form-group col-md-4" style="margin-top: 20px">
          <?php echo Form::label('valores', 'Valores'); ?>

          <?php echo Form::textarea('valores', null, array('class' => 'form-control','maxlength' => '2500')); ?>

      </div>
    </div>
    <div class="row">
      <?php if($quemsomos->imagem1): ?>
      <div class="form-group col-md-3">
      <img src="<?php echo e(asset('uploads/quemsomos/'. $quemsomos->imagem1)); ?>" class="form-control banner" style="height:auto">
      </div>
      <?php endif; ?>
      <div class="form-group col-md-9">
        <?php echo e(Form::label('imagem1','Imagem')); ?>

        <input type="file" name="imagem1" class="filestyle" data-buttonText="Carregar" data-placeholder="<?php echo $quemsomos->imagem1; ?>" data-btnClass="btn-light">
      </div>
    </div>


      <div class="row">
        <div class="form-group col-md-12" style="margin-top: 20px">
          <?php echo Form::label('quemsomos', 'Quem Somos'); ?>

          <?php echo Form::textarea('quemsomos', null, array('class' => 'form-control')); ?>

        </div>
      </div>

      <div class="row">
        <?php if($quemsomos->imagem2): ?>
        <div class="form-group col-md-3">
        <img src="<?php echo e(asset('uploads/quemsomos/'. $quemsomos->imagem2)); ?>" class="form-control banner" style="height:auto">
        </div>
        <?php endif; ?>
        <div class="form-group col-md-9">
          <?php echo e(Form::label('imagem2','Imagem')); ?>

          <input type="file" name="imagem2" class="filestyle" data-buttonText="Carregar" data-placeholder="<?php echo $quemsomos->imagem2; ?>" data-btnClass="btn-light">
        </div>
      </div>
      <div class="row" style="margin-top: 20px">
        <div class="col-12">
          <div class="text-center">
            <button class="btn btn-success" type="submit" value="Salvar"><i class="fa fa-save m-r-5"></i> Salvar</button>
            <a href="<?php echo e(route('quemsomos.index')); ?>" class="btn btn-danger"><i class="dripicons-cross"></i> Cancelar</a>
          </div>
        </div>
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
<script src="<?php echo e(asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('template/plugins/tinymce/tinymce.min.js')); ?>"></script>

<script>
jQuery(function($){
  $('.js-example-basic-single').select2();
  $("#cnpj").mask("99.999.999/9999-99");
  $("#telefone1").mask("(99) 99999-9999");
  $("#telefone2").mask("(99) 99999-9999");
  $("#cep").mask("99.999-999");
});
</script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#cad").click(function(event){
      event.preventDefault();
      $("#req-cad").slideUp();
      $("#form-cad").slideDown();
    });
    $("#can-cad").click(function(event){
      if($("#cad").length > 0) {
      event.preventDefault();
      $("#form-cad").slideUp();
      $("#req-cad").slideDown();
      }
    });
  });
</script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea#quemsomos",
    height:350,
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