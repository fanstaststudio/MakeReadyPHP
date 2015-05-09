		<div class="container-fluid">
			<div class="row">
				<footer>
					<h1>
						<?php echo $email; ?>
					</h1>
					<a class="btn btn-default" href="index.php?site=kontakt"><h1>Kontakt os!</h1></a><br><br>
					<p><?php echo $phone; ?></p>
				</footer>
			</div>
		</div>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascripts/bootstrap.min.js"></script>
	
	
	<script type="text/javascript">
	   $(function(){ 
	        //alert(event.timeStamp);
	        $('.new-com-bt').click(function(event){    
	            $(this).hide();
	            $('.new-com-cnt').show();
	            $('#name-com').focus();
	        });

	        /* when start writing the comment activate the "add" button */
	        $('.the-new-com').bind('input propertychange', function() {
	           $(".bt-add-com").css({opacity:0.6});
	           var checklength = $(this).val().length;
	           if(checklength){ $(".bt-add-com").css({opacity:1}); }
	        });

	        /* on clic  on the cancel button */
	        $('.bt-cancel-com').click(function(){
	            $('.the-new-com').val('');
	            $('.new-com-cnt').fadeOut('fast', function(){
	                $('.new-com-bt').fadeIn('fast');
	            });
	        });

	        // on post comment click 
	        $('.bt-add-com').click(function(){
	            var theCom = $('.the-new-com');
	            var theName = $('#name-com');
	            var theMail = $('#mail-com');

	            if( !theCom.val()){ 
	                alert('You need to write a comment!'); 
	            }else{ 
	                $.ajax({
	                    type: "POST",
	                    url: "ajax/add-comment.php",
	                    data: 'act=add-com&id_post='+<?php echo $id_post; ?>+'&name='+theName.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
	                    success: function(html){
	                        theCom.val('');
	                        theMail.val('');
	                        theName.val('');
	                        $('.new-com-cnt').hide('fast', function(){
	                            $('.new-com-bt').show('fast');
	                            $('.new-com-bt').before(html);  
	                        })
	                    }  
	                });
	            }
	        });

	    });
	</script>
	
	
  </body>
</html>