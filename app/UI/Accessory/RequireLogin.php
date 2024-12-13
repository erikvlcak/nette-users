<?php

declare(strict_types=1);

namespace App\UI\Accessory;

trait RequireLogin
{
    public function injectRequireLoggedUser(): void
    {
        $this->onStartup[] = function (): void {
            $user = $this->getUser();
            if ($user->isLoggedIn()) {
                return;
            } else {
                $this->redirect('Sign:in');
            }
        };
    }
}
