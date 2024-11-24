<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\List/show.latte */
final class Template_0d47b0f1fc extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\List/show.latte';

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

		echo '
<div class="container flex-grow-1 h-100 d-flex flex-column justify-content-center lign-items-stretch gap-1">
  <div class="row">
    <div class="col text-center my-2">
      <h1>';
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo ' of users</h1>
    </div>
  </div>
  <div class="row">
    <div class="col col-md-6 text-center mx-auto">
      <img src="/img/databases.jpg" alt="logo" class="img-fluid w-100" />
    </div>
  </div>
  <div class="row gap-3 gap-md-0">
    <div class="col-12 col-md-6 text-center">
      <h3>Active user: <strong>';
		echo LR\Filters::escapeHtmlText($currentUser) /* line 17 */;
		echo '</strong></h3>
    </div>
    <div class="col-12 col-md-6 text-center">
      <h3>Users in total: <strong>';
		echo LR\Filters::escapeHtmlText($numberOfUsers) /* line 20 */;
		echo '</strong></h3>
    </div>
  </div>
  <div class="table table-responsive w-100 mx-auto">';
		$ʟ_tmp = $this->global->uiControl->getComponent('simpleGrid');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 23 */;

		echo '</div>
  <div class="row d-flex flex-col justify-content-center">
    <p class="col-12 col-md-6">
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Data:edit')) /* line 26 */;
		echo '" class="btn btn-success btn-addNewUser"> Add new user </a>
    </p>
    <p class="col-12 col-md-3">
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:out', ['currentUser' => $currentUser])) /* line 29 */;
		echo '" class="btn btn-secondary"> Logout </a>
    </p>
  </div>
</div>
';
	}


	/** n:block="title" on line 7 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '<span>Database</span>';
	}
}
