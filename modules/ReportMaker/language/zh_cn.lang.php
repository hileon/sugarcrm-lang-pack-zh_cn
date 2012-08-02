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
	'LBL_MODULE_NAME' => '企业级报表',
	'LBL_MODULE_TITLE' => '新增报表:',
	'LBL_SEARCH_FORM_TITLE' => '企业级报表:查找',
	'LBL_LIST_FORM_TITLE' => '所有企业级报表',
	'LBL_LIST_NAME' => '名称',
	'LBL_LIST_QUERY_NAME' => '查询',
	'LBL_LIST_PUBLISHED' => '已公布',
	'LBL_LIST_SCHEDULED' => '已安排',
	'LBL_LIST_TYPE' => '类型',
	'LBL_LIST_MODULE_TITLE' => '模块',
	'LBL_DESCRIPTION' => '说明:',
	'LBL_PARENT_DATASET' => '父类数据设置:',
	'LBL_QUERY_NAME' => '查询名称:',
	'LBL_TYPE' => '报表类型:',
	'LBL_SCHEDULED' => '安排报表:',
	'LBL_PUBLISHED' => '公布报表:',
	'LBL_NAME' => '报表名称:',
	'LBL_TITLE' => '报表标题:',
	'LBL_DESCRIPTION' => '说明:',
	'LBL_TABLE_WIDTH' => '表格宽度%:',
	'LBL_TABLE_HEIGHT' => '表格高度%:',
	'LBL_FONT_SIZE' => '字体大小:',

	'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录?',
	'ERR_DELETE_RECORD' => '必须指定记录编号才能删除产品。',
	'LBL_CURRENCY' => '货币:',
  
	'LNK_LIST_REPORTMAKER' => '企业级报表列表',
	'LNK_NEW_REPORTMAKER' => '新增报表',
	'LNK_LIST_DATASET' => '数据格式列表',
	'LNK_NEW_DATASET' => '新增数据格式',
	'LNK_NEW_CUSTOMQUERY' => '新增自定义查询',
	'LNK_CUSTOMQUERIES' => '自定义查询',
	'LNK_NEW_QUERYBUILDER' => '新增查询',
	'LNK_QUERYBUILDER' => '查询生成器',
	'LNK_ADVANCED_REPORTING' => '企业级报表',
	'LBL_ALL_REPORTS' => '所有报表',
  
	'LBL_ADD_DATA_SET' => '新增数据设置',
	'LBL_EDIT_DATA_SET' => '更新数据设置',
	'LBL_DATA_SET' => '数据设置:',
	'LBL_LIST_ORDER_Y' => '垂直布置:',
	'LBL_LIST_ORDER_X' => '水平布置:',
	'LBL_REPORT_ALIGN' => '报表布局:',
    
  //for subpanel under the reports
	'LBL_ADD_BUTTON_TITLE' => '选择[Alt+A]',
  'LBL_ADD_BUTTON_KEY' => 'A',
	'LBL_ADD_BUTTON_LABEL' => '选择',
	'LBL_NEW_BUTTON_TITLE' => '增加[Alt+N]',
  'LBL_NEW_BUTTON_KEY' => 'N',
	'LBL_NEW_BUTTON_LABEL' => '新增',
	'LBL_DETAILS_BUTTON_TITLE' => '报表细节[Alt+D]',
  'LBL_DETAILS_BUTTON_KEY' => 'D',
	'LBL_DETAILS_BUTTON_LABEL' => '报表细节',
	'LBL_EDIT_BUTTON_TITLE' => '编辑报表[Alt+E]',
  'LBL_EDIT_BUTTON_KEY' => 'N',
	'LBL_EDIT_BUTTON_LABEL' => '编辑报表',
	'LBL_RUN_BUTTON_TITLE' => '运行报表[Alt+R]',
  'LBL_RUN_BUTTON_KEY' => 'R',
	'LBL_RUN_BUTTON_LABEL' => '运行报表',
  
  
	'LNK_UP' => '上',
	'LNK_DOWN' => '下',
	
	
	'LBL_NONE' => '未安排',
	'LBL_SCHEDULE_EMAIL' => '已安排',
	'LBL_HELLO' => '您好',
	'LBL_SCHEDULED_REPORT_MSG_INTRO' => '附件是从Sugar应用程序发送的一个自动生成的报表。这个报表创建于',
	'LBL_SCHEDULED_REPORT_MSG_BODY1' => '并且保存为',
	'LBL_SCHEDULED_REPORT_MSG_BODY2' => "\". 是否您希望改变您报表的设置，登入Sugar 应用中并检查 \"报表\" 标签.\n\n", 
);


?>
