<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Fellastore</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
	<script defer src="/fl/fl/assets/fontawesome/js/all.min.js"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="/fl/fl/assets/css/theme-1.css">

</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="index.html">Fellastore</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/profile.png" alt="image" >			
					
					<div class="bio mb-3">Hi Selamat Belanja Di Fellastore</div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-start">
				<li>
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('area') }}">Member Area</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                
                                
                                @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                                    @if (Route::has('register'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                                @endif
                                @endauth
                                            </ul>
                             
                            </div>
                        @endif
                        </li>
				</ul>
			</div>
		</nav>
		<form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
    </header>
    
    <div class="main-wrapper">
	    
	    
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container single-col-max-width">
			    <div class="item mb-5">
				    <div class="row g-3 g-xl-0">
					    <div class="col-2 col-xl-3">
					        <img class="img-fluid post-thumb " src="https://cdn.oneesports.gg/cdn-data/wp-content/uploads/2020/08/MobileLegendsBangBang_MLBB_appstore_officialart.jpg" alt="image">
					    </div>
					    <div class="col">
						    <h3 class="title mb-1"><a class="text-link" href="blog-post.html">Mobile Legends</a></h3>
						    <a class="text-link" href="/member/layanan">Order &rarr;</a>
					    </div><!--//col-->
				    </div><!--//row-->
			    </div><!--//item-->
			    <div class="item mb-5">
				    <div class="row g-3 g-xl-0">
					    <div class="col-2 col-xl-3">
					        <img class="img-fluid post-thumb " src="https://images.indianexpress.com/2021/06/Valorant-Mobile.jpg?w=389" alt="image">
					    </div>
					    <div class="col">
						    <h3 class="title mb-1"><a class="text-link" href="blog-post.html">Valorant</a></h3>
						    <a class="text-link" href="/member/layanan">Order &rarr;</a>
					    </div><!--//col-->
				    </div><!--//row-->
			    </div><!--//item-->
			    
			    <div class="item mb-5">
				    <div class="row g-3 g-xl-0">
					    <div class="col-2 col-xl-3">
					        <img class="img-fluid post-thumb " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-YBulReYT3t1cKk8Ehfr3qY6KwBSIiP0GaQ&usqp=CAU" alt="image">
					    </div>
					    <div class="col">
						    <h3 class="title mb-1"><a class="text-link" href="blog-post.html">Genshin Impact</a></h3>
						    <a class="text-link" href="/member/layanan">Order &rarr;</a>
					    </div><!--//col-->
				    </div><!--//row-->
			    </div><!--//item-->
			    
			    <div class="item mb-5">
				    <div class="row g-3 g-xl-0">
					    <div class="col-2 col-xl-3">
					        <img class="img-fluid post-thumb " src="https://venturebeat.com/wp-content/uploads/2020/05/Garena-Free-Fire.jpg?w=1200&strip=all" alt="image">
					    </div>
					    <div class="col">
						    <h3 class="title mb-1"><a class="text-link" href="blog-post.html">Free Fire</a></h3>
						    <a class="text-link" href="/member/layanan">Order &rarr;</a>
					    </div><!--//col-->
				    </div><!--//row-->
			    </div><!--//item-->
				
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->

       
    <!-- Javascript -->          
    <script src="/fl/fl/assets/plugins/popper.min.js"></script> 
    <script src="/fl/fl/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

    

</body>
</html> 

