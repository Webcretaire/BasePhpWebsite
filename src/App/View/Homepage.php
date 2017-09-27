<?php

namespace App\View;

/**
 * Class Homepage
 *
 * @package App\View
 */
class Homepage extends BaseTemplate
{
    protected $page_title = 'Accueil';

    protected function blockBody()
    {
        ?>
        <div style="text-align: center;">
            <h1>Hello world !</h1>
            <p>The project is correctly set-up, new pages should now be created in the folder /src/App/View</p>
        </div>
        <?php
    }
}