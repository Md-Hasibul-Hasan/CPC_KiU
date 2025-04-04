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
 


document.addEventListener("DOMContentLoaded", function () {
    const loadMoreBtn = document.getElementById("loadMoreEvents");
    const container = document.querySelector(".portfolio-container"); // Changed to portfolio-container
    const allEvents = Array.from(document.querySelectorAll(".portfolio-item")); // Changed to portfolio-item
    const filterButtons = document.querySelectorAll("#portfolio-flters li");
    let filteredEvents = [];
    const eventsToShow = 3;
    let currentIndex = 0;
    let selectedFilter = "*"; // Default shows all

    // Initialize - show first 3 events
    function init() {
        filterEvents(selectedFilter);
    }

    function updateVisibleEvents() {
        container.innerHTML = "";
        
        if (filteredEvents.length === 0) {
            container.innerHTML = "<p style='text-align: center; width: 100%;'>No events available</p>";
            loadMoreBtn.style.display = "none";
            return;
        }
        
        // Show events from currentIndex to currentIndex + eventsToShow
        const endIndex = Math.min(currentIndex + eventsToShow, filteredEvents.length);
        for (let i = currentIndex; i < endIndex; i++) {
            const newItem = filteredEvents[i].cloneNode(true);
            container.appendChild(newItem);
        }
        
        // Update button text and visibility
        loadMoreBtn.style.display = filteredEvents.length > eventsToShow ? "block" : "none";
        loadMoreBtn.textContent = (endIndex >= filteredEvents.length) ? "Show Less" : "More Events";
    }

    function showMoreEvents() {
        const remainingEvents = filteredEvents.length - (currentIndex + eventsToShow);
        
        if (remainingEvents > 0) {
            currentIndex += eventsToShow;
        } else {
            // If we've reached the end, reset to beginning
            currentIndex = 0;
        }
        updateVisibleEvents();
    }

    function filterEvents(filter) {
        selectedFilter = filter;
        currentIndex = 0;
        
        if (filter === "*") {
            filteredEvents = [...allEvents];
        } else {
            filteredEvents = allEvents.filter(event => event.classList.contains(filter.replace(".", "")));
        }
        
        updateVisibleEvents();
    }

    // Event listeners
    filterButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Update active class
            filterButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
            
            // Apply filter
            const filter = this.getAttribute("data-filter");
            filterEvents(filter);
        });
    });

    loadMoreBtn.addEventListener("click", showMoreEvents);

    // Initialize
    init();
});
//============ end load more events =========

    </script>

</body>

</html>
