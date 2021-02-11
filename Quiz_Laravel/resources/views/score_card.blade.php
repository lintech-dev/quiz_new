@include('header_user')
<?php 
include 'conn.php';
$user_id = Auth::user()->id;
//echo"$user_id";
?>

 @if(Session:: has('message'))
  <div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
       <strong> {{ Session::get('message') }} </strong>
        @yield('content')
    </div>
@endif

<div class="span6" style="margin-left: 300px;">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Quiz Score</h3>
							</div>
							<div class="module-body">

									

									

									<form class="form-horizontal row-fluid" method="POST" action="{{ URL::asset('add_quiz_new_user') }}" enctype="multipart/form-data">
									
									
										{{ csrf_field() }}
									
									<table class="table">
									
									<?php 
									
									$query2 = "select * from users where id = '$user_id'";
									$stmt2 = $conn->query($query2);
									while($row2 = $stmt2->fetch())
									{
									    $name = $row2['name'];
									    $email = $row2['email'];
									}
									
									$sql = "SELECT count(*) FROM user_ans where roll_no='$user_id' AND actual_aws = user_aws";
									$result = $conn->prepare($sql);
									$result->execute();
									$number_of_rows = $result->fetchColumn(); 
									
									echo"<tr><td colspan='2'>ID:&nbsp;&nbsp;&nbsp;&nbsp;$user_id</td></tr>";
									echo"<tr><td colspan='2'>Name:&nbsp;&nbsp;&nbsp;&nbsp;$name</td></tr>";
									echo"<tr><td colspan='2'>Email-ID:&nbsp;&nbsp;&nbsp;&nbsp;$email</td></tr>";
									echo"<tr><td colspan='2'>Score:&nbsp;&nbsp;&nbsp;&nbsp;$number_of_rows</td></tr>";
									//echo"<tr><td colspan='2'>Question:&nbsp;&nbsp;&nbsp;&nbsp;$question</td></tr>";
									//echo"<tr><td colspan='2'>Question:&nbsp;&nbsp;&nbsp;&nbsp;$question</td></tr>";
									
									
									
									
									?>
									
									
									</table>

<br>
										<div class="control-group" style="margin-left: 70px;">
											<div class="controls">
												<a class="btn btn-large btn-primary">Print</a>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
				
				
				@include('footer')
				