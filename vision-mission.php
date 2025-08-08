<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="inner-header"><?php include('header.php') ?></div>

<div class="inner-main mission-vision">
<section id="hero" class="d-flex align-items-end inside-banner">
    <div class="video-bg"> 
      <img src="images/wwr-banner.jpg" class="img-fluid" alt="">       
    </div>
    <div class="container content-info" data-aos="zoom-out" data-aos-delay="100">
		<div class="lefts">
		<h2>The Pashupati Group</h2>
		<h1>Our Commitment to <br> Sustainable Excellence</h1>         
		</div>
		
    </div>
</section>

<section id="" class="section1 section-01 our-ups section-space">
<div class="container">	
<h4 class="text-center">Through our dedicated waste collection centres and partnerships, we gather, sort, and mechanically recycle post-consumer 
  and post-industrial PET waste to produce bottle flakes, a primary form of PET material. By early 2025, our capacity for manufacturing r-PET flakes will be doubled, 
  making us India's leading processing facility for r-PET flakes. Additionally, our group has obtained FDA approval for Food contact applications, allowing us to utilize 
  up to 100% recycled PET for specific conditions of use.</h4>
</div>
</section>

<section id="" class="about-section our-ups section-space">
<div class="container">	

  <div class="title-head text-center">
  <h2>Our Approach to <br> Sustainable Innovation</h2>
  <h4>We rethink plastic waste as an opportunity, designing efficient recycling solutions that <br> contribute to a cleaner and greener future.</h4>
  </div>
  
  <div class="row">
    <div class="col-sm-6">
      <div class="image"><img src="images/journey-image3.png" class="img-responsive" alt="">    </div>
    </div>
	<div class="col-sm-6 textcenter">      
      <div class="info">
          <h2>Vision</h2>
          <h4>Transforming worldwide plastic challenges into cost-effective and energy-efficient sustainable solutions.</h4>
      </div>
    </div>    
  </div>
  
  <div class="row">
	<div class="col-sm-6 textcenter">      
      <div class="info">
          <h2>Mission</h2>
          <h4>Evolving into a multi-dimensional organization, providing a range of textile and packaging solutions while upholding a commitment to environmental stewardship and human well-being.</h4>
      </div>
    </div> 
    <div class="col-sm-6">
      <div class="image"><img src="images/journey-image4.png" class="img-responsive" alt="">    </div>
    </div>
  </div>
  
  </div>
</section>



<section id="" class="about-section our-ups our-values section-space">
<div class="container">	

  <div class="title-head text-center">
  <h2>Our Values</h2>
  </div>
  
  <div class="row">
    <div class="col-sm-6">
      <div class="image"><img src="images/leadership.jpg" class="img-responsive" alt=""></div>
    </div>
	<div class="col-sm-6 textcenter">      
      <div class="info">
          <h2>Leadership</h2>
          <h4>With decades of hard work, innovation, and consistency, the Pashupati Group has emerged as a collective leader across multiple sectors. 
          From the manufacturing of diverse personal and commercial goods to recycling at an unthinkably high scale, it is the achievements and recognition earned over the years that establishes our celebrated leadership.</h4>
      </div>
    </div>    
  </div>
  
  <div class="row">
	<div class="col-sm-6 textcenter">      
      <div class="info">
          <h2>Ethics & Integrity</h2>
          <h4>Our teams across the Pashupati Group have made sure to infuse ethics in every step of this collective organization. From the choosing of raw material to the delivery of the final product our vision is imbedded, 
          we as a larger team make sure to abide by ethical practices across all possible roles that make us what we are.</h4>
      </div>
    </div> 
    <div class="col-sm-6">
      <div class="image"><img src="images/ethics-integrity.jpg" class="img-responsive" alt="">    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="image"><img src="images/teamwork-innovation.jpg" class="img-responsive" alt="">    </div>
    </div>
	<div class="col-sm-6 textcenter">      
      <div class="info info-list">
          <h2>Teamwork & Innovation</h2>
          <h4>
              Coordination among the various sectors that the Pashupati Group deals on, unity to unit and among the departments within each company is what makes us stronger as a huge team overlooking our success as a team.
          </h4>
      </div>
    </div>    
  </div>
  
  <div class="row">
	<div class="col-sm-6 textcenter">      
      <div class="info">
          <h2>Responsibility & Support</h2>
          <h4>From assuring you an unmatched level of quality and consistency to serving you exactly that while constantly innovating to do even better is the responsibility that the 
          Pashupati Group assumes by itself. While we are responsible for all the goods and even the slightest bad, 
          if any, we even wish to take responsibility for all the happiness that we provide you with on our way to collective glory.</h4>
      </div>
    </div> 
    <div class="col-sm-6">
      <div class="image"><img src="images/responsibility-support.jpg" class="img-responsive" alt="">    </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-6">
      <div class="image"><img src="images/trust-commitment.jpg" class="img-responsive" alt="">    </div>
    </div>
	<div class="col-sm-6 textcenter">      
      <div class="info info-list">
          <h2>Trust & Commitment</h2>
          <h4>We are desperate for it. Yes, you read that right. Trust & Commitment is the sole vision that drives us onwards and upwards each day. 
          When it comes to quality, variety, and partnership, we refuse to have it any other way. Your trust is what we work hard for.</h4>
      </div>
    </div>    
  </div>
  

  </div>
