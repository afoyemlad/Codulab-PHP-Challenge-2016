<?php 	
/* Function for HTML, PHP Challenge - Codeclass
	Developed By Afowowe Adeyemi J.
	Ekiti State University, Ado- EKiti
	afoyemlad@gmail.com
	Codeclass
*/
		//handling error
		error_reporting(0);
		//including all css & header file
		require_once('include/header.php');
		// creating an array called $months
		$months = array(
						'JANUARY'	=> 31,
						'FEBUARY' 	=> 28,
						'MARCH' 	=> 31,
						'APRIL' 	=> 30,
						'MAY' 		=> 31,
						'JUNE' 		=> 30,
						'JULY'		=> 31,		
						'AUGUST' 	=> 31,	
						'SEPTEMBER' => 30,
						'OCTOBER' 	=> 31,
						'NOVEMBER' 	=> 30,
						'DECEMBER' 	=> 31
						);
						
		$Submit = $_POST['submit'];	
		
		// creating a function to fetch the month into option in the select field 
		function createOption($Array_name)
		{	//looping through the array of months - foreach loop
			foreach ($Array_name as $month => $number) 
			{
				echo '<option>'.$month.'</option>';
			}
		}
		
		// creationg a function to fetch the number of days in the month
		function getNumber($Array_name,$Month_name)
		{	
			//handling febuary exception
			if ($Month_name == 'FEBUARY') {
				$msg = 'The month of '.strtolower($Month_name).' has 28 days or 29 days in the leap year';
				return $msg;
				} else {
					//returning the message if not febuary
				$msg = 'The month of '.strtolower($Month_name).' has '.$Array_name[$Month_name].' days';
				return $msg;
			}
			
		}
		
		//handling the post method in the form to validate the month
		if (isset($Submit))
		{				
				$Month_name = $_POST['month'];
				$msg =	getNumber($months,$Month_name);
		} else {
				$Submit = null;
		}
		
?>		
<!-- The html -->
<div class="container-fluid">
	 <div class="row">
	     <div class="col-sm-offset-4 col-sm-4">
	        <div class="panel panel-default">
	          <div class="panel-heading">
	            <h2><span style='background-color:black'><img src='include/logo.png'/></span> PHP Challenge</h2>
	          </div>
			 </div>
	          <div align="center" style="font-size:10px; font-weight:bold; font-family:verdana; " >
			  	<?php echo $msg; // printing out the result ?>
			</div>
			    <!-- form for to select month -->
	           		 <form   action="" method="POST" >
						<div class="form-group">
							<label for="input-password"><h4>Please select a month</h4></label>
								<div class="input-group"><span class="input-group-addon glyphicon glyphicon-lock"><i class="fa fa-lock"></i></span>								
									<select name='month' required='yes' class="form-control" >
										<option></option>
										<?php createOption($months) //creating the option for the months ?>
									</select>
								</div>					  
								<div class="text-right">
									<i class="fa fa-key">  &nbsp<input type="submit" value="Submit" name="submit" class="btn btn-primary" style='background-color:black'></i>
								</div> <i ><strong>CodeClass &copy 2016 - Afowowe Adeyemi J.</strong></i>                    
	         		 </form> 
			</div>
</div>