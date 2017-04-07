		<div class="scroll-top"></div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="footer-logo">
							<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Victor Arsenie">
						</div>
						<div class="footer-contact">
							<p><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp; <a class="phone" href="tel:+44 7761 325 270">+44 7761 325 270</a></p>
							<p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; <a class="email" href="mailto:victor.arsenie@yahoo.com">victor.arsenie@yahoo.com</a></p>
						</div>
					</div>
					<div class="col-md-6 social">
						<a href="https://www.facebook.com/arsenie.victoralexandru"  target="_blank"><div id="facebook"></div></a>
						<a href="https://www.linkedin.com/in/victor-arsenie-391a3bb7/"  target="_blank"><div id="linkedin"></div></a>
					</div>
				</div>
				<div class="copy">
					<em><i class="fa fa-copyright" aria-hidden="true"></i> Victor Alexandru Arsenie - <?=date('Y');?></em>
				</div>
			</div>
		</footer>
		
		<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-3.2.0.min.js"></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.imageScroll.min.js"></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/sweetalert.js"></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/functions.js"></script>
		<script>
		
			$(document).ready(function () {
				//Fade in effects for greeting text
				$('#greet_1').delay( 600 ).fadeIn(2500);
				$('#greet_2').delay( 2000 ).fadeIn(2500);
				$('#greet_3').delay( 3500 ).fadeIn(2500);
				$('#work-arrow').delay( 5000 ).fadeIn(2500);
				
				//Scroll to top
				$('.scroll-top').click( function () {
					$("html, body").animate({ scrollTop: 0 }, "slow");
					return false;
				});
				
				//Toggle navbar on mobile when click
				$('.nav a').click( function(){ 
					if($('.navbar-toggle').css('display') !='none'){
						$(".navbar-toggle").trigger( "click" );
					}
				});
				// Smooth scroll for arrow work btn
				$('#work-arrow a').click( function(e){
					e.preventDefault();
					var element = this;
					smoothScroll(element);
				});
				
				//Add class active when scrolling, call function onScroll
				$(document).on("scroll", onScroll);
				//smoothscroll
				$('.navbar-nav a[href^="#"]').click( function (e) {
					e.preventDefault();
					var element = this;
					smoothScroll(element);
				});
				
				//send contact message to my email
				$("#submit").click( function (e) {
					e.preventDefault();
					var name = $('#name').val();
					var email = $('#email').val();
					var subject = $('#subject').val();
					var messageText = $('#message').val();
					var inputs = $('#contactform').serialize()
					//alert(inputs);
					
					$('.form-field').removeClass('warning');
					
					if (name.trim() == "" || email.trim() == "" || subject.trim() == "" || messageText.trim() == "") {
						//Sweet alert empty fields on contact form
						swal(
							'Ooops! Not so fast!',
							'Please fill in the highlighted fields.',
							'warning'
						)

						$('.form-field').each( function () {
							if ($(this).val() == "") {
								$(this).addClass('warning');
							}
						});
					} else {
						
						if (is_email(email)) {
							$.ajax({
								type:"get",	
								url: '<?php echo base_url().'functions/contact_me';?>',
								data: inputs,
								success:function(data){ 
									
								},
								error:function(data){ alert(JSON.stringify(data)); }
							});  
							//Sweet alert empty fields on contact form
							swal(
								'Your message has been sent!',
								'Sit back and relax, you\'re in good hands now.',
								'success'
							)
						} else {
							//Sweet alert empty fields on contact form
							swal(
								'Email not valid!',
								'Please input a correct email address.',
								'warning'
							)
							$('#email').addClass('warning'); 
						}
					}
         
				});
				
			});
			
			// Call Parallax, not on mobile
			$window = $(window);
			if( $window .width() > 769){
				$('.img-holder').imageScroll({
					coverRatio: 1,
					speed: 0.3
				});
	
			}
		</script>
	</body>
</html>