<?php

namespace Nemundo\Materialize\Navbar;


use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Layout\Nav;
use Nemundo\Html\Listing\Li;
use Nemundo\Web\Site\AbstractSite;

class MaterializeNavbar extends Nav
{

    /**
     * @var AbstractSite
     */
    //public $site;

    /**
     * @var UnorderedList
     */
    protected $menuList;

    protected function loadContainer()
    {

        parent::loadContainer();

        $div = new Div($this);
        $div->addCssClass('nav-wrapper');

        $this->menuList = new UnorderedList($div);
        //$this->menuList->addCssClass('left hide-on-med-and-down');
        $this->menuList->addCssClass('left');

    }


    public function addItem($label, $url)
    {

        $li = new Li($this->menuList);

        $link = new UrlHyperlink($li);
        $link->content = $label;
        $link->url = $url;

    }


    public function getHtml()
    {

        $this->addCssClass('light-blue');

        return parent::getHtml(); // TODO: Change the autogenerated stub
    }

}