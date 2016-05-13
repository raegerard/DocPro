				<div class="side-body padding-top" id='journal-navs' ng-app='journals'>
					<div id='animated-container' class='row' style='-webkit-animation-duration: 0.5s; margin-top: 20px;'>
						<div class='col-md-12'>
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
									<li role="presentation"><a href="#business-partners" aria-controls="business-partners" role="tab" data-toggle="tab">Business Partners</a></li>
									<li role="presentation"><a href="#new-transactions" aria-controls="new-transactions" role="tab" data-toggle="tab">New Transactions</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="summary">
										<div class='card'>
											<div class='card-body' style='padding-top: 10px;'>
												<table id='specials-journal-summary-table' class='table table-hover table-bordered table-striped' cellspacing="0" style='min-width: 1400px;'>
													<thead>
														<th>Trans ID</th>
														<th>Trans Date</th>
														<th>Journal</th>
														<th>Journal ID</th>
														<th>Document</th>
														<th>Doc No</th>
														<th>Doc Date</th>
														<th>BP Name</th>
														<th>Particulars</th>
														<th>Payment Type</th>
														<th>Gross Ammount</th>
														<th>Net Ammount</th>
													</thead>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document Details</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Journal Entries</div>
												</div>
											</div>
											<div class='card-body'>
												<table id='specials-journal-entries-table' class='table table-hovered table-bordered table-striped' style='min-width: 1400px;'>
													<thead>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>Transaction</th>
														<th>Transaction ID</th>
														<th>Document</th>
														<th>Document Number</th>
														<th>Document Date</th>
														<th>Document Gross Ammount</th>
														<th>Document Net Ammount</th>
													</thead>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="business-partners">
										<div class='card'>
											<div class='card-body' style='padding-top: 10px;'>
												<table id='specials-bp-table' class='table table-hover table-bordered table-striped table-responsive' cellspacing="0" width="1200px">
													<thead>
														<th>BP Class</th>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>BP Address</th>
														<th>BP TIN</th>
														<th>Tax Code 1</th>
														<th>Tax Code 2</th>
														<th>Tax Code 3</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Transaction Details</div>
												</div>
											</div>
											<div class='card-body'>
												<table id='specials-transaction-details-table' class='table table-bordered table-hovered table-striped' width='1200px'>
													<thead>
														<th>Trans ID</th>
														<th>Trans Date</th>
														<th>Journal</th>
														<th>Journal ID</th>
														<th>Document</th>
														<th>Doc No</th>
														<th>Doc Date</th>
														<th>Particulars</th>
														<th>Payment Type</th>
														<th>Gross Ammount</th>
														<th>Net Ammount</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document Details</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Journal Entries</div>
												</div>
											</div>
											<div class='card-body'>
												<table id='specials-bp-journal-entries-table' class='table table-bordered table-hovered table-striped' width='1200px'>
													<thead>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>Transaction</th>
														<th>Transaction ID</th>
														<th>Document</th>
														<th>Document Number</th>
														<th>Document Date</th>
														<th>Document Gross Ammount</th>
														<th>Document Net Ammount</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
										
									</div>
									<div role="tabpanel" class="tab-pane" id="new-transactions">
										<div class='card'>
											<div class='card-body' style='padding-top: 25px;'>
												<div class='col-md-12' style='margin-left: 12%;'>
													<form class='form-inline' >	
														<div class='col-md-4' style='width: 22%'>
															<div class='form-group'>
																<label for='input-transaction-id'>Transaction ID</label>
																<input type='text' id='input-transaction-id' class='form-control' name='input-transaction-id' style='color: #000C98; text-align: center;' readonly />
															</div>
														</div>
														<div class='col-md-4' style='width: 24%'>
															<div class='form-group'>
																<label for='input-transaction-date'>Transaction Date</label>
																<input type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='color: #000C98; text-align: center;' readonly />
															</div>
														</div>
														<div class='col-md-4' style='width: 27%'>
															<div class='form-group'>
																<label for='input-transaction-date'>Journal Transaction ID</label>
																<input type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='color: #000C98; text-align: center;' readonly />
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
										<div class='card' style='margin-top: 5px; padding-bottom: 20px;'>
											<div class='card-header'>
												<div class='card-title' style='width: 100%; padding-bottom: 0; padding-top: 0;'>
													<div class='title'>
														<label style='font-weight: normal; padding-top: 8px;'>Document</label>
														<span style='float: right;'>
															<button class='btn btn-primary'>Cash</button>
															<button class='btn btn-success'>Charge</button>
														</span>
													</div>
												</div>
											</div>
											<div class='card-body' id='card-2-form' style='padding: 0; padding-top: 15px;'>
												<div class='col-md-12 transaction-input-row-gutter'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Document</label>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Name</label>
														<input class='form-control' type='text' value='Sales Journal' style='text-align: center; color: #000C98;' readonly />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Number</label>
														<input class='form-control' type='text' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Date</label>
														<input class='form-control' style='color: #000C98; text-align: center;' type='date' />
													</div>
												</div>
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 5px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Business Partner</label>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Name</label>
														<select class='form-control select2'>
															<option>Company 1</option>
															<option>Company 2</option>
															<option>Company 3</option>
														</select>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Address</label>
														<input class='form-control' type='text' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label style='width: 100%'>TIN</label>
														<input class='form-control' type='text' style='color: #000C98; text-align: center;' readonly />
													</div>
												</div>
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Particulars</label>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Particulars</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Period</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Remarks</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
												</div>
												
												
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Payment</label>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Type of Payment</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Terms</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Due Date</label>
														<input type='date' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
												</div>
												
												
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom'>
														<label></label>
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Mode of Payment</label>
														<select class='form-control select2'>
															<option>Bills</option>
															<option>Check</option>
															<option>Petty Cash Fund</option>
														</select>
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Amount Paid</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Check Number</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Bank</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Bank Account Number</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
												</div>
												
												
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Amounts</label>
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Gross Amount</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>VAT</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>TAX Withheld</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Deductions</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Net Amount</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
												</div>
												
												
												<div class='col-md-12' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Variance</label>
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Gross Amount</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>VAT</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>TAX Withheld</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Deductions</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Net Amount</label>
														<input type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
												</div>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px; background-color: #F0F0F0;'>
											<div class='card-header' style='background-color: #FFF; margin-bottom: 20px;'>
												<div class='card-title'>
													<div class='title'>Document Details</div>
												</div>
											</div>
											<div class='card-body' style='padding-top: 0; background-color: #F0F0F0; padding-bottom: 0;'>
												 <div class="box box-primary" style='margin-top: 20px; border-top: none'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Products/Services</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-product-services-btn></add-product-services-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Product Service Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Product Description</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Quantity</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit Price</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='product-services-table'>
																<tr>
																	<td>
																		<select class='form-control select2' name='product_services_code[]' style='text-align: center;'>
																			<option>P-123</option>
																			<option>P-111</option>
																			<option>P-001</option>
																		</select>
																	</td>
																	<td><input class='form-control' type='text' name='product_services_description[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='product_services_qty[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='product_services_unit[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='product_services_unit_price[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='product_services_gross_amount[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped' style='width: 69.3%; margin-left: 24.75%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																	<td><input class='form-control' type='text' name='total_qty' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_unit' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_unit_price' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_gross_amount[]' style='text-align: center;' readonly></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>VAT</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-vat-btn></add-vat-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>VAT</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Net VAT Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='vat-table'>
																<tr>
																	<td><input class='form-control' type='text' name='tax_code[]' style='text-align: center;' readonly /></td>
																	<td><input class='form-control' type='text' name='nature[]' style='text-align: center;' /></td>
																	<td><input class='form-control' type='text' name='rate[]' style='text-align: center;' readonly /></td>
																	<td><input class='form-control' type='text' name='vat[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='net_vat_amount[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='gross_amount[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped' style='width: 69.25%; margin-left: 24.79%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																	<td><input class='form-control' type='text' name='total_rate' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_vat' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_net_vat' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_gross_amount' style='text-align: center;' readonly></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Discounts</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-discounts-btn></add-discounts-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Deduction Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Deduction</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>SC ID</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='discounts-table'>
																<tr>
																	<td>
																		<select class='form-control select2' name='deduction_code[]' style='text-align: center;'>
																			<option>D001</option>
																			<option>D342</option>
																			<option>D657</option>
																		</select>
																	</td>
																	<td><input class='form-control' type='text' name='nature[]' style='text-align: center;' ></td>
																	<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_base[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_withheld[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
															<table class='table table-bordered table-hover table-striped' style='width: 43.7%; margin-left: 29.4%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 11%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																		<td><input class='form-control' type='text' name='total_rate' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_deduction' style='text-align: center;' readonly></td>
																	</tr>
																</tbody>
															</table>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Expanded Withholding Tax</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-expanded-tax-btn></add-expanded-tax-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='expanded-tax-table'>
																<tr>
																	<td><input class='form-control' type='text' name='tax_code[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='nature[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_base[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_withheld[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
															<table class='table table-bordered table-hover table-striped' style='width: 61.4%; margin-left: 31.6%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																		<td><input class='form-control' type='text' name='total_rate' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_tax_base' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_widthheld' style='text-align: center;' readonly></td>
																	</tr>
																</tbody>
															</table>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Final Withholding Tax</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-final-withholding-tax-btn></add-final-withholding-tax-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='final-withholding-tax-table'>
																<tr>
																	<td><input class='form-control' type='text' name='tax_code[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='nature[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_base[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_withheld[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
															<table class='table table-bordered table-hover table-striped' style='width: 61.4%; margin-left: 31.6%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																		<td><input class='form-control' type='text' name='total_rate' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_tax_base' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_tax_withheld' style='text-align: center;' readonly></td>
																	</tr>
																</tbody>
															</table>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Document Reference</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-document-reference-btn></add-document-reference-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Number</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Date</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Gross Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Net Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='document-reference-table'>
																<tr>
																	<td><input class='form-control' type='text' name='code[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='number[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='date[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='gross_amount[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='net_amount[]' style='text-align: center;' readonly ></td>
																	<td></td>
																</tr>
															</tbody>
															<table class='table table-bordered table-hover table-striped' style='width: 100%;margin-top: 0; border: none;'>
																<tbody id='document-reference-table'>
																	<tr>
																		<td style='width: 18.1%; border: none; background-color: transparent'></td>
																		<td style='width: 18.2%; border: none; background-color: transparent'></td>
																		<td style='width: 18.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																		<td style='width: 20.2%'><input class='form-control' type='text' name='gross_amount[]' style='text-align: center;' readonly ></td>
																		<td><input class='form-control' type='text' name='net_amount[]' style='text-align: center;' readonly ></td>
																		<td style='width: 82px; border: none; background-color: transparent;'></td>
																	</tr>
																</tbody>
															</table>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Bank Details</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-bank-details-btn></add-bank-details-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Name</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Account Number</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Document</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Date</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='bank-details-table'>
																<tr>
																	<td><input class='form-control' type='text' name='code[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='name[]' style='text-align: center;' readonly ></td>
																	<td>
																		<select class='form-control select2' name='account_number[]' style='text-align: center;'>
																			<option>Acc-001</option>
																			<option>Acc-111</option>
																			<option>Acc-222</option>
																		</select>
																	</td>
																	<td>
																		<select class='form-control select2' type='text' name='document[]' style='text-align: center;'>
																			<option>Doc-001</option>
																			<option>Doc-111</option>
																			<option>Doc-222</option>
																		</select>
																	</td>
																	<td><input class='form-control' type='text' name='amount[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='date[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped' style='width: 20.5%; margin-left: 56.99%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																	<td><input class='form-control' type='text' name='total_bank_amount' style='text-align: center;' readonly></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Other Details</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered table-striped'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Prepared By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Verified By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Approved By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Received By</th>
															</thead>
															<tbody id='other-details-table'>
																<tr>
																	<td><input class='form-control' type='text' name='prepared_by[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='verified_by[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='approved_by[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='received_by[]' style='text-align: center;' readonly ></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												
											</div>
										</div>
							
										<div class='card'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Journal Entries</div>
												</div>
											</div>
											<div class='card-body'>
												<table class='table table-hover table-bordered table-strip'>
													<thead>
														<th>JE Number</th>
														<th>Transaction Code</th>
														<th>JE Sequence Number</th>
														<th>Account Code</th>
														<th>Account Name</th>
														<th>Debit(Credit)</th>
														<th>Debit Amount</th>
														<th>Credit Amount</th>
														<th>Profit Center Code</th>
														<th>Department Code Name</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
									</div>
									