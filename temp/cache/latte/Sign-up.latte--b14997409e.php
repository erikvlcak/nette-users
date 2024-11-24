<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Sign/up.latte */
final class Template_b14997409e extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Sign/up.latte';

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
<div class="container px-5 py-2">
  <div class="row align-items-center">
    <div class="col text-center my-2">
';
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo '    </div>
  </div>
  <div class="row align-items-center">
    <div class="col text-center">
      <img src="/img/register.jpg" alt="logo" class="img-register img-fluid" />
    </div>
  </div>

  <div class="d-flex flex-column justify-content-center align-items-center">
    <p>Create a new account in order to view stored data.</p>
    <div class="custom-form shadow">';
		$ʟ_tmp = $this->global->uiControl->getComponent('signUpForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 18 */;

		echo '</div>
  </div>
  <div class="row mt-2">
    <p class="col-6 offset-3 text-center w-50">
      Already have an account?
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('in')) /* line 23 */;
		echo '" class="btn btn-secondary"> Sign In! </a>
    </p>
  </div>
</div>
';
	}


	/** n:block="title" on line 7 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '      <h1>Register</h1>
';
	}
}
