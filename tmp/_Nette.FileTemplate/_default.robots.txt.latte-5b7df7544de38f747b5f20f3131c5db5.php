<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.85566200 1348490436";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"C:\PHP\PEAR\data\ApiGen\templates\default\robots.txt.latte";i:2;i:1347293618;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: C:\PHP\PEAR\data\ApiGen\templates\default\robots.txt.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '1dops0cco7')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
User-agent: *
Disallow:
Sitemap: <?php echo Nette\Templating\Helpers::escapeHtml($config->baseUrl, ENT_NOQUOTES) ?>/sitemap.xml
