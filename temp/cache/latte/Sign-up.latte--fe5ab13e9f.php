<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Sign/up.latte */
final class Template_fe5ab13e9f extends Latte\Runtime\Template
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
<div class="container flex-grow-1 h-100 d-flex flex-column justify-content-center lign-items-stretch gap-1">
  <div class="row">
    <div class="col col-md-auto text-center mx-auto my-2">
      <h1>';
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo ' of new user</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-6 col-md-3 text-center mx-auto">
      <img src="/img/register.jpg" alt="logo" class="img-register w-50 img-fluid" />
    </div>
  </div>
  <div class="row">
    <div class="col-auto col-md-7 mx-auto text-center row d-flex justify-content-center">
      <h3>Create a new account in order to view all data stored in the database. <strong>For free!</strong></h3>

      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="custom-form shadow">';
		$ʟ_tmp = $this->global->uiControl->getComponent('signUpForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 20 */;

		echo '</div>
      </div>
    </div>
  </div>
  <div class="row">
    <p class="col-12 col-md-6 text-center mx-auto">
      Already have an account?
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('in')) /* line 27 */;
		echo '" class="btn btn-secondary"> Sign In! </a>
    </p>
  </div>
</div>
';
	}


	/** n:block="title" on line 7 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '<span>Registration</span>';
	}
}
