<?php
  get_header ();
 ?>

<article class="content">

  <?php
    if( have_posts() ){
      while( have_posts() ){
        the_post();
        the_content();
      }
    }

   ?>

</article>

<!-- Continut Home Page -->
<body class="body">

<div class="master-wrapper">

<div class="background1">
  <div class="bigdiv">
    <div class="div1">
      <div class="divright">
        <h1><b>Product Design Course</b></h1><br>
        <h2 style="padding-bottom:15px">Product Factory</h2><br>
        <p class="divrighttext">Learn how design thinking, user research, business vision and marketin, and finally designing and creating real digital products for real users.</p><br>
        <button type="button" class="div1-button"><b>Start register</b></button>
      </div>
      <div class="divleft">
        <img class="divleftimage" src="https://i.ibb.co/qxzXQyq/panou1.png" alt="Schema 1">
      </div>
    </div>
  </div>
</div>



  <div class="divwrapper">
    <div class="divright2">
      <div class="upper-about">
        <div class="enlarge1" onclick="enlarge()"><img class="imagelogoabout" src="https://i.ibb.co/NnHdYN4/Logoalb.jpg" alt="Logo">
          <span class="enlarge2" id="bigcontainer"><img class="imagelogoabout2" src="https://i.ibb.co/NnHdYN4/Logoalb.jpg" alt="Logo"></span>
        </div>
        <div class="div-aboutus">
          <div class="div-abouts-inner">
            <h1 class="aboutustitle">About us</h1>
            <div class="socialmediaicon-upper">
              <img src="https://i.ibb.co/dQj92yK/fb.png" class="socialmediaicon" alt="facebook">
      		 		<img src="https://i.ibb.co/KNGV24V/IG.png" class="socialmediaicon2" alt="instagram">
      		 		<img src="https://i.ibb.co/2Fj4nc7/tw.png" class="socialmediaicon" alt="twitter">
            </div>
          </div>

        </div>
      </div>
      <p class="divrighttext2">Today, given the economic and labour market conditions, the best and least risky way to invest is to invest in personal assets and skills. <br>UI/UX Product Design Course covers all aspects of product design from product thinking and design to user-centric research and product research and business vision and digital marketing to product designers and creators, designing the end-user experience and interface of the product and how to deliver it. Includes.</p><br>
    </div>
  </div>


<div id="myBtnContainer">
  <div class="divwrapper">
      <div class="course-title"><h2><b>Course Experience</b></h2></div>
    <div class="btn-title">
      <div class="btn-group" id="btn-groupid">
        <button class="btn" id="btngroup1" data-section="section1">After attending the course</button>
        <button class="btn" id="btngroup2" data-section="section2">During the period</button>
        <button class="btn" id="btngroup3" data-section="section3">Before attending the course</button>
      </div>
<!-- sectiunile pentru butoane -->
      <div class="content-section" id="section1">
        <div class="section11"><p>This course has been attempted by zero people who are eager to learn product design, especially user experience and user interface, so it is not a prerequisite, but due to the limited capacity of the priority course with early enrolled people, others can participate in future courses.<br>Obviously, the ability to use tools like Adobe Photoshop and Adobe Illustrator as well as Microsoft Word, Excel tools, and of course a lot of enthusiasm and energy.</p>
        </div>
        <div class="section12">
          <img class="section12image" src="https://i.ibb.co/DwLPxh1/panou2.png" alt="Schema 2">
        </div>
      </div>
      <div class="content-section" id="section2">
        <div class="section21" id="section212"><p>This course has been attempted by zero people who are eager to learn product design, especially user experience and user interface, so it is not a prerequisite, but due to the limited capacity of the priority course with early enrolled people, others can participate in future courses.</p>
        </div>
        <div class="section12">
          <img class="section12image" src="https://i.ibb.co/gSLD5RQ/panou2.png" alt="Schema 2">
        </div>
        <div class="section22"><p>This course has been attempted by zero people who are eager to learn product design, especially user experience and user interface, so it is not a prerequisite, but due to the limited capacity of the priority course with early enrolled people, others can participate in future courses.</p>
        </div>
      </div>
      <div class="content-section" id="section3">
        <div class="section12">
          <img class="section31image" src="https://i.ibb.co/W2XjHZY/panou2.png" alt="Schema 2">
        </div>
        <div class="section31"><p>This course has been attempted by zero people who are eager to learn product design, especially user experience and user interface, so it is not a prerequisite, but due to the limited capacity of the priority course with early enrolled people, others can participate in future courses.<br>Obviously, the ability to use tools like Adobe Photoshop and Adobe Illustrator as well as Microsoft Word, Excel tools, and of course a lot of enthusiasm and energy.</p>
        </div>
      </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
