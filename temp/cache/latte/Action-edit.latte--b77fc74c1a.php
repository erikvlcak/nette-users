<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Action/edit.latte */
final class Template_b77fc74c1a extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Action/edit.latte';

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

		echo '
<h1>';
		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo ' about ';
		echo LR\Filters::escapeHtmlText($selectedUser) /* line 3 */;
		echo ' with ';
		echo LR\Filters::escapeHtmlText($selectedUserId) /* line 3 */;
		echo '</h1>

<button><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('List:show')) /* line 5 */;
		echo '">Cancel</a></button>
';
	}


	/** n:block="title" on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '<span>Update data</span>';
	}
}
