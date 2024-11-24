<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Action/edit.latte */
final class Template_b77fc74c1a extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Action/edit.latte';

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

		echo ' ';
		if (isset($selectedUserId)) /* line 1 */ {
			echo ' {
<h1>Update data about with ';
			echo LR\Filters::escapeHtmlText($selectedUserId) /* line 2 */;
			echo '</h1>
} ';
		} else /* line 3 */ {
			echo ' {
<h1>Add new user</h1>
} ';
		}
		echo "\n";
	}
}
