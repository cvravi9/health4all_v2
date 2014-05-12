<div class="row col-md-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Create User</h4>
		</div>
		<div class="panel-body">
			<p class="lead">Personal Details</p>
			<?php echo form_open('user_panel/create_user',array('role'=>'form','class'=>'form-horizontal')); ?>
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="first_name" class="control-label">First Name</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name" required />
						</div>
					</div>

					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="last_name" class="control-label">Last Name</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name" />
						</div>
					</div>
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label class="control-label">Gender</label>
						</div>
						<div class="col-md-6">
							<label class="control-label">
								<input type="radio" name="gender" value="1" checked />Male
							</label>
							<label class="control-label">
								<input type="radio" name="gender" value="1" />Female
							</label>
							<label class="control-label">
								<input type="radio" name="gender" value="1" />Other
							</label>
						</div>
					</div>	
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="date_of_birth" class="control-label">Date of Birth</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control date" placeholder="Date of Birth" id="date_of_birth" name="date_of_birth" />
						</div>
					</div>

					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="department" class="control-label">Department</label>
						</div>
						<div class="col-md-6">
							<select class="form-control" id="department" name="department" >
								<option value="">Department</option>
								<?php foreach($department as $d){
								echo "<option value='$d->department_id'>$d->department</option>";
								}?>
							</select>
						</div>
					</div>
					
					<div class="form-group col-md-12">
						<div class="col-md-3">	
							<label for="unit" class="control-label">Unit</label>
						</div>
						<div class="col-md-6">
							<select class="form-control" id="unit" name="unit">
								<option value="">Unit</option>
								<?php foreach($unit as $u){
									echo "<option value='$u->unit_id' class='$u->department_id'>$u->unit_name</option>";
								}?>
							</select>
						</div>			
					</div>
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="area" class="control-label">Area</label>
						</div>
						<div class="col-md-6">
							<select class="form-control" id="area" name="area">
								<option value="">Area</option>
								<?php foreach($area as $a){
									echo "<option value='$a->area_id' class='$a->department_id'>$a->area_name</option>";
								}?>
							</select>
						</div>	
					</div>
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="staff_role" class="control-label">Staff Role</label>
						</div>
						<div class="col-md-6">
							<select class="form-control" id="staff_role" name="staff_role" >
								<option value="">Staff Role</option>
								<?php foreach($staff_role as $sr){
								echo "<option value='$sr->staff_role_id'>$sr->staff_role</option>";
								}?>
							</select>
						</div>
					</div>
					
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="staff_category" class="control-label">Staff Category</label>
						</div>
						<div class="col-md-6">
							<select class="form-control" id="staff_category" name="staff_category" >
								<option value="">Staff Category</option>
								<?php foreach($staff_category as $sc){
								echo "<option value='$sc->staff_category_id'>$sc->staff_category</option>";
								}?>
							</select>
						</div>
					</div>

					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="designation" class="control-label">Designation</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Designation" id="designation" name="designation" />
						</div>
					</div>
					
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="staff_type" class="control-label">Staff Type</label>
						</div>
						<div class="col-md-6">
							<select class="form-control" id="staff_type" name="staff_type">
								<option value="">Staff Type</option>
								<option value="On Rolls">On Rolls</option>
								<option value="Contract">Contract</option>
							</select>
						</div>
					</div>
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="email" class="control-label">Email</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Email" id="email" name="email" />
						</div>
					</div>

					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="phone" class="control-label">Phone</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Phone" id="phone" name="phone" />
						</div>
					</div>

					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="specialisation" class="control-label">Specialisation</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Specialisation" id="specialisation" name="specialisation" />
						</div>
					</div>		
					
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="research_area" class="control-label">Research Areas</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Research Areas" id="research_area" name="research_area" />
						</div>
					</div>		
					
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="research" class="control-label">Research</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Research" id="research" name="research" />
						</div>
					</div>		
				<p class="lead">Login details</p>	
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="research" class="control-label">Username</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Username" id="username" name="username" />
						</div>
					</div>	
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="research" class="control-label">Password</label>
						</div>
						<div class="col-md-6">
							<input type="password" class="form-control" placeholder="Password" id="password" name="password" />
						</div>
					</div>	
					<div class="form-group col-md-12 col-md-9">
						<button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Submit</button>
					</div>

			</form>
		</div>
	</div>	
</div>