﻿<?php
/**
 * Collapsed Topics Information
 *
 * A topic based format that solves the issue of the 'Scroll of Death' when a course has many topics. All topics
 * except zero have a toggle that displays that topic. One or more topics can be displayed at any given time.
 * Toggles are persistent on a per browser session per course basis but can be made to persist longer by a small
 * code change. Full installation instructions, code adaptions and credits are included in the 'Readme.txt' file.
 *
 * @package    course/format
 * @subpackage topcoll
 * @version    See the value of '$plugin->version' in version.php.
 * @copyright  &copy; 2009-onwards G J Barnard in respect to modifications of standard topics format.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @link       http://docs.moodle.org/en/Collapsed_Topics_course_format
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Welsh Translation of Collapsed Topics Course Format
// Cyfieithu Cymraeg Pynciau dymchwel Fformat Cwrs

// Used by the Moodle Core for identifing the format and displaying in the list of formats for a course in its settings.
// Ddefnyddir gan y Craidd Moodle ar gyfer identifing y fformat ac arddangos yn y rhestr o ffurfiau ar gyfer cwrs yn ei lleoliadau.
$string['nametopcoll']='Pynciau Dymchwel';
$string['formattopcoll']='Pynciau Dymchwel';

// Used in format.php
// A ddefnyddir mewn format.php
$string['topcolltoggle']='Toggle';
$string['topcolltogglewidth']='width: 22px;';

// Toggle all - Moodle Tracker CONTRIB-3190
$string['topcollall']='pob toglau.';
$string['topcollopened']='Agored';
$string['topcollclosed']='Cau';

// Moodle 2.0 Enhancement - Moodle Tracker MDL-15252, MDL-21693 & MDL-22056 - http://docs.moodle.org/en/Development:Languages
// Moodle 2.0 Gwella - Moodle Tracker MDL-15252, MDL-21693 & MDL-22056 - http://docs.moodle.org/en/Development:Languages
$string['sectionname'] = 'Pwnc';
$string['pluginname'] = 'Pynciau Dymchwel';
$string['section0name'] = 'Cyffredinol';
?>