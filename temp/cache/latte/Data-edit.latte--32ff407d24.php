<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Data/edit.latte */
final class Template_32ff407d24 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Data/edit.latte';

	public const Blocks = [
		['styles' => 'blockStyles', 'content' => 'blockContent'],
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
		echo '<link rel="stylesheet" href="/css/data.css" />
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
    <div class="col text-center">
';
		if (isset($selectedUser)) /* line 8 */ {
			echo '      <h1>Update data about with ';
			echo LR\Filters::escapeHtmlText($selectedUser) /* line 9 */;
			echo '</h1>
';
		} else /* line 10 */ {
			echo '      <h1>Add new user to the database</h1>
';
		}
		echo '    </div>
  </div>
  <div class="row">
    <div class="col col-md-9 mx-auto d-flex justify-content-center align-items-center">
';
		if (isset($selectedUser)) /* line 17 */ {
			echo '      <img src="/img/change.jpg" alt="logo" class="img-change img-fluid" />
';
		} else /* line 19 */ {
			echo '      <img src="/img/newUser.jpg" alt="logo" class="img-newUser img-fluid" />
';
		}
		echo '    </div>
  </div>
  <div class="row">
    <div class="col text-center"></div>
  </div>
  <div class="d-flex flex-column justify-content-center align-items-center">
';
		if (isset($selectedUser)) /* line 28 */ {
			echo '    <p>Update information in the form</p>
';
		} else /* line 30 */ {
			echo '    <p>Provide information about new user</p>
';
		}
		echo '
    <div class="custom-form shadow">';
		$ʟ_tmp = $this->global->uiControl->getComponent('addUserForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 34 */;

		echo '</div>
  </div>
  <div class="row">
    <div class="col-6 offset-3 text-center w-50">
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('List:show')) /* line 38 */;
		echo '" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</div>
';
	}
}
