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
								<h3>Add Quiz Question and Awnser</h3>
							</div>
							<div class="module-body">

									

									

									<form class="form-horizontal row-fluid" method="POST" action="{{ URL::asset('add_quiz_qa') }}" enctype="multipart/form-data">
									
									
										{{ csrf_field() }}
										
										<table class="table">
										<tr><td>Quiz Name</td>
										<td>
										<select name="q_name" class="span8">
										<option value="">----Select---- </option>
										<?php 
										$query="select * from quiz_list";
										$stmt = $conn->query($query);
										while($row = $stmt->fetch())
										{
										    $id = $row['id'];
										    $q_name = $row['q_name'];
										    echo"<option value='$id'>$q_name</option>";
										}
										?>
										</select>
										</td>
										</tr>
										<tr>
										<td>Question</td>
										<td>
										<input type="text" name="question" class="span8">
										</td>
										</tr>
										<tr>
										<td>Option 1</td>
										<td><input type="text" name="option1" class="span8"></td>
										</tr>
										<tr>
										<td>Option 2</td>
										<td><input type="text" name="option2" class="span8"></td>
										</tr>
										<tr>
										<td>Option 3</td>
										<td><input type="text" name="option3" class="span8"></td>
										</tr>
										<tr>
										<td>Option 4</td>
										<td><input type="text" name="option4" class="span8"></td>
										</tr>
										<tr>
										<td>Actual Awnser</td>
										<td><input type="text" name="actual_awnser" class="span8">
										<br>
										Actual Awnser Should be any one of the above (Copy and Past it)
										
										</td>
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
				