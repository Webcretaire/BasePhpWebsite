<?php

namespace App\View;

/**
 * Class Error
 *
 * @package App\View
 */
class Error extends BaseTemplate
{
    protected $page_title = "404 - Not found";

    protected function blockBody()
    {
        ?>
        <div style="text-align: center;">
            <h1>Error</h1>
            <p>The document you're looking for couldn't be found, maybe it was moved or you followed an incorrect
                link.</p>
        </div>
        <?php
    }
}