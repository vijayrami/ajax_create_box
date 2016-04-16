<?php

if($_POST['boxes'])
{
    $no_of_boxes = $_POST['boxes'];
   
    for ($i=0; $i < $no_of_boxes; $i++) { 
        echo '<br/><form id="uploadAjaxBox_'.$i.'" name="form'.$i.'" class="form-inline" action="" method="post">
			<div class="form-group">                            
				 <label class="sr-only">Enter text:</label>
				<input type="text" class="form-control" id="alphnume_text" name="alphnume_text" placeholder="Enter text">                          
			</div>
			<button type="button" id="btn_'.$i.'" class="btn btn-info btn-md">Validate</button>  
			<div class="form-group">                            
				 <p class="text-success" style="display:none;">Success.</p>                        
			</div>  
			<div class="form-group">                            
				 <p class="text-danger" style="display:none;">Please Enter Alphanumeric numbers only.</p>                        
			</div>   
			</form>';
    }
	
}
?>