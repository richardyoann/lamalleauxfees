<?php /* Smarty version Smarty-3.1.19, created on 2017-09-27 20:24:41
         compiled from "C:\laragon\www\malle\admin880d8bmzo\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128418855659cbece94e7712-67222622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abcf4280808e77e54a56803db3ea66d7627e17f9' => 
    array (
      0 => 'C:\\laragon\\www\\malle\\admin880d8bmzo\\themes\\default\\template\\content.tpl',
      1 => 1506103696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128418855659cbece94e7712-67222622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cbece974c134_76495446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cbece974c134_76495446')) {function content_59cbece974c134_76495446($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
