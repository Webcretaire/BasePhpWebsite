<?php

namespace App\View;

/**
 * Class BaseTemplate
 *
 * @package App\View
 */
abstract class BaseTemplate
{
    protected $page_title;

    public function getHTML()
    {
        ob_start();
        $this->render();
        $html_output = ob_get_contents();
        ob_end_clean();

        return $html_output;
    }

    public function render()
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <?php $this->blockHead(); ?>
        </head>


        <body>

        <?php
        $this->blockBody();

        $this->blockJavascript(); ?>
        </body>
        </html>
        <?php
    }

    protected function blockHead()
    {
        echo '<title>' . $this->page_title . '</title>';
    }

    protected function blockBody()
    {
    }

    protected function blockJavascript()
    {
    }
}