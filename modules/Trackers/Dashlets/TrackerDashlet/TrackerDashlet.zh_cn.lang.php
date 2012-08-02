<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
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
 */

$dashletStrings['TrackerDashlet'] = array('LBL_TITLE'            => '追踪报告',
                                          'LBL_DESCRIPTION'      => '访问统计图',
                                          'LBL_SAVING'           => '正在查询 ...',
                                          'LBL_SAVED'            => '查询完成',
                                          'LBL_CLEAR'            => '清除',
                                          'LBL_CLEAR_TOOLTIP'    => '清除日期数据',
                                          'LBL_CONFIGURE_TITLE'  => '标题',
                                          'LBL_CONFIGURE_HEIGHT' => '高 (1 - 300)',
										  'LBL_SELECT_QUERY'     => '选择查询...',
										  'LBL_FILTER'              => '过滤器',
										  'LBL_FILTER_TOOLTIP'      => '按照所选日期筛选',
										  'LBL_SINCE'            => '自: ',
										  'LBL_CHOOSE_DATE_TOOLTIP' => '在已选的报告中，你可以指定一个日期过滤器。' .
										                               '输入的日期将会替换掉报告默认的日期值。' .
										                               '例如，"我的活动 (本周)" 报告中，' .
										                               '系统将显示过滤器指定日期之后的所有记录，' .
										                               '而默认是显示一周内的记录。',
);
