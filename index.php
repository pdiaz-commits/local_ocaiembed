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
 * Settings for the local_profile_lock plugin.
 *
 * @package    local_profilelock
 * @copyright  2025 Pablo Díaz 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */



require('../../config.php');
require_login();

$context = context_system::instance();
require_capability('local/ocaiembed:view', $context);

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/ocaiembed/index.php'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title(get_string('viewpage', 'local_ocaiembed'));
$PAGE->set_heading(get_string('viewpage', 'local_ocaiembed'));

$iframeurl = get_config('local_ocaiembed', 'iframeurl');

echo $OUTPUT->header();

if ($iframeurl) {
    echo html_writer::tag('iframe', '',
        [
            'src' => $iframeurl,
            'width' => '100%',
            'height' => '600px',
            'style' => 'border:1px solid #ccc;'
        ]
    );
} else {
    echo $OUTPUT->notification(get_string('iframeurl_desc', 'local_ocaiembed'), 'notifyproblem');
}

echo $OUTPUT->footer();
