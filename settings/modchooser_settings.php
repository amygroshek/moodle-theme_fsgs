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
 * Presets settings page file.
 *
 * @package    theme_fsgs
 * @copyright  2017 OCJ
 * @credits    theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_fsgs_presets', get_string('presets_settings', 'theme_fsgs'));

// modchooser settings tab.
$page = new admin_settingpage('theme_fsgs_modchooser', get_string('modchoosersettingspage', 'theme_fsgs'));

    // Custom Menu label
    $name = 'theme_fsgs/modchoosercustomlabel';
    $title = get_string('modchoosercustomlabel', 'theme_fsgs');
    $description = get_string('modchoosercustomlabel_desc', 'theme_fsgs');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	$setting = new admin_setting_configtextarea('theme_fsgs/commonlyused', get_string('commonlyused', 'theme_fsgs'), get_string('commonlyuseddesc', 'theme_fsgs'), '', PARAM_RAW);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	// show only custom activities/resource
    $name = 'theme_fsgs/showonlycustomactivities';
    $title = get_string('showonlycustomactivities', 'theme_fsgs');
    $description = get_string('showonlycustomactivities_desc', 'theme_fsgs');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // show only custom activities/resource
    $name = 'theme_fsgs/showalltomanager';
    $title = get_string('showalltomanager', 'theme_fsgs');
    $description = get_string('showalltomanager_desc', 'theme_fsgs');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

$settings->add($page);
