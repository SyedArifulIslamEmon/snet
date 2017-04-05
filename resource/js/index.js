$(document).ready(function(){
				$("#street").click(function(){
					window.location = 'street';
    				return false;
				});
				$("#reg-button").click(function(){
					var currentId = $(this).attr('id');
				    window.location = 'register';
    				return false;	
				});
				$("#home, #name").click(function(){
				    window.location = 'user';
				    return false;
				});
				$(".del").click(function(){
					var delid=$(this).attr('id');
					$.ajax({
		            type: "POST",
		            url:  "delpost",
		            data: "pid="+delid,
		            success: function(data) {
		            	var tmp=".p"+delid;
		                $(tmp).fadeOut(1000);
		            }
		        });        
				});
				$("#rpasss").change(function(){
			    if($(this).val() != $("#rpass").val()){
			          $("#match").removeClass("showOK", 500, "swing");
			          $("#match").addClass("showCE", 500, "swing");
			    }
			    else{
			    	$("#match").removeClass("showCE", 500, "swing");
			    	$("#match").addClass("showOK", 500, "swing");
			    }
			});
			$("#remail").change(function(){
				if(!validateEmail($(this).val())){
					$("#emmatch").removeClass("showOK", 500, "swing");
			        $("#emmatch").addClass("showCE", 500, "swing");	 
				}
				else{
			    	$("#emmatch").removeClass("showCE", 500, "swing");
			    	$("#emmatch").addClass("showOK", 500, "swing");
			    }
			});
			$('#sidebar .trigger').on('click',function(){
			  $(this).parent().toggleClass('show');
			});
			//$('#container .inset').html('');
			$('#about').on('click',function(){
				//$('.inset').load('about');
					window.location = 'about';
			});
			$('#msg').on('click',function(){
				$('.inset').load('msg');
			});
			$('#sett').on('click',function(){
				$('.inset').load('sett');
			});
			$('.liker').on('click',function(){
					arr = $(this).attr('class').split( " " );
					var val=$(this).html();
				  		$.ajax({    
				  			type: "POST",
							url:  "liker",
							data: "pid="+arr[2]+"&user="+arr[3]+"&value="+val,
							success: function(data){
								//document.write("pid="+arr[2]+"&user="+arr[3]+"&value="+val);
								//$('.inset').html(data).fadeIn(1000);
								$(".p"+arr[2]).fadeOut(300);
								$(".p"+arr[2]).fadeIn(200);
						}});
			});
			var sea=0;
			$('#search').on('click',function(){
				if(sea==0){$('#searchbox').fadeIn(1000);sea=1;}
				else{$('#searchbox').fadeOut(1000);sea=0;}
			});
			$('#seasub').on('click',function(){
				var s=$('#sea').val();
				$.ajax({
		            type: 'POST',
		            url:  'search',
		            async: false,
		            data: "sea="+s,
		            dataType: "html",
		            success: function(data) {
		                $('.inset').html(data).fadeIn(1000);
		            }
		        });
			});
		    $('#logout').click(function() {
		        $.ajax({
		            type: 'POST',
		            url:  'logout',
		            async: false,
		            data: "id: 1",
		            success: function() {
		                self.location='home';
		            }
		        });        
		    });
		    var request;
		    $('#postsub').click(function() {
		        if(request) {request.abort();}
    			var $form = $('#subpost');
		        var $inputs = $form.find("input, select, button, textarea");
    			var values = $('#subpost').serialize();
    			
			    $.ajax({
			        url: 'post',
			        type: 'post',
			        async: false,
			        data: values,
			        success: function(){
			            //alert("success");
			            $(this).fadeIn('2000');
			        },
			        error:function(){
			            //alert("failure");
			            //$("#newpost").html('There is error while submit');
			        }
			    });
			
			    event.preventDefault();        
		    });
});
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if( !emailReg.test( $email ) ) {
    return false;
  } else {
    return true;
  }
}
function chooseFile(){
	$("#filein").click();
}