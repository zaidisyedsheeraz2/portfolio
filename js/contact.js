/*Validation function for the contact form */
function sub_fun()
   {
    var a=$('#fullName').val();
    var b=$('#email').val();
    var c=$('#contactNo').val();
    var d=$('#message').val();
    //alert(a);
    var status=true;
    	if(a=="" || a==null)
    	{
    		$("#err1").html("Name is Required").addClass("a");
    		
    		status=false;
    	}
    	if(b=="" || b==null)
    	{
    		$("#err2").html("Email is Required").addClass("a");
			
			status=false;
		}
    	if(c=="" || c==null)
    	{
    		$("#err3").html("Phone is Required").addClass("a");
			status=false;
		   	}
    	if(d=="" || d==null)
    	{
			$("#err4").html("Msg is Required").addClass("a");
			status=false;
    }
    if(status==true){
    	$.ajax({
    		url:"config.php",
    		data:{fullName:a,email:b,contactNo:c,message:d},
    		type:"post",
    		success:function(data) {
    			// body...
    			var n=JSON.parse(data);
			    if(n.msg=="Success")
			    {
			    	$("#response").html(n.msg).addClass("b");
			  	}
			  	else{
			  	$("#response").html(n.msg).addClass("a");
			  }
    		}
    	})
    }
    
   }


/*Scrolling animation for the left side content*/
$(document).ready(function() {
    
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 100) {
    jQuery('#content_left').stop().animate({ right: '0px' });
} else {
    jQuery('#content_left').stop().animate({ right: '-300px' });
}
});
})