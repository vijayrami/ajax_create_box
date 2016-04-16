<?php

include_once("header.php");
?>
  <body>

    <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
            <div class="search-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title text-center">Load No. Of Text Box</h3>  
                </div>  
                <div class="panel-body">  
                    
                        <fieldset>  
							
                                                      
							<div class="form-group"> 
                            	<label for="addtexboxes11">Enter No. Of Text Boxes to load</label> 
                                <input type="number" placeholder="Enter Number" id="addtextboxes" name="addtextboxes" value="" class="form-control" tabindex="2" required autofocus>  
                            </div> 
                            <input class="btn btn-lg btn-success textbox" type="submit" value="Load" name="addtextbtn" >  
                            <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:92%;padding:2px;"><img src='lib/img/default.gif' width="64" height="64" /><br>Loading..</div>
  							<div id="SomeDiv">
  								
  							</div>
                        </fieldset>  
                   
                    
                </div>  
            </div>  
        </div>  
    </div>  
	</div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="lib/js/bootstrap.min.js"></script>
    <script>
	$(function() {
	$(".btn.btn-success.textbox").click(function(){
	
	var textboxes = $("#addtextboxes").val();
	
	var info = 'boxes=' + textboxes;
	
	 $.ajax({
	   type: "POST",
	   url: "displayboxes.php",
	   data: info,
	   success: function(response){
	   	$("#SomeDiv").html(response);   
	 }
	});
       
	});
	});
	
    </script>
    <script>
	$(document).ready(function(){
		function createCallback( i ){
  			return function(){
  			var text = $('#uploadAjaxBox_' + i +' #alphnume_text').val();
  			var Exp = /^[A-Za-z0-9]+$/;
  			if(text.match(Exp)){
  				$("#uploadAjaxBox_"+i+" .text-success").show();
  				setTimeout(function() {
        		$("#uploadAjaxBox_"+i+" .text-success").hide();
    			}, 1000);
    			/*$("#uploadAjaxBox_"+i+" .text-success").hide( 5500, function() {
    				$("#uploadAjaxBox_"+i+" .text-success").hide();
  				});*/
  			} else {
  				$("#uploadAjaxBox_"+i+" .text-danger").show();
  				setTimeout(function() {
        		$("#uploadAjaxBox_"+i+" .text-danger").hide();
    			}, 1000);
    			/*$("#uploadAjaxBox_"+i+" .text-danger").hide( 5500, function() {
    				$("#uploadAjaxBox_"+i+" .text-danger").hide();
  				});*/
  			}
  		}
	}
	
    $(document).ajaxStart(function(){
        $("#wait").css("display", "block");
    });
    $(document).ajaxComplete(function(){
        $("#wait").css("display", "none");
        var n = $( "#SomeDiv form" ).length;
        for(var i = 0; i < n; i++) {
    		$('#btn_' + i).click( createCallback( i ) );
  		}
    });
	});
</script>
  </body>
</html>
