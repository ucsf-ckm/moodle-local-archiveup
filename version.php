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
 * Archive Up
 * Stores an archive copy of the tables that are being cleaned up by Moodle cron.
 *
 * @package   local_archiveup
 * @copyright University of California, San Francisco
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2017050800.02;
$plugin->requires = 2016112900;
$plugin->cron = 1;
$plugin->component = 'local_archiveup';
$plugin->maturity = MATURITY_BETA;
$plugin->release = '0.9.0';
