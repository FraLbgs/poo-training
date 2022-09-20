<?php

namespace App\Views;

class Menu{
    // protected static string $filename = 'App/Templates/menu.html';

    function getHtmlFromArray(array $array): string{
        $valueToLi = fn ($v) => "<li>$v</li>";
        return "<ul class=\"main-nav-list\">" . implode("", array_map($valueToLi, $array)) . "</ul>";
    }


    public function getHtmlLink(string $href, string $content, string $classCss = null):string {
        if ($classCss) $classCss = " class=\"$classCss\"";
        return "<a href=\"$href\"$classCss>$content</a>";
    }


    function getNavLink(array $li, int $currentPage = 1):string {
        if ($currentPage === $li["pageNumber"]) $li["class"] .= " active";
        return $this->getHtmlLink($li["link"], $li["title"], $li["class"]);
    }
    
   
    function getMainNavigation(array $liList, int $currentPage = 1):string {
        return "<nav class=\"main-nav\">".$this->getHtmlFromArray(array_map(fn($p) => $this->getNavLink($p, $currentPage), $liList))."</nav>";
    }

}