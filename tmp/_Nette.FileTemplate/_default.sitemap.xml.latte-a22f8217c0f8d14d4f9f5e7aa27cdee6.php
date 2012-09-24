<?php //netteCache[01]000381a:2:{s:4:"time";s:21:"0.80795500 1348490436";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"C:\PHP\PEAR\data\ApiGen\templates\default\sitemap.xml.latte";i:2;i:1347293618;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: C:\PHP\PEAR\data\ApiGen\templates\default\sitemap.xml.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'btuf3di6d9')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block elements
//
if (!function_exists($_l->blocks['elements'][] = '_lb9bd3efc748_elements')) { function _lb9bd3efc748_elements($_l, $_args) { extract($_args)
;$iterations = 0; foreach ($elements as $element): ?><url>
	<loc><?php echo Nette\Templating\Helpers::escapeHtml($config->baseUrl, ENT_NOQUOTES) ?>
/<?php echo Nette\Templating\Helpers::escapeHtml($template->elementUrl($element), ENT_NOQUOTES) ?></loc>
</url>
<?php $iterations++; endforeach ;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
	<loc><?php echo Nette\Templating\Helpers::escapeHtml($config->baseUrl, ENT_NOQUOTES) ?>/index.html</loc>
</url>
<?php $iterations = 0; foreach ($namespaces as $namespace): ?><url>
	<loc><?php echo Nette\Templating\Helpers::escapeHtml($config->baseUrl, ENT_NOQUOTES) ?>
/<?php echo Nette\Templating\Helpers::escapeHtml($template->namespaceUrl($namespace), ENT_NOQUOTES) ?></loc>
</url>
<?php $iterations++; endforeach ;$iterations = 0; foreach ($packages as $package): ?><url>
	<loc><?php echo Nette\Templating\Helpers::escapeHtml($config->baseUrl, ENT_NOQUOTES) ?>
/<?php echo Nette\Templating\Helpers::escapeHtml($template->packageUrl($package), ENT_NOQUOTES) ?></loc>
</url>
<?php $iterations++; endforeach ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); } ?>

<?php call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $classes) + get_defined_vars()) ;call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $interfaces) + get_defined_vars()) ;call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $traits) + get_defined_vars()) ;call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $exceptions) + get_defined_vars()) ;call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $constants) + get_defined_vars()) ;call_user_func(reset($_l->blocks['elements']), $_l, array('elements' => $functions) + get_defined_vars()) ?>
</urlset>
