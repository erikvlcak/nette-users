<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Sign/in.latte */
final class Template_42e3396be1 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Sign/in.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<h1>Please log in to enter</h1>

';
		$ʟ_tmp = $this->global->uiControl->getComponent('signIn');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 5 */;

		echo '
<h3>Not registered yet?<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:register')) /* line 7 */;
		echo '">Do it here!</a></h3>';
	}
}
