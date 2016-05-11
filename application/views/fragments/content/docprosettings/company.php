<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Company</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='company-table-row'>
					<table id='company-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Sequence</th>
							<th>Name</th>
							<th>Address</th>
							<th>TIN</th>
							<th>Tax Type</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div id='add-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'>Add</h4>
			</div>
			<form action='#' method='post'>
				<div class='modal-body'>
					<table>
						<tr>
							<td><label>Sequence</label></td>
							<td><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td><label>Name</label></td>
							<td><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td><label>Address</label></td>
							<td><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td><label>TIN</label></td>
							<td><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td><label>Type</label></td>
							<td>
								<select class='form-control'>
									<option value='IT'>Income Tax</option>
									<option value='VAT'>Value Added Tax</option>
									<option value='PT'>Percentage Tax</option>
									<option value=''>Excise Tax</option>
									<option>Expanded Withholding Tax</option>
									<option>Final Withholding Tax</option>
									<option>Special Tax</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			</form>
		</div>
	</div>
</div>

<div id='edit-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'>Edit</h4>
			</div>
			<form action='#' method='post'>
				<div class='modal-body'>
				
				</div>
			</form>
		</div>
	</div>
</div>

<div id='update-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'>Update</h4>
			</div>
			<form action='#' method='post'>
				<div class='modal-body'>
				
				</div>
			</form>
		</div>
	</div>
</div>