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
	'LBL_MODULE_NAME' => '警告接受者列表',
	'LBL_MODULE_TITLE' => '接受者:首页',
	'LBL_SEARCH_FORM_TITLE' => '查找工作流程列表',
	'LBL_LIST_FORM_TITLE' => '接受者列表',
	'LBL_NEW_FORM_TITLE' => '新增工作流程接受者',

	'LBL_LIST_USER_TYPE' => '用户类型',
	'LBL_LIST_ARRAY_TYPE' => '行动类型',
	'LBL_LIST_RELATE_TYPE' => '关联类型',
	'LBL_LIST_ADDRESS_TYPE' => '地址类型',
	'LBL_LIST_FIELD_VALUE' => '用户',
	'LBL_LIST_REL_MODULE1' => '相关模块',
	'LBL_LIST_REL_MODULE2' => '相关模块',
	'LBL_LIST_WHERE_FILTER' => '状态',

	'LBL_USER_TYPE' => '用户类型:',
	'LBL_ARRAY_TYPE' => '行动类型:',
	'LBL_RELATE_TYPE' => '关系类型:',
	'LBL_WHERE_FILTER' => '状态:',
	'LBL_FIELD_VALUE' => '已选择的用户:',
	'LBL_REL_MODULE1' => '相关模块:',
	'LBL_REL_MODULE2' => '相关模块:',
	'LBL_CUSTOM_USER' => '自定义用户:',

	'LNK_NEW_WORKFLOW' => '新增工作流程',
	'LNK_WORKFLOW' => '工作流程对象',
	'LBL_LIST_STATEMENT' => '警告接受者:',
	'LBL_LIST_STATEMENT_CONTENT' => '发送警告到下面接受者:',

  /////////New UI Labels

	'LBL_ALERT_CURRENT_USER' => '用户关联目标',
	'LBL_ALERT_CURRENT_USER_TITLE' => '与目标模块关联的用户',
	'LBL_ALERT_REL_USER' => '用户关联相关的',
	'LBL_ALERT_REL_USER_TITLE' => '与相关模块关联的用户',
	'LBL_ALERT_REL_USER_CUSTOM' => '接受者关联相关的',
	'LBL_ALERT_REL_USER_CUSTOM_TITLE' => '在相关模块中选择接受者',
	'LBL_ALERT_TRIG_USER_CUSTOM' => '接受者关联目标模块',
	'LBL_ALERT_TRIG_USER_CUSTOM_TITLE' => '在目标模块中选择接受者',
	'LBL_ALERT_SPECIFIC_USER' => '指定的',
	'LBL_ALERT_SPECIFIC_USER_TITLE' => '指定的用户',
	'LBL_ALERT_SPECIFIC_TEAM' => '所有用户在指定的',
	'LBL_ALERT_SPECIFIC_TEAM_TITLE' => '所有在指定团队中的用户',
	'LBL_ALERT_SPECIFIC_ROLE' => '所有用户在指定的',
	'LBL_ALERT_SPECIFIC_ROLE_TITLE' => '所有在指定角色中的用户',
	'LBL_ALERT_LOGIN_USER_TITLE' => '在执行时间登录的用户',
	'LBL_RECORD' => '模块',
	'LBL_TEAM' => '团队',
	'LBL_USER' => '用户',
	'LBL_USER_MANAGER' => '用户经理',
	'LBL_ROLE' => '角色',


	'LBL_SEND_EMAIL' => '发送电子邮件给:',
	'LBL_USER1' => '记录创建人',
	'LBL_USER2' => '记录最后修改人',
	'LBL_USER3' => '当前',
	'LBL_USER3b' => '系统。',
	'LBL_USER4' => '当前的记录指派人',
	'LBL_USER5' => '先前的记录指派人',

	'LBL_ADDRESS_TO' => '收件人:',
	'LBL_ADDRESS_CC' => '抄送:',
	'LBL_ADDRESS_BCC' => '密抄:',
	'LBL_ADDRESS_TYPE' => '使用地址:',
	'LBL_ADDRESS_TYPE_TARGET' => '类型',


	'LBL_ALERT_REL1' => '相关模块:',
	'LBL_ALERT_REL2' => '相关模块:',

	'LBL_NEXT_BUTTON' => '下一步',
	'LBL_PREVIOUS_BUTTON' => '上页',

	'LBL_BLANK' => '',

	'NTC_REMOVE_ALERT_USER' => '您确定要移除这个警告接受者吗?',



	//rel_user_custom

	'LBL_REL_CUSTOM_STRING' => '选择自定义电子邮件和名称字段',
	'LBL_REL_CUSTOM' => '选择自定义电子邮件字段:',
	'LBL_REL_CUSTOM2' => '字段',
	'LBL_AND' => '和名称字段:',
	'LBL_REL_CUSTOM3' => '字段',
	'LBL_FILTER_CUSTOM' => '(附加过滤器)过滤相关模块通过指定',
	'LBL_FIELD' => '字段',
	'LBL_SPECIFIC_FIELD' => '字段',
	'LBL_FILTER_BY' => '(附加过滤器)过滤相关模块通过',


	//Invite Labels
	'LBL_MODULE_NAME_INVITE' => '受邀者列表',
	'LBL_LIST_STATEMENT_INVITE' => '会议/电话受邀者:',

	'LBL_SELECT_VALUE' => '您必须选择一个有效值。',
	'LBL_SELECT_NAME' => '您必须选择一个姓名',
	'LBL_SELECT_EMAIL' => '您必须选择一个电子邮件',
	'LBL_SELECT_FILTER' => '您必须选择一个字段用于过滤',
	'LBL_SELECT_NAME_EMAIL' => '您必须选择姓名与电子邮件',
	'LBL_PLEASE_SELECT' => '请选择',
);


?>
