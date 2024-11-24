<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Sign/out.latte */
final class Template_40f2ae56e0 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Sign/out.latte';

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

<div class="container flex-grow-1 h-100 d-flex flex-column justify-content-center lign-items-stretch gap-5">
  <div class="row align-items-center">
    <div class="col text-center my-2">
      <h1>Goodbye ';
		echo LR\Filters::escapeHtmlText($currentUser) /* line 8 */;
		echo '!</h1>
    </div>
  </div>
  <div class="row">
    <div class="col text-center">
      <img src="/img/logout.jpg" alt="logo" class="img-logout img-fluid w-75" />
    </div>
  </div>
  <div class="row">
    <div class="col col-md-9 text-center mx-auto">
      <h3>
';
		$this->renderBlock('title', get_defined_vars()) /* line 19 */;
		echo ' We are looking forward to your next
        visit. Have a great day!
      </h3>
    </div>
  </div>
  <div class="row">
    <div class="col col-md-7 text-center mx-auto">
      <p>
        We hope your time on this page has been enjoyable and free of pesky bugs. If you’d like to share any feedback,
        please don’t hesitate to reach out to the database administrator directly.
      </p>
    </div>
  </div>
  <div class="row mt-2">
    <p class="col-12 col-md-6 mx-auto text-center">
      Signed out by accident?
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('in')) /* line 35 */;
		echo '" class="btn btn-secondary">Sign back again!</a>
    </p>
  </div>
</div>
';
	}


	/** n:block="title" on line 19 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '        <span><strong>You have been signed out.</strong></span>';
	}
}
