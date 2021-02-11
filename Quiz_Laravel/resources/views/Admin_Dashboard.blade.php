@include('header')
<?php 
include 'conn.php';
?>

 @if(Session:: has('message'))
  <div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
       <strong> {{ Session::get('message') }} </strong>
        @yield('content')
    </div>
@endif

<div class="span12">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Add Quiz</h3>
							</div>
							<div class="module-body">

									

									

									<form class="form-horizontal row-fluid" method="POST" action="{{ URL::asset('add_quiz_new') }}" enctype="multipart/form-data">
									
									
										{{ csrf_field() }}
										
										<table class="table">
										<tr><td>Quiz Name</td>
										<td><input type="text" name="q_name" class="span8"></td>
										</tr>
										<tr>
										<td>Add Participant</td>
										<td>
										<select name="participants[]" class="span8" multiple>
										<option value="">----Select---- </option>
										<?php 
										$query="select * from users where role='User'";
										$stmt = $conn->query($query);
										while($row = $stmt->fetch())
										{
										    $id = $row['id'];
										    $name = $row['name'];
										    echo"<option value='$id'>$name</option>";
										}
										?>
										</select>
										</td>
										</tr>
										<tr>
										<td>Quiz Time</td>
										<td><input type="time" name="time" class="span8"></td>
										</tr>
										</table>

										<div class="control-group" style="margin-left: 300px;">
											<div class="controls">
												<button type="submit" class="btn btn-large btn-primary">Next</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
				
				
				@include('footer')
				