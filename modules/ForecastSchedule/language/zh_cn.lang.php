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

  //module strings.
  'LBL_MODULE_NAME' => '销售预测',
  'LNK_NEW_OPPORTUNITY' => '新增商业机会',
  'LBL_MODULE_TITLE' => '销售预测',
  'LBL_LIST_FORM_TITLE' => '提交销售预测',
  'LNK_UPD_FORECAST' => '销售预测工作单',
  'LNK_QUOTA' => '定额',
  'LNK_FORECAST_LIST' => '销售预测历史',
  'LBL_FORECAST_HISTORY' => '销售预测:历史',
  'LBL_FORECAST_HISTORY_TITLE' => '销售预测:历史',
  
  //var defs
  'LBL_TIMEPERIOD_NAME' => '时段',
  'LBL_USER_NAME' => '用户名',
  'LBL_REPORTS_TO_USER_NAME' => '经理',
  
  //forecast table
  'LBL_FORECAST_ID' => '编号',
  'LBL_FORECAST_TIME_ID' => '时段编号',
  'LBL_FORECAST_TYPE' => '销售预测类型',
  'LBL_FORECAST_OPP_COUNT' => '商业机会',
  'LBL_FORECAST_OPP_WEIGH'=> '加权金额',
  'LBL_FORECAST_OPP_COMMIT' => '可能情形',
  'LBL_FORECAST_OPP_BEST_CASE'=> '最好情形',
  'LBL_FORECAST_OPP_WORST'=> '最坏情形',
  'LBL_FORECAST_USER' => '用户',
  'LBL_DATE_COMMITTED'=> '提交日期',
  'LBL_DATE_ENTERED' => '输入日期',
  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_CREATED_BY' => '创建人',
  'LBL_DELETED' => '已删除',
  
   //Quick Commit labels.
  'LBL_QC_TIME_PERIOD' => '时段:',
  'LBL_QC_OPPORTUNITY_COUNT' => '商业机会总数:',
  'LBL_QC_WEIGHT_VALUE' => '加权金额:',
  'LBL_QC_COMMIT_VALUE' => '提交金额:',
  'LBL_QC_COMMIT_BUTTON' => '提交',
  'LBL_QC_WORKSHEET_BUTTON' => '工作单',
  'LBL_QC_ROLL_COMMIT_VALUE' => '上滚提交金额:',
  'LBL_QC_DIRECT_FORECAST' => '我的直接销售预测:',
  'LBL_QC_ROLLUP_FORECAST' => '我的组销售预测:',
  'LBL_QC_UPCOMING_FORECASTS' => '我的销售预测:',
  'LBL_QC_LAST_DATE_COMMITTED' => '上次提交日期:',
  'LBL_QC_LAST_COMMIT_VALUE' => '上次提交金额:',
  'LBL_QC_HEADER_DELIM'=> '收件人',
  
  //opportunity worksheet list view labels
  'LBL_OW_OPPORTUNITIES' => "商业机会",
  'LBL_OW_ACCOUNTNAME' => "客户",
  'LBL_OW_REVENUE' => "金额",
  'LBL_OW_WEIGHTED' => "加权金额",
  'LBL_OW_MODULE_TITLE'=> '商业机会工作单',
  'LBL_OW_PROBABILITY'=> '概率',
  'LBL_OW_NEXT_STEP'=> '下一步',
  'LBL_OW_DESCRIPTION'=> '说明',
  'LBL_OW_TYPE'=> '类型',

  //forecast schedule shortcuts
  'LNK_NEW_TIMEPERIOD' => '新增时段',
  'LNK_TIMEPERIOD_LIST' => '时段',
  
  //Forecast schedule sub panel list view.
  'LBL_SVFS_FORECASTDATE' => '安排开始日期',
  'LBL_SVFS_STATUS' => '状态',
  'LBL_SVFS_USER' => '为',
  'LBL_SVFS_CASCADE' => '级联报告?',
  'LBL_SVFS_HEADER' => '销售预测安排:',
  
  //Forecast Schedule detail; view.....
   'LB_FS_KEY' => '编号',
   'LBL_FS_TIMEPERIOD_ID' => '时段编号',
   'LBL_FS_USER_ID' => '用户编号',
   'LBL_FS_TIMEPERIOD' => '时段',   
   'LBL_FS_START_DATE' => '开始日期',
   'LBL_FS_END_DATE' => '结束日期',
   'LBL_FS_FORECAST_START_DATE' => "销售预测开始日期",
   'LBL_FS_STATUS' => '状态',
   'LBL_FS_FORECAST_FOR' => '安排为:',
   'LBL_FS_CASCADE' => '级联?',  
   'LBL_FS_MODULE_NAME' => '销售预测安排',
   'LBL_FS_CREATED_BY' => '创建人',
   'LBL_FS_DATE_ENTERED' => '输入日期',
   'LBL_FS_DATE_MODIFIED' => '修改日期',
   'LBL_FS_DELETED' => '已删除',
    
  //forecast worksheet direct reports forecast
  'LBL_FDR_USER_NAME'=> '直接报告人',
  'LBL_FDR_OPPORTUNITIES'=> '销售预测中的商业机会:',
  'LBL_FDR_WEIGH'=> '加权商业机会金额:',
  'LBL_FDR_COMMIT'=> '已提交金额',
  'LBL_FDR_DATE_COMMIT'=> '提交日期',
  
  //detail view.
  'LBL_DV_HEADER' => '销售预测:工作单',
  'LBL_DV_MY_FORECASTS' => '我的销售预测:',
  'LBL_DV_MY_TEAM' => "我的团队的销售预测" ,
  'LBL_DV_TIMEPERIODS' => '时段:',
  'LBL_DV_FORECAST_PERIOD' => '销售预测时段',
  'LBL_DV_FORECAST_OPPORTUNITY' => '预测商业机会',
  'LBL_SEARCH' => '选择',
  'LBL_SEARCH_LABEL' => '选择',
  'LBL_COMMIT_HEADER' => '销售预测提交',
  'LBL_DV_LAST_COMMIT_DATE' => '上次提交日期:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => '上一次提交金额:',
  'LBL_DV_FORECAST_ROLLUP' => '销售预测上滚',
  'LBL_DV_TIMEPERIOD' => '时段:',
  'LBL_DV_TIMPERIOD_DATES' => '日期范围:',
  
  //list view
  'LBL_LV_TIMPERIOD'=> '时段',
  'LBL_LV_TIMPERIOD_START_DATE'=> '开始日期',
  'LBL_LV_TIMPERIOD_END_DATE'=> '结束日期',
  'LBL_LV_TYPE'=> '销售预测类型',
  'LBL_LV_COMMIT_DATE'=> '提交日期',  
  'LBL_LV_OPPORTUNITIES'=> '商业机会',
  'LBL_LV_WEIGH'=> '加权金额',
  'LBL_LV_COMMIT'=> '已提交金额',
  
  'LBL_COMMIT_NOTE'=> '为选择的时段提交输入的金额:',
  
  'LBL_COMMIT_MESSAGE'=> '您要提交这些金额吗?',
  'ERR_FORECAST_AMOUNT' => '必须提交数字金额。',

  // js error strings
  'LBL_FC_START_DATE' => '开始日期',
  'LBL_FC_USER' => '安排为',
  
  'LBL_NO_ACTIVE_TIMEPERIOD'=> '没有可用的销售预测时段。',
  'LBL_FDR_ADJ_AMOUNT'=> '调整后金额',
  'LBL_SAVE_WOKSHEET'=> '保存工作单',
  'LBL_RESET_WOKSHEET'=> '重设工作单',
  'LBL_RESET_CHECK'=> '所有选择时段中的工作单数据和登录的用户将被移除，继续?',
  
  'LB_FS_LIKELY_CASE'=> '可能情形',
  'LB_FS_WORST_CASE'=> '最坏情形',
  'LB_FS_BEST_CASE'=> '最好情形',
  'LBL_FDR_WK_LIKELY_CASE'=> '估计可能情形',
  'LBL_FDR_WK_BEST_CASE'=> '估计最好情形',
  'LBL_FDR_WK_WORST_CASE'=> '估计最坏情形',
  'LBL_BEST_CASE'=> '最好情形:',
  'LBL_LIKELY_CASE'=> '可能情形:',
  'LBL_WORST_CASE'=> '最坏情形:',
  'LBL_FDR_C_BEST_CASE'=> '最好情形',
  'LBL_FDR_C_WORST_CASE'=> '最坏情形',
  'LBL_FDR_C_LIKELY_CASE'=> '可能情形',
  'LBL_QC_LAST_BEST_CASE'=> '上次提交金额(最好情形):',
  'LBL_QC_LAST_LIKELY_CASE'=> '上次提交金额(可能情形):',
  'LBL_QC_LAST_WORST_CASE'=> '上次提交金额(最坏情形):',
  'LBL_QC_ROLL_BEST_VALUE'=> '上滚提交金额(最好情形):',
  'LBL_QC_ROLL_LIKELY_VALUE'=> '上滚提交金额(可能情形):',
  'LBL_QC_ROLL_WORST_VALUE'=> '上滚提交金额(最坏情形):',  
  'LBL_QC_COMMIT_BEST_CASE'=> '提交金额(最好情形):',
  'LBL_QC_COMMIT_LIKELY_CASE'=> '提交金额(可能情形):',
  'LBL_QC_COMMIT_WORST_CASE'=> '提交金额(最坏情形):',

);


?>
