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

        //$div = new Div($this);

        //$list = new UnorderedList($div);

        //$list->addCssClass('right hide-on-med-and-down');

        foreach ($this->site->getMenuActiveSite() as $site) {

            $link = new SiteHyperlink($this->menuList);
            $link->site = $site;

            //$list->addHyperlink($site->getUrl(), $site->title);
        }


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