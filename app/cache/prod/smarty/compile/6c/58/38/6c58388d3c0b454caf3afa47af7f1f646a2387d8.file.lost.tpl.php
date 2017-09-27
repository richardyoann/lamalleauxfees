<?php /* Smarty version Smarty-3.1.19, created on 2017-09-27 20:24:43
         compiled from "C:\laragon\www\malle\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204219266559cbeceb287a40-32011088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c58388d3c0b454caf3afa47af7f1f646a2387d8' => 
    array (
      0 => 'C:\\laragon\\www\\malle\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1506103731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204219266559cbeceb287a40-32011088',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cbeceb37ad22_10731856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cbeceb37ad22_10731856')) {function content_59cbeceb37ad22_10731856($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
