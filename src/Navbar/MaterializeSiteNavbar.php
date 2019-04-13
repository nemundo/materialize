<?php

namespace Nemundo\Materialize\Navbar;


use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Web\Site\AbstractSite;

class MaterializeSiteNavbar extends MaterializeNavbar
{

    /**
     * @var AbstractSite
     */
    public $site;

    public function getHtml()
    {

        foreach ($this->site->getMenuActiveSite() as $site) {
            $link = new SiteHyperlink($this->menuList);
            $link->site = $site;
        }

        return parent::getHtml();

    }

}