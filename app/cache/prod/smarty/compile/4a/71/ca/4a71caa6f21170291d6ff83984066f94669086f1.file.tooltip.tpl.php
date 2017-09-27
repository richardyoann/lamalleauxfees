<?php /* Smarty version Smarty-3.1.19, created on 2017-09-27 20:24:43
         compiled from "C:\laragon\www\malle\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29530727459cbeceb5435f7-18910988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a71caa6f21170291d6ff83984066f94669086f1' => 
    array (
      0 => 'C:\\laragon\\www\\malle\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1506103731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29530727459cbeceb5435f7-18910988',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cbeceb619011_97617378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cbeceb619011_97617378')) {function content_59cbeceb619011_97617378($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
