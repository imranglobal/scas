<?php
/**
* Template Name: Contact
*/
?>
<?php get_header(); ?>
<!--========================================================
														CONTENT 
	=========================================================-->
	<section id="content" class="content_pages">        
		<div class="container">
			<div class="row">

					<div class="grid_6 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.0s">
						<h2>contact</h2>
						<h3>information</h3>

						<div class="map">
							<figure class="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.771625713688!2d-79.32238069999998!3d43.839833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d468f3e3fcdf%3A0x7bd25a281acf3048!2s3950+14th+Ave%2C+Markham%2C+ON+L3R+0A9!5e0!3m2!1sen!2sca!4v1421516783235"  frameborder="0" style="border:0"></iframe>
							</figure>

							<address class="address1">
								<dl>
									<dt class="fz15 color1">
										3950 14th Avenue,<br/> Markham,  ON<br/> L3R 6G5.	
									</dt>
									<dd><span>Freephone:</span>+1 800 559 6580</dd>
									<dd><span>Telephone:</span>+1 800 603 6035</dd>
									<dd><span>FAX:</span>+1 800 889 9898 </dd>
									<dd>E-mail: <strong><a href="#" class="link5">mail@demolink.org</a></strong></dd>
								</dl>
							</address>

						</div>



					</div>

					<div class="grid_6">
						<h2>contact</h2>
						<h3>form</h3>

						<form id="contact-form">
							<div class="contact-form-loader"></div>
							<fieldset>
								<label class="name">
									<input type="text" name="name" placeholder="Name" value="" data-constraints="@Required @JustLetters"  />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid name.</span>
								</label>
							 
								<label class="email">
									<input type="text" name="email" placeholder="E-mail" value="" data-constraints="@Required @Email" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid email.</span>
								</label>
								<label class="phone">
									<input type="text" name="phone" placeholder="Phone" value="" data-constraints="@Required @JustNumbers" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid phone.</span>
								</label>
							 
								<label class="message">
									<textarea name="message" placeholder="Message" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*The message is too short.</span>
								</label>
								<div class="btns">
									<!-- <a href="#" class="more_btn" data-type="reset">Clear</a> -->
									<a href="#" class="more_btn2" data-type="submit">Send</a>
								</div>
							</fieldset> 
							<div class="modal fade response-message">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Modal title</h4>
										</div>
										<div class="modal-body">
											You message has been sent! We will be in touch soon.
										</div>      
									</div>
								</div>
							</div>
						</form>


					</div>

				</div>
		</div>
	</section>

<?php get_footer(); ?>