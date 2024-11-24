<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\List/template.latte */
final class Template_c7d1c8fe35 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\List/template.latte';

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

		$this->createTemplate('show.latte', $this->params, 'include')->renderToContentType('html') /* line 1 */;
		echo ' ';
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<div class="table-responsive">
  <table class="table table-striped table-hover">
';
		$this->renderBlockParent('content', get_defined_vars()) /* line 4 */;
		echo '  </table>
</div>
';
	}
}
