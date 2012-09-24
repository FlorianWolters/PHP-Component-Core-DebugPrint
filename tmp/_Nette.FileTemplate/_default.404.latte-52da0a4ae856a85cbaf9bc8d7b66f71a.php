<?php //netteCache[01]000373a:2:{s:4:"time";s:21:"0.70680600 1348490436";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:51:"C:\PHP\PEAR\data\ApiGen\templates\default\404.latte";i:2;i:1347293618;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: C:\PHP\PEAR\data\ApiGen\templates\default\404.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'l8y7cchvy3')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbeacddab005_title')) { function _lbeacddab005_title($_l, $_args) { extract($_args)
?>Page not found<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb1acd8c2c22_content')) { function _lb1acd8c2c22_content($_l, $_args) { extract($_args)
?><div id="content">
	<h1><?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?></h1>
	<p>The requested page could not be found.</p>
	<p>You have probably clicked on a link that is outdated and points to a page that does not exist any more or you have made an typing error in the address.</p>
	<p>To continue please try to find requested page in the menu,<?php if ($config->tree): ?>
 take a look at <a href="tree.html">the tree view</a> of the whole project<?php endif ?> or use search field on the top.</p>
</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = '@layout.latte'; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
 $robots = false ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 