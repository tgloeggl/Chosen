<?php
/*
 * ChosenPlugin.class.php - Chosen
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * @author      Till Glöggler <till.gloeggler@elan-ev.de>
 * @copyright   2011 ELAN e.V. <http://www.elan-ev.de>
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPL version 2
 * @category    Stud.IP
 */

class ChosenPlugin extends StudipPlugin implements SystemPlugin
{

    /**
     * Initialize a new instance of the plugin.
     */
    function __construct()
    {
        parent::__construct();

        // TODO: remove development-rand from poduction-code
        PageLayout::addScript($this->getPluginURL()     . '/assets/javascript/chosen.jquery.min.js');
        PageLayout::addScript($this->getPluginURL()     . '/assets/javascript/chosen_plugin.js');
        PageLayout::addStylesheet($this->getPluginURL() . '/assets/stylesheets/chosen.css');
    }
}
