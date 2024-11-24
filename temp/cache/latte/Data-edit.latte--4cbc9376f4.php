<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\app\UI\Data/edit.latte */
final class Template_4cbc9376f4 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\app\\UI\\Data/edit.latte';

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

		echo '<div class="container flex-grow-1 h-100 d-flex flex-column justify-content-center lign-items-stretch gap-1">
  <div class="row">
    <div class="col text-center">
';
		if (isset($selectedUser)) /* line 5 */ {
			echo '      <h1>Update existing user</h1>
';
		} else /* line 7 */ {
			echo '      <h1>Add new user to the database</h1>
';
		}
		echo '    </div>
  </div>
  <div class="row">
    <div class="col-6 col-md-3 text-center mx-auto">
';
		if (isset($selectedUser)) /* line 14 */ {
			echo '      <img src="/img/change.jpg" alt="logo" class="img-change img-fluid" />
';
		} else /* line 16 */ {
			echo '      <img src="/img/newUser.jpg" alt="logo" class="img-newUser img-fluid" />
';
		}
		echo '    </div>
  </div>
  <div class="row">
    <div class="col text-center"></div>
  </div>
  <div class="d-flex flex-column justify-content-center align-items-center text-center">
';
		if (isset($selectedUser)) /* line 25 */ {
			echo '    <h3>Update information about <strong>';
			echo LR\Filters::escapeHtmlText($selectedUser) /* line 26 */;
			echo '</strong>.</h3>
';
		} else /* line 27 */ {
			echo '    <h3>Put new unique user into the database.</h3>
';
		}
		echo '    <div class="custom-form shadow">';
		$ʟ_tmp = $this->global->uiControl->getComponent('addUserForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 30 */;

		echo '</div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6 mx-auto">
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('List:show')) /* line 34 */;
		echo '" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</div>
';
	}
}