</section>

<section id="" class="about-section our-ups btm1 section-space">
<div class="container">	

  <div class="title-head text-center">
  <h2>Building a Future on <br> Trust & Responsibility</h2>
  <h4>Through ethical practices, regulatory compliance, and strong partnerships, we ensure <br> transparency and reliability in every step.</h4>
  </div>
  </div>
</section>

</div>

<?php include('footer.php') ?>

<script src="https://unpkg.com/scrollreveal@4.0.7/dist/scrollreveal.min.js"></script>
<script>
    let snowflakesCount = 200; // Snowflake count, can be overwritten by attrs
let baseCss = ``;


// set global attributes
if (typeof SNOWFLAKES_COUNT !== 'undefined') {
  snowflakesCount = SNOWFLAKES_COUNT;
}
if (typeof BASE_CSS !== 'undefined') {
  baseCss = BASE_CSS;
}

let bodyHeightPx = null;
let pageHeightVh = null;

function setHeightVariables() {
  bodyHeightPx = document.body.offsetHeight;
  pageHeightVh = (100 * bodyHeightPx / window.innerHeight);
}

// get params set in snow div
function getSnowAttributes() {
  const snowWrapper = document.getElementById('snow');
  if (snowWrapper) {
    snowflakesCount = Number(
      snowWrapper.attributes?.count?.value || snowflakesCount
    );
  }
}

// This function allows you to turn on and off the snow
function showSnow(value) {
  if (value) {
    document.getElementById('snow').style.display = "block";
  }
  else {
    document.getElementById('snow').style.display = "none";
  }
}

// Creating snowflakes
function spawnSnow(snowDensity = 200) {
  snowDensity -= 1;

  for (let i = 0; i < snowDensity; i++) {
        let randomX = Math.random() * 200 - 50; // vw (generating values between -50 and 150)
    let board = document.createElement('div');
    board.className = "snowflake";

    //document.getElementById('snow').appendChild(board);
  }
}

// Append style for each snowflake to the head
function addCss(rule) {
  let css = document.createElement('style');
  css.appendChild(document.createTextNode(rule)); // Support for the rest
  document.getElementsByTagName("head")[0].appendChild(css);
}

// Math
function randomInt(value = 100) {
  return Math.floor(Math.random() * value) + 1;
}

function randomIntRange(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}

// Create style for snowflake
function spawnSnowCSS(snowDensity = 200) {
  let snowflakeName = "snowflake";
  let rule = baseCss;

  for (let i = 1; i < snowDensity; i++) {
    let randomX = Math.random() * 100; // vw
    let randomOffset = Math.random() * 10 // vw;
    let randomXEnd = randomX + randomOffset;
    let randomXEndYoyo = randomX + (randomOffset / 2);
    let randomYoyoTime = getRandomArbitrary(0.3, 0.8);
    let randomYoyoY = randomYoyoTime * pageHeightVh; // vh
    let randomScale = Math.random();
    let fallDuration = randomIntRange(10, pageHeightVh / 10 * 3); // s
    let fallDelay = randomInt(pageHeightVh / 10 * 3) * -1; // s
    let opacity = Math.random();

    rule += `
      .${snowflakeName}:nth-child(${i}) {
        opacity: ${opacity};
        transform: translate(${randomX}vw, -10px) scale(${randomScale});
        animation: fall-${i} ${fallDuration}s ${fallDelay}s linear infinite;
      }
      @keyframes fall-${i} {
        ${randomYoyoTime * 100}% {
          transform: translate(${randomXEnd}vw, ${randomYoyoY}vh) scale(${randomScale});
        }
        to {
          transform: translate(${randomXEndYoyo}vw, ${pageHeightVh}vh) scale(${randomScale});
        }
      }
    `
  }
  addCss(rule);
}

// Load the rules and execute after the DOM loads
createSnow = function () {
  setHeightVariables();
  getSnowAttributes();
  spawnSnowCSS(snowflakesCount);
  spawnSnow(snowflakesCount);
};


// export createSnow function if using node or CommonJS environment
if (typeof module !== 'undefined') {
  module.exports = {
    createSnow,
    showSnow,
  };
}
else {
  window.onload = createSnow;
}

    // Initialize ScrollReveal
    ScrollReveal().reveal('.containerz', { 
        delay: 100 });
      // Initialize ScrollReveal for left element
      ScrollReveal().reveal('.left', {
      distance: '250px',
      origin: 'left',
      delay: 500
    });

    // Initialize ScrollReveal for right element
    ScrollReveal().reveal('.right', {
      distance: '250px',
      origin: 'right',
      delay: 100
    });
</script>
</body>
</html>
