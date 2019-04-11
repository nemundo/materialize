<?php

namespace Nemundo\Materialize\Pagination;


use Nemundo\Html\Container\AbstractHtmlContainer;

class MaterializePagination extends AbstractHtmlContainer
{

    public function getHtml()
    {

        $this->tagName = 'ul';
        $this->addCssClass('pagination');

        $this->addHtml('<li class="waves-effect"><a href="#!">3</a></li>');
        $this->addHtml('<li class="waves-effect"><a href="#!">3</a></li>');
        $this->addHtml('<li class="waves-effect"><a href="#!">3</a></li>');
        $this->addHtml('<li class="waves-effect"><a href="#!">3</a></li>');


        /*
        <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="Materialize-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="Materialize-icons">chevron_right</i></a></li>
  </ul>*/


        return parent::getHtml();
    }

}