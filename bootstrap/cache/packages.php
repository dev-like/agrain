<?php return array (
  'appzcoder/crud-generator' => 
  array (
    'providers' => 
    array (
      0 => 'Appzcoder\\CrudGenerator\\CrudGeneratorServiceProvider',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravelcollective/html' => 
  array (
    'providers' => 
    array (
      0 => 'Collective\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
    ),
  ),
  'unisharp/laravel-filemanager' => 
  array (
    'providers' => 
    array (
      0 => 'Unisharp\\Laravelfilemanager\\LaravelFilemanagerServiceProvider',
    ),
    'aliases' => 
    array (
    ),
  ),
  'xethron/migrations-generator' => 
  array (
    'providers' => 
    array (
      0 => 'Way\\Generators\\GeneratorsServiceProvider',
      1 => 'Xethron\\MigrationsGenerator\\MigrationsGeneratorServiceProvider',
    ),
  ),
);