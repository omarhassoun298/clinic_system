<?php
	ini_set("memory_limit","256M");
	
	$results = $export_data['results'];
	if ($results) {
		
	$this->objPHPExcel = new PHPExcel();
	$this->objPHPExcel->getActiveSheet()->setTitle('ADV Sales Profit Report');
	$this->objPHPExcel->getProperties()->setCreator("ADV Reports & Statistics")
									   ->setLastModifiedBy("ADV Reports & Statistics")
									   ->setTitle("ADV Sales Profit Report")
									   ->setSubject("ADV Sales Profit Report")
									   ->setDescription("ADV Sales Profit Report with Basic Details")
									   ->setKeywords("office 2007 excel")
									   ->setCategory("www.opencartreports.com");
	$this->objPHPExcel->setActiveSheetIndex(0);
	$export_logo_criteria ? $this->mainCounter = 2 : $this->mainCounter = 1;
	if ($export_logo_criteria ? $this->mainCounter = 2 : $this->mainCounter = 1) {
		 $j = 0;
		 
		 if ($filter_report == 'sales_summary' or $filter_report == 'abandoned_orders') {
		 if ($filter_group == 'year') { 
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_year'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);		 
		 } elseif ($filter_group == 'quarter') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_year'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_quarter'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);		 
		 } elseif ($filter_group == 'month') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_year'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);	
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_month'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);		 
		 } elseif ($filter_group == 'day') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_date'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);		 
		 } elseif ($filter_group == 'order') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_order_id'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);	 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_date_added'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);		 
		 } else {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_date_start'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_date_end'));	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);		 
		 }
		 } elseif ($filter_report == 'day_of_week') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_day_of_week'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'hour') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_hour'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'store') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_store'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'currency') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_currency'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'customer_group') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_customer_group'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'country') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_country'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'postcode') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_postcode'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'region_state') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_region_state'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'city') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_city'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'payment_method') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_payment_method'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'shipping_method') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_shipping_method'));
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 } elseif ($filter_report == 'coupon') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_date_start'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_date_end'));	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 } elseif ($filter_report == 'voucher') {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_date_start'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_date_end'));	
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }	
		 
		 if ($filter_report == 'coupon') {

		 if (in_array('cr_coupon_name', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon_name'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cr_coupon_code', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon_code'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cr_coupon_discount', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon_discount'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cr_coupon_type', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon_type'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cr_coupon_status', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon_status'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cr_coupon_date_added', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon_date_added'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }	
		 if (in_array('cr_coupon_last_used', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon_last_used'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }	
		 if (in_array('cr_coupon_amount', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon_amount'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cr_coupon_orders', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_orders'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cr_coupon_total', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_total'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
	
		 } elseif ($filter_report == 'voucher') {

		 if (in_array('vr_voucher_code', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_code'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('vr_voucher_from_name', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_from_name'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('vr_voucher_from_email', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_from_email'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('vr_voucher_to_name', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_to_name'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('vr_voucher_to_email', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_to_email'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('vr_voucher_theme', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_theme'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }	
		 if (in_array('vr_voucher_status', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_status'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }	
		 if (in_array('vr_voucher_date_added', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_date_added'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('vr_voucher_amount', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_amount'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('vr_voucher_used_value', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_used_value'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }		 
		 if (in_array('vr_voucher_remaining_value', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher_remaining_value'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('vr_voucher_orders', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_orders'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('vr_voucher_total', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_total'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
	
		 } else {
			 
		 if (in_array('mv_orders', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_orders'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }	
		 if (in_array('mv_customers', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_customers'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }	
		 if (in_array('mv_products', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_products'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_sub_total', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_sub_total'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_handling', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_handling'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_loworder', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_loworder'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_shipping', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_shipping'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_reward', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_reward'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_earned_points', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_earned_reward_points'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_used_points', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_used_reward_points'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_coupon', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_tax', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_taxes'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_credit', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_credit'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_voucher', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_discount', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_discount'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_total', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_total'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_aov', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_aov'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_refunds', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_refunds'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_total_sales', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_total_sales'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_product_costs', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_cost'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_commission', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_commission'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_payment_costs', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_payment_cost'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_shipping_costs', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_shipping_cost'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_extra_costs', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_extra_cost'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_return_costs', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_return_cost'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_shipping_balance', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_shipping_balance'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_total_costs', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_total_costs'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_total_profit', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_total_profit'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }	
		 if (in_array('mv_total_profit_prc', $advsop_settings_mv_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_total_profit_prc'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 
		 }	
		 
		 if (in_array('ol_order_order_id', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_order_id'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_date_added', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_date_added'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_inv_no', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_inv_no'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }	 
		 if (in_array('ol_order_customer', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_customer'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_email', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_email'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_customer_group', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_customer_group'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_shipping_method', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_shipping_method'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_payment_method', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_payment_method'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_status', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_status'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_store', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_store'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_currency', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_currency'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('ol_order_quantity', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_quantity'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('ol_order_sub_total', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_sub_total'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('ol_order_shipping', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_shipping'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('ol_order_tax', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_tax'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if ($filter_report == 'coupon') {
		 if (in_array('cr_coupon_amount', $advsop_settings_cr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_coupon'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 } elseif ($filter_report == 'voucher') {
		 if (in_array('vr_voucher_used_value', $advsop_settings_vr_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_voucher'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 } 
		 if (in_array('ol_order_value', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_value'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('ol_order_sales', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_sales'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('ol_order_costs', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_costs'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('ol_order_profit', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_profit'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('ol_order_profit_prc', $advsop_settings_ol_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_order_margin'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 
		 if (in_array('cl_customer_cust_id', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_customer_cust_id'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }	
		 if (in_array('cl_billing_name', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_billing_name')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_billing_company', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_billing_company')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_billing_address_1', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_billing_address_1')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_billing_address_2', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_billing_address_2')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_billing_city', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_billing_city')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_billing_zone', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_billing_zone')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_billing_postcode', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_billing_postcode')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_billing_country', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_billing_country')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_customer_telephone', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_customer_telephone'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_shipping_name', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_shipping_name')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_shipping_company', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_shipping_company')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_shipping_address_1', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_shipping_address_1')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_shipping_address_2', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_shipping_address_2')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_shipping_city', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_shipping_city')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_shipping_zone', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_shipping_zone')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_shipping_postcode', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_shipping_postcode')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('cl_shipping_country', $advsop_settings_cl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, strip_tags($this->language->get('column_shipping_country')));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
			 
		 if (in_array('pl_prod_order_id', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_order_id'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);			 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('pl_prod_date_added', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_date_added'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 } 
		 if (in_array('pl_prod_id', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_id'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('pl_prod_sku', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_sku'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('pl_prod_model', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_model'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('pl_prod_name', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_name'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('pl_prod_option', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_option'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('pl_prod_attributes', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_attributes'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }			 
		 if (in_array('pl_prod_category', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_category'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_manu', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_manu'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }			 
		 if (in_array('pl_prod_supplier', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_supplier'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }		 
		 if (in_array('pl_prod_currency', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_currency'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);	
		 }
		 if (in_array('pl_prod_price', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_price'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_quantity', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_quantity'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_total_excl_vat', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_total_excl_vat'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_tax', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_tax'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_total_incl_vat', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_total_incl_vat'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_sales', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_sales'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_cost', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_cost'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_profit', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_profit'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_profit_margin', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_profit_margin'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }
		 if (in_array('pl_prod_profit_markup', $advsop_settings_pl_columns)) {
		 $col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		 $this->objPHPExcel->getActiveSheet()->setCellValue($col . $this->mainCounter, $this->language->get('column_prod_profit_markup'));
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getFont()->setBold(true);
		 $this->objPHPExcel->getActiveSheet()->getStyle($col . $this->mainCounter)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);		 
		 $this->objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
		 }		
		 
		 if ($export_logo_criteria) {
			$this->objPHPExcel->getActiveSheet()->insertNewRowBefore(1,1);
			$this->objPHPExcel->getActiveSheet()->insertNewRowBefore(1,1);
			$this->objPHPExcel->getActiveSheet()->insertNewRowBefore(1,1);
			$lastCell = $this->objPHPExcel->getActiveSheet()->getHighestDataColumn();
			$lastRow = $this->objPHPExcel->getActiveSheet()->getHighestDataRow();
			
			$this->objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(15);
			$this->objPHPExcel->getActiveSheet()->mergeCells('A1:B1');
			$this->objPHPExcel->getActiveSheet()->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$this->objPHPExcel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setRGB('DBE5F1');	
			$this->objPHPExcel->getActiveSheet()->setCellValue('C1', $this->language->get('text_report_date').": ".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d H:i:s" : "Y-m-d h:i:s A"));
			$this->objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setSize(10);
			$this->objPHPExcel->getActiveSheet()->getStyle('C1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$this->objPHPExcel->getActiveSheet()->getStyle('C1:' . $lastCell . '1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$this->objPHPExcel->getActiveSheet()->getStyle('C1:' . $lastCell . '1')->getFill()->getStartColor()->setRGB('DBE5F1');
			$this->objPHPExcel->getActiveSheet()->mergeCells('C1:' . $lastCell . '1');
				
			//Add logo to header
			$objDrawing = new PHPExcel_Worksheet_Drawing();
			$objDrawing->setName($this->config->get('config_name'));
			$objDrawing->setDescription($this->config->get('config_name'));
			$objDrawing->setPath($logo);
			$objDrawing->setCoordinates('A2');
			$objDrawing->setWidth(155);
			$objDrawing->setOffsetX(5);
			$objDrawing->setOffsetY(20);
			$objDrawing->setResizeProportional(true);
			$objDrawing->setWorksheet($this->objPHPExcel->getActiveSheet());
			
			$this->objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(50);
			$this->objPHPExcel->getActiveSheet()->mergeCells('A2:B2');
			$this->objPHPExcel->getActiveSheet()->getStyle('A2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$this->objPHPExcel->getActiveSheet()->getStyle('A2')->getFill()->getStartColor()->setRGB('DBE5F1');	
			$this->objPHPExcel->getActiveSheet()->setCellValue('C2', $this->language->get('adv_ext_name'));
			$this->objPHPExcel->getActiveSheet()->getStyle('C2')->getFont()->setSize(24);
			$this->objPHPExcel->getActiveSheet()->getStyle('C2')->getFont()->setBold(true);
			$this->objPHPExcel->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$this->objPHPExcel->getActiveSheet()->getStyle('C2:' . $lastCell . $lastRow)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
			$this->objPHPExcel->getActiveSheet()->getStyle('C2:' . $lastCell . '2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$this->objPHPExcel->getActiveSheet()->getStyle('C2:' . $lastCell . '2')->getFill()->getStartColor()->setRGB('DBE5F1');
			$this->objPHPExcel->getActiveSheet()->mergeCells('C2:' . $lastCell . '2');
			
			$this->objPHPExcel->getActiveSheet()->getRowDimension('3')->setRowHeight(30);
			$this->objPHPExcel->getActiveSheet()->mergeCells('A3:B3');
			$this->objPHPExcel->getActiveSheet()->getStyle('A3')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$this->objPHPExcel->getActiveSheet()->getStyle('A3')->getFill()->getStartColor()->setRGB('DBE5F1');	
			$this->objPHPExcel->getActiveSheet()->setCellValue('C3', $this->config->get('config_name').", ".$this->config->get('config_address').", ".$this->language->get('text_email')."".$this->config->get('config_email').", ".$this->language->get('text_telephone')."".$this->config->get('config_telephone'));
			$this->objPHPExcel->getActiveSheet()->getStyle('C3')->getFont()->setSize(14);
			$this->objPHPExcel->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$this->objPHPExcel->getActiveSheet()->getStyle('C3:' . $lastCell . $lastRow)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
			$this->objPHPExcel->getActiveSheet()->getStyle('C3:' . $lastCell . '3')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$this->objPHPExcel->getActiveSheet()->getStyle('C3:' . $lastCell . '3')->getFill()->getStartColor()->setRGB('DBE5F1');
			$this->objPHPExcel->getActiveSheet()->mergeCells('C3:' . $lastCell . '3');
			
			$this->objPHPExcel->getActiveSheet()->getRowDimension('4')->setRowHeight(40);
			$this->objPHPExcel->getActiveSheet()->mergeCells('A4:B4');
			$this->objPHPExcel->getActiveSheet()->setCellValue('A4', $this->language->get('text_report_criteria'));
			$this->objPHPExcel->getActiveSheet()->getStyle('A4')->getFont()->setSize(10);
			$this->objPHPExcel->getActiveSheet()->getStyle('A4')->getFont()->setBold(true);
			$this->objPHPExcel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
			$this->objPHPExcel->getActiveSheet()->getStyle('A4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
			$this->objPHPExcel->getActiveSheet()->getStyle('A4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$this->objPHPExcel->getActiveSheet()->getStyle('A4')->getFill()->getStartColor()->setRGB('DBE5F1');				
			$this->objPHPExcel->getActiveSheet()->mergeCells('C4:' . $lastCell . '4');
			$filter_criteria = "";
			if ($filter_report) {	
				if ($filter_report == 'sales_summary') {
					$filter_report_name = $this->language->get('text_sales_summary');
				} elseif ($filter_report == 'day_of_week') {
					$filter_report_name = $this->language->get('text_day_of_week');
				} elseif ($filter_report == 'hour') {
					$filter_report_name = $this->language->get('text_hour');
				} elseif ($filter_report == 'store') {
					$filter_report_name = $this->language->get('text_store');
				} elseif ($filter_report == 'currency') {
					$filter_report_name = $this->language->get('text_currency');
				} elseif ($filter_report == 'customer_group') {
					$filter_report_name = $this->language->get('text_customer_group');
				} elseif ($filter_report == 'tax') {
					$filter_report_name = $this->language->get('text_tax');
				} elseif ($filter_report == 'country') {
					$filter_report_name = $this->language->get('text_country');
				} elseif ($filter_report == 'postcode') {
					$filter_report_name = $this->language->get('text_postcode');
				} elseif ($filter_report == 'region_state') {
					$filter_report_name = $this->language->get('text_region_state');
				} elseif ($filter_report == 'city') {
					$filter_report_name = $this->language->get('text_city');
				} elseif ($filter_report == 'payment_method') {
					$filter_report_name = $this->language->get('text_payment_method');
				} elseif ($filter_report == 'shipping_method') {
					$filter_report_name = $this->language->get('text_shipping_method');					
				} elseif ($filter_report == 'coupon') {
					$filter_report_name = $this->language->get('text_coupons');					
				} elseif ($filter_report == 'voucher') {
					$filter_report_name = $this->language->get('text_gift_vouchers');					
				} elseif ($filter_report == 'abandoned_orders') {
					$filter_report_name = $this->language->get('text_abandoned_orders');			
				}				
				$filter_criteria .= $this->language->get('entry_report')." ".$filter_report_name."; ";
			}
			if ($filter_details) {
				if ($filter_details == 'no_details') {
					$filter_details_name = $this->language->get('text_no_details');
				} elseif ($filter_details == 'basic_details') {
					$filter_details_name = $this->language->get('text_basic_details');
				} elseif ($filter_details == 'all_details_products') {
					$filter_details_name = $this->language->get('text_all_details')." ".$this->language->get('text_all_details_products');				
				} elseif ($filter_details == 'all_details_orders') {
					$filter_details_name = $this->language->get('text_all_details')." ".$this->language->get('text_all_details_orders');		
				}				
				$filter_criteria .= $this->language->get('entry_show_details')." ".$filter_details_name."; ";
			}
			if ($filter_group) {
				if ($filter_group == 'year') {
					$filter_group_name = $this->language->get('text_year');
				} elseif ($filter_group == 'quarter') {
					$filter_group_name = $this->language->get('text_quarter');	
				} elseif ($filter_group == 'month') {
					$filter_group_name = $this->language->get('text_month');
				} elseif ($filter_group == 'week') {
					$filter_group_name = $this->language->get('text_week');
				} elseif ($filter_group == 'day') {
					$filter_group_name = $this->language->get('text_day');
				} elseif ($filter_group == 'order') {
					$filter_group_name = $this->language->get('text_order');					
				}				
				$filter_criteria .= $this->language->get('entry_group')." ".$filter_group_name."; ";
			}
			if ($filter_sort) {	
				if ($filter_sort == 'report_type') {			
					if ($filter_report == 'sales_summary' or $filter_report == 'abandoned_orders' or $filter_report == 'tax' or $filter_report == 'coupon' or $filter_report == 'voucher') {
						$filter_sort_name = $this->language->get('column_date');
					} elseif ($filter_report == 'day_of_week') {
						$filter_sort_name = $this->language->get('column_day_of_week');
					} elseif ($filter_report == 'hour') {
						$filter_sort_name = $this->language->get('column_hour');
					} elseif ($filter_report == 'store') {
						$filter_sort_name = $this->language->get('column_store');
					} elseif ($filter_report == 'currency') {
						$filter_sort_name = $this->language->get('column_currency');
					} elseif ($filter_report == 'customer_group') {
						$filter_sort_name = $this->language->get('column_customer_group');
					} elseif ($filter_report == 'country') {
						$filter_sort_name = $this->language->get('column_country');
					} elseif ($filter_report == 'postcode') {
						$filter_sort_name = $this->language->get('column_postcode');
					} elseif ($filter_report == 'region_state') {
						$filter_sort_name = $this->language->get('column_region_state');
					} elseif ($filter_report == 'city') {
						$filter_sort_name = $this->language->get('column_city');
					} elseif ($filter_report == 'payment_method') {
						$filter_sort_name = $this->language->get('column_payment_method');
					} elseif ($filter_report == 'shipping_method') {
						$filter_sort_name = $this->language->get('column_shipping_method');
					}
					
				}
				if ($filter_report == 'tax') {
				if ($filter_sort == 'tax_name') {
					$filter_sort_name = $this->language->get('column_tax_title');
				} elseif ($filter_sort == 'tax_rate') {
					$filter_sort_name = $this->language->get('column_tax_rate');
				} elseif ($filter_sort == 'tax_orders') {
					$filter_sort_name = $this->language->get('column_orders');
				} elseif ($filter_sort == 'tax_total') {
					$filter_sort_name = $this->language->get('column_tax_total');
				}					
				} elseif ($filter_report == 'coupon') {
				if ($filter_sort == 'coupon_name') {
					$filter_sort_name = $this->language->get('column_coupon_name');
				} elseif ($filter_sort == 'coupon_code') {
					$filter_sort_name = $this->language->get('column_coupon_code');
				} elseif ($filter_sort == 'coupon_discount') {
					$filter_sort_name = $this->language->get('column_coupon_discount');
				} elseif ($filter_sort == 'coupon_type') {
					$filter_sort_name = $this->language->get('column_coupon_type');
				} elseif ($filter_sort == 'coupon_status') {
					$filter_sort_name = $this->language->get('column_coupon_status');
				} elseif ($filter_sort == 'coupon_date_added') {
					$filter_sort_name = $this->language->get('column_coupon_date_added');
				} elseif ($filter_sort == 'coupon_last_used') {
					$filter_sort_name = $this->language->get('column_coupon_last_used');
				} elseif ($filter_sort == 'coupon_amount') {
					$filter_sort_name = $this->language->get('column_coupon_amount');	
				} elseif ($filter_sort == 'coupon_orders') {
					$filter_sort_name = $this->language->get('column_orders');
				} elseif ($filter_sort == 'coupon_total') {
					$filter_sort_name = $this->language->get('column_total');					
				}	
				} elseif ($filter_report == 'voucher') {
				if ($filter_sort == 'voucher_code') {
					$filter_sort_name = $this->language->get('column_voucher_code');
				} elseif ($filter_sort == 'voucher_from_name') {
					$filter_sort_name = $this->language->get('column_voucher_from_name');
				} elseif ($filter_sort == 'voucher_from_email') {
					$filter_sort_name = $this->language->get('column_voucher_from_email');
				} elseif ($filter_sort == 'voucher_to_name') {
					$filter_sort_name = $this->language->get('column_voucher_to_name');
				} elseif ($filter_sort == 'voucher_to_email') {
					$filter_sort_name = $this->language->get('column_voucher_to_email');
				} elseif ($filter_sort == 'voucher_theme') {
					$filter_sort_name = $this->language->get('column_voucher_theme');
				} elseif ($filter_sort == 'voucher_status') {
					$filter_sort_name = $this->language->get('column_voucher_status');
				} elseif ($filter_sort == 'voucher_date_added') {
					$filter_sort_name = $this->language->get('column_voucher_date_added');
				} elseif ($filter_sort == 'voucher_amount') {
					$filter_sort_name = $this->language->get('column_voucher_amount');	
				} elseif ($filter_sort == 'voucher_used_value') {
					$filter_sort_name = $this->language->get('column_voucher_used_value');	
				} elseif ($filter_sort == 'voucher_remaining_value') {
					$filter_sort_name = $this->language->get('column_voucher_remaining_value');						
				} elseif ($filter_sort == 'voucher_orders') {
					$filter_sort_name = $this->language->get('column_orders');
				} elseif ($filter_sort == 'voucher_total') {
					$filter_sort_name = $this->language->get('column_total');					
				}
				} else {
				if ($filter_sort == 'orders') {
					$filter_sort_name = $this->language->get('column_orders');
				} elseif ($filter_sort == 'customers') {
					$filter_sort_name = $this->language->get('column_customers');
				} elseif ($filter_sort == 'products') {
					$filter_sort_name = $this->language->get('column_products');	
				} elseif ($filter_sort == 'sub_total') {
					$filter_sort_name = $this->language->get('column_sub_total');
				} elseif ($filter_sort == 'shipping') {
					$filter_sort_name = $this->language->get('column_shipping');
				} elseif ($filter_sort == 'reward') {
					$filter_sort_name = $this->language->get('column_reward');
				} elseif ($filter_sort == 'earned_reward_points') {
					$filter_sort_name = $this->language->get('column_earned_reward_points');	
				} elseif ($filter_sort == 'used_reward_points') {
					$filter_sort_name = $this->language->get('column_used_reward_points');
				} elseif ($filter_sort == 'coupon') {
					$filter_sort_name = $this->language->get('column_coupon');	
				} elseif ($filter_sort == 'tax') {
					$filter_sort_name = $this->language->get('column_taxes');
				} elseif ($filter_sort == 'credit') {
					$filter_sort_name = $this->language->get('column_credit');
				} elseif ($filter_sort == 'voucher') {
					$filter_sort_name = $this->language->get('column_voucher');
				} elseif ($filter_sort == 'discount') {
					$filter_sort_name = $this->language->get('column_discount');	
				} elseif ($filter_sort == 'total') {
					$filter_sort_name = $this->language->get('column_total');
				} elseif ($filter_sort == 'aov') {
					$filter_sort_name = $this->language->get('column_aov');	
				} elseif ($filter_sort == 'refunds') {
					$filter_sort_name = $this->language->get('column_refunds');
				} elseif ($filter_sort == 'total_sales') {
					$filter_sort_name = $this->language->get('column_total_sales');
				} elseif ($filter_sort == 'prod_costs') {
					$filter_sort_name = $this->language->get('column_product_costs');
				} elseif ($filter_sort == 'commission') {
					$filter_sort_name = $this->language->get('column_commission');	
				} elseif ($filter_sort == 'pay_costs') {
					$filter_sort_name = $this->language->get('column_payment_cost');
				} elseif ($filter_sort == 'ship_costs') {
					$filter_sort_name = $this->language->get('column_shipping_cost');	
				} elseif ($filter_sort == 'extra_cost') {
					$filter_sort_name = $this->language->get('column_extra_cost');
				} elseif ($filter_sort == 'return_cost') {
					$filter_sort_name = $this->language->get('column_return_cost');
				} elseif ($filter_sort == 'ship_balance') {
					$filter_sort_name = $this->language->get('column_shipping_balance');
				} elseif ($filter_sort == 'total_costs') {
					$filter_sort_name = $this->language->get('column_total_costs');	
				} elseif ($filter_sort == 'total_profit') {
					$filter_sort_name = $this->language->get('column_total_profit');
				} elseif ($filter_sort == 'total_profit_prc') {
					$filter_sort_name = $this->language->get('column_total_profit') . ' [%]';					
				}
				}
				if ($filter_order == 'asc') {
					$filter_order_name = $this->language->get('text_asc');
				} elseif ($filter_order == 'desc') {
					$filter_order_name = $this->language->get('text_desc');
				}				
				$filter_criteria .= $this->language->get('entry_sort_by')." ".$filter_sort_name." ".$filter_order_name."; ";
			}
			if ($filter_limit) {	
				$filter_criteria .= $this->language->get('entry_limit')." ".$filter_limit."; ";
			}	
			$filter_criteria .= "\r";
			if ($filter_range) {	
				if ($filter_range == 'custom') {
					$filter_range_name = $this->language->get('stat_custom');
				} elseif ($filter_range == 'today') {
					$filter_range_name = $this->language->get('stat_today');
				} elseif ($filter_range == 'yesterday') {
					$filter_range_name = $this->language->get('stat_yesterday');	
				} elseif ($filter_range == 'week') {
					$filter_range_name = $this->language->get('stat_week');
				} elseif ($filter_range == 'month') {
					$filter_range_name = $this->language->get('stat_month');
				} elseif ($filter_range == 'quarter') {
					$filter_range_name = $this->language->get('stat_quarter');
				} elseif ($filter_range == 'year') {
					$filter_range_name = $this->language->get('stat_year');	
				} elseif ($filter_range == 'current_week') {
					$filter_range_name = $this->language->get('stat_current_week');
				} elseif ($filter_range == 'current_month') {
					$filter_range_name = $this->language->get('stat_current_month');	
				} elseif ($filter_range == 'current_quarter') {
					$filter_range_name = $this->language->get('stat_current_quarter');
				} elseif ($filter_range == 'current_year') {
					$filter_range_name = $this->language->get('stat_current_year');
				} elseif ($filter_range == 'last_week') {
					$filter_range_name = $this->language->get('stat_last_week');
				} elseif ($filter_range == 'last_month') {
					$filter_range_name = $this->language->get('stat_last_month');	
				} elseif ($filter_range == 'last_quarter') {
					$filter_range_name = $this->language->get('stat_last_quarter');
				} elseif ($filter_range == 'last_year') {
					$filter_range_name = $this->language->get('stat_last_year');
				} elseif ($filter_range == 'all_time') {
					$filter_range_name = $this->language->get('stat_all_time');					
				}				
				$filter_criteria .= $this->language->get('entry_range')." ".$filter_range_name;
				if ($filter_date_start) {	
					$filter_criteria .= " [".$this->language->get('entry_date_start')." ".$filter_date_start;
				}
				if ($filter_date_end) {	
					$filter_criteria .= ", ".$this->language->get('entry_date_end')." ".$filter_date_end."]";
				}
				$filter_criteria .= "; ";
			}
			if ($filter_order_status_id) {	
				$filter_criteria .= $this->language->get('entry_status')." ".$filter_order_status_id;
				if ($filter_status_date_start) {	
					$filter_criteria .= " [".$this->language->get('entry_date_start')." ".$filter_status_date_start;
				}
				if ($filter_status_date_end) {	
					$filter_criteria .= ", ".$this->language->get('entry_date_end')." ".$filter_status_date_end."]";
				}
				$filter_criteria .= "; ";				
			}
			if ($filter_order_id_from or $filter_order_id_to) {
				$filter_criteria .= $this->language->get('entry_order_id').": ".$filter_order_id_from."-".$filter_order_id_to."; ";
			}
			if ($filter_order_value_min or $filter_order_value_max) {
				$filter_criteria .= $this->language->get('entry_order_value').": ".$filter_order_value_min."-".$filter_order_value_max."; ";
			}			
			$filter_criteria .= "\r";
			if ($filter_store_id) {	
				$filter_criteria .= $this->language->get('entry_store')." ".$filter_store_id."; ";
			}
			if ($filter_currency) {	
				$filter_criteria .= $this->language->get('entry_currency')." ".$filter_currency."; ";
			}
			if ($filter_taxes) {	
				$filter_criteria .= $this->language->get('entry_tax')." ".$filter_taxes."; ";
			}
			if ($filter_tax_classes) {	
				$filter_criteria .= $this->language->get('entry_tax_classes')." ".$filter_tax_classes."; ";
			}
			if ($filter_geo_zones) {	
				$filter_criteria .= $this->language->get('entry_geo_zone')." ".$filter_geo_zones."; ";
			}
			if ($filter_customer_group_id) {	
				$filter_criteria .= $this->language->get('entry_customer_group')." ".$filter_customer_group_id."; ";
			}
			if ($filter_customer_name) {	
				$filter_criteria .= $this->language->get('entry_customer_name')." ".$filter_customer_name."; ";
			}
			if ($filter_customer_email) {	
				$filter_criteria .= $this->language->get('entry_customer_email')." ".$filter_customer_email."; ";
			}
			if ($filter_customer_telephone) {	
				$filter_criteria .= $this->language->get('entry_customer_telephone')." ".$filter_customer_telephone."; ";
			}
			if ($filter_ip) {	
				$filter_criteria .= $this->language->get('entry_ip')." ".$filter_ip."; ";
			}
			if ($filter_payment_company) {	
				$filter_criteria .= $this->language->get('entry_payment_company')." ".$filter_payment_company."; ";
			}
			if ($filter_payment_address) {	
				$filter_criteria .= $this->language->get('entry_payment_address')." ".$filter_payment_address."; ";
			}
			if ($filter_payment_city) {	
				$filter_criteria .= $this->language->get('entry_payment_city')." ".$filter_payment_city."; ";
			}
			if ($filter_payment_zone) {	
				$filter_criteria .= $this->language->get('entry_payment_zone')." ".$filter_payment_zone."; ";
			}
			if ($filter_payment_postcode) {	
				$filter_criteria .= $this->language->get('entry_payment_postcode')." ".$filter_payment_postcode."; ";
			}
			if ($filter_payment_country) {	
				$filter_criteria .= $this->language->get('entry_payment_country')." ".$filter_payment_country."; ";
			}
			if ($filter_payment_method) {	
				$filter_criteria .= $this->language->get('entry_payment_method')." ".$filter_payment_method."; ";
			}
			if ($filter_shipping_company) {	
				$filter_criteria .= $this->language->get('entry_shipping_company')." ".$filter_shipping_company."; ";
			}
			if ($filter_shipping_address) {	
				$filter_criteria .= $this->language->get('entry_shipping_address')." ".$filter_shipping_address."; ";
			}
			if ($filter_shipping_city) {	
				$filter_criteria .= $this->language->get('entry_shipping_city')." ".$filter_shipping_city."; ";
			}
			if ($filter_shipping_zone) {	
				$filter_criteria .= $this->language->get('entry_shipping_zone')." ".$filter_shipping_zone."; ";
			}
			if ($filter_shipping_postcode) {	
				$filter_criteria .= $this->language->get('entry_shipping_postcode')." ".$filter_shipping_postcode."; ";
			}
			if ($filter_shipping_country) {	
				$filter_criteria .= $this->language->get('entry_shipping_country')." ".$filter_shipping_country."; ";
			}
			if ($filter_shipping_method) {	
				$filter_criteria .= $this->language->get('entry_shipping_method')." ".$filter_shipping_method."; ";
			}
			if ($filter_category) {	
				$filter_criteria .= $this->language->get('entry_category')." ".$filter_category."; ";
			}
			if ($filter_manufacturer) {	
				$filter_criteria .= $this->language->get('entry_manufacturer')." ".$filter_manufacturer."; ";
			}
			if ($filter_supplier) {	
				$filter_criteria .= $this->language->get('entry_supplier')." ".$filter_supplier."; ";
			}				
			if ($filter_sku) {	
				$filter_criteria .= $this->language->get('entry_sku')." ".$filter_sku."; ";
			}
			if ($filter_product_name) {	
				$filter_criteria .= $this->language->get('entry_product')." ".$filter_product_name."; ";
			}
			if ($filter_model) {	
				$filter_criteria .= $this->language->get('entry_model')." ".$filter_model."; ";
			}
			if ($filter_option) {	
				$filter_criteria .= $this->language->get('entry_option')." ".$filter_option."; ";
			}	
			if ($filter_attribute) {	
				$filter_criteria .= $this->language->get('entry_attributes')." ".$filter_attribute."; ";
			}		
			if ($filter_location) {	
				$filter_criteria .= $this->language->get('entry_location')." ".$filter_location."; ";
			}	
			if ($filter_coupon_name) {	
				$filter_criteria .= $this->language->get('entry_coupon_name')." ".$filter_coupon_name."; ";
			}		
			if ($filter_coupon_code) {	
				$filter_criteria .= $this->language->get('entry_coupon_code')." ".$filter_coupon_code."; ";
			}	
			if ($filter_voucher_code) {	
				$filter_criteria .= $this->language->get('entry_voucher_code')." ".$filter_voucher_code."; ";
			}	
			if ($filter_campaign_name) {	
				$filter_criteria .= $this->language->get('entry_campaign_name')." ".$filter_campaign_name."; ";
			}		
			if ($filter_campaign_code) {	
				$filter_criteria .= $this->language->get('entry_campaign_code')." ".$filter_campaign_code."; ";
			}		
			$this->objPHPExcel->getActiveSheet()->setCellValue('C4', $filter_criteria);
			$this->objPHPExcel->getActiveSheet()->getStyle('C4')->getAlignment()->setWrapText(true);
			$this->objPHPExcel->getActiveSheet()->getStyle('C4')->getFont()->setSize(10);
			$this->objPHPExcel->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$this->objPHPExcel->getActiveSheet()->getStyle('C4:' . $lastCell . '4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$this->objPHPExcel->getActiveSheet()->getStyle('C4:' . $lastCell . '4')->getFill()->getStartColor()->setRGB('DBE5F1');				
		 }	
		 
		$freeze = ($export_logo_criteria ? 'A6' : 'A2');
		$this->objPHPExcel->getActiveSheet()->freezePane($freeze);
	}
	
	$counter = ($export_logo_criteria ? $this->mainCounter+4 : $this->mainCounter+1);
		
	foreach ($results as $result) {	
		$j = 0;
				
		if ($filter_report == 'sales_summary' or $filter_report == 'abandoned_orders') {
		if ($filter_group == 'year') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['year']);
		} elseif ($filter_group == 'quarter') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['quarter']);			
		} elseif ($filter_group == 'month') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['year']);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['month']);
		} elseif ($filter_group == 'day') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['date_start']);
		} elseif ($filter_group == 'order') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['order_id']);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['date_start']);
		} else {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['date_start']);
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['date_end']);			 
		}
		} elseif ($filter_report == 'day_of_week') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['day_of_week']);
		} elseif ($filter_report == 'hour') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['hour']);
		} elseif ($filter_report == 'store') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['store_name']);
		} elseif ($filter_report == 'currency') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['currency_code']);
		} elseif ($filter_report == 'customer_group') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['customer_group']);
		} elseif ($filter_report == 'country') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['payment_country']);
		} elseif ($filter_report == 'postcode') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['payment_postcode']);
		} elseif ($filter_report == 'region_state') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['payment_zone']);
		} elseif ($filter_report == 'city') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['payment_city']);
		} elseif ($filter_report == 'payment_method') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['payment_method']);
		} elseif ($filter_report == 'shipping_method') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter,  $result['shipping_method']);
		} elseif ($filter_report == 'coupon') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['date_start']);
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['date_end']);
		} elseif ($filter_report == 'voucher') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['date_start']);
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['date_end']);
		}	
		
		if ($filter_report == 'coupon') {

		if (in_array('cr_coupon_name', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_name']);
		}	
		if (in_array('cr_coupon_code', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_code']);
		}	
		if (in_array('cr_coupon_discount', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_discount']);
		}	
		if (in_array('cr_coupon_type', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_type']);
		}
		if (in_array('cr_coupon_status', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_status']);
		}
		if (in_array('cr_coupon_date_added', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_date_added']);
		}
		if (in_array('cr_coupon_last_used', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_last_used']);
		}	
		if (in_array('cr_coupon_amount', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_amount_raw']);
		}	
		if (in_array('cr_coupon_orders', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_orders']);
		}
		if (in_array('cr_coupon_total', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_total_raw']);
		}	
	
		} elseif ($filter_report == 'voucher') {

		if (in_array('vr_voucher_code', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_code']);
		}	
		if (in_array('vr_voucher_from_name', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_from_name']);
		}
		if (in_array('vr_voucher_from_email', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_from_email']);
		}
		if (in_array('vr_voucher_to_name', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_to_name']);
		}
		if (in_array('vr_voucher_to_email', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_to_email']);
		}
		if (in_array('vr_voucher_theme', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_theme']);
		}
		if (in_array('vr_voucher_status', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_status']);
		}
		if (in_array('vr_voucher_date_added', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_date_added']);
		}
		if (in_array('vr_voucher_amount', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_amount_raw']);
		}	
		if (in_array('vr_voucher_used_value', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_used_value_raw']);
		}	
		if (in_array('vr_voucher_remaining_value', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_remaining_value_raw']);
		}			
		if (in_array('vr_voucher_orders', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_orders']);
		}
		if (in_array('vr_voucher_total', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_total_raw']);
		}	
	
		} else {
		
		if (in_array('mv_orders', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['orders']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_customers', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['customers']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_products', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['products']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_sub_total', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['sub_total_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_handling', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['handling_raw'] != NULL ? $result['handling_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_loworder', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['low_order_fee_raw'] != NULL ? $result['low_order_fee_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_shipping', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['shipping_raw'] != NULL ? $result['shipping_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_reward', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['reward_raw'] != NULL ? $result['reward_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_earned_points', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['earned_reward_points']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_used_points', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['used_reward_points']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_coupon', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['coupon_raw'] != NULL ? $result['coupon_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_tax', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['taxes_raw'] != NULL ? $result['taxes_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_credit', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['credit_raw'] != NULL ? $result['credit_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_voucher', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['voucher_raw'] != NULL ? $result['voucher_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_discount', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['discount_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_total', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['total_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_aov', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['aov_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_refunds', $advsop_settings_mv_columns)) {
		if ($this->config->get('advsop' . $user_id . '_formula_6')) {	
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -$result['refunds_raw'] != NULL ? -$result['refunds_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		} else {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['refunds_raw'] != NULL ? $result['refunds_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		}
		if (in_array('mv_total_sales', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['total_sales_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_product_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -$result['prod_costs_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_commission', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -$result['commission_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_payment_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -$result['pay_costs_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_shipping_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -$result['ship_costs_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_extra_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -$result['extra_costs_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_return_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -$result['return_costs_raw'] != NULL ? -$result['return_costs_raw'] : '0.00');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_shipping_balance', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['ship_balance_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_total_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -$result['total_costs_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_total_profit', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $result['total_profit_raw']);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		if (in_array('mv_total_profit_prc', $advsop_settings_mv_columns)) {
		if ($result['total_sales_raw'] > 0) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->applyFromArray(array('code' => PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00));		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('%','',$result['total_profit_prc'])/100);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}
		} else {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->applyFromArray(array('code' => PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00));			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '0');
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		}
		}
		
		}

		$dcounter = $counter;	
		if (in_array('ol_order_order_id', $advsop_settings_ol_columns)) {		
		$counter = $dcounter;		
		$details = explode('<br>', $result['order_ord_id']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('ol_order_date_added', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_ord_date']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('ol_order_inv_no', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_inv_no']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('ol_order_customer', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_name']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('ol_order_email', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_email']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('ol_order_customer_group', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_group']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('ol_order_shipping_method', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_shipping_method']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('ol_order_payment_method', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_payment_method']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('ol_order_status', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_status']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('ol_order_store', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_store']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, html_entity_decode($value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('ol_order_currency', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_currency']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}			
		if (in_array('ol_order_quantity', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_products']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('ol_order_sub_total', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_sub_total']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('ol_order_shipping', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_shipping']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('ol_order_tax', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_tax']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if ($filter_report == 'coupon') {
		if (in_array('cr_coupon_amount', $advsop_settings_cr_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_coupon']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		} elseif ($filter_report == 'voucher') {
		if (in_array('vr_voucher_used_value', $advsop_settings_vr_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_voucher']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		}			
		if (in_array('ol_order_value', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_value']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('ol_order_sales', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_sales']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('ol_order_costs', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_costs']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -str_replace('-','',$value));
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('ol_order_profit', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_profit']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('ol_order_profit_prc', $advsop_settings_ol_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['order_profit_prc']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->applyFromArray(array('code' => PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00));	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('%','',$value)/100);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		
		if (in_array('cl_customer_cust_id', $advsop_settings_cl_columns)) {		
		$counter = $dcounter;		
		$details = explode('<br>', $result['customer_cust_id']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('cl_billing_name', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['billing_name']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_billing_company', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['billing_company']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_billing_address_1', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['billing_address_1']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_billing_address_2', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['billing_address_2']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_billing_city', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['billing_city']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_billing_zone', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['billing_zone']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_billing_postcode', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['billing_postcode']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_billing_country', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['billing_country']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_customer_telephone', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['customer_telephone']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_shipping_name', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['shipping_name']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_shipping_company', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['shipping_company']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_shipping_address_1', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['shipping_address_1']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_shipping_address_2', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['shipping_address_2']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_shipping_city', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['shipping_city']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_shipping_zone', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['shipping_zone']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_shipping_postcode', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['shipping_postcode']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('cl_shipping_country', $advsop_settings_cl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['shipping_country']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}

		$j = 0;
		if ($filter_report == 'sales_summary' or $filter_report == 'abandoned_orders') {
		if ($filter_group == 'year') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_group == 'quarter') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		} elseif ($filter_group == 'month') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		} elseif ($filter_group == 'day') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_group == 'order') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		} else {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}
		} elseif ($filter_report == 'day_of_week') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'hour') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'store') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'currency') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'customer_group') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'country') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'postcode') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'region_state') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'city') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'payment_method') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'shipping_method') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'coupon') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		} elseif ($filter_report == 'voucher') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}	
		
		if ($filter_report == 'coupon') {

		if (in_array('cr_coupon_name', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_code', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_discount', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_type', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cr_coupon_status', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cr_coupon_date_added', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cr_coupon_last_used', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_amount', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_orders', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}		
		if (in_array('cr_coupon_total', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		
		} elseif ($filter_report == 'voucher') {

		if (in_array('vr_voucher_code', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('vr_voucher_from_name', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_from_email', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_to_name', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_to_email', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_theme', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_status', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_date_added', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_amount', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('vr_voucher_used_value', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('vr_voucher_remaining_value', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}			
		if (in_array('vr_voucher_orders', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_total', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		
		} else {
		
		if (in_array('mv_orders', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_customers', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_products', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_sub_total', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_handling', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_loworder', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_shipping', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_reward', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_earned_points', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_used_points', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_coupon', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_tax', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_credit', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_voucher', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_discount', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_total', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_aov', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_refunds', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_total_sales', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_product_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_commission', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_payment_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}
		if (in_array('mv_shipping_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}
		if (in_array('mv_extra_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}
		if (in_array('mv_return_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_shipping_balance', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_total_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_total_profit', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_total_profit_prc', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		
		}

		if (in_array('ol_order_order_id', $advsop_settings_ol_columns)) {		
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_date_added', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_inv_no', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_customer', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_email', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_customer_group', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_shipping_method', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_payment_method', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_status', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_store', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_currency', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}			
		if (in_array('ol_order_quantity', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_sub_total', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_shipping', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_tax', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if ($filter_report == 'coupon') {
		if (in_array('cr_coupon_amount', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		} elseif ($filter_report == 'voucher') {
		if (in_array('vr_voucher_used_value', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		}			
		if (in_array('ol_order_value', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_sales', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_costs', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_profit', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_profit_prc', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		
		if (in_array('cl_customer_cust_id', $advsop_settings_cl_columns)) {		
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cl_billing_name', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_company', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_address_1', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_address_2', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_city', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_zone', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_postcode', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_country', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_customer_telephone', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_name', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_company', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_address_1', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_address_2', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_city', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_zone', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_postcode', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_country', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
				
		if (in_array('pl_prod_order_id', $advsop_settings_pl_columns)) {		
		$counter = $dcounter;		
		$details = explode('<br>', $result['product_ord_id']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_date_added', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_ord_date']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_id', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_pid']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);			
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('pl_prod_sku', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_sku']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('pl_prod_model', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_model']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('pl_prod_name', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_name']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, html_entity_decode($value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('pl_prod_option', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_option']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('&nbsp;','',$value));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('pl_prod_attributes', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_attributes']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, html_entity_decode(str_replace('&nbsp;','',$value)));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('pl_prod_category', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_category']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, html_entity_decode(str_replace('&nbsp;','',$value)));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}		
		if (in_array('pl_prod_manu', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_manu']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, html_entity_decode(str_replace('&nbsp;','',$value)));
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	
		if (in_array('pl_prod_supplier', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_supplier']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, html_entity_decode(str_replace('&nbsp;','',$value)));
		$j = $c;
		$counter += 1;		
		}	
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}			
		if (in_array('pl_prod_currency', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_currency']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);		
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}			
		if (in_array('pl_prod_price', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_price']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_quantity', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_quantity']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_total_excl_vat', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_total_excl_vat']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_tax', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_tax']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_total_incl_vat', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_total_incl_vat']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_sales', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_sales']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_cost', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_cost']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, -str_replace('-','',$value));
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_profit', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_profit']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->setFormatCode('0.00');	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, $value);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_profit_margin', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_profit_margin']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->applyFromArray(array('code' => PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00));	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('%','',$value)/100);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}
		if (in_array('pl_prod_profit_markup', $advsop_settings_pl_columns)) {
		$counter = $dcounter;			
		$details = explode('<br>', $result['product_profit_markup']);	
		foreach ($details as $key => $value) {
		$c = $j;
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getNumberFormat()->applyFromArray(array('code' => PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00));	
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, str_replace('%','',$value)/100);
		if ($filter_report == 'abandoned_orders') {
		$this->objPHPExcel->getActiveSheet()->getStyle($col . $counter)->getFont()->applyFromArray(array('strike' => true));
		}		
		$j = $c;
		$counter += 1;		
		}
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);
		}	

		$j = 0;
		if ($filter_report == 'sales_summary' or $filter_report == 'abandoned_orders') {
		if ($filter_group == 'year') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_group == 'quarter') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		} elseif ($filter_group == 'month') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		} elseif ($filter_group == 'day') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_group == 'order') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		} else {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}
		} elseif ($filter_report == 'day_of_week') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'hour') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'store') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'currency') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'customer_group') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'country') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'postcode') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'region_state') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'city') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'payment_method') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'shipping_method') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		} elseif ($filter_report == 'coupon') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		} elseif ($filter_report == 'voucher') {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}	
		
		if ($filter_report == 'coupon') {

		if (in_array('cr_coupon_name', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_code', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_discount', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_type', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cr_coupon_status', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cr_coupon_date_added', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cr_coupon_last_used', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_amount', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cr_coupon_orders', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}		
		if (in_array('cr_coupon_total', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		
		} elseif ($filter_report == 'voucher') {

		if (in_array('vr_voucher_code', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('vr_voucher_from_name', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_from_email', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_to_name', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_to_email', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_theme', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_status', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_date_added', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_amount', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('vr_voucher_used_value', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('vr_voucher_remaining_value', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}			
		if (in_array('vr_voucher_orders', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('vr_voucher_total', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		
		} else {
		
		if (in_array('mv_orders', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_customers', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_products', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_sub_total', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_handling', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_loworder', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_shipping', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_reward', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_earned_points', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_used_points', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_coupon', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_tax', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_credit', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_voucher', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_discount', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_total', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_aov', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_refunds', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('mv_total_sales', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_product_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_commission', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_payment_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}
		if (in_array('mv_shipping_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}
		if (in_array('mv_extra_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');		
		}
		if (in_array('mv_return_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_shipping_balance', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_total_costs', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_total_profit', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');	
		}
		if (in_array('mv_total_profit_prc', $advsop_settings_mv_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		
		}

		if (in_array('ol_order_order_id', $advsop_settings_ol_columns)) {		
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_date_added', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_inv_no', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_customer', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_email', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_customer_group', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_shipping_method', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_payment_method', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_status', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_store', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('ol_order_currency', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}			
		if (in_array('ol_order_quantity', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_sub_total', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_shipping', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_tax', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if ($filter_report == 'coupon') {
		if (in_array('cr_coupon_amount', $advsop_settings_cr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		} elseif ($filter_report == 'voucher') {
		if (in_array('vr_voucher_used_value', $advsop_settings_vr_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		}			
		if (in_array('ol_order_value', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_sales', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_costs', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_profit', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('ol_order_profit_prc', $advsop_settings_ol_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		
		if (in_array('cl_customer_cust_id', $advsop_settings_cl_columns)) {		
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}	
		if (in_array('cl_billing_name', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_company', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_address_1', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_address_2', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_city', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_zone', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_postcode', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_billing_country', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_customer_telephone', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_name', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_company', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_address_1', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_address_2', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_city', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_zone', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_postcode', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}
		if (in_array('cl_shipping_country', $advsop_settings_cl_columns)) {
		$col = PHPExcel_Cell::stringFromColumnIndex($j++);				
		$this->objPHPExcel->getActiveSheet()->setCellValue($col . $counter, '');
		}

		$counter++;
		$this->mainCounter++;
	}
	
	if (!isset($_GET['cron'])) {
		$filename = "sales_profit_report_basic_details_".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d_H-i-s" : "Y-m-d_h-i-s-A");
		header('Expires: 0');
		header('Cache-control: private');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=UTF-8; encoding=UTF-8');
		header('Content-Disposition: attachment;filename='.$filename.".xlsx");
		header('Content-Transfer-Encoding: UTF-8');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel2007');	
		$objWriter->save('php://output');	
	} else if (isset($_GET['cron'])) {
		$file_path_parts = explode('/', $file_save_path);
		$file_path = dirname(DIR_APPLICATION);
		foreach ($file_path_parts as $file_path_part) {
			$file_path .= '/' . $file_path_part;
			if (!file_exists($file_path)) {
				mkdir($file_path, 0755);
				if (file_exists(DIR_DOWNLOAD . 'index.html')) {
					copy(DIR_DOWNLOAD  . 'index.html', $file_path . DIRECTORY_SEPARATOR . 'index.html');
				}
			}
		}
		
		if ($this->request->server['HTTPS']) {
			$server = HTTPS_CATALOG;
		} else {
			$server = HTTP_CATALOG;
		}
		
		$filename = $file_name."_".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d_H-i-s" : "Y-m-d_h-i-s-A").".xlsx";
		$file_to_download = $server . $file_save_path . '/' . $file_name."_".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d_H-i-s" : "Y-m-d_h-i-s-A").".xlsx";
		$file = $file_path . '/' . $file_name."_".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d_H-i-s" : "Y-m-d_h-i-s-A").".xlsx";		
		
		$objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel2007');	
		$objWriter->save($file);
		
		$message  = '<html dir="ltr" lang="en">' . "\n";
		$message .= '  <head>' . "\n";
		$message .= '    <title>' . $this->language->get('text_email_subject') . '</title>' . "\n";
		$message .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
		$message .= '  </head>' . "\n";
		$message .= '  <body>' . "\n";
		if ($export_file == 'save_on_server') {			
			$message .= '<p>' . $this->language->get('text_email_message_save_file') . ' <a href="' . $file_to_download . '">' . $filename . '</a>.</p><br />' . "\n";
		} else if ($export_file == 'send_to_email') {
			$message .= '<p>' . $this->language->get('text_email_message_send_file') . '</p><br />' . "\n";
		}
		$message .= '<p><b>' . $this->config->get('config_name') . '</b><br />' . "\n";
		$message .= $this->config->get('config_address') . '</p>' . "\n";			
		$message .= '</body>' . "\n";
		$message .= '</html>' . "\n";

		$mail = new Mail();
		$mail->protocol = $this->config->get('config_mail_protocol');
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
		$mail->setTo($email);
		$mail->setFrom($this->config->get('config_email'));
		$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
		$mail->setSubject(html_entity_decode($this->language->get('text_email_subject'), ENT_QUOTES, 'UTF-8'));
		if ($export_file == 'save_on_server') {			
			$mail->setHtml($message);
		} else if ($export_file == 'send_to_email') {
			$mail->setHtml($message);
			$mail->addAttachment($file);
		}			
		$mail->send();
	}	
	exit();
	}
?>