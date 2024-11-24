<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-users\vendor\ublaboo\datagrid\src/templates/datagrid.latte */
final class Template_550d879a07 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-users\\vendor\\ublaboo\\datagrid\\src/templates/datagrid.latte';

	public const Blocks = [
		0 => ['datagrid-class' => ['blockDatagrid_class', 'html/attr'], 'outer-filters' => 'blockOuter_filters', 'icon-filter' => 'blockIcon_filter', 'data' => 'blockData', 'table-class' => ['blockTable_class', 'html/attr'], 'header' => 'blockHeader', 'group-actions' => 'blockGroup_actions', 'group_actions' => 'blockGroup_actions1', 'exports' => 'blockExports', 'settings' => 'blockSettings', 'icon-gear' => 'blockIcon_gear', 'icon-checked' => 'blockIcon_checked', 'icon-unchecked' => 'blockIcon_unchecked', 'icon-eye' => 'blockIcon_eye', 'icon-repeat' => 'blockIcon_repeat', 'header-column-row' => 'blockHeader_column_row', 'icon-sort-up' => 'blockIcon_sort_up', 'icon-sort-down' => 'blockIcon_sort_down', 'icon-sort' => 'blockIcon_sort', 'icon-caret-down' => 'blockIcon_caret_down', 'icon-eye-slash' => 'blockIcon_eye_slash', 'icon-remove' => 'blockIcon_remove', 'header-filters' => 'blockHeader_filters', 'tbody' => 'blockTbody', 'icon-arrows-v' => 'blockIcon_arrows_v', 'noItems' => 'blockNoItems', 'tfoot' => 'blockTfoot', 'pagination' => 'blockPagination1', 'inlineAddRow' => 'blockInlineAddRow', 'columnSummary' => 'blockColumnSummary', 'columnsSummary' => 'blockColumnsSummary', 'aggregationFunctions' => 'blockAggregationFunctions', 'column-header' => 'blockColumn_header', 'column-value' => 'blockColumn_value'],
		'snippet' => ['grid' => 'blockGrid', 'gridSnippets' => 'blockGridSnippets', 'table' => 'blockTable', 'toolbarButtons' => 'blockToolbarButtons', 'toolbar' => 'blockToolbar', 'exports' => 'blockExports1', 'thead-group-action' => 'blockThead_group_action', 'tbody' => 'blockTbody1', 'items' => 'blockItems', 'pagination' => 'blockPagination', 'summary' => 'blockSummary'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<div class="';
		$this->renderBlock('datagrid-class', get_defined_vars(), function ($s, $type) {
			$ʟ_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($ʟ_fi, 'html/attr', $s);
		}) /* line 17 */;
		echo '" data-refresh-state="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('refreshState!')) /* line 17 */;
		echo '">
	<div';
		echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('grid')), '"';
		echo '>';
		$this->renderBlock('grid', [], null, 'snippet') /* line 18 */;
		echo '</div>
</div>












';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['f' => '42', 'form_control' => '78', 'toolbar_button' => '98', 'export' => '103', 'v_key' => '116', 'visibility' => '116', 'key' => '146, 202, 254, 288, 297, 423, 471, 484', 'column' => '146, 202, 254, 288, 423, 471, 484', 'row' => '244', 'inlineEditControl' => '262', 'action' => '297', 'inlineAddControl' => '431'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block datagrid-class} on line 17 */
	public function blockDatagrid_class(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo 'datagrid datagrid-';
		echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 17 */;
	}


	/** n:snippet="grid" on line 18 */
	public function blockGrid(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('grid', 'static') /* line 18 */;
		try {
			echo "\n";
			$this->renderBlock('gridSnippets', [], null, 'snippet') /* line 19 */;
			echo '	';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** {snippetArea gridSnippets} on line 19 */
	public function blockGridSnippets(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('gridSnippets', 'area');
		try {
			echo '		';
			$form = $this->global->formsStack[] = $this->global->uiControl['filter'] /* line 20 */;
			Nette\Bridges\FormsLatte\Runtime::initializeForm($form);
			echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form, ['class' => 'ajax']) /* line 20 */;
			echo "\n";
			if ($control->hasOuterFilterRendering()) /* line 21 */ {
				$this->renderBlock('outer-filters', get_defined_vars()) /* line 22 */;
			}
			$this->renderBlock('data', get_defined_vars()) /* line 69 */;
			echo '		';
			echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack)) /* line 410 */;

			echo "\n";

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** {block outer-filters} on line 22 */
	public function blockOuter_filters(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		if ($control->hasCollapsibleOuterFilters()) /* line 23 */ {
			echo '					<div class="row text-right datagrid-collapse-filters-button-row">
						<div class="col-sm-12">
							<button class="btn btn-xs btn-primary" type="button" data-toggle="collapse" data-target="#datagrid-';
			echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 25 */;
			echo '-row-filters">
';
			$this->renderBlock('icon-filter', get_defined_vars()) /* line 26 */;
			echo ' ';
			echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.show_filter')) /* line 26 */;
			echo '
							</button>
						</div>
					</div>
';
		}
		echo "\n";
		if ($control->hasCollapsibleOuterFilters() && !$filter_active) /* line 31 */ {
			$filter_row_class = 'row-filters collapse' /* line 32 */;
		} elseif ($filter_active) /* line 33 */ {
			$filter_row_class = 'row-filters collapse in show' /* line 34 */;
		} else /* line 35 */ {
			$filter_row_class = 'row-filters' /* line 36 */;
		}

		echo '					<div class="';
		echo LR\Filters::escapeHtmlAttr($filter_row_class) /* line 38 */;
		echo '" id="datagrid-';
		echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 38 */;
		echo '-row-filters">
						<div class="row">
';
		$i = 0 /* line 40 */;
		$filterColumnsClass = 'col-sm-' . 12 / $control->getOuterFilterColumnsCount() /* line 41 */;
		foreach ($filters as $f) /* line 42 */ {
			echo '							<div class="datagrid-row-outer-filters-group ';
			echo LR\Filters::escapeHtmlAttr($filterColumnsClass) /* line 42 */;
			echo '">
';
			$filter_block = 'filter-' . $f->getKey() /* line 46 */;
			$filter_type_block = 'filtertype-' . $f->getType() /* line 47 */;
			echo "\n";
			if ($this->hasBlock($filter_block)) /* line 49 */ {
				$this->renderBlock($filter_block, ['filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => true] + [], 'html') /* line 50 */;
			} else /* line 51 */ {
				if ($this->hasBlock($filter_type_block)) /* line 52 */ {
					$this->renderBlock($filter_type_block, ['filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => true] + [], 'html') /* line 53 */;
				} else /* line 54 */ {
					$this->createTemplate($f->getTemplate(), ['filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => true] + $this->params, 'include')->renderToContentType('html') /* line 55 */;
				}
			}
			$i = $i + 1 /* line 58 */;
			echo '							</div>
';

		}

		if (!$control->hasAutoSubmit()) /* line 60 */ {
			echo '							<div class="col-sm-12">
								<div class="text-right datagrid-manual-submit">
									';
			echo Nette\Bridges\FormsLatte\Runtime::item($filter['filter']['submit'], $this->global)->getControl() /* line 62 */;
			echo '
								</div>
							</div>
';
		}
		echo '						</div>
					</div>
';
	}


	/** n:block="icon-filter" on line 26 */
	public function blockIcon_filter(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '								<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 26 */;
		echo 'filter"></i>';
	}


	/** n:block="data" on line 69 */
	public function blockData(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '			<table class="';
		$this->renderBlock('table-class', get_defined_vars(), function ($s, $type) {
			$ʟ_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($ʟ_fi, 'html/attr', $s);
		}) /* line 69 */;
		echo '"';
		echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('table')), '"';
		echo '>';
		$this->renderBlock('table', [], null, 'snippet') /* line 69 */;
		echo '</table>
';
	}


	/** n:snippet="table" on line 69 */
	public function blockTable(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('table', 'static') /* line 69 */;
		try {
			echo "\n";
			$this->renderBlock('header', get_defined_vars()) /* line 70 */;
			echo "\n";
			$this->renderBlock('tbody', get_defined_vars()) /* line 233 */;
			$this->renderBlock('tfoot', get_defined_vars()) /* line 377 */;
			echo '			';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** {block table-class} on line 69 */
	public function blockTable_class(array $ʟ_args): void
	{
		echo 'table table-hover table-striped table-bordered table-sm';
	}


	/** n:block="header" on line 70 */
	public function blockHeader(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '				<thead>
';
		$this->renderBlock('group-actions', get_defined_vars()) /* line 71 */;
		$this->renderBlock('header-column-row', get_defined_vars()) /* line 142 */;
		$this->renderBlock('header-filters', get_defined_vars()) /* line 201 */;
		echo '				</thead>
';
	}


	/** n:block="group-actions" on line 71 */
	public function blockGroup_actions(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		if ($hasGroupActions || $exports || $toolbarButtons || $control->canHideColumns() || $inlineAdd) /* line 71 */ {
			echo '					<tr class="row-group-actions">
						<th colspan="';
			echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 72 */;
			echo '" class="ublaboo-datagrid-th-form-inline">
';
			if ($hasGroupActions) /* line 73 */ {
				$this->renderBlock('group_actions', get_defined_vars()) /* line 74 */;
			}
			echo "\n";
			if ($control->canHideColumns() || $inlineAdd || $exports || $toolbarButtons) /* line 95 */ {
				echo '							<div class="datagrid-toolbar">
								';
				echo '<div id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('toolbarButtons')), '">';
				$this->renderBlock('toolbarButtons', [], null, 'snippet') /* line 96 */;
				echo '</div>

';
				$this->renderBlock('exports', get_defined_vars()) /* line 102 */;
				echo "\n";
				$this->renderBlock('settings', get_defined_vars()) /* line 106 */;
				echo '							</div>
';
			}
			echo '						</th>
					</tr>
';
		}
	}


	/** {block group_actions} on line 74 */
	public function blockGroup_actions1(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '									<span class="datagrid-group-action-title">
										';
		echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.group_actions')) /* line 76 */;
		echo ':
									</span>
';
		foreach ($filter['group_action']->getControls() as $form_control) /* line 78 */ {
			if ($form_control instanceof \Nette\Forms\Controls\SubmitButton && $form_control->getName() === 'submit') /* line 79 */ {
				echo '											';
				echo Nette\Bridges\FormsLatte\Runtime::item($form_control, $this->global)->getControl()->addAttributes(['class' => 'btn btn-primary btn-sm', 'disabled' => true]) /* line 80 */;
				echo "\n";
			} elseif ($form_control instanceof \Nette\Forms\Controls\SubmitButton) /* line 81 */ {
				echo '											';
				echo Nette\Bridges\FormsLatte\Runtime::item($form_control, $this->global)->getControl()->addAttributes(['disabled' => true]) /* line 82 */;
				echo "\n";
			} elseif ($form_control->getName() == 'group_action') /* line 83 */ {
				echo '											';
				echo Nette\Bridges\FormsLatte\Runtime::item($form_control, $this->global)->getControl()->addAttributes(['class' => 'form-control input-sm form-control-sm', 'disabled' => true]) /* line 84 */;
				echo "\n";
			} else /* line 85 */ {
				echo '											';
				echo Nette\Bridges\FormsLatte\Runtime::item($form_control, $this->global)->getControl() /* line 86 */;
				echo "\n";
			}



		}

		if ($control->shouldShowSelectedRowsCount()) /* line 89 */ {
			echo '										<span class="datagrid-selected-rows-count"></span>
';
		}
	}


	/** {snippet toolbarButtons} on line 96 */
	public function blockToolbarButtons(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('toolbarButtons', 'static') /* line 96 */;
		try {
			echo "\n";
			if ($toolbarButtons) /* line 97 */ {
				echo '								<span';
				echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('toolbar')), '"';
				echo '>';
				$this->renderBlock('toolbar', [], null, 'snippet') /* line 97 */;
				echo '</span>
';
			}
			echo '								';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** n:snippet="toolbar" on line 97 */
	public function blockToolbar(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('toolbar', 'static') /* line 97 */;
		try {
			echo '
									';
			foreach ($toolbarButtons as $toolbar_button) /* line 98 */ {
				echo LR\Filters::escapeHtmlText($toolbar_button->renderButton()) /* line 98 */;

			}

			echo '
								';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** n:block="exports" on line 102 */
	public function blockExports(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		if ($exports) /* line 102 */ {
			echo '								<span class="datagrid-exports"';
			echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('exports')), '"';
			echo '>';
			$this->renderBlock('exports', [], null, 'snippet') /* line 102 */;
			echo '</span>
';
		}
	}


	/** n:snippet="exports" on line 102 */
	public function blockExports1(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('exports', 'static') /* line 102 */;
		try {
			echo '
									';
			foreach ($exports as $export) /* line 103 */ {
				echo LR\Filters::escapeHtmlText($export->render()) /* line 103 */;

			}

			echo '
								';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** n:block="settings" on line 106 */
	public function blockSettings(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		if ($control->canHideColumns() || $inlineAdd) /* line 106 */ {
			echo '								<div class="datagrid-settings">
';
			if ($inlineAdd) /* line 107 */ {
				echo '										';
				echo LR\Filters::escapeHtmlText($inlineAdd->renderButtonAdd()) /* line 108 */;
				echo "\n";
			}
			echo '
									<div class="btn-group">
';
			if ($control->canHideColumns()) /* line 112 */ {
				echo '										<button type="button" class="btn btn-xs ';
				echo LR\Filters::escapeHtmlAttr($btnSecondaryClass) /* line 112 */;
				echo ' dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
				$this->renderBlock('icon-gear', get_defined_vars()) /* line 113 */;
				echo '										</button>
';
			}
			echo '										<ul class="dropdown-menu dropdown-menu-right dropdown-menu--grid">
';
			foreach ($iterator = $ʟ_it = new Latte\Essential\CachingIterator($columnsVisibility, $ʟ_it ?? null) as $v_key => $visibility) /* line 116 */ {
				echo '											<li>
';
				if ($visibility['visible']) /* line 117 */ {
					echo '													<a href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('hideColumn!', ['column' => $v_key])) /* line 118 */;
					echo '" class="ajax dropdown-item">
';
					$this->renderBlock('icon-checked', get_defined_vars()) /* line 119 */;
					$this->renderBlock('column-header', ['column' => $visibility['column']] + get_defined_vars(), 'html') /* line 120 */;
					echo '													</a>
';
				} else /* line 122 */ {
					echo '													<a href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('showColumn!', ['column' => $v_key])) /* line 123 */;
					echo '" class="ajax dropdown-item">
';
					$this->renderBlock('icon-unchecked', get_defined_vars()) /* line 124 */;
					$this->renderBlock('column-header', ['column' => $visibility['column']] + get_defined_vars(), 'html') /* line 125 */;
					echo '													</a>
';
				}
				echo '											</li>
';

			}
			$iterator = $ʟ_it = $ʟ_it->getParent();

			echo '											<li role="separator" class="divider dropdown-divider"></li>
											<li>
												<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('showAllColumns!')) /* line 131 */;
			echo '" class="ajax dropdown-item">';
			$this->renderBlock('icon-eye', get_defined_vars()) /* line 131 */;
			echo ' ';
			echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.show_all_columns')) /* line 131 */;
			echo '</a>
											</li>
';
			if ($control->hasSomeColumnDefaultHide()) /* line 133 */ {
				echo '											<li>
												<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('showDefaultColumns!')) /* line 134 */;
				echo '" class="ajax dropdown-item">';
				$this->renderBlock('icon-repeat', get_defined_vars()) /* line 134 */;
				echo ' ';
				echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.show_default_columns')) /* line 134 */;
				echo '</a>
											</li>
';
			}
			echo '										</ul>
									</div>
								</div>
';
		}
	}


	/** n:block="icon-gear" on line 113 */
	public function blockIcon_gear(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '											<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 113 */;
		echo 'cog"></i>
';
	}


	/** n:block="icon-checked" on line 119 */
	public function blockIcon_checked(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '														<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 119 */;
		echo 'check-square"></i>
';
	}


	/** n:block="icon-unchecked" on line 124 */
	public function blockIcon_unchecked(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '														<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 124 */;
		echo 'square"></i>
';
	}


	/** n:block="icon-eye" on line 131 */
	public function blockIcon_eye(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 131 */;
		echo 'eye"></i>';
	}


	/** n:block="icon-repeat" on line 134 */
	public function blockIcon_repeat(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 134 */;
		echo 'repeat"></i>';
	}


	/** n:block="header-column-row" on line 142 */
	public function blockHeader_column_row(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '					<tr>
';
		if ($hasGroupActions) /* line 143 */ {
			echo '						<th';
			echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('thead-group-action')), '"';
			$ʟ_tmp = ['rowspan=2' => !empty($filters) && !$control->hasOuterFilterRendering()];
			echo Latte\Essential\Nodes\NAttrNode::attrs(isset($ʟ_tmp[0]) && is_array($ʟ_tmp[0]) ? $ʟ_tmp[0] : $ʟ_tmp, false) /* line 143 */;
			echo ' class="col-checkbox">';
			$this->renderBlock('thead-group-action', [], null, 'snippet') /* line 143 */;
			echo '</th>
';
		}
		foreach ($iterator = $ʟ_it = new Latte\Essential\CachingIterator($columns, $ʟ_it ?? null) as $key => $column) /* line 146 */ {
			$th = $column->getElementForRender('th', $key) /* line 147 */;
			echo '							';
			echo $th->startTag() /* line 148 */;
			echo "\n";
			$col_header = 'col-' . $key . '-header' /* line 149 */;
			echo "\n";
			if ($this->hasBlock($col_header)) /* line 154 */ {
				$this->renderBlock($col_header, ['column' => $column] + [], 'html') /* line 155 */;
			} else /* line 156 */ {
				if ($column->isSortable()) /* line 157 */ {
					echo '										<a';
					echo ($ʟ_tmp = array_filter([$column->isSortedBy() ? 'sort' : '', 'ajax'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 158 */;
					echo ' href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('sort!', ['sort' => $control->getSortNext($column)])) /* line 158 */;
					echo '" id="datagrid-sort-';
					echo LR\Filters::escapeHtmlAttr($key) /* line 158 */;
					echo '">
';
					$this->renderBlock('column-header', ['column' => $column] + get_defined_vars(), 'html') /* line 159 */;
					echo "\n";
					if ($column->isSortedBy()) /* line 161 */ {
						if ($column->isSortAsc()) /* line 162 */ {
							$this->renderBlock('icon-sort-up', get_defined_vars()) /* line 163 */;
						} else /* line 164 */ {
							$this->renderBlock('icon-sort-down', get_defined_vars()) /* line 165 */;
						}
					} else /* line 167 */ {
						$this->renderBlock('icon-sort', get_defined_vars()) /* line 168 */;
					}
					echo '										</a>
';
				} else /* line 171 */ {
					$this->renderBlock('column-header', ['column' => $column] + get_defined_vars(), 'html') /* line 172 */;
				}
			}
			echo '
								<div class="datagrid-column-header-additions">
';
			if ($control->canHideColumns()) /* line 177 */ {
				echo '									<div class="btn-group column-settings-menu">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
';
				$this->renderBlock('icon-caret-down', get_defined_vars()) /* line 179 */;
				echo '										</a>
										<ul class="dropdown-menu dropdown-menu--grid">
											<li>
												<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('hideColumn!', ['column' => $key])) /* line 183 */;
				echo '" class="ajax dropdown-item">
';
				$this->renderBlock('icon-eye-slash', get_defined_vars()) /* line 184 */;
				echo ' ';
				echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.hide_column')) /* line 184 */;
				echo '</a>
											</li>
										</ul>
									</div>
';
			}
			echo "\n";
			if ($control->hasColumnReset()) /* line 189 */ {
				echo '										<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('resetColumnFilter!', ['key' => $key])) /* line 190 */;
				echo '" data-datagrid-reset-filter-by-column="';
				echo LR\Filters::escapeHtmlAttr($key) /* line 190 */;
				echo '"';
				echo ($ʟ_tmp = array_filter([isset($filters[$key]) && $filters[$key]->isValueSet() ? '' : 'hidden', 'ajax'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 190 */;
				echo ' title="';
				echo LR\Filters::escapeHtmlAttr(($this->filters->translate)('ublaboo_datagrid.reset_filter')) /* line 190 */;
				echo '">
';
				$this->renderBlock('icon-remove', get_defined_vars()) /* line 191 */;
				echo '										</a>
';
			}
			echo '								</div>
							';
			echo $th->endTag() /* line 195 */;
			echo "\n";

		}
		$iterator = $ʟ_it = $ʟ_it->getParent();

		if ($actions || $control->isSortable() || $itemsDetail || $inlineEdit || $inlineAdd) /* line 197 */ {
			echo '						<th class="col-action text-center">
							';
			echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.action')) /* line 198 */;
			echo '
						</th>
';
		}
		echo '					</tr>
';
	}


	/** n:snippet="thead-group-action" on line 143 */
	public function blockThead_group_action(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('thead-group-action', 'static') /* line 143 */;
		try {
			echo "\n";
			if ($hasGroupActionOnRows) /* line 144 */ {
				echo '							<input';
				echo ($ʟ_tmp = array_filter([$control->shouldUseHappyComponents() ? 'happy gray-border' : null, 'primary'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 144 */;
				echo ' name="';
				echo LR\Filters::escapeHtmlAttr(($this->filters->lower)($control->getFullName())) /* line 144 */;
				echo '-toggle-all" type="checkbox" data-check="';
				echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 144 */;
				echo '" data-check-all="';
				echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 144 */;
				echo '">
';
			}
			echo '						';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** n:block="icon-sort-up" on line 163 */
	public function blockIcon_sort_up(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '													<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 163 */;
		echo 'caret-up"></i>
';
	}


	/** n:block="icon-sort-down" on line 165 */
	public function blockIcon_sort_down(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '													<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 165 */;
		echo 'caret-down"></i>
';
	}


	/** n:block="icon-sort" on line 168 */
	public function blockIcon_sort(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '												<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 168 */;
		echo 'sort"></i>
';
	}


	/** n:block="icon-caret-down" on line 179 */
	public function blockIcon_caret_down(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '											<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 179 */;
		echo 'caret-down"></i>
';
	}


	/** n:block="icon-eye-slash" on line 184 */
	public function blockIcon_eye_slash(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '													<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 184 */;
		echo 'eye-slash"></i>';
	}


	/** n:block="icon-remove" on line 191 */
	public function blockIcon_remove(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '											<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 191 */;
		echo 'remove"></i>
';
	}


	/** n:block="header-filters" on line 201 */
	public function blockHeader_filters(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		if (!empty($filters) && !$control->hasOuterFilterRendering()) /* line 201 */ {
			echo '					<tr>
';
			foreach ($columns as $key => $column) /* line 202 */ {
				$th = $column->getElementForRender('th', $key) /* line 203 */;
				echo '							';
				echo $th->startTag() /* line 204 */;
				echo "\n";
				$col_header = 'col-filter-' . $key . '-header' /* line 205 */;
				if (!$control->hasOuterFilterRendering() && isset($filters[$key])) /* line 206 */ {
					$i = $filter['filter'][$key] /* line 207 */;
					echo "\n";
					$filter_block = 'filter-' . $filters[$key]->getKey() /* line 209 */;
					$filter_type_block = 'filtertype-' . $filters[$key]->getType() /* line 210 */;
					echo "\n";
					if ($this->hasBlock($filter_block)) /* line 212 */ {
						$this->renderBlock($filter_block, ['filter' => $filters[$key], 'input' => $i, 'outer' => false] + [], 'html') /* line 213 */;
					} else /* line 214 */ {
						if ($this->hasBlock($filter_type_block)) /* line 215 */ {
							$this->renderBlock($filter_type_block, ['filter' => $filters[$key], 'input' => $i, 'outer' => false] + [], 'html') /* line 216 */;
						} else /* line 217 */ {
							$this->createTemplate($filters[$key]->getTemplate(), ['filter' => $filters[$key], 'input' => $i, 'outer' => false] + $this->params, 'include')->renderToContentType('html') /* line 218 */;
						}
					}
					echo "\n";
				}
				echo '							';
				echo $th->endTag() /* line 223 */;
				echo "\n";

			}

			if ($actions || $control->isSortable() || $itemsDetail || $inlineEdit || $inlineAdd) /* line 225 */ {
				echo '						<th class="col-action text-center">
';
				if (!$control->hasAutoSubmit() && !$control->hasOuterFilterRendering()) /* line 226 */ {
					echo '								';
					echo Nette\Bridges\FormsLatte\Runtime::item($filter['filter']['submit'], $this->global)->getControl() /* line 227 */;
					echo "\n";
				}
				echo '						</th>
';
			}
			echo '					</tr>
';
		}
	}


	/** {block tbody} on line 233 */
	public function blockTbody(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '				<tbody';
		echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('tbody')), '"';
		echo ' ';
		if ($control->isSortable()) /* line 234 */ {
			echo 'data-sortable data-sortable-url="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link($control->getSortableHandler())) /* line 234 */;
			echo '" data-sortable-parent-path="';
			echo LR\Filters::escapeHtmlAttr($control->getSortableParentPath()) /* line 234 */;
			echo '"';
		}
		echo '>';
		$this->renderBlock('tbody', [], null, 'snippet') /* line 234 */;
		echo '</tbody>
';
	}


	/** n:snippet="tbody" on line 234 */
	public function blockTbody1(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('tbody', 'static') /* line 234 */;
		try {
			echo "\n";
			$this->renderBlock('items', [], null, 'snippet') /* line 235 */;
			echo '				';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** {snippetArea items} on line 235 */
	public function blockItems(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('items', 'area');
		try {
			if ($inlineAdd && $inlineAdd->isPositionTop()) /* line 236 */ {
				$this->renderBlock('inlineAddRow', ['columns' => $columns] + get_defined_vars(), 'html') /* line 237 */;
			}
			echo "\n";
			if ($columnsSummary && $columnsSummary->getPositionTop()) /* line 240 */ {
				$this->renderBlock('columnSummary', get_defined_vars(), 'html') /* line 241 */;
			}
			echo "\n";
			foreach ($iterator = $ʟ_it = new Latte\Essential\CachingIterator($rows, $ʟ_it ?? null) as $row) /* line 244 */ {
				$item = $row->getItem() /* line 245 */;
				echo "\n";
				if (!isset($toggle_detail)) /* line 247 */ {
					if ($inlineEdit && $inlineEdit->getItemId() == $row->getId()) /* line 248 */ {
						$inlineEdit->onSetDefaults($filter['inline_edit'], $item) /* line 249 */;
						echo '
									<tr data-id="';
						echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 251 */;
						echo '"';
						echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId($ʟ_nm = ("item-" . ($row->getId()) . ""))), '"';
						$ʟ_tmp = [$row->getControl()->attrs];
						echo Latte\Essential\Nodes\NAttrNode::attrs(isset($ʟ_tmp[0]) && is_array($ʟ_tmp[0]) ? $ʟ_tmp[0] : $ʟ_tmp, false) /* line 251 */;
						echo '>';
						$this->global->snippetDriver->enter($ʟ_nm, 'dynamic') /* line 251 */;
						try {
							echo "\n";
							if ($hasGroupActions) /* line 252 */ {
								echo '										<td class="col-checkbox"></td>
';
							}
							echo "\n";
							foreach ($iterator = $ʟ_it = new Latte\Essential\CachingIterator($columns, $ʟ_it ?? null) as $key => $column) /* line 254 */ {
								$col = 'col-' . $key /* line 255 */;
								echo "\n";
								$td = $column->getElementForRender('td', $key, $row) /* line 257 */;
								$td->class[] = 'datagrid-inline-edit' /* line 258 */;
								echo '											';
								echo $td->startTag() /* line 259 */;
								echo "\n";
								if (isset($filter['inline_edit'][$key])) /* line 260 */ {
									if ($filter['inline_edit'][$key] instanceof \Nette\Forms\Container) /* line 261 */ {
										foreach ($filter['inline_edit'][$key]->getControls() as $inlineEditControl) /* line 262 */ {
											echo '															';
											echo Nette\Bridges\FormsLatte\Runtime::item($inlineEditControl, $this->global)->getControl() /* line 263 */;
											echo "\n";

										}

									} else /* line 265 */ {
										echo '														';
										echo Nette\Bridges\FormsLatte\Runtime::item($filter['inline_edit'][$key], $this->global)->getControl() /* line 266 */;
										echo "\n";
									}
								} elseif ($inlineEdit->showNonEditingColumns()) /* line 268 */ {
									$this->renderBlock('column-value', ['column' => $column, 'row' => $row, 'key' => $key] + get_defined_vars(), 'html') /* line 269 */;
								}

								echo '											';
								echo $td->endTag() /* line 271 */;
								echo "\n";

							}
							$iterator = $ʟ_it = $ʟ_it->getParent();

							echo '
										<td class="col-action col-action-inline-edit">
											';
							echo Nette\Bridges\FormsLatte\Runtime::item($filter['inline_edit']['cancel'], $this->global)->getControl()->addAttributes(['class' => 'btn btn-xs btn-danger']) /* line 275 */;
							echo '
											';
							echo Nette\Bridges\FormsLatte\Runtime::item($filter['inline_edit']['submit'], $this->global)->getControl()->addAttributes(['class' => 'btn btn-xs btn-primary']) /* line 276 */;
							echo '
											';
							echo Nette\Bridges\FormsLatte\Runtime::item($filter['inline_edit']['_id'], $this->global)->getControl() /* line 277 */;
							echo '
											';
							echo Nette\Bridges\FormsLatte\Runtime::item($filter['inline_edit']['_primary_where_column'], $this->global)->getControl() /* line 278 */;
							echo '
										</td>
									';

						} finally {
							$this->global->snippetDriver->leave();
						}
						echo '</tr>
';
					} else /* line 281 */ {
						echo '									<tr data-id="';
						echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 282 */;
						echo '"';
						echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId($ʟ_nm = ("item-" . ($row->getId()) . ""))), '"';
						$ʟ_tmp = [$row->getControl()->attrs];
						echo Latte\Essential\Nodes\NAttrNode::attrs(isset($ʟ_tmp[0]) && is_array($ʟ_tmp[0]) ? $ʟ_tmp[0] : $ʟ_tmp, false) /* line 282 */;
						echo '>';
						$this->global->snippetDriver->enter($ʟ_nm, 'dynamic') /* line 282 */;
						try {
							echo "\n";
							if ($hasGroupActions) /* line 283 */ {
								echo '										<td class="col-checkbox">
';
								if ($row->hasGroupAction()) /* line 284 */ {
									echo '												<input';
									echo ($ʟ_tmp = array_filter([$control->shouldUseHappyComponents() ? 'happy gray-border' : null, 'primary'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 285 */;
									echo ' type="checkbox" data-check="';
									echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 285 */;
									echo '" data-check-all-';
									echo $control->getFullName() /* line 285 */;
									echo ' name="';
									echo LR\Filters::escapeHtmlAttr(($this->filters->lower)($control->getFullName())) /* line 285 */;
									echo '_group_action_item[';
									echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 285 */;
									echo ']">
';
								}
								echo '										</td>
';
							}
							foreach ($iterator = $ʟ_it = new Latte\Essential\CachingIterator($columns, $ʟ_it ?? null) as $key => $column) /* line 288 */ {
								$column = $row->applyColumnCallback($key, clone $column) /* line 289 */;
								echo "\n";
								$td = $column->getElementForRender('td', $key, $row) /* line 291 */;
								echo '											';
								echo $td->startTag() /* line 292 */;
								echo "\n";
								$this->renderBlock('column-value', ['column' => $column, 'row' => $row, 'key' => $key] + get_defined_vars(), 'html') /* line 293 */;
								echo '											';
								echo $td->endTag() /* line 294 */;
								echo "\n";

							}
							$iterator = $ʟ_it = $ʟ_it->getParent();

							if ($actions || $control->isSortable() || $itemsDetail || $inlineEdit || $inlineAdd) /* line 296 */ {
								echo '										<td class="col-action">
';
								foreach ($actions as $key => $action) /* line 297 */ {
									if ($row->hasAction($key)) /* line 298 */ {
										if ($action->hasTemplate()) /* line 299 */ {
											$this->createTemplate($action->getTemplate(), ['item' => $item, ...$action->getTemplateVariables(), 'row' => $row] + $this->params, 'include')->renderToContentType('html') /* line 300 */;
										} else /* line 301 */ {
											echo '														';
											echo $action->render($row) /* line 302 */;
											echo "\n";
										}
									}

								}

								if ($control->isSortable()) /* line 306 */ {
									echo '											<span class="handle-sort btn btn-xs ';
									echo LR\Filters::escapeHtmlAttr($btnSecondaryClass) /* line 306 */;
									echo '">
';
									$this->renderBlock('icon-arrows-v', get_defined_vars()) /* line 307 */;
									echo '											</span>
';
								}
								if ($inlineEdit && $row->hasInlineEdit()) /* line 309 */ {
									echo '												';
									echo $inlineEdit->renderButton($row) /* line 310 */;
									echo "\n";
								}
								if ($itemsDetail && $itemsDetail->shouldBeRendered($row)) /* line 312 */ {
									echo '												';
									echo $itemsDetail->renderButton($row) /* line 313 */;
									echo "\n";
								}
								echo '										</td>
';
							}
							echo '									';

						} finally {
							$this->global->snippetDriver->leave();
						}
						echo '</tr>
';
					}
				}
				echo "\n";
				if ($itemsDetail && $itemsDetail->shouldBeRendered($row)) /* line 323 */ {
					echo '								<tr class="row-item-detail item-detail-';
					echo LR\Filters::escapeHtmlAttr($control->getFullname()) /* line 324 */;
					echo '-id-';
					echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 324 */;
					echo '"';
					echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId($ʟ_nm = ("item-" . ($row->getId()) . "-detail"))), '"';
					echo '>';
					$this->global->snippetDriver->enter($ʟ_nm, 'dynamic') /* line 324 */;
					try {
						echo "\n";
						if (isset($toggle_detail) && $toggle_detail == $row->getId()) /* line 325 */ {
							$item_detail_params = ['item' => $item, '_form' => $filter] + $itemsDetail->getTemplateVariables() /* line 326 */;
							echo "\n";
							if (isset($filter['items_detail_form'])) /* line 328 */ {
								$item_detail_params['items_detail_form'] = $filter['items_detail_form'] /* line 329 */;
							}
							echo "\n";
							if ($this->hasBlock('detail')) /* line 332 */ {
								echo '											<td colspan="';
								echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 333 */;
								echo '">
												<div class="item-detail-content">
';
								$this->renderBlock('detail', [...$item_detail_params] + [], 'html') /* line 335 */;
								echo '												</div>
											</td>
';
							} elseif ($itemsDetail) /* line 338 */ {
								echo '											<td colspan="';
								echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 339 */;
								echo '">
												<div class="item-detail-content">
';
								if ($itemsDetail->getType() == 'template') /* line 341 */ {
									$this->createTemplate($itemsDetail->getTemplate(), [...$item_detail_params] + $this->params, 'include')->renderToContentType('html') /* line 342 */;
								} else /* line 343 */ {
									echo '														';
									echo $itemsDetail->render($item) /* line 344 */;
									echo "\n";
								}
								echo '												</div>
											</td>
';
							}

						}
						echo '								';

					} finally {
						$this->global->snippetDriver->leave();
					}
					echo '</tr>
								<tr class="row-item-detail-helper"></tr>
';
				}

			}
			$iterator = $ʟ_it = $ʟ_it->getParent();

			echo "\n";
			if ($inlineAdd && $inlineAdd->isPositionBottom()) /* line 355 */ {
				$this->renderBlock('inlineAddRow', ['columns' => $columns] + get_defined_vars(), 'html') /* line 356 */;
			}
			echo "\n";
			if ($columnsSummary && !$columnsSummary->getPositionTop() || $control->hasSomeAggregationFunction()) /* line 359 */ {
				$this->renderBlock('columnSummary', get_defined_vars(), 'html') /* line 360 */;
			}
			echo "\n";
			$this->renderBlock('noItems', get_defined_vars()) /* line 363 */;
		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** n:block="icon-arrows-v" on line 307 */
	public function blockIcon_arrows_v(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '												<i class="';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 307 */;
		echo 'arrows-v ';
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 307 */;
		echo 'arrows-alt-v"></i>
';
	}


	/** {block noItems} on line 363 */
	public function blockNoItems(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		if (!$rows) /* line 364 */ {
			echo '							<tr>
								<td colspan="';
			echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 365 */;
			echo '">
';
			if ($filter_active) /* line 366 */ {
				echo '										';
				echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.no_item_found_reset')) /* line 367 */;
				echo ' <a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('resetFilter!')) /* line 367 */;
				echo '" class="link ajax">';
				echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.here')) /* line 367 */;
				echo '</a>.
';
			} else /* line 368 */ {
				echo '										';
				echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.no_item_found')) /* line 369 */;
				echo "\n";
			}
			echo '								</td>
							</tr>
';
		}
	}


	/** {block tfoot} on line 377 */
	public function blockTfoot(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '					<tfoot';
		echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('pagination')), '"';
		echo '>';
		$this->renderBlock('pagination', [], null, 'snippet') /* line 378 */;
		echo '</tfoot>
';
	}


	/** n:snippet="pagination" on line 378 */
	public function blockPagination(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('pagination', 'static') /* line 378 */;
		try {
			echo "\n";
			if ($control->isPaginated() || $filter_active) /* line 379 */ {
				$this->renderBlock('pagination', get_defined_vars()) /* line 380 */;
			}
			echo '					';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** n:block="pagination" on line 380 */
	public function blockPagination1(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '							<tr>
';
		if (!$control->isTreeView()) /* line 381 */ {
			echo '								<td colspan="';
			echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 381 */;
			echo '" class="row-grid-bottom">
									<div class="col-items">
';
			if ($control->isPaginated()) /* line 383 */ {
				echo '										<small class="text-muted">
											(';
				$paginator = $control['paginator']->getPaginator() /* line 384 */;
				echo '

';
				if ($control->getPerPage() === 'all') /* line 386 */ {
					echo '												';
					echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.items')) /* line 387 */;
					echo ': ';
					echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.all')) /* line 387 */;
					echo "\n";
				} else /* line 388 */ {
					echo '												';
					echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.items')) /* line 389 */;
					echo ': ';
					echo LR\Filters::escapeHtmlText($paginator->getOffset() > 0 ? $paginator->getOffset() + 1 : ($paginator->getItemCount() > 0 ? 1 : 0)) /* line 389 */;
					echo ' - ';
					echo LR\Filters::escapeHtmlText(sizeof($rows) + $paginator->getOffset()) /* line 389 */;
					echo '
												';
					echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.from')) /* line 390 */;
					echo ' ';
					echo LR\Filters::escapeHtmlText($paginator->getItemCount()) /* line 390 */;
					echo '
											';
				}
				echo ')
										</small>
';
			}
			echo '									</div>
									<div class="col-pagination text-center">
';
			$ʟ_tmp = $this->global->uiControl->getComponent('paginator');
			if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
			$ʟ_tmp->render() /* line 395 */;

			echo '									</div>
									<div class="col-per-page text-right">
';
			if ($filter_active) /* line 398 */ {
				echo '										<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('resetFilter!')) /* line 398 */;
				echo '" class="ajax btn btn-danger btn-sm reset-filter">';
				echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.reset_filter')) /* line 398 */;
				echo '</a>
';
			}
			if ($control->isPaginated()) /* line 399 */ {
				echo '											';
				echo Nette\Bridges\FormsLatte\Runtime::item($filter['perPage'], $this->global)->getControl()->addAttributes(['data-autosubmit-per-page' => true, 'class' => 'form-control input-sm form-control-sm']) /* line 400 */;
				echo '
											';
				echo Nette\Bridges\FormsLatte\Runtime::item($filter['perPage_submit'], $this->global)->getControl()->addAttributes(['class' => 'datagrid-per-page-submit']) /* line 401 */;
				echo "\n";
			}
			echo '									</div>
								</td>
';
		}
		echo '							</tr>
';
	}


	/** {define inlineAddRow} on line 416 */
	public function blockInlineAddRow(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		if ($inlineAdd->shouldBeRendered()) /* line 417 */ {
			$inlineAdd->onSetDefaults($filter['inline_add']) /* line 418 */;
			echo '
		<tr class="datagrid-row-inline-add datagrid-row-inline-add-hidden">
';
			if ($hasGroupActions) /* line 421 */ {
				echo '			<td class="col-checkbox"></td>
';
			}
			echo "\n";
			foreach ($columns as $key => $column) /* line 423 */ {
				$col = 'col-' . $key /* line 424 */;
				echo "\n";
				$td = clone $column->getElementForRender('td', $key) /* line 426 */;
				$td->class[] = 'datagrid-inline-edit' /* line 427 */;
				echo '				';
				echo $td->startTag() /* line 428 */;
				echo "\n";
				if (isset($filter['inline_add'][$key])) /* line 429 */ {
					if ($filter['inline_add'][$key] instanceof \Nette\Forms\Container) /* line 430 */ {
						foreach ($filter['inline_add'][$key]->getControls() as $inlineAddControl) /* line 431 */ {
							echo '								';
							echo Nette\Bridges\FormsLatte\Runtime::item($inlineAddControl, $this->global)->getControl() /* line 432 */;
							echo "\n";

						}

					} else /* line 434 */ {
						echo '							';
						echo Nette\Bridges\FormsLatte\Runtime::item($filter['inline_add'][$key], $this->global)->getControl() /* line 435 */;
						echo "\n";
					}
				}
				echo '				';
				echo $td->endTag() /* line 438 */;
				echo "\n";

			}

			echo '
			<td class="col-action col-action-inline-edit">
				';
			echo Nette\Bridges\FormsLatte\Runtime::item($filter['inline_add']['cancel'], $this->global)->getControl() /* line 442 */;
			echo '
				';
			echo Nette\Bridges\FormsLatte\Runtime::item($filter['inline_add']['submit'], $this->global)->getControl() /* line 443 */;
			echo '
			</td>
		</tr>
';
		}
	}


	/** {define columnSummary} on line 450 */
	public function blockColumnSummary(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		if (!empty($rows) && ($columnsSummary || $control->hasSomeAggregationFunction())) /* line 452 */ {
			echo '	<tr class="datagrid-row-columns-summary"';
			echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('summary')), '"';
			echo '>';
			$this->renderBlock('summary', [], null, 'snippet') /* line 452 */;
			echo '</tr>
';
		}
		echo "\n";
	}


	/** n:snippet="summary" on line 452 */
	public function blockSummary(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('summary', 'static') /* line 452 */;
		try {
			echo "\n";
			if ($hasGroupActions) /* line 453 */ {
				echo '		<td class="col-checkbox"></td>
';
			}
			echo "\n";
			if ($columnsSummary && $columnsSummary->someColumnsExist($columns)) /* line 455 */ {
				$this->renderBlock('columnsSummary', ['columns' => $columns] + get_defined_vars(), 'html') /* line 456 */;
			}
			echo "\n";
			if ($control->hasSomeAggregationFunction()) /* line 459 */ {
				$this->renderBlock('aggregationFunctions', ['columns' => $columns] + get_defined_vars(), 'html') /* line 460 */;
			}
			echo "\n";
			if ($actions || $control->isSortable() || $itemsDetail || $inlineEdit || $inlineAdd) /* line 463 */ {
				echo '		<td class="col-action"></td>
';
			}
			echo '	';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** {define columnsSummary} on line 469 */
	public function blockColumnsSummary(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		foreach ($columns as $key => $column) /* line 471 */ {
			$td = $column->getElementForRender('td', $key) /* line 472 */;
			echo '
		';
			echo $td->startTag() /* line 474 */;
			echo '
			';
			echo LR\Filters::escapeHtmlText($columnsSummary->render($key)) /* line 475 */;
			echo '
		';
			echo $td->endTag() /* line 476 */;
			echo "\n";

		}

		echo "\n";
	}


	/** {define aggregationFunctions} on line 482 */
	public function blockAggregationFunctions(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		foreach ($columns as $key => $column) /* line 484 */ {
			$td = $column->getElementForRender('td', $key) /* line 485 */;
			echo '
		';
			echo $td->startTag() /* line 487 */;
			echo "\n";
			if ($aggregationFunctions) /* line 488 */ {
				if (isset($aggregationFunctions[$key])) /* line 489 */ {
					echo '					';
					echo $aggregationFunctions[$key]->renderResult() /* line 490 */;
					echo "\n";
				}
			} else /* line 492 */ {
				echo '				';
				echo $multipleAggregationFunction->renderResult($key) /* line 493 */;
				echo "\n";
			}
			echo '		';
			echo $td->endTag() /* line 495 */;
			echo "\n";

		}

		echo "\n";
	}


	/** {define column-header} on line 501 */
	public function blockColumn_header(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		if (!$column->isHeaderEscaped()) /* line 502 */ {
			if ($column instanceof \Nette\Utils\Html || !$column->isTranslatableHeader()) /* line 503 */ {
				echo '			';
				echo $column->getName() /* line 504 */;
				echo "\n";
			} else /* line 505 */ {
				echo '			';
				echo ($this->filters->translate)($column->getName()) /* line 506 */;
				echo "\n";
			}
		} else /* line 508 */ {
			if ($column instanceof \Nette\Utils\Html || !$column->isTranslatableHeader()) /* line 509 */ {
				echo '			';
				echo LR\Filters::escapeHtmlText($column->getName()) /* line 510 */;
				echo "\n";
			} else /* line 511 */ {
				echo '			';
				echo LR\Filters::escapeHtmlText(($this->filters->translate)($column->getName())) /* line 512 */;
				echo "\n";
			}
		}
	}


	/** {define column-value} on line 518 */
	public function blockColumn_value(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$col = 'col-' . $key /* line 519 */;
		$item = $row->getItem() /* line 520 */;
		echo "\n";
		if ($column->hasTemplate()) /* line 522 */ {
			$this->createTemplate($column->getTemplate(), ['row' => $row, 'item' => $item, ...$column->getTemplateVariables()] + $this->params, 'include')->renderToContentType('html') /* line 523 */;
		} else /* line 524 */ {
			if ($this->hasBlock($col)) /* line 525 */ {
				$this->renderBlock($col, ['item' => $item] + [], 'html') /* line 526 */;
			} else /* line 527 */ {
				if ($column->isTemplateEscaped()) /* line 528 */ {
					echo '				';
					echo LR\Filters::escapeHtmlText($column->render($row)) /* line 529 */;
					echo "\n";
				} else /* line 530 */ {
					echo '				';
					echo $column->render($row) /* line 531 */;
					echo "\n";
				}
			}
		}
	}
}
