<?php

namespace Kanboard\Plugin\KanboardFocusLightbox;


use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        //init
    }

    public function getPluginName()
    {
        return 'KanboardFocusLightbox';
    }

    public function getPluginDescription()
    {
        return 'Focus on Lightbox when the site is loaded.';
    }

    public function getPluginAuthor()
    {
        return 'Hussein Khalil, ipunkt Business Solutions';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://www.ipunkt.biz/unternehmen/opensource';
    }
}
