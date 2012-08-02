<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_MODULE_NAME' => '条件',
	'LBL_MODULE_TITLE' => '工作流程触发器:首页',
	'LBL_MODULE_SECTION_TITLE' => '当这些条件符合',
	'LBL_SEARCH_FORM_TITLE' => '查找工作流程触发器',
	'LBL_LIST_FORM_TITLE' => '触发器列表',
	'LBL_NEW_FORM_TITLE' => '新增触发器',
	'LBL_LIST_NAME' => '说明:',
	'LBL_LIST_VALUE' => '值:',
	'LBL_LIST_TYPE' => '类型:',
	'LBL_LIST_EVAL' => '评价',
	'LBL_LIST_FIELD' => '字段:',
	'LBL_NAME' => '触发器名称:',
	'LBL_TYPE' => '类型:',
	'LBL_EVAL' => '触发器评价:',
	'LBL_SHOW_PAST' => '修改过去值',
    'LBL_SHOW' => '显示',

	'LNK_NEW_TRIGGER' => '新增触发器',
	'LNK_TRIGGER' => '工作流程触发器',


	'LBL_LIST_STATEMEMT' => '触发一个事件，基于下面:',
	'LBL_FILTER_LIST_STATEMEMT' => '过滤对象，基于下面:',

	'NTC_REMOVE_TRIGGER' => '您确定要移除这个触发器吗?',



	'LNK_NEW_WORKFLOW' => '新增工作流程',
	'LNK_WORKFLOW' => '工作流程对象',
	'LBL_ALERT_TEMPLATES' => '警告模板',


//General Labels
	'LBL_TRIGGER' => '当',
	'LBL_FIELD' => '字段',
	'LBL_VALUE' => '值',
	'LBL_RECORD' => '模块的',
//Specific Lables

	'LBL_COMPARE_SPECIFIC_TITLE' => '当目标模块中的一个字段值更改，或者指定一个值时',
	'LBL_COMPARE_SPECIFIC_PART' => '改变，或者指定一个值',
	'LBL_COMPARE_SPECIFIC_PART_TIME' => ' ',


	'LBL_COMPARE_CHANGE_TITLE' => '当在目标模块中的一个字段值更改时',
	'LBL_COMPARE_CHANGE_PART' => '更改',


	'LBL_COMPARE_COUNT_TITLE' => '指定计数触发',

	'LBL_COMPARE_ANY_TIME_TITLE' => '在指定的一段时间内，字段未更改',
	'LBL_COMPARE_ANY_TIME_PART2' => '未更改为',
	'LBL_COMPARE_ANY_TIME_PART3' => '指定的一段时间',

	'LBL_FILTER_FIELD_TITLE' => '当目标模块中的一个字段包含指定值的时候',
	'LBL_FILTER_FIELD_PART1' => '过滤通过',
	'LBL_FILTER_REL_FIELD_TITLE' => '当目标模块改变，或者相关模块中的一个字段包含指定值的时候',
	'LBL_FILTER_REL_FIELD_PART1' => '指定相关的',

	'LBL_TRIGGER_RECORD_CHANGE_TITLE' => '当目标模块改变',
	//'LBL_TRIGGER_RECORD_CHANGE_LIST_TITLE' => '当记录改变',

	'LBL_FUTURE_TRIGGER' => '指定新的',



	'LBL_PAST_TRIGGER' => '指定旧的',


 	////////////////Count Language
	'LBL_COUNT_TRIGGER1' => '总计',
	'LBL_COUNT_TRIGGER1_2' => '比较数量',
	'LBL_MODULE' => '模块',
	'LBL_COUNT_TRIGGER2' => '过滤通过相关的',
	'LBL_COUNT_TRIGGER2_2' => '只有',
	'LBL_COUNT_TRIGGER3' => '指定过滤通过',
	'LBL_COUNT_TRIGGER4' => '过滤通过一秒',


 	'LBL_NEW_FILTER_BUTTON_KEY' => 'F',
	'LBL_NEW_FILTER_BUTTON_TITLE' => '新增过滤器[Alt+F]',
	'LBL_NEW_FILTER_BUTTON_LABEL' => '新增过滤器',

  	'LBL_NEW_TRIGGER_BUTTON_KEY' => 'T',
	'LBL_NEW_TRIGGER_BUTTON_TITLE' => '新增触发器[Alt+T]',
	'LBL_NEW_TRIGGER_BUTTON_LABEL' => '新增触发器',

	'LBL_LIST_FRAME_SEC' => '过滤器:',
	'LBL_LIST_FRAME_PRI' => '触发器',


	'LBL_TRIGGER_FILTER_TITLE' => '触发过滤器',
	'LBL_TRIGGER_FORM_TITLE' => '为工作流程执行定义条件',
	'LBL_FILTER_FORM_TITLE' => '定义工作流程条件',

 	'LBL_SPECIFIC_FIELD'=>"的声明字段",
 	'LBL_APOSTROPHE_S'=>"的 ",
	'LBL_WHEN_VALUE1'=>"当字段的值是 ",
	'LBL_WHEN_VALUE2'=>"当值是 ",

	'LBL_SELECT_OPTION' => '请选择一个选项。',
	'LBL_SELECT_TARGET_FIELD' => '请选择一个目标字段。',
	'LBL_SELECT_TARGET_MOD' => '请选择一个目标相关模块。',
	'LBL_SPECIFIC_FIELD_LNK' => '声明字段',
	'LBL_MUST_SELECT_VALUE' => '您必须为字段选择一个值',

	'LBL_SELECT_AMOUNT' => '您必需选择数量',
	'LBL_SELECT_1ST_FILTER' => '您必需选择一个字段用于第一次筛选',
	'LBL_SELECT_2ND_FILTER' => '您必需选择一个字段用于第二次筛选',
);

$mod_process_order_strings = array(

	'compare_specific' => array('1','2','3'),
	'compare_change' => array('1','2','3'),
	'compare_count' => array('1','2','3')

);




?>
