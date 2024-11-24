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

<div class="container flex-grow-1 h-100 d-flex flex-column justify-content-around align-items-stretch">
  <div class="row">
    <div class="col text-center">';
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo '</div>
  </div>
  <div class="row">
    <div class="col col-md-9 mx-auto d-flex justify-content-center align-items-center">
      <img src="/img/people.jpg" alt="logo" class="img-people img-fluid" />
    </div>
  </div>
  <div class="row">
    <div class="col text-center">
      <h2>Welcome to the most comprehensive database you have ever seen.</h2>
    </div>
  </div>
  <div class="d-flex flex-column justify-content-center align-items-center">
    <p>Please sign in to view stored data</p>
    <div class="custom-form shadow">';
		$ʟ_tmp = $this->global->uiControl->getComponent('signInForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 21 */;

		echo '</div>
  </div>
  <div class="row">
    <p class="col-6 offset-3 text-center w-50">
      Not registered yet?
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('up')) /* line 26 */;
		echo '" class="btn btn-secondary"> Sign Up! </a>
    </p>
  </div>
</div>
';
	}


	/** n:block="title" on line 7 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '<h1>Users Database</h1>';
	}
}
