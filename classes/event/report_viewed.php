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
 * Displays a report on installed plugins.
 *
 * @package    report_plugins
 * @copyright  Mukudu Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace report_plugins\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The report_plugins report viewed event class.
 *
 * @package    report_plugins
 * @copyright  Mukudu Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class report_viewed extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_OTHER;
    }

    public static function get_name() {
        return get_string('eventreportviewed', 'report_plugins');
    }

    public function get_description() {
        return get_string('eventreportdesc', 'report_plugins', $this->userid);
    }

    public function get_url() {
        return new \moodle_url('/report/plugins/index.php');
    }
}
