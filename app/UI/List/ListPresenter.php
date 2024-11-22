<?php

declare(strict_types=1);

namespace App\UI\List;

use AllowDynamicProperties;
use App\Model\UsersFacade;
use App\UI\Accessory\RequireLogin;
use Ublaboo\DataGrid\DataGrid;
use Nette\Application\UI\Presenter;
use Ublaboo\DataGrid\Column\Action\Confirmation\StringConfirmation;
use Nette\Forms\Form;

#[AllowDynamicProperties]

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


        $grid->addAction('edit', 'Edit user', 'Action:edit');


        $grid->addAction('delete', 'Delete user', 'Action:delete');

        return $grid;
    }
}
