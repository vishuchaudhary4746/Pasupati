<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="inner-header"><?php include('header.php') ?></div>


<section id="hero" class="d-flex align-items-end inside-banner">
    <div class="video-bg"> 
      <img src="images/CSR-banner.jpg" class="img-fluid" alt="">       
    </div>
    <div class="container content-info" data-aos="zoom-out" data-aos-delay="100">
		<div class="lefts">
		<h2>The Pashupati Group</h2>
		<h1>Our Commitment to <br> Sustainable Excellence</h1>         
		</div>
		
    </div>
</section>

<div class="inner-main csr-vision">
<section id="" class="about-section section-01 section-space">
<div class="container">	
  <div class="row">
	<div class="col-sm-6 left">      
      <div class="title-head">
          <h2>Goenka Welfare <br> society</h2>
          <h4>Gratitude has been the fundamental building block of the corporate belief. The products manufactured itself are a reflection of its societal values. 
          Under the aegis of the Goenka Welfare Society, the group has undertaken extensive social activities with the singular agenda to leave the world in a better 
          place than it found it. This is not in response to mandates, but a responsibility to execute. The belief is that the feelings are as important as the task itself!</h4>
          </div>
    </div> 
    <div class="col-sm-7 right">

          <div class="my-slider my-slider1">
          <div class="image"><img src="images/crs-sl1.jpg" class="img-responsive" alt="">    </div>
          <div class="image"><img src="images/Khwaahish-NGO.jpg" class="img-responsive" alt="">    </div>
          <div class="image"><img src="images/Kundana-CSR-Activity.jpg" class="img-responsive" alt="">    </div>
          <div class="image"><img src="images/Salasar.jpg" class="img-responsive" alt="">    </div>
          <div class="image"><img src="images/Salasar-1.jpg" class="img-responsive" alt="">    </div>
        </div>

    </div>
  </div>
  </div>
</section>

<section id="" class="about-section our-ups section-space">
<div class="container">	

  <div class="title-head text-center">
  <h2>Growing with Purpose, <br> Giving with Heart</h2>
  
  </div>
  
  <div class="row">
    <div class="col-sm-6">
      <div class="box">
		<div class="image"><img src="images/growing-img1.jpg" class="b-img img-responsive" alt=""></div>  
        <div class="info">
          <h3>Global Contribution</h3>     
          <p>With global quality textiles, affordable energy, and a dire commitment to plastic recycling, we take pride in pushing the global circular economy like never before.</p>                 
        </div> 
		</div>
    </div>
	<div class="col-sm-6 textcenter">      
      <div class="box">
		<div class="image"><img src="images/growing-img2.jpg" class="b-img img-responsive" alt=""></div>  
        <div class="info">
          <h3>Global Contribution</h3>     
          <p>With global quality textiles, affordable energy, and a dire commitment to plastic recycling, we take pride in pushing the global circular economy like never before.</p>                 
        </div> 
		</div>
    </div>    
  </div>
  
  <div class="row">
    <div class="col-sm-6">
      <div class="box">
		<div class="image"><img src="images/growing-img3.jpg" class="b-img img-responsive" alt=""></div>  
        <div class="info">
          <h3>Global Contribution</h3>     
          <p>With global quality textiles, affordable energy, and a dire commitment to plastic recycling, we take pride in pushing the global circular economy like never before.</p>                 
        </div> 
		</div>
    </div>
	<div class="col-sm-6 textcenter">      
      <div class="box">
		<div class="image"><img src="images/growing-img4.jpg" class="b-img img-responsive" alt=""></div>  
        <div class="info">
          <h3>Global Contribution</h3>     
          <p>With global quality textiles, affordable energy, and a dire commitment to plastic recycling, we take pride in pushing the global circular economy like never before.</p>                 
        </div> 
		</div>
    </div>    
  </div>
  
  
  </div>
</section>

<section id="" class="about-section section-03 section-space">
<div class="container">	
  <div class="row">
       <div class="col-sm-7 left">
          <div class="my-slider my-slider2">
          <div class="image"><img src="images/crs-sl2.jpg" class="img-responsive" alt="">    </div>
          <div class="image"><img src="images/crs-sl2.jpg" class="img-responsive" alt="">    </div>
        </div>
    </div>
	<div class="col-sm-6 right">      
      <div class="title-head">
          <h2>CORPORATE <br> ENVIRONMENT <br> RESPONSIBILITY </h2>
          <h4>At Pashupati we understand the concept of CER and direct all our future Expansions & Diversifications in line with CER. All new investments are being planned 
          accordingly and in such fashion so as to demonstrate and setup an example of implementing CER for the Industry.</h4>
          <h4>The proposed Investment in Renewable Energy Capacities, Waste Management Vertical and Recycling are aligned with our commitment of working for Generations to come.</h4>
          </div>
    </div> 
  </div>
  </div>
</section>

<section id="" class="about-section our-ups btm1 section-space">
<div class="container">	

  <div class="title-head text-center">
  <h2>Sustaining the planet, <br> empowering communities</h2>
  </div>
  </div>
</section>

</div>

<?php include('footer.php') ?>

<script>
    $(document).ready(function(){
      $('.my-slider1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 5000,
        autoplay: false,
        responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
      });
    });
    
    
    $(document).ready(function(){
      $('.my-slider2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 5000,
        autoplay: false,
        responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
      });
    });
</script>

</body>
</html>
