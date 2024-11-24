<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\List\show.latte */
final class Template_2e6d3ddf70 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\List\\show.latte';

	public const Blocks = [
		['styles' => 'blockStyles', 'content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('styles', get_defined_vars()) /* line 1 */;
		echo ' ';
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	/** {block styles} on line 1 */
	public function blockStyles(array $ʟ_args): void
	{
		echo '<link rel="stylesheet" href="/css/list.css" />
';
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('title', get_defined_vars()) /* line 4 */;
		echo '
<h3>Current user: ';
		echo LR\Filters::escapeHtmlText($currentUser) /* line 6 */;
		echo '</h3>

<div class="table-responsive">';
		$ʟ_tmp = $this->global->uiControl->getComponent('simpleGrid');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 8 */;

		echo '</div>

<button><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Action:create')) /* line 10 */;
		echo '">Add new user</a></button>
<button><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:out')) /* line 11 */;
		echo '">Sign out</a></button>
';
	}


	/** n:block="title" on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '<h1>List of users</h1>
';
	}
}
