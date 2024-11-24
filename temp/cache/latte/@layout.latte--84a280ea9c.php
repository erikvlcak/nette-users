<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI/@layout.latte */
final class Template_84a280ea9c extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI/@layout.latte';

	public const Blocks = [
		['styles' => 'blockStyles', 'scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>';
		if ($this->hasBlock('title')) /* line 6 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 6 */;
			echo ' | ';
		}
		echo 'Users DB</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/main.css" />
    ';
		$this->renderBlock('styles', get_defined_vars()) /* line 14 */;
		echo '
  </head>

  <body class="d-flex flex-column h-100 position-relative">
    <div class="position-absolute w-100">
';
		foreach ($flashes as $flash) /* line 19 */ {
			echo '      <div class="alert mx-auto w-100 alert-';
			echo LR\Filters::escapeHtmlAttr($flash->type) /* line 20 */;
			echo ' alert-dismissible fade show" role="alert">
        ';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 21 */;
			echo '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
';

		}

		echo '    </div>

    <div class="container h-100">';
		$this->renderBlock('content', [], 'html') /* line 27 */;
		echo '</div>

';
		$this->renderBlock('scripts', get_defined_vars()) /* line 29 */;
		echo '  </body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '19'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block styles} on line 14 */
	public function blockStyles(array $ʟ_args): void
	{
		echo ' ';
	}


	/** {block scripts} on line 29 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '    <script src="https://unpkg.com/nette-forms@3"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="/js/script.js"></script>
';
	}
}
