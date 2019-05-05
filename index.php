<?php
/*
 * The main template file
 * @package WordPress
 * @subpackage Demo_Site
 * @since Demo Site 0.5
 */
 get_header(); ?>
	
	<div class='container-fluid'>
		<div class='row'>
			
			<!-- FIRST BLOCK - Parallex -->
			<div class='first-block col-12 parallex text-center' id='fisrt' data-aos='zoom-out' data-aos-delay='500'>
				<h1 class='text-light'>طراحی وب‌سایت، نیکروس</h1>
				<p class='text-light lead'>طراحی انواع وب‌سایت‌های  شرکتی، فروشگاهی، خبری و شخصی</p>
			</div>
			<!-- END FIRST Parallex -->
			
			
			<!-- SECOND BLOCK -->
			<div class='second-block col-12 bg-white' id='second'>
				<div class='row text-center lead'>
					<div class='col-md-4'>
						<img src='\wordpress\wp-content\themes\nikros\images\planning.png' alt='برنامه ریزی' data-aos='fade-left' data-aos-duration='1500'></img>
						<h3>برنامه ریزی</h3>
						<p data-aos='fade-in' data-aos-duration='1500'>تهیه لیست کارها و موارد مورد نیاز طراحی وبسایت جهت براورد زمان لازم و هزینه ساخت، لذا اصول کار ما با برنامه ریزی صحیح و انجام بموقع بنا شده است.</p>
					</div>
					<div class='col-md-4'>
						<img src='\wordpress\wp-content\themes\nikros\images\design.png' alt='طراحی' data-aos='fade-in' data-aos-duration='1500'></img>
						<h3>طراحی</h3>
						<p data-aos='fade-in' data-aos-duration='1500'>ما با استفاده از موارد گفته شده شما شروع به طراحی اصولی وبسایت می کنیم، پایبد به اصول سئو در طراحی و جدیدترین فناوری ها مورد استفاده قرار می گیرد.</p>
					</div>
					<div class='col-md-4'>
						<img src='\wordpress\wp-content\themes\nikros\images\release.png' alt='راه اندازی' data-aos='fade-right' data-aos-duration='1500'></img>
						<h3>راه اندازی</h3>
						<p data-aos='fade-in' data-aos-duration='1500'>پس از اتمام مراحل طراحی، وبسایت آماده نصب و راه اندازی می شود.</p>
					</div>
				</div>
			</div>
			<!-- END SECOND BLOCK -->
			
			<!-- between block -->
			<div class='between-small-block col-12 bg-success' data-aos='fade-up'>
				<h4 class='text-light mt-1'>فناوری های مورد استفاده قرار گرفته</h4>
				<p class='text-light lead'>وردپرس، CSS، HTML، Boostrap و PHP</p>
				<button class='btn btn-light'>ادامه</button>
			</div>
			<!-- end between -->
			
			
			<!-- THIRD BLOCK -->
			<div class='third-block col-12' id='third'>
				<div class='row'>
					<div class='col-md-5'>
						<img class='img-fluid' src='\wordpress\wp-content\themes\nikros\images\responsive1.png' alt='واکنش گرا (ریسپانسیو)' data-aos='fade-left' data-aos-duration='800'></img>
					</div>
					<div class='col-md-7' data-aos='fade-in'>
						<h2>طراحی وب‌سایت واکنش‌گرا </h2>
						<p class='lead'>
						امروزه به دلیل درصد بالایی استفاده دستگاه‌های هوشمند، گوشی‌های همراه و تبلت برای وب‌گردی و جستجو در اینترنت بسیار ضروریست که وب‌سایت شما در این دستگاه‌ها و صفحه‌ها با اندازه‌های مختلف به خوبی دیده شود.
						عدم رعایت کامل ویژگی ریسپانسیو(واکنش‌گرا) در طراحی سایت، به عدم مراجعه مجدد به وب سایت شما و همچنین عدم خرید و ثبت سفارش محصولات و خدمات شما منجر خواهد شد.  
						</p>
						<a href='responsive.php'><button class='btn btn-success'>بیشتر بدانید</button></a>
					</div>
				</div>
			</div>
			<!-- END THIRD BLOCK -->
			
			
			
			
			<!-- BLOCK FOURTH - Parallex -->
			<div class='fourth-block col-12 text-center' id='fourth'>
				<div class='row'>
					<div class='col-md-12' data-aos='fade-in' data-aos-duration='1500'>
						<h2>ویژگی های مورد نیاز یک وب‌سایت</h2>
					</div>
					
					<div class='col-md-3' data-aos='fade-right' data-aos-duration='1000' data-aos-easing='linear'>
						<img class='respond' src='\wordpress\wp-content\themes\nikros\images\ui.png' alt='رابط کاربری (UI)'></img>
						<h4>رابط کاربری</h4>
						<p>همانطور که می دانید رابط کاربری نقش موثری در جذب و حفظ کاربر دارد، ساخت رابط کاربری سایت بصورت صحیح و کارشناسی شده باعث می شود کاربران با سایت تعامل خوبی داشته باشند.</p>
					</div>
					<div class='col-md-3' data-aos='fade-up' data-aos-duration='1000' data-aos-easing='linear'>
						<img src='\wordpress\wp-content\themes\nikros\images\ux5.png' alt='تجربه کاربری (UX)'></img>
						<h4>تجربه کاربری</h4>
						<p>منظور از تجربه کاربری هم آن تجربه و حسی است که کاربر در هنگام تعامل با بخش‌های مختلف از محصولات و سرویس‌های یک شرکت دارد که شامل نحوه تعامل او با رابط شماست.</p>
					</div>
					<div class='col-md-3' data-aos='fade-up' data-aos-duration='1000' data-aos-easing='linear'>
						<img class='rocket' src='\wordpress\wp-content\themes\nikros\images\rocket2.png' alt='بارگزاری سریع'></img>
						<h4>بارگزاری سریع</h4>
						<p>زمانی که کاربری به وب سایت شما مراجعه می کند اگر سرعت بارگذاری صفحات وب سایت شما کند باشد باعث نارضایتی کاربر شده و ممکن است خیلی سریع وب سایت شما را ترک کند.</p>
					</div>
					<div class='col-md-3' data-aos='fade-left' data-aos-duration='1000' data-aos-easing='linear'>
						<img class='ssl' src='\wordpress\wp-content\themes\nikros\images\ssl4.png' alt='امنیت'></img>
						<h4>امنیت</h4>
						<p>امنیت سایت به مجموعه اقداماتی گفته می شود که با انجام آنها ضریب امنیت سایت به حداکثر رسیده و امکان نفوذ به آن به حداقل می رسد، و ما از متدهای بروز جهت امنیت بیشتر استفاده می کنیم.</p>
					</div>
				</div>
			</div>
			<!-- END FOURTH Parallex -->
			
			<!-- FIFTH BLOCK -->
			<div class='fifth-block col-12 bg-white'>
				<div class='row'>
					<div class='col-md-7' data-aos='fade-in'>
						<h2>سئو و بهینه سازی در طراحی وب‌سایت<h2>
						<p class='lead'>
						هدف سئو کمک به وب سايت‌ها در بدست آوردن محل بالا در نتايج جستجوي طبيعي و افزايش ارتباط بين صفحات و کلمات کليدي وارد شده توسط کاربران است. بعد از اينکه سئو براي بهبود رتبه‌بندي سايت‌ها در نتايج جستجوي طبيعي کار خود را شروع کرد، اين فرآيند نيازمند دانش و زمان براي پياده‌سازي روش‌هاي خود شد. زمان، بزرگ‌ترين سرمايه‌گذاري اوليه براي بهينه شدن سايت و يا يک صفحه است.
						</p>
						<button class='btn btn-success'>بیشتر بدانید</button>
					</div>
					<div class='col-md-5'>
						<img class='img-fluid' src='\wordpress\wp-content\themes\nikros\images\seo3.png' alt='سئو' data-aos='fade-right' data-aos-duration='800'></img>
					</div>
				</div>
			</div>
			<!-- END FIFTH BLOCK -->
			
			
			<!-- between block -->
			<div class='col-12 bg-light between-small-block' data-aos='fade-up'>
				<h2>همین حالا شروع کنید!</h2>
				<button class='btn btn-success btn-lg'>تعرفه</button>
			</div>
			<!-- end between -->
			
			
			
			<!-- FIFTH BLOCK -->
			<div class='sixth-block col-12' data-aos='fade-in-right'>
				<div class='row'>
					<div class='col-md-7 order-2' data-aos='fade-in'>
						<h2>تبدیل فایل PSD به HTML<h2>
						<p class='lead'>
						هدف سئو کمک به وب سايت‌ها در بدست آوردن محل بالا در نتايج جستجوي طبيعي و افزايش ارتباط بين صفحات و کلمات کليدي وارد شده توسط کاربران است. بعد از اينکه سئو براي بهبود رتبه‌بندي سايت‌ها در نتايج جستجوي طبيعي کار خود را شروع کرد، اين فرآيند نيازمند دانش و زمان براي پياده‌سازي روش‌هاي خود شد. زمان، بزرگ‌ترين سرمايه‌گذاري اوليه براي بهينه شدن سايت و يا يک صفحه است.
						</p>
						
						<h5>اطلاعات تماس</h5>
						<form method='post'>
							<div class='form-inline'>
							
								<div class='form-group'>
									<input class='form-control ml-2' name='name' placeholder='نام'>
								</div>
								<div class='form-group'>
									<input class='form-control ml-2 mr-2' name='number' placeholder='شماره تماس'>
								</div>
							</div>
								
							<div class='custom-file'>
								<label class='custom-file-label'>فایل PSD</label>
								<input class='custom-file-input' type='file' name='psd'>
							</div>
							<div class='form-group mt-2'>
								<textarea class='form-control' name='description' placeholder='توضیحات'></textarea>
							</div>
							<input class='btn btn-success' type='submit' value='ثبت اطلاعات'>
						</form>
					</div>
					<div class='col-md-5 order-1' data-aos='fade-left' data-aos-duration='800'>
						<img class='img-fluid' src='\wordpress\wp-content\themes\nikros\images\psdtohtml.png' alt='PSD به HTML'></img>
					</div>
				</div>
			</div>
			<!-- END FIFTH BLOCK -->
			
		</div>
	
<?php get_footer(); ?>