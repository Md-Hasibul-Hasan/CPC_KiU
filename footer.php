<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-12 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>CPC-KiU</strong>. All Rights Reserved. Developed by <strong>CPC-KiU</strong>
          </div>
          <div class="credits">
          <!--  <a href="https://bd.linkedin.com/in/saimon-islam?trk=public-profile-badge-profile-badge-view-profile-cta">Developer Info</a> -->
		 <a href="developer">Developer Info</a>
          </div>
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js   "></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="   assets/js/main.js   "></script>
  <script>
    var nav = document.querySelector('header');
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 87) {
            nav.classList.remove('transparent-nav');
            nav.classList.add('scrolled-nav', 'shadow');
            document.getElementsByClassName("img-srolled")[0].src = "assets/img/temp_logo.png";
        }
        else {
            nav.classList.remove('scrolled-nav');
            nav.classList.add('transparent-nav');
            document.getElementsByClassName("img-srolled")[0].src = "assets/img/temp_logo.png";
        }
    });

    //============ preLoader=========
      var loader = document.getElementById("loader");

      window.addEventListener("load",function(){
        setTimeout(function(){
          loader.style.display = "none";
        }, 1500);
      });
    
    //============ end preloader ======




    //============ load more events =========

    document.getElementById("loadMoreEvents").addEventListener("click", function(event) {
    event.preventDefault(); 
    
    let hiddenEvents = document.querySelectorAll(".portfolio-item.hide");
    
    hiddenEvents.forEach(eventItem => {
        eventItem.classList.remove("hide");
    });
    
    // hide the button after revealing all events
    this.style.display = "none";
});

//============ end load more events =========

    </script>

</body>

</html>
