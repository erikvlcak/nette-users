<?php

declare(strict_types=1);

namespace App\UI\List;

use AllowDynamicProperties;
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

    protected function beforeRender(): void
    {
        parent::beforeRender();
        $identity = $this->getUser()->getIdentity();
        $currentUser = $this->usersFacade->getUserById($identity->id);
        $this->template->currentUser = $currentUser->username;
        $this->template->numberOfUsers = count($this->usersFacade->getUsers());
    }

    protected function createComponentSimpleGrid(): DataGrid
    {



        $grid = new DataGrid();

        $grid->setDataSource($this->usersFacade->getUsers());

        $grid->setPagination(false);

        $grid->addColumnText('id', 'Id', 'id')->setAlign('center')
            ->setSortable();

        $grid->addColumnText('fullname', 'Full name', 'fullname')->setAlign('center')
            ->setSortable();


        $grid->addColumnText('username', 'Username', 'username')->setAlign('center')
            ->setSortable();


        $grid->addColumnText('email', 'E-mail', 'email')->setAlign('center')
            ->setSortable();

        $grid->addAction('edit', 'Edit user', 'Data:edit')->setClass('btn btn-warning btn-sm');

        $grid->addAction('delete', 'Delete user', 'Data:delete')->setClass('btn btn-danger btn-sm');

        return $grid;
    }
}
