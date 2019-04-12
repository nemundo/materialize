<?php

namespace Nemundo\Materialize\Navbar;


use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Layout\Nav;
use Nemundo\Com\Html\Listing\UnorderedList;
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
        $this->menuList->addCssClass('right hide-on-med-and-down');

    }


    public function addItem($label, $url) {


        $li = new Li($this->menuList);

        $link = new UrlHyperlink($li);
        $link->content = $label;
        $link->url = $url;


        //  <li><a href="sass.html">Sass</a></li>


    }


    public function getHtml()
    {


        //$list->addCssClass('right hide-on-med-and-down');


        /*
        <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>



        /*   foreach ($this->site->getMenuActiveSite() as $site) {

               $link = new SiteHyperlink($list);
               $link->site = $site;

               //$list->addHyperlink($site->getUrl(), $site->title);
           }*/


        return parent::getHtml();
    }


    // external site
    // getActiveSite (check für User)
    //


    /*
     *
     * <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
     *
<nav>
<div class="nav-wrapper">
<a href="#" class="brand-logo">Logo</a>
<ul id="nav-mobile" class="right hide-on-med-and-down">
<li><a href="sass.html">Sass</a></li>
<li><a href="badges.html">Components</a></li>
<li><a href="collapsible.html">JavaScript</a></li>
</ul>
</div>
</nav>*/


}