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
 * Strings for component Flexible sections course format.
 *
 * @package   format_flexsections
 * @copyright 2022 Marina Glancy
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addsections'] = 'Add section';
$string['addsubsection'] = 'Add subsection';
$string['automaticenddate'] = 'For weekly layout calculate the end date from the number of sections';
$string['automaticenddate_help'] = 'If enabled, the end date for the course will be automatically calculated from the number of sections and the course start date.';
$string['addsectionbelow'] = 'Add section below';
$string['backtocourse'] = 'Back to course \'{$a}\'';
$string['backtosection'] = 'Back to \'{$a}\'';
$string['confirmdelete'] = 'Are you sure you want to delete this section? All activities and subsections will also be deleted';
$string['confirmmerge'] = 'Are you sure you want to merge this section content with the parent? All activities and subsections will be moved';
$string['currentsection'] = 'This section';
$string['deletesection'] = 'Delete section';
$string['displaycontent'] = 'Display content';
$string['editsection'] = 'Edit section';
$string['editsectionname'] = 'Edit section name';
$string['hidefromothers'] = 'Hide section';
$string['layout'] = 'Layout';
$string['layout_help'] = 'Choose flexsections layout:

* Topics - this emulates topics format, each subsection will be numbered consecutively.
* Weekly - this emulates weekly format in a way where top level sections will be named after weeks. This does not apply to subsections.';
$string['layouttopics'] = 'Topics layout';
$string['layoutweekly'] = 'Weekly layout';
$string['maxsubsections'] = 'Max subsection levels';
$string['maxsubsections_help'] = 'Setting maximum number of subsection levels will restrict ability of user to create sections at levels deeper than configured.';
$string['maxsubsectionsdesc'] = 'The default maximum number of subsection levels. This can be configured per course in course settings.';
$string['mergeup'] = 'Merge with parent';
$string['moveassubsection'] = 'As a subsection of \'{$a}\'';
$string['movebeforecm'] = 'Before activity \'{$a}\'';
$string['movebeforesection'] = 'Before \'{$a}\'';
$string['movecmendofsection'] = 'To the end of section \'{$a}\'';
$string['movecmsection'] = 'To the section \'{$a}\'';
$string['moveendofsection'] = 'As the last subsection of \'{$a}\'';
$string['movesectiontotheend'] = 'To the end';
$string['newsectionname'] = 'New name for section {$a}';
$string['page-course-view-flexsections'] = 'Any course main page in Flexible sections format';
$string['page-course-view-flexsections-x'] = 'Any course page in Flexible sections format';
$string['pluginname'] = 'Flexible sections format';
$string['privacy:metadata'] = 'The Flexible sections format plugin does not store any personal data.';
$string['secondarytitle'] = 'Secondary title';
$string['secondarytitle_help'] = 'If defined, secondary title will be displayed under the title in the section layout. This is useful when one is using weekly format and want to have a custom topic too.';
$string['section0name'] = 'General';
$string['sectionname'] = 'Topic';
$string['showcollapsed'] = 'Display as a link';
$string['showexpanded'] = 'Display on the same page';
$string['showfromothers'] = 'Show section';
$string['showsection0title'] = 'Show top section title';
$string['showsection0title_help'] = 'When enabled, section 0 will have title and will be collapsable, same at it behaves at the Topics format.';
$string['subtopic'] = 'Subtopic';
$string['showsection0titledefault'] = 'Show top section title by default';
$string['showsection0titledefaultdesc'] = 'This defines default setting that will be used for new and existing courses, it can be changed for particular course at its settings.';

// Deprecated but still can be used in 4.0, to be removed when we have a branch for Moodle 4.1 or later.
$string['addsection'] = 'Add section';
$string['addsubsectionfor'] = 'Add subsection for \'{$a}\'';
$string['cancelmoving'] = 'Cancel moving \'{$a}\'';
$string['removemarker'] = 'Do not mark as current';
$string['setmarker'] = 'Mark as current';
