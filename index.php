<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?=$data['judul'];?></title>
    <link rel ="stylesheet" href ="<?=BASEURL;?>/assets/css/bootstrap.css">
    <link rel ="stylesheet" href ="<?=BASEURL;?>/assets/css/my-css.css">
    <link rel ="stylesheet" href ="<?=BASEURL;?>/assets/css/bootstrap-icons-1.9.1/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<section id="my-model">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Ship Hull</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-3">
            <div class="model-box">
                <h4 class="model-name">Submarine</h4>
                <img src="<?=BASEURL;?>/assets/img/kapal/3.png" alt="submarine" class="model-img" >
                <a href="#" class="btn btn-light model-detail-button">Show Details</a>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
            <div class="model-box">
                <h4 class="model-name">Supllay Vessel</h4>
                <img src="<?=BASEURL;?>/assets/img/kapal/2.png" alt="supplay" class="model-img" >
                <a href="#" class="btn btn-light model-detail-button">Show Details</a>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
            <div class="model-box">
                <h4 class="model-name">Catamaran</h4>
                <img src="<?=BASEURL;?>/assets/img/kapal/1.png" alt="catamaran" class="model-img" >
                <a href="#" class="btn btn-light model-detail-button">Show Details</a>
            </div>
            </div>
        </div>

    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L80,170.7C160,181,320,203,480,208C640,213,800,203,960,208C1120,213,1280,235,1360,245.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
<footer class="bg-primary text-white text-center">
    <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="#" class="text-white fw-bold">Good Rindo</a> </p>
</footer>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="<?=BASEURL;?>/assets/js/bootstrap.js"></script>
<!-- AOS animation  -->
<script src="<?=BASEURL;?>/assets/js/aos.js"></script>
  <script>
    const galleryImage = document.querySelectorAll('.gallery-img');

    galleryImage.forEach ((img,i)=>{
        img.dataset.aos='fade-down';
        img.dataset.aosDelay=i*100;
    });

    AOS.init({
        once:true,
        duration:1000
    });
  </script>
  <!-- AOS animation  -->

  <!-- GSAP  -->
  <script src="<?=BASEURL;?>/assets/js/gsap.min.js"></script>
  <script src="<?=BASEURL;?>/assets/js/TextPlugin.min.js"></script>
  <script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.lead',{duration:2, delay:1.5, text:'Lecturer | Naval Architect'});
    gsap.from('.jumbotron img',{duration:1, rotateY:360, opacity:0 });
    gsap.from('.navbar',{duration:1.5, y:'-100%', opacity:0, ease:'bounce' });
    gsap.from('.display-4',{duration:1.5, x:-50, opacity:0, delay:0.5,ease:'back' });
  </script>
  <!-- GASP  -->

<!-- Vanilla Tilt js  -->
<script src="<?=BASEURL;?>/assets/js/vanilla-tilt.min.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".model-box"), {
		max: 25,
		speed: 1000,
        scale:1.05,
        glare:true
	});
	
</script>
<!-- Vanilla Tilt js  -->


<script src="<?=BASEURL;?>/assets/js/script.js"></script>

</body>
</html>
