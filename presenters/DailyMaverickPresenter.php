<?php

namespace Crm\DailyMaverickModule\Presenters;

class DailyMaverickPresenter extends \Crm\ApplicationModule\Presenters\FrontendPresenter
{
    public function startup()
    {
        // $this->onlyLoggedIn();
        parent::startup();
    }

    public function renderDefault()
    {
        // $this->template->userId = $this->user->id;
    }

    public function renderHello() {
        $this->template->userId = $this->user->id;
    }
}