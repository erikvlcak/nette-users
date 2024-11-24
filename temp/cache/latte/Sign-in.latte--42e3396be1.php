<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Sign/in.latte */
final class Template_42e3396be1 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Sign/in.latte';

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
		echo '<link rel="stylesheet" href="/css/sign.css" />
';
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '

<div class="container flex-grow-1 h-100 d-flex flex-column justify-content-center lign-items-stretch gap-3">
  <div class="row">
    <h1 class="text-center mx-auto col-auto col-md-8">Welcome to Users Database</h1>
  </div>
  <div class="row">
    <div class="col col-md-9 mx-auto d-flex justify-content-center align-items-center">
      <img src="/img/people.jpg" alt="logo" class="img-fluid w-auto" />
    </div>
  </div>
  <div class="row">
    <div class="col-auto col-md-7 text-center mx-auto">
      <h3>
';
		$this->renderBlock('title', get_defined_vars()) /* line 17 */;
		echo ' to enter the most comprehensive database you have ever seen. Enjoy your
        visit!
      </h3>
    </div>
  </div>
  <div class="d-flex flex-column justify-content-center align-items-center">
    <div class="custom-form shadow">';
		$ʟ_tmp = $this->global->uiControl->getComponent('signInForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 23 */;

		echo '</div>
  </div>
  <div class="row">
    <p class="col-6 offset-3 text-center w-50">
      Not registered yet?
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('up')) /* line 28 */;
		echo '" class="btn btn-secondary"> Sign Up! </a>
    </p>
  </div>
</div>
';
	}


	/** n:block="title" on line 17 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '        <span>Sign in</span>';
	}
}
