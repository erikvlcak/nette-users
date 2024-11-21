<?php

declare(strict_types=1);

namespace App\UI\List;

use App\Model\UsersFacade;
use App\UI\Accessory\RequireLogin;
use Ublaboo\DataGrid\DataGrid;
use Nette\Application\UI\Presenter;

final class ListPresenter extends Presenter
{
    use RequireLogin;
    public function __construct(
        private UsersFacade $usersFacade,
    ) {
        parent::__construct();
        $this->usersFacade = $usersFacade;
    }

    protected function createComponentSimpleGrid(): DataGrid
    {

        $grid = new DataGrid();

        $grid->setDataSource($this->usersFacade->getUsers());

        $grid->setPagination(false);

        $grid->addColumnText('id', 'Id')->setAlign('center')
            ->setSortable();

        $grid->addColumnText('fullname', 'Name')->setAlign('center')
            ->setSortable();


        $grid->addColumnText('username', 'Username')->setAlign('center')
            ->setSortable();


        $grid->addColumnText('email', 'E-mail')->setAlign('center')
            ->setSortable();


        $grid->addAction('edit', 'Edit')
            ->setIcon('pencil')
            ->setClass('btn btn-xs btn-primary')
            ->setTitle('Edit');

        $grid->addAction('delete', 'Delete')
            ->setIcon('trash')
            ->setClass('btn btn-xs btn-danger')
            ->setTitle('Delete');





        return $grid;
    }
}