$(function() {

  $(".btn").on("click", function() {
    //Ascunde sectiunile
    $(".content-section").hide();
    //Arata sectiunile cand un buton este apasat
    $("#" + $(this).attr("data-section")).show();
  });
});
</script>



  <div class="bigdiv2">
    <div class="div2">
      <div class="mastersdiv1">
        <h1><b>Masters</b></h1><br>
<!-- Carousel -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-center">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Indicatori carousel -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper pentru carousel items -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
                  <!--<div class="container1">-->
                    <img style="margin-top:95px" src="https://i.ibb.co/vHDGppJ/1.png" class="img-responsive" alt="shervin">
                    <!--<div class="middle1">
                      <div class="middletext1"></div>
                    </div>
                  </div>-->
								</div>
								<div class="thumb-content">
									<h4><b>Shervin Mashayekh</b></h4>
									<p>Additive Product Manager</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
                <p class="course1">Course 1</p>
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://i.ibb.co/wcWPtWK/2.png" class="img-responsive" alt="kianoosh">
								</div>
								<div class="thumb-content">
									<h4><b>Kianoosh Keyghobadi</b></h4>
									<p>Product Manager at Digikala</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img style="margin-top:95px" src="https://i.ibb.co/9bh4YzT/3.png" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4><b>Hossein Vahdani</b></h4>
									<p>Content Marketing Specialist</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img style="margin-top:95px" src="https://i.ibb.co/10YnhvS/4.png" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4><b>Ali Babaei</b></h4>
									<p>Product design consultant</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
              <p class="course1">Course 2</p>
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://i.ibb.co/wg4XrCZ/5.png" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4><b>Kiarash Amalivand</b></h4>
									<p>Head of product at Ap</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img style="margin-top:95px" src="https://i.ibb.co/XFCskjm/6.png" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4><b>Hesam keramati</b></h4>
									<p>Product design at Bazaar</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img style="margin-top:95px" src="https://i.ibb.co/vBvjgbX/7.png" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4><b>Hassan Hemati</b></h4>
									<p>Product designer at Alibaba</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
              <p class="course1">Course 3</p>
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://i.ibb.co/gSBcm7R/8.png" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4><b>Hadi Ebnodin</b></h4>
									<p>Service designer</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img style="margin-top:95px" src="https://i.ibb.co/rFVxYXg/9.png" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4><b>Moslem Ebrahimi</b></h4>
									<p>Typeface designer</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
      </div>
      <div class="divleft">

      </div>
    </div>
  </div>
</div>
<!-- Sfarsit Carousel -->



  <div class="divwrapper2">
    <div class="mastersdiv1">
      <h1 class="md1title"><b>Course fee</b></h1><br>
    </div>
    <div class="masterdiv2">
      <div class="masterdiv21">
        <h3><b>What will be our achievements by participating in this course?</b></h3><br>
        <ul class="masterdiv21ul">
          <li class="md21li">Learn the requirements of a product designer from experienced professionals in the field.</li>
          <li class="md21li">Experience in-team work and product designer interactions within the real product team.</li>
          <li class="md21li">Experience working on projects with information and feature lists and real user recognition.</li>
          <li class="md21li">Possibility to take Adobe exams upon completion of course and upon registration.</li>
        </ul>
      </div>
      <div class="masterdiv22">
        <h3 style="text-decoration:line-through">4,000,000 Toman</h3>
        <h2>2,300,000 Toman</h2><br>
        <p>Possibility to pay periodic installment fee.</p><br>
        <button type="button" class="div2-button"><b>Register</b></button>
      </div>
    </div>
    <div>
      <hr class="line1">
      <p class="refundpol">Possibility of refund prior to the third session if the course quality is not satisfied.</p>
    </div>
  </div>

  <div class="divwrapper3">
    <div class="divright">
      <h2 class="schedulestitle"><b>Schedule</b></h2><br>
    </div>

    <div class="startend">
      <div class="startclass">
        <h3><b>Start of course</b></h3>
      </div>
      <div class="dottedline">
        <img src="https://i.ibb.co/bLVp37L/dot.png" alt="Dot">
      </div>
      <div class="endclass">
        <h3><b>End of course</b></h3>
      </div>
    </div>

    <div class="datewrapper">
      <div class="dateleft">
        <h1><b>08 / 11 / 2020</b></h1>
      </div>
      <div class="dateright">
        <h1><b>21 / 11 / 2020</b></h1>
      </div>
    </div>

    <div class="bottomwrapper">
      <div class="remainungdays">
        <div class="reamintxt"><h3><b>6</b></h3></div>
      </div>
      <div class="daysindicator">
        <h1><b>Days left to sign up</b></h1>
      </div>
      <div class="registerbutton">
        <button type="button" class="div3-button"><b>Register</b></button>
      </div>
    </div>


  </div>

</div>

<?php
  get_footer ();
 ?>
