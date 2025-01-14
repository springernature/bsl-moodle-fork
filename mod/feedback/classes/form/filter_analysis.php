<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package   moodlefreak_dentallect
 * @copyright 04/08/2021 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author    Luuk Verhoeven
 **/

namespace mod_feedback\form;

use moodleform;

defined('MOODLE_INTERNAL') || die;

/**
 * Filter filter_analysis
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package   moodlefreak_dentallect
 * @copyright 04/08/2021 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author    Luuk Verhoeven
 */
class filter_analysis extends moodleform {

    /**
     * Form definition. Abstract method - always override!
     */
    protected function definition() {
        $mform = &$this->_form;

        $mform->addElement('date_time_selector', 'from', get_string('form:from', 'feedback'));
        $mform->setDefault('from', strtotime('-10 years'));

        $mform->addElement('date_time_selector', 'till', get_string('form:till', 'feedback'));

        $this->add_action_buttons(false, get_string('btn:filter', 'feedback'));
    }
}
