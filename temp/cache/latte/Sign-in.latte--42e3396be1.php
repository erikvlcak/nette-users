<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Sign/in.latte */
final class Template_42e3396be1 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Sign/in.latte';

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

		echo "\n";
		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo '
<h3>Welcome to database of users. Please sign in to view stored data.</h3>

';
		$ʟ_tmp = $this->global->uiControl->getComponent('signInForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 7 */;

		echo '
<p class="text-center">You do not have an account yet? <button><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('up')) /* line 9 */;
		echo '">Sign up!</a></button></p>';
	}


	/** n:block="title" on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '<h1>Sign In</h1>
';
	}
}
