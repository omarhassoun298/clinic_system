<?php
	ini_set("memory_limit","256M");
	
	$results = $export_data['results'];
	if ($results) {

	$export_pdf_basic_details = "<html><head>";			
	$export_pdf_basic_details .= "</head>";
	$export_pdf_basic_details .= "<body>";
	$export_pdf_basic_details .= "<style type='text/css'>
	.list_criteria {
		border-collapse: collapse;
		width: 100%;	
		border-top: 1px solid #DBE5F1;
		border-left: 1px solid #DBE5F1;	
		padding: 3px;		
		font-family: dejavu sans;
		font-size: 12px;
		background: url('$logo') 5px 25px no-repeat #DBE5F1;
		background-size: 268px 50px;
	}
	.list_criteria td {
		border-right: 1px solid #DBE5F1;
		border-bottom: 1px solid #DBE5F1;	
	}
	
	.list_main {
		border-collapse: collapse;		
		width: 100%;
		border-top: 1px solid #DDDDDD;
		border-left: 1px solid #DDDDDD;	
		font-family: dejavu sans;
		font-size: 11px;
		margin-bottom: 5px;		
	}
	.list_main td {
		border-right: 1px solid #DDDDDD;
		border-bottom: 1px solid #DDDDDD;	
	}
	.list_main thead td {
		background-color: #F0F0F0;
		padding: 3px;
		font-weight: bold;
	}	
	.list_main tbody a {
		text-decoration: none;
	}
	.list_main tbody td {
		vertical-align: middle;
		padding: 3px;
	}

	.list_detail {
		border-collapse: collapse;
		width: 100%;
		border-top: 1px solid #DDDDDD;
		border-left: 1px solid #DDDDDD;
		font-family: dejavu sans;	
		margin-top: 5px;
	}
	.list_detail td {
		border-right: 1px solid #DDDDDD;
		border-bottom: 1px solid #DDDDDD;
	}
	.list_detail thead td {
		background-color: #f5f5f5;
		padding: 0px 3px;
		font-size: 9px;
		font-weight: bold;	
	}
	.list_detail tbody td {
		padding: 0px 3px;
		font-size: 9px;
	}
	
	.sales {
		background-color: #DCFFB9;	
	}	
	.cost {
		background-color: #ffd7d7;	
	}	
	.plusprofit {
		background-color: #c4d9ee;
		font-weight: bold;
	}
	.minusprofit {
		background-color: #F99;
		font-weight: bold;	
	}
	.total {
		background-color: #E7EFEF;
		color: #003A88;
		font-weight: bold;
	}	
	.total_sales {
		background-color: #DCFFB9;
		color: #003A88;
		font-weight: bold;
	}	
	.total_cost {
		background-color: #ffd7d7;
		color: #003A88;
		font-weight: bold;
	}	
	.total_plusprofit {
		background-color: #c4d9ee;
		color: #003A88;	
		font-weight: bold;
	}
	.total_minusprofit {
		background-color: #F99;
		color: #003A88;	
		font-weight: bold;	
	}	
	</style>";	
	if ($export_logo_criteria) {
	$export_pdf_basic_details .="<table class='list_criteria'>";
	$export_pdf_basic_details .="<tr>";
	$export_pdf_basic_details .= "<td colspan='3' align='center'>".$this->language->get('text_report_date').": ".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d H:i:s" : "Y-m-d h:i:s A")."</td><td></td></tr>";
	$export_pdf_basic_details .="<tr>";
	$export_pdf_basic_details .= "<td colspan='3' align='center' style='height:50px; font-size:24; font-weight:bold;'>".$this->language->get('adv_ext_name')."</td><td width='1%' align='left' valign='top' nowrap='nowrap'><b>".$this->config->get('config_name')."</b> <br>".$this->config->get('config_address')." <br>".$this->language->get('text_email')."".$this->config->get('config_email')." <br>".$this->language->get('text_telephone')."".$this->config->get('config_telephone')." </td></tr>";
	$export_pdf_basic_details .="<tr>";
	$export_pdf_basic_details .= "<td align='right' valign='top' style='height:50px; width:150px; font-weight:bold;'>".$this->language->get('text_report_criteria')." </td>";	
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
			$filter_criteria .= "<br />";
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
			$filter_criteria .= "<br />";
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
	$export_pdf_basic_details .= "<td colspan='2' align='left' valign='top'>".$filter_criteria."</td><td></td></tr>";
	$export_pdf_basic_details .="</table>";
	}		
	foreach ($results as $result) {		
	$export_pdf_basic_details .= "<div style='page-break-inside:avoid'>";
	$export_pdf_basic_details .= "<table class='list_main'>";	
	$export_pdf_basic_details .="<thead>";
	$export_pdf_basic_details .="<tr>";
	if ($filter_report == 'sales_summary' or $filter_report == 'abandoned_orders') {
	if ($filter_group == 'year') {				
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_year')."</td>";
	} elseif ($filter_group == 'quarter') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_year')."</td>";
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_quarter')."</td>";				
	} elseif ($filter_group == 'month') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_year')."</td>";
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_month')."</td>";
	} elseif ($filter_group == 'day') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_date')."</td>";
	} elseif ($filter_group == 'order') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_order_order_id')."</td>";
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_order_date_added')."</td>";	
	} else {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_date_start')."</td>";
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_date_end')."</td>";	
	}
	} elseif ($filter_report == 'day_of_week') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_day_of_week')."</td>";
	} elseif ($filter_report == 'hour') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_hour')."</td>";
	} elseif ($filter_report == 'store') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_store')."</td>";
	} elseif ($filter_report == 'currency') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_currency')."</td>";
	} elseif ($filter_report == 'customer_group') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_customer_group')."</td>";
	} elseif ($filter_report == 'country') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_country')."</td>";
	} elseif ($filter_report == 'postcode') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_postcode')."</td>";
	} elseif ($filter_report == 'region_state') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_region_state')."</td>";
	} elseif ($filter_report == 'city') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_city')."</td>";
	} elseif ($filter_report == 'payment_method') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_payment_method')."</td>";
	} elseif ($filter_report == 'shipping_method') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap'>".$this->language->get('column_shipping_method')."</td>";	
	} elseif ($filter_report == 'coupon') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_date_start')."</td>";
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_date_end')."</td>";	
	} elseif ($filter_report == 'voucher') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_date_start')."</td>";
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$this->language->get('column_date_end')."</td>";		
	}	
	if ($filter_report == 'coupon') {
	in_array('cr_coupon_name', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_coupon_name')."</td>" : '';
	in_array('cr_coupon_code', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_coupon_code')."</td>" : '';
	in_array('cr_coupon_discount', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_coupon_discount')."</td>" : '';
	in_array('cr_coupon_type', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_coupon_type')."</td>" : '';
	in_array('cr_coupon_status', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_coupon_status')."</td>" : '';
	in_array('cr_coupon_date_added', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_coupon_date_added')."</td>" : '';
	in_array('cr_coupon_last_used', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_coupon_last_used')."</td>" : '';
	in_array('cr_coupon_amount', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_coupon_amount')."</td>" : '';
	in_array('cr_coupon_orders', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_orders')."</td>" : '';
	in_array('cr_coupon_total', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total')."</td>" : '';
	} elseif ($filter_report == 'voucher') {
	in_array('vr_voucher_code', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_voucher_code')."</td>" : '';
	in_array('vr_voucher_from_name', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_voucher_from_name')."</td>" : '';
	in_array('vr_voucher_from_email', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_voucher_from_email')."</td>" : '';
	in_array('vr_voucher_to_name', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_voucher_to_name')."</td>" : '';
	in_array('vr_voucher_to_email', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_voucher_to_email')."</td>" : '';
	in_array('vr_voucher_theme', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_voucher_theme')."</td>" : '';
	in_array('vr_voucher_status', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_voucher_status')."</td>" : '';
	in_array('vr_voucher_date_added', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_voucher_date_added')."</td>" : '';
	in_array('vr_voucher_amount', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_voucher_amount')."</td>" : '';	
	in_array('vr_voucher_used_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_voucher_used_value')."</td>" : '';	
	in_array('vr_voucher_remaining_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_voucher_remaining_value')."</td>" : '';	
	in_array('vr_voucher_orders', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_orders')."</td>" : '';
	in_array('vr_voucher_total', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total')."</td>" : '';
	} else {
	in_array('mv_orders', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_orders')."</td>" : '';
	in_array('mv_customers', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_customers')."</td>" : '';
	in_array('mv_products', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_products')."</td>" : '';
	in_array('mv_sub_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_sub_total')."</td>" : '';
	in_array('mv_handling', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_handling')."</td>" : '';
	in_array('mv_loworder', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:65px;'>".$this->language->get('column_loworder')."</td>" : '';
	in_array('mv_shipping', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_shipping')."</td>" : '';	
	in_array('mv_reward', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_reward')."</td>" : '';
	in_array('mv_earned_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:85px;'>".$this->language->get('column_earned_reward_points')."</td>" : '';
	in_array('mv_used_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:75px;'>".$this->language->get('column_used_reward_points')."</td>" : '';
	in_array('mv_coupon', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_coupon')."</td>" : '';
	in_array('mv_tax', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_taxes')."</td>" : '';
	in_array('mv_credit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_credit')."</td>" : '';
	in_array('mv_voucher', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_voucher')."</td>" : '';
	in_array('mv_discount', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:60px;'>".$this->language->get('column_discount')."</td>" : '';
	in_array('mv_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total')."</td>" : '';
	in_array('mv_aov', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:65px;'>".$this->language->get('column_aov')."</td>" : '';
	in_array('mv_refunds', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_refunds')."</td>" : '';	
	in_array('mv_total_sales', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total_sales')."</td>" : '';
	in_array('mv_product_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_cost')."</td>" : '';
	in_array('mv_commission', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_commission')."</td>" : '';
	in_array('mv_payment_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_payment_cost')."</td>" : '';
	in_array('mv_shipping_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_shipping_cost')."</td>" : '';
	in_array('mv_extra_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_extra_cost')."</td>" : '';
	in_array('mv_return_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_return_cost')."</td>" : '';
	in_array('mv_shipping_balance', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_shipping_balance')."</td>" : '';
	in_array('mv_total_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total_costs')."</td>" : '';
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total_profit')."</td>" : '';
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:70px;'>".$this->language->get('column_total_profit_prc')."</td>" : '';
	}	
	$export_pdf_basic_details .="</tr>";
	$export_pdf_basic_details .="</thead><tbody>";
	$export_pdf_basic_details .="<tr>";
	if ($filter_report == 'sales_summary' or $filter_report == 'abandoned_orders') {
	if ($filter_group == 'year') {				
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['year']."</td>";
	} elseif ($filter_group == 'quarter') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['year']."</td>";	
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['quarter']."</td>";						
	} elseif ($filter_group == 'month') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['year']."</td>";	
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['month']."</td>";	
	} elseif ($filter_group == 'day') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['date_start']."</td>";
	} elseif ($filter_group == 'order') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['order_id']."</td>";	
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['date_start']."</td>";
	} else {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['date_start']."</td>";
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['date_end']."</td>";
	}
	} elseif ($filter_report == 'day_of_week') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['day_of_week']."</td>";
	} elseif ($filter_report == 'hour') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['hour']."</td>";
	} elseif ($filter_report == 'store') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['store_name']."</td>";
	} elseif ($filter_report == 'currency') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['currency_code']."</td>";
	} elseif ($filter_report == 'customer_group') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['customer_group']."</td>";
	} elseif ($filter_report == 'country') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['payment_country']."</td>";
	} elseif ($filter_report == 'postcode') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['payment_postcode']."</td>";
	} elseif ($filter_report == 'region_state') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['payment_zone']."</td>";
	} elseif ($filter_report == 'city') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['payment_city']."</td>";
	} elseif ($filter_report == 'payment_method') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['payment_method']."</td>";
	} elseif ($filter_report == 'shipping_method') {
	$export_pdf_basic_details .= "<td colspan='2' align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['shipping_method']."</td>";
	} elseif ($filter_report == 'coupon') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['date_start']."</td>";
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['date_end']."</td>";
	} elseif ($filter_report == 'voucher') {
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['date_start']."</td>";
	$export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#F9F9F9;'>".$result['date_end']."</td>";
	}
	if ($filter_report == 'coupon') {
	in_array('cr_coupon_name', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['coupon_name']."</td>" : '';
	in_array('cr_coupon_code', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['coupon_code']."</td>" : '';
	in_array('cr_coupon_discount', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$result['coupon_discount']."</td>" : '';
	in_array('cr_coupon_type', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['coupon_type']."</td>" : '';
	in_array('cr_coupon_status', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['coupon_status']."</td>" : '';
	in_array('cr_coupon_date_added', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['coupon_date_added']."</td>" : '';
	in_array('cr_coupon_last_used', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['coupon_last_used']."</td>" : '';
	in_array('cr_coupon_amount', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$result['coupon_amount']."</td>" : '';
	in_array('cr_coupon_orders', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$result['coupon_orders']."</td>" : '';
	in_array('cr_coupon_total', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$result['coupon_total']."</td>" : '';
	} elseif ($filter_report == 'voucher') {
	in_array('vr_voucher_code', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['voucher_code']."</td>" : '';
	in_array('vr_voucher_from_name', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['voucher_from_name']."</td>" : '';
	in_array('vr_voucher_from_email', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['voucher_from_email']."</td>" : '';
	in_array('vr_voucher_to_name', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['voucher_to_name']."</td>" : '';
	in_array('vr_voucher_to_email', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['voucher_to_email']."</td>" : '';
	in_array('vr_voucher_theme', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['voucher_theme']."</td>" : '';
	in_array('vr_voucher_status', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['voucher_status']."</td>" : '';
	in_array('vr_voucher_date_added', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='left'>".$result['voucher_date_added']."</td>" : '';
	in_array('vr_voucher_amount', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$result['voucher_amount']."</td>" : '';	
	in_array('vr_voucher_used_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$result['voucher_used_value']."</td>" : '';	
	in_array('vr_voucher_remaining_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$result['voucher_remaining_value']."</td>" : '';	
	in_array('vr_voucher_orders', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$result['voucher_orders']."</td>" : '';
	in_array('vr_voucher_total', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$result['voucher_total']."</td>" : '';
	} else {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_orders', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['orders']."</td>" : '';
	} else {
	in_array('mv_orders', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['orders']."</td>" : '';
	}			
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_customers', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['customers']."</td>" : '';
	} else {
	in_array('mv_customers', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['customers']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_products', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['products']."</td>" : '';
	} else {
	in_array('mv_products', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['products']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_sub_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['sub_total']."</td>" : '';
	} else {
	in_array('mv_sub_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['sub_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_handling', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['handling']."</td>" : '';
	} else {
	in_array('mv_handling', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['handling']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_loworder', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['low_order_fee']."</td>" : '';
	} else {
	in_array('mv_loworder', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['low_order_fee']."</td>" : '';
	}
	if ($this->config->get('advsop' . $user_id . '_formula_1')) {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_shipping', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['shipping']."</td>" : '';	
	} else {
	in_array('mv_shipping', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['shipping']."</td>" : '';	
	}
	} else {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_shipping', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['shipping']."</td>" : '';
	} else {
	in_array('mv_shipping', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['shipping']."</td>" : '';
	}
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_reward', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['reward']."</td>" : '';
	} else {
	in_array('mv_reward', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['reward']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_earned_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['earned_reward_points']."</td>" : '';
	} else {
	in_array('mv_earned_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['earned_reward_points']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_used_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['used_reward_points']."</td>" : '';
	} else {
	in_array('mv_used_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['used_reward_points']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_coupon', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['coupon']."</td>" : '';
	} else {
	in_array('mv_coupon', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['coupon']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_tax', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['taxes']."</td>" : '';
	} else {
	in_array('mv_tax', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['taxes']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_credit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['credit']."</td>" : '';
	} else {
	in_array('mv_credit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['credit']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_voucher', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['voucher']."</td>" : '';
	} else {
	in_array('mv_voucher', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['voucher']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_discount', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['discount']."</td>" : '';
	} else {
	in_array('mv_discount', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['discount']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['total']."</td>" : '';
	} else {
	in_array('mv_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_aov', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['aov']."</td>" : '';
	} else {
	in_array('mv_aov', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['aov']."</td>" : '';
	}
	if ($this->config->get('advsop' . $user_id . '_formula_6')) {	
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_refunds', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['refunds']."</td>" : '';
	} else {
	in_array('mv_refunds', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['refunds']."</td>" : '';
	}
	} else {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_refunds', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['refunds']."</td>" : '';
	} else {
	in_array('mv_refunds', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['refunds']."</td>" : '';
	}
	}		
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total_sales', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='sales'>".$result['total_sales']."</td>" : '';	
	} else {
	in_array('mv_total_sales', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='sales' style='text-decoration:line-through;'>".$result['total_sales']."</td>" : '';	
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_product_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00;'>".$result['prod_costs']."</td>" : '';	
	} else {
	in_array('mv_product_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00; text-decoration:line-through;'>".$result['prod_costs']."</td>" : '';	
	}	
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_commission', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00;'>".$result['commission']."</td>" : '';	
	} else {
	in_array('mv_commission', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00; text-decoration:line-through;'>".$result['commission']."</td>" : '';	
	}
	if ($this->config->get('advsop' . $user_id . '_formula_3')) {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_payment_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00;'>".$result['pay_costs']."</td>" : '';
	} else {
	in_array('mv_payment_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00; text-decoration:line-through;'>".$result['pay_costs']."</td>" : '';
	}
	} else {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_payment_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['pay_costs']."</td>" : '';
	} else {
	in_array('mv_payment_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['pay_costs']."</td>" : '';
	}
	}	
	if ($this->config->get('advsop' . $user_id . '_formula_2')) {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_shipping_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00;'>".$result['ship_costs']."</td>" : '';
	} else {
	in_array('mv_shipping_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00; text-decoration:line-through;'>".$result['ship_costs']."</td>" : '';
	}
	} else {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_shipping_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['ship_costs']."</td>" : '';
	} else {
	in_array('mv_shipping_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['ship_costs']."</td>" : '';
	}
	}
	if ($this->config->get('advsop' . $user_id . '_formula_4')) {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_extra_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00;'>".$result['extra_costs']."</td>" : '';
	} else {
	in_array('mv_extra_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00; text-decoration:line-through;'>".$result['extra_costs']."</td>" : '';
	}
	} else {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_extra_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['extra_costs']."</td>" : '';
	} else {
	in_array('mv_extra_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['extra_costs']."</td>" : '';
	}
	}
	if ($this->config->get('advsop' . $user_id . '_formula_5')) {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_return_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00;'>".$result['return_costs']."</td>" : '';
	} else {
	in_array('mv_return_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#F00; text-decoration:line-through;'>".$result['return_costs']."</td>" : '';
	}
	} else {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_return_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['return_costs']."</td>" : '';
	} else {
	in_array('mv_return_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['return_costs']."</td>" : '';
	}
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_shipping_balance', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['ship_balance']."</td>" : '';
	} else {
	in_array('mv_shipping_balance', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['ship_balance']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='cost'>".$result['total_costs']."</td>" : '';
	} else {
	in_array('mv_total_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='cost' style='text-decoration:line-through;'>".$result['total_costs']."</td>" : '';
	}
	if ($result['total_profit_raw'] >= 0) {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='plusprofit'>".$result['total_profit']."</td>" : '';
	} else {
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='plusprofit' style='text-decoration:line-through;'>".$result['total_profit']."</td>" : '';
	}
	} else {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='minusprofit'>".$result['total_profit']."</td>" : '';
	} else {
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='minusprofit' style='text-decoration:line-through;'>".$result['total_profit']."</td>" : '';
	}
	}
	if ($result['total_sales_raw'] > 0) {
	if ($filter_report != 'abandoned_orders') {
	if ($result['total_profit_raw'] >= 0) {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='plusprofit'>".$result['total_profit_prc']."</td>" : '';
	} else {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='minusprofit'>".$result['total_profit_prc']."</td>" : '';
	}
	} else {
	if ($result['total_profit_raw'] >= 0) {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='plusprofit' style='text-decoration:line-through;'>".$result['total_profit_prc']."</td>" : '';
	} else {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='minusprofit' style='text-decoration:line-through;'>".$result['total_profit_prc']."</td>" : '';
	}
	}
	} else {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='plusprofit'>".'0%'."</td>" : '';
	}
	}
	$export_pdf_basic_details .= "</tr></tbody></table>";
	$export_pdf_basic_details .="</div>";
		$export_pdf_basic_details .= "<div style='page-break-inside:avoid'>";
		$export_pdf_basic_details .="<table class='list_detail'>";
		$export_pdf_basic_details .="<thead>";
		$export_pdf_basic_details .="<tr>";
		in_array('ol_order_order_id', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_order_id')."</td>" : '';
		in_array('ol_order_date_added', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_date_added')."</td>" : '';
		in_array('ol_order_inv_no', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_inv_no')."</td>" : '';
		in_array('ol_order_customer', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_customer')."</td>" : '';
		in_array('ol_order_email', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_email')."</td>" : '';
		in_array('ol_order_customer_group', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_customer_group')."</td>" : '';
		in_array('ol_order_shipping_method', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_shipping_method')."</td>" : '';
		in_array('ol_order_payment_method', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_payment_method')."</td>" : '';
		in_array('ol_order_status', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_status')."</td>" : '';
		in_array('ol_order_store', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_order_store')."</td>" : '';
		in_array('ol_order_currency', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_currency')."</td>" : '';
		in_array('ol_order_quantity', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_quantity')."</td>" : '';
		in_array('ol_order_sub_total', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_sub_total')."</td>" : '';
		in_array('ol_order_shipping', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_shipping')."</td>" : '';
		in_array('ol_order_tax', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_tax')."</td>" : '';
		if ($filter_report == 'coupon') {
		in_array('cr_coupon_amount', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_coupon')."</td>" : '';
		} elseif ($filter_report == 'voucher') {
		in_array('vr_voucher_used_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_voucher')."</td>" : '';
		}			
		in_array('ol_order_value', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_value')."</td>" : '';
		in_array('ol_order_sales', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_sales')."</td>" : '';
		in_array('ol_order_costs', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_costs')."</td>" : '';
		in_array('ol_order_profit', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_profit')."</td>" : '';
		in_array('ol_order_profit_prc', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_order_margin')."</td>" : '';
		$export_pdf_basic_details .="</tr>";
		$export_pdf_basic_details .="</thead><tbody>";
		$export_pdf_basic_details .="<tr>";
		in_array('ol_order_order_id', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#fff2d0;'>".$result['order_ord_id']."</td>" : '';
		in_array('ol_order_date_added', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['order_ord_date']."</td>" : '';
		in_array('ol_order_inv_no', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['order_inv_no']."</td>" : '';
		in_array('ol_order_customer', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['order_name']."</td>" : '';
		in_array('ol_order_email', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['order_email']."</td>" : '';
		in_array('ol_order_customer_group', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['order_group']."</td>" : '';
		in_array('ol_order_shipping_method', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['order_shipping_method']."</td>" : '';
		in_array('ol_order_payment_method', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['order_payment_method']."</td>" : '';
		in_array('ol_order_status', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['order_status']."</td>" : '';
		in_array('ol_order_store', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['order_store']."</td>" : '';
		in_array('ol_order_currency', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['order_currency']."</td>" : '';
		if ($filter_report != 'abandoned_orders') {
		in_array('ol_order_quantity', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['order_products']."</td>" : '';
		} else {
		in_array('ol_order_quantity', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['order_products']."</td>" : '';
		}				
		if ($filter_report != 'abandoned_orders') {
		in_array('ol_order_sub_total', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['order_sub_total']."</td>" : '';
		} else {
		in_array('ol_order_sub_total', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['order_sub_total']."</td>" : '';
		}
		if ($filter_report != 'abandoned_orders') {
		in_array('ol_order_shipping', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['order_shipping']."</td>" : '';
		} else {
		in_array('ol_order_shipping', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['order_shipping']."</td>" : '';
		}
		if ($filter_report != 'abandoned_orders') {
		in_array('ol_order_tax', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['order_tax']."</td>" : '';
		} else {
		in_array('ol_order_tax', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['order_tax']."</td>" : '';
		}
		if ($filter_report == 'coupon') {
		if ($filter_report != 'abandoned_orders') {
		in_array('cr_coupon_amount', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['order_coupon']."</td>" : '';
		} else {
		in_array('cr_coupon_amount', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['order_coupon']."</td>" : '';
		}
		} elseif ($filter_report == 'voucher') {
		if ($filter_report != 'abandoned_orders') {
		in_array('vr_voucher_used_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['order_voucher']."</td>" : '';
		} else {
		in_array('vr_voucher_used_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['order_voucher']."</td>" : '';
		}
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('ol_order_value', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['order_value']."</td>" : '';
		} else {
		in_array('ol_order_value', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['order_value']."</td>" : '';
		}		
		if ($filter_report != 'abandoned_orders') {
		in_array('ol_order_sales', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='sales'>".$result['order_sales']."</td>" : '';		
		} else {
		in_array('ol_order_sales', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='sales' style='text-decoration:line-through;'>".$result['order_sales']."</td>" : '';		
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('ol_order_costs', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='cost'>-".$result['order_costs']."</td>" : '';
		} else {
		in_array('ol_order_costs', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='cost' style='text-decoration:line-through;'>-".$result['order_costs']."</td>" : '';
		}
		if ($filter_report != 'abandoned_orders') {
		in_array('ol_order_profit', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee;'>".$result['order_profit']."</td>" : '';
		} else {
		in_array('ol_order_profit', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee; text-decoration:line-through;'>".$result['order_profit']."</td>" : '';
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('ol_order_profit_prc', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee;'>".$result['order_profit_prc'] . '%'."</td>" : '';	
		} else {
		in_array('ol_order_profit_prc', $advsop_settings_ol_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee; text-decoration:line-through;'>".$result['order_profit_prc'] . '%'."</td>" : '';	
		}		
		$export_pdf_basic_details .="</tr>";					
		$export_pdf_basic_details .="</tbody></table>";
		$export_pdf_basic_details .="</div>";
		
		$export_pdf_basic_details .="<div style='page-break-inside:avoid'>";
		$export_pdf_basic_details .="<table class='list_detail'>";
		$export_pdf_basic_details .="<thead>";
		$export_pdf_basic_details .="<tr>";'';
		in_array('pl_prod_order_id', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_order_id')."</td>" : '';
		in_array('pl_prod_date_added', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_date_added')."</td>" : '';
		in_array('pl_prod_id', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_id')."</td>" : '';
		in_array('pl_prod_sku', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_sku')."</td>" : '';
		in_array('pl_prod_model', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_model')."</td>" : '';		
		in_array('pl_prod_name', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_name')."</td>" : '';
		in_array('pl_prod_option', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_option')."</td>" : '';
		in_array('pl_prod_attributes', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_attributes')."</td>" : '';		
		in_array('pl_prod_category', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_category')."</td>" : '';		
		in_array('pl_prod_manu', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_manu')."</td>" : '';
		in_array('pl_prod_supplier', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_prod_supplier')."</td>" : '';
		in_array('pl_prod_currency', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_currency')."</td>" : '';
		in_array('pl_prod_price', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_price')."</td>" : '';
		in_array('pl_prod_quantity', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_quantity')."</td>" : '';
		in_array('pl_prod_total_excl_vat', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_total_excl_vat')."</td>" : '';		
		in_array('pl_prod_tax', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_tax')."</td>" : '';		
		in_array('pl_prod_total_incl_vat', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_total_incl_vat')."</td>" : '';
		in_array('pl_prod_sales', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_sales')."</td>" : '';		
		in_array('pl_prod_costs', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_costs')."</td>" : '';
		in_array('pl_prod_profit', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_profit')."</td>" : '';
		in_array('pl_prod_profit_margin', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_profit_margin')."</td>" : '';
		in_array('pl_prod_profit_markup', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_profit_markup')."</td>" : '';
		$export_pdf_basic_details .="</tr>";
		$export_pdf_basic_details .="</thead><tbody>";
		$export_pdf_basic_details .="<tr>";
		in_array('pl_prod_order_id', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#fff2d0;'>".$result['product_ord_id']."</td>" : '';
		in_array('pl_prod_date_added', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_ord_date']."</td>" : '';
		in_array('pl_prod_id', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_pid']."</td>" : '';
		in_array('pl_prod_sku', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_sku']."</td>" : '';
		in_array('pl_prod_model', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_model']."</td>" : '';		
		in_array('pl_prod_name', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_name']."</td>" : '';
		in_array('pl_prod_option', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_option']."</td>" : '';
		in_array('pl_prod_attributes', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_attributes']."</td>" : '';	
		in_array('pl_prod_category', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_category']."</td>" : '';	
		in_array('pl_prod_manu', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_manu']."</td>" : '';	
		in_array('pl_prod_supplier', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['product_supplier']."</td>" : '';	
		in_array('pl_prod_currency', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['product_currency']."</td>" : '';
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_price', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['product_price']."</td>" : '';
		} else {
		in_array('pl_prod_price', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['product_price']."</td>" : '';
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_quantity', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['product_quantity']."</td>" : '';
		} else {
		in_array('pl_prod_quantity', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['product_quantity']."</td>" : '';
		}
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_total_excl_vat', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090;'>".$result['product_total_excl_vat']."</td>" : '';		
		} else {
		in_array('pl_prod_total_excl_vat', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='color:#090; text-decoration:line-through;'>".$result['product_total_excl_vat']."</td>" : '';		
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_tax', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['product_tax']."</td>" : '';
		} else {
		in_array('pl_prod_tax', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['product_tax']."</td>" : '';
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_total_incl_vat', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap'>".$result['product_total_incl_vat']."</td>" : '';		
		} else {
		in_array('pl_prod_total_incl_vat', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='text-decoration:line-through;'>".$result['product_total_incl_vat']."</td>" : '';		
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_sales', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='sales'>".$result['product_sales']."</td>" : '';
		} else {
		in_array('pl_prod_sales', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='sales' style='text-decoration:line-through;'>".$result['product_sales']."</td>" : '';
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_costs', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='cost'>-".$result['product_costs']."</td>" : '';
		} else {
		in_array('pl_prod_costs', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='cost' style='text-decoration:line-through;'>-".$result['product_costs']."</td>" : '';
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_profit', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee;'>".$result['product_profit']."</td>" : '';
		} else {
		in_array('pl_prod_profit', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee; text-decoration:line-through;'>".$result['product_profit']."</td>" : '';
		}		
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_profit_margin', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee;'>".$result['product_profit_margin'] . '%'."</td>" : '';	
		} else {
		in_array('pl_prod_profit_margin', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee; text-decoration:line-through;'>".$result['product_profit_margin'] . '%'."</td>" : '';	
		}	
		if ($filter_report != 'abandoned_orders') {
		in_array('pl_prod_profit_markup', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee;'>".$result['product_profit_markup'] . '%'."</td>" : '';	
		} else {
		in_array('pl_prod_profit_markup', $advsop_settings_pl_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' style='background-color:#c4d9ee; text-decoration:line-through;'>".$result['product_profit_markup'] . '%'."</td>" : '';	
		}		
		$export_pdf_basic_details .="</tr>";					
		$export_pdf_basic_details .="</tbody></table>";	
		$export_pdf_basic_details .="</div>";
		
		$export_pdf_basic_details .="<div style='margin-bottom: 10px; page-break-inside:avoid'>";
		$export_pdf_basic_details .="<table class='list_detail'>";
		$export_pdf_basic_details .="<thead>";
		$export_pdf_basic_details .="<tr>";
		in_array('cl_customer_order_id', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_customer_order_id')."</td>" : '';
		in_array('cl_customer_date_added', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_customer_date_added')."</td>" : '';	
		in_array('cl_customer_cust_id', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_customer_cust_id')."</td>" : '';
		in_array('cl_billing_name', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_billing_name')."</td>" : '';
		in_array('cl_billing_company', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_billing_company')."</td>" : '';
		in_array('cl_billing_address_1', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_billing_address_1')."</td>" : '';
		in_array('cl_billing_address_2', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_billing_address_2')."</td>" : '';
		in_array('cl_billing_city', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_billing_city')."</td>" : '';
		in_array('cl_billing_zone', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_billing_zone')."</td>" : '';
		in_array('cl_billing_postcode', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_billing_postcode')."</td>" : '';
		in_array('cl_billing_country', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_billing_country')."</td>" : '';
		in_array('cl_customer_telephone', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_customer_telephone')."</td>" : '';
		in_array('cl_shipping_name', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_shipping_name')."</td>" : '';
		in_array('cl_shipping_company', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_shipping_company')."</td>" : '';
		in_array('cl_shipping_address_1', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_shipping_address_1')."</td>" : '';
		in_array('cl_shipping_address_2', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_shipping_address_2')."</td>" : '';
		in_array('cl_shipping_city', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_shipping_city')."</td>" : '';
		in_array('cl_shipping_zone', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_shipping_zone')."</td>" : '';
		in_array('cl_shipping_postcode', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_shipping_postcode')."</td>" : '';
		in_array('cl_shipping_country', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left'>".$this->language->get('column_shipping_country')."</td>" : '';
		$export_pdf_basic_details .="</tr>";
		$export_pdf_basic_details .="</thead><tbody>";
		$export_pdf_basic_details .="<tr>";
		in_array('cl_customer_order_id', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap' style='background-color:#fff2d0;'>".$result['customer_ord_id']."</td>" : '';
		in_array('cl_customer_date_added', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['customer_ord_date']."</td>" : '';		
		in_array('cl_customer_cust_id', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['customer_cust_id']."</td>" : '';
		in_array('cl_billing_name', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['billing_name']."</td>" : '';
		in_array('cl_billing_company', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['billing_company']."</td>" : '';
		in_array('cl_billing_address_1', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['billing_address_1']."</td>" : '';
		in_array('cl_billing_address_2', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['billing_address_2']."</td>" : '';
		in_array('cl_billing_city', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['billing_city']."</td>" : '';
		in_array('cl_billing_zone', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['billing_zone']."</td>" : '';
		in_array('cl_billing_postcode', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['billing_postcode']."</td>" : '';
		in_array('cl_billing_country', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['billing_country']."</td>" : '';
		in_array('cl_customer_telephone', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['customer_telephone']."</td>" : '';
		in_array('cl_shipping_name', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['shipping_name']."</td>" : '';
		in_array('cl_shipping_company', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['shipping_company']."</td>" : '';
		in_array('cl_shipping_address_1', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['shipping_address_1']."</td>" : '';
		in_array('cl_shipping_address_2', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['shipping_address_2']."</td>" : '';
		in_array('cl_shipping_city', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['shipping_city']."</td>" : '';
		in_array('cl_shipping_zone', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['shipping_zone']."</td>" : '';
		in_array('cl_shipping_postcode', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['shipping_postcode']."</td>" : '';
		in_array('cl_shipping_country', $advsop_settings_cl_columns) ? $export_pdf_basic_details .= "<td align='left' nowrap='nowrap'>".$result['shipping_country']."</td>" : '';
		$export_pdf_basic_details .="</tr>";					
		$export_pdf_basic_details .="</tbody></table>";
		$export_pdf_basic_details .="</div>";		
	}
	if ($filter_report != 'currency') {
	$export_pdf_basic_details .="<div style='page-break-inside:avoid'>";
	$export_pdf_basic_details .="<table class='list_main'>";
	$export_pdf_basic_details .="<thead><tr>";
	$export_pdf_basic_details .="<td colspan='2'></td>";
	if ($filter_report == 'coupon') {
	in_array('cr_coupon_amount', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_coupon_amount')."</td>" : '';
	in_array('cr_coupon_orders', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_orders')."</td>" : '';
	in_array('cr_coupon_total', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total')."</td>" : '';
	} elseif ($filter_report == 'voucher') {
	in_array('vr_voucher_amount', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_voucher_amount')."</td>" : '';	
	in_array('vr_voucher_used_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_voucher_used_value')."</td>" : '';	
	in_array('vr_voucher_remaining_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_voucher_remaining_value')."</td>" : '';	
	in_array('vr_voucher_orders', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_orders')."</td>" : '';
	in_array('vr_voucher_total', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total')."</td>" : '';
	} else {	
	in_array('mv_orders', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_orders')."</td>" : '';
	in_array('mv_customers', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_customers')."</td>" : '';
	in_array('mv_products', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_products')."</td>" : '';
	in_array('mv_sub_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_sub_total')."</td>" : '';
	in_array('mv_handling', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_handling')."</td>" : '';
	in_array('mv_loworder', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:65px;'>".$this->language->get('column_loworder')."</td>" : '';
	in_array('mv_shipping', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_shipping')."</td>" : '';	
	in_array('mv_reward', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_reward')."</td>" : '';
	in_array('mv_earned_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:85px;'>".$this->language->get('column_earned_reward_points')."</td>" : '';
	in_array('mv_used_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:75px;'>".$this->language->get('column_used_reward_points')."</td>" : '';
	in_array('mv_coupon', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_coupon')."</td>" : '';
	in_array('mv_tax', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_taxes')."</td>" : '';
	in_array('mv_credit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_credit')."</td>" : '';
	in_array('mv_voucher', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_voucher')."</td>" : '';
	in_array('mv_discount', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:60px;'>".$this->language->get('column_discount')."</td>" : '';
	in_array('mv_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total')."</td>" : '';
	in_array('mv_aov', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:65px;'>".$this->language->get('column_aov')."</td>" : '';
	in_array('mv_refunds', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_refunds')."</td>" : '';	
	in_array('mv_total_sales', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total_sales')."</td>" : '';
	in_array('mv_product_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_prod_cost')."</td>" : '';
	in_array('mv_commission', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_commission')."</td>" : '';
	in_array('mv_payment_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_payment_cost')."</td>" : '';
	in_array('mv_shipping_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_shipping_cost')."</td>" : '';
	in_array('mv_extra_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_extra_cost')."</td>" : '';
	in_array('mv_return_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_return_cost')."</td>" : '';
	in_array('mv_shipping_balance', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_shipping_balance')."</td>" : '';
	in_array('mv_total_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total_costs')."</td>" : '';
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right'>".$this->language->get('column_total_profit')."</td>" : '';
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' style='width:70px;'>".$this->language->get('column_total_profit_prc')."</td>" : '';
	}
	$export_pdf_basic_details .="</tr></thead>";
	$export_pdf_basic_details .="<tbody><tr>";	
	$export_pdf_basic_details .= "<td colspan='2' align='right' style='background-color:#E5E5E5; font-weight:bold;'>".$this->language->get('text_filter_total')."</td>";
	if ($filter_report == 'coupon') {
	in_array('cr_coupon_amount', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['coupon_amount_total']."</td>" : '';
	in_array('cr_coupon_orders', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['coupon_orders_total']."</td>" : '';
	in_array('cr_coupon_total', $advsop_settings_cr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['coupon_total_total']."</td>" : '';
	} elseif ($filter_report == 'voucher') {
	in_array('vr_voucher_amount', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['voucher_amount_total']."</td>" : '';	
	in_array('vr_voucher_used_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['voucher_used_value_total']."</td>" : '';	
	in_array('vr_voucher_remaining_value', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['voucher_remaining_value_total']."</td>" : '';	
	in_array('vr_voucher_orders', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['voucher_orders_total']."</td>" : '';
	in_array('vr_voucher_total', $advsop_settings_vr_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['voucher_total_total']."</td>" : '';
	} else {	
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_orders', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['orders_total']."</td>" : '';
	} else {
	in_array('mv_orders', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['orders_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_customers', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['customers_total']."</td>" : '';
	} else {
	in_array('mv_customers', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['customers_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_products', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['products_total']."</td>" : '';
	} else {
	in_array('mv_products', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['products_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_sub_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['sub_total_total']."</td>" : '';
	} else {
	in_array('mv_sub_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['sub_total_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_handling', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['handling_total']."</td>" : '';
	} else {
	in_array('mv_handling', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['handling_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_loworder', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['low_order_fee_total']."</td>" : '';
	} else {
	in_array('mv_loworder', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['low_order_fee_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_shipping', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['shipping_total']."</td>" : '';
	} else {
	in_array('mv_shipping', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['shipping_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_reward', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['reward_total']."</td>" : '';
	} else {
	in_array('mv_reward', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['reward_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_earned_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['earned_reward_points_total']."</td>" : '';
	} else {
	in_array('mv_earned_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['earned_reward_points_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_used_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['used_reward_points_total']."</td>" : '';
	} else {
	in_array('mv_used_points', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['used_reward_points_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_coupon', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['coupon_total']."</td>" : '';
	} else {
	in_array('mv_coupon', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['coupon_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_tax', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['taxes_total']."</td>" : '';
	} else {
	in_array('mv_tax', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['taxes_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_credit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['credit_total']."</td>" : '';
	} else {
	in_array('mv_credit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['credit_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_voucher', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['voucher_total']."</td>" : '';
	} else {
	in_array('mv_voucher', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['voucher_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_discount', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['discount_total']."</td>" : '';
	} else {
	in_array('mv_discount', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['discount_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['total_total']."</td>" : '';
	} else {
	in_array('mv_total', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['total_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_aov', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['aov_total']."</td>" : '';
	} else {
	in_array('mv_aov', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['aov_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_refunds', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['refunds_total']."</td>" : '';
	} else {
	in_array('mv_refunds', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['refunds_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total_sales', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_sales'>".$result['total_sales_total']."</td>" : '';
	} else {
	in_array('mv_total_sales', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_sales' style='text-decoration:line-through;'>".$result['total_sales_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_product_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['prod_costs_total']."</td>" : '';
	} else {
	in_array('mv_product_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['prod_costs_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_commission', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['commission_total']."</td>" : '';
	} else {
	in_array('mv_commission', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['commission_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_payment_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['pay_costs_total']."</td>" : '';
	} else {
	in_array('mv_payment_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['pay_costs_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_shipping_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['ship_costs_total']."</td>" : '';
	} else {
	in_array('mv_shipping_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['ship_costs_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_extra_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['extra_costs_total']."</td>" : '';
	} else {
	in_array('mv_extra_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['extra_costs_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_return_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['return_costs_total']."</td>" : '';
	} else {
	in_array('mv_return_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['return_costs_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_shipping_balance', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total'>".$result['ship_balance_total']."</td>" : '';
	} else {
	in_array('mv_shipping_balance', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total' style='text-decoration:line-through;'>".$result['ship_balance_total']."</td>" : '';
	}
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_cost'>".$result['total_costs_total']."</td>" : '';
	} else {
	in_array('mv_total_costs', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_cost' style='text-decoration:line-through;'>".$result['total_costs_total']."</td>" : '';
	}
	if ($result['total_profit_total_raw'] >= 0) {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_plusprofit'>".$result['total_profit_total']."</td>" : '';
	} else {
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_plusprofit' style='text-decoration:line-through;'>".$result['total_profit_total']."</td>" : '';
	}	
	} else {
	if ($filter_report != 'abandoned_orders') {
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_minusprofit'>".$result['total_profit_total']."</td>" : '';
	} else {
	in_array('mv_total_profit', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_minusprofit' style='text-decoration:line-through;'>".$result['total_profit_total']."</td>" : '';
	}	
	}
	if ($result['total_sales_total_raw'] > 0) {
	if ($filter_report != 'abandoned_orders') {
	if ($result['total_profit_total_raw'] >= 0) {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_plusprofit'>".$result['total_profit_total_prc']."</td>" : '';
	} else {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_minusprofit'>".$result['total_profit_total_prc']."</td>" : '';
	}
	} else {
	if ($result['total_profit_total_raw'] >= 0) {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_plusprofit' style='text-decoration:line-through;'>".$result['total_profit_total_prc']."</td>" : '';
	} else {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_minusprofit' style='text-decoration:line-through;'>".$result['total_profit_total_prc']."</td>" : '';
	}
	}
	} else {
	in_array('mv_total_profit_prc', $advsop_settings_mv_columns) ? $export_pdf_basic_details .= "<td align='right' nowrap='nowrap' class='total_plusprofit'>".'0%'."</td>" : '';
	}
	}
	$export_pdf_basic_details .="</tr></tbody></table>";
	$export_pdf_basic_details .="</div>";
	}
	$export_pdf_basic_details .="</body></html>";

	if (!isset($_GET['cron'])) {
		$dompdf_pdf_basic_details = $export_pdf_basic_details; 
		$dompdf = new \Dompdf\Dompdf();
		$dompdf->load_html($dompdf_pdf_basic_details);
		$dompdf->set_paper("a3", "landscape");
		$dompdf->set_option('isRemoteEnabled', TRUE);
		$dompdf->render();
		$dompdf->stream("sales_profit_report_basic_details_".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d_H-i-s" : "Y-m-d_h-i-s-A").".pdf");		
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
		
		$filename = $file_name."_".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d_H-i-s" : "Y-m-d_h-i-s-A").".pdf";
		$file_to_download = $server . $file_save_path . '/' . $file_name."_".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d_H-i-s" : "Y-m-d_h-i-s-A").".pdf";
		$file = $file_path . '/' . $file_name."_".date($this->config->get('advsop' . $user_id . '_hour_format') == '24' ? "Y-m-d_H-i-s" : "Y-m-d_h-i-s-A").".pdf";	

		ini_set('mbstring.substitute_character', "none"); 
		$dompdf_pdf_basic_details = $export_pdf_basic_details; 
		$dompdf = new \Dompdf\Dompdf();
		$dompdf->load_html($dompdf_pdf_basic_details);
		$dompdf->set_paper("a3", "landscape");
		$dompdf->set_option('isRemoteEnabled', TRUE);
		$dompdf->render();
		$pdf = $dompdf->output();
		file_put_contents($file, $pdf);	
		
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