<?php /* Smarty version Smarty-3.1.11, created on 2012-09-19 01:08:03
         compiled from "C:\wamp\www\framework_web_site\application\views\include\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24350591af3756f80-24894144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ee74d0c647e5a28ec529d0ab2689702a2a88859' => 
    array (
      0 => 'C:\\wamp\\www\\framework_web_site\\application\\views\\include\\header.tpl',
      1 => 1348016876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24350591af3756f80-24894144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'desenvolvedor' => 0,
    'nomesite' => 0,
    'revisitagoogle' => 0,
    'keywords' => 0,
    'title' => 0,
    'description' => 0,
    'publisher' => 0,
    'nomeScript' => 0,
    'nomeStyle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50591af3b75319_61440115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50591af3b75319_61440115')) {function content_50591af3b75319_61440115($_smarty_tpl) {?><head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
    <meta name="Author" content="<?php echo $_smarty_tpl->tpl_vars['desenvolvedor']->value;?>
"/>
    <meta name="Copyright" content="<?php echo $_smarty_tpl->tpl_vars['nomesite']->value;?>
"/>
    <meta name="Revisit-after" content="<?php echo $_smarty_tpl->tpl_vars['revisitagoogle']->value;?>
"/>
    <meta name="Expires" content="none"/>
    <!-- START BLOCK : keywords -->
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
    <!-- END BLOCK : keywords -->
    <meta name="Audience" content="ALL"/>
    <meta name="Robots" content="INDEX,FOLLOW"/>
    <!-- START BLOCK : title -->
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- END BLOCK : title -->
    <!-- START BLOCK : description -->
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
    <!-- END BLOCK : description -->
    <!-- START BLOCK : publisher -->
        <meta name="Publisher" content="<?php echo $_smarty_tpl->tpl_vars['publisher']->value;?>
"/>
    <!-- END BLOCK : publisher -->


    <!-- START BLOCK : script -->
        <script lang="javascript" src="<?php echo $_smarty_tpl->tpl_vars['nomeScript']->value;?>
.js"></script>
    <!-- END BLOCK : script -->

    <!-- START BLOCK : style -->
        <link rel="stylesheet" src="<?php echo $_smarty_tpl->tpl_vars['nomeStyle']->value;?>
.css" media="screen">
    <!-- END BLOCK : style -->
</head><?php }} ?>