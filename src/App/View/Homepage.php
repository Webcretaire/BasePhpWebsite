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
            <p>Le projet est correctement initialisé, il ne reste plus qu'à créer les pages du site dans le dossier
                /src/App/View</p>
        </div>
        <?php
    }
}