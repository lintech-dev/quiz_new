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

<div class="span9" style="margin-left: 130px;">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Quiz</h3>
							</div>
							<div class="module-body">

									

									

									<form class="form-horizontal row-fluid" method="POST" action="{{ URL::asset('add_quiz_new_user') }}" enctype="multipart/form-data">
									
									
										{{ csrf_field() }}
									
									<input type="hidden" name="roll_no" value="<?php echo"$user_id";?>">
									<table class="table">
									
									<?php 
									$query2 = "select * from user_ans where roll_no = '$user_id'";
									$stmt2 = $conn->query($query2);
									while($row2 = $stmt2->fetch())
									{
									    $qno2 = $row2['question_no'];
									}
									
									$qnumber = 1+$qno2;
									//echo"$qnumber";
									
									$sql = "SELECT count(*) FROM quiz_q_a";
									$result = $conn->prepare($sql);
									$result->execute();
									$number_of_rows = $result->fetchColumn(); 
									
									//echo"nro:$number_of_rows";
									if($qnumber <= $number_of_rows)
									{
									    //echo"hello $number_of_rows , $qnumber";
									$query = "select * from quiz_q_a where id = '$qnumber'";
									$stmt = $conn->query($query);
									while($row = $stmt->fetch())
									{
									    $question_id = $row['id'];
									    $question = $row['question'];
									    $option1 = $row['option1'];
									    $option2 = $row['option2'];
									    $option3 = $row['option3'];
									    $option4 = $row['option4'];
									    $actual_awnser = $row['actual_awnser'];
									    
									    echo"<input type='hidden' name='question_no' value='$question_id'>";
									    echo"<input type='hidden' name='question_title' value='$question'>";
									    echo"<input type='hidden' name='actual_aws' value='$actual_awnser'>";
									    
									    echo"<tr><td colspan='2'>Question:&nbsp;&nbsp;&nbsp;&nbsp;$question</td></tr>";
									    echo"<tr><td style='width: 500px;'>$option1</td><td><input type='radio' name='user_answer1' value='$option1' required></td></tr>";
									    echo"<tr><td>$option2</td><td><input type='radio' name='user_answer1' value='$option2' required></td></tr>";
									    echo"<tr><td>$option3</td><td><input type='radio' name='user_answer1' value='$option3' required></td></tr>";
									    echo"<tr><td>$option4</td><td><input type='radio' name='user_answer1' value='$option4' required></td></tr>";
									    
									}
									}
									else
									{
									 ?>
									 <script>window.location = "{{ URL::asset('score_card') }}";</script>
									 <?php    
									}
									?>
									
									
									</table>

<br>
										<div class="control-group" style="margin-left: 200px;">
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
				