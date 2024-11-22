<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Sign/out.latte */
final class Template_40f2ae56e0 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Sign/out.latte';

	public const Blocks = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
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

		$this->renderBlock('title', get_defined_vars()) /* line 2 */;
		echo '
<h3>You have been signed out. Thank you for your visit.</h3>

<button><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('in')) /* line 6 */;
		echo '">Sign back again!</a></button>';
	}


	/** n:block="title" on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '<h1>Sign out</h1>
';
	}
}
