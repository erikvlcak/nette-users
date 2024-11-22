<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\List/show.latte */
final class Template_edc9dacc3e extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\List/show.latte';

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
<h3>Current user: ';
		echo LR\Filters::escapeHtmlText($currentUser) /* line 4 */;
		echo ' </h3>

';
		$ʟ_tmp = $this->global->uiControl->getComponent('simpleGrid');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 6 */;

		echo '
<button><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Action:create')) /* line 8 */;
		echo '">Add new user</a></button>
<button><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:out')) /* line 9 */;
		echo '">Sign out</a></button>
';
	}


	/** n:block="title" on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '<h1>List of users</h1>
';
	}
}
