<!-- Latest Residential Properties-->
<div class="section">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-lg-6">
        <h2 class="font-weight-bold text-primary heading">
          Latest Residential Properties
        </h2>
      </div>
      <div class="col-lg-6 text-lg-end text-center"></div>
    </div>

    <div class="row">
      <!-- Property 1 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card shadow-sm border-0">
          <a href="titanium-spr.php">
            <img src="images/on_going_project/SG-Titanium-Gallery-1.jpg" class="card-img-top img-fluid" alt="ROF Insignia Park" style="height: 300px; object-fit: cover;" />
          </a>
          <div class="card-body">
            <h5 class="card-title text-primary">Signature Global Titanium SPR</h5>

            <!-- Dropdown Button -->
            <button class="btn btn-primary btn-sm" type="button" onclick="toggleCollapse(this, 'propertyDetails01')">
              View Details
            </button>

            <!-- Dropdown Content -->
            <div class="collapse mt-2" id="propertyDetails01">
              <div class="card card-body">
                <p><strong>Signature Global Titanium SPR</strong> Like the very essence of its namesake metal, Signature Global Titanium SPR at Sector 71, Gurugram stands as a testament to strength, durability and prestige, promising a sanctuary of enduring quality and timeless elegance.</p>
                <p><strong>Typology:</strong> 3.5 BHK, 4.5 BHK</p>
                <p><strong>Status:</strong> On-Going</p>
                <p><strong>Category:</strong> High Rise Apartments</p>
                <a href="titanium-spr.php" class="btn btn-outline-primary btn-sm">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Property 2 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card shadow-sm border-0">
          <a href="sg-city-92.php">
            <img src="images/on_going_project/sg-city-92-min.webp" class="card-img-top img-fluid" alt="Signature Global Daxin Gurugram" style="height: 300px; object-fit: cover;" />
          </a>
          <div class="card-body">
            <h5 class="card-title text-primary">Signature Global City 92</h5>

            <!-- Dropdown Button -->
            <button class="btn btn-primary btn-sm" type="button" onclick="toggleCollapse(this, 'propertyDetails02')">
              View Details
            </button>

            <!-- Dropdown Content -->
            <div class="collapse mt-2" id="propertyDetails02">
              <div class="card card-body">
                <p><strong>Signature Global City 92</strong> This residential complex rejuvenates and refreshes your mind with the essence of serenity in nature's closeness.</p>
                <p><strong>Typology:</strong> 2 BHK & 3 BHK</p>
                <p><strong>Status:</strong> On-Going</p>
                <p><strong>Category:</strong> Low Rise Premium Independent Floors</p>
                <a href="sg-city-92.php" class="btn btn-outline-primary btn-sm">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Property 3 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card shadow-sm border-0">
          <a href="global-park4and5.php">
            <img src="images/on_going_project/sg-park-4&5-min.webp" class="card-img-top img-fluid" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;" />
          </a>
          <div class="card-body">
            <h5 class="card-title text-primary">Signature Global Park IV & V</h5>

            <!-- Dropdown Button -->
            <button class="btn btn-primary btn-sm" type="button" onclick="toggleCollapse(this, 'propertyDetails03')">
              View Details
            </button>

            <!-- Dropdown Content -->
            <div class="collapse mt-2" id="propertyDetails03">
              <div class="card card-body">
                <p><strong>Signature Global Park IV & V</strong> Experience a luxurious life in the lush green environment with ultimate amenities for the well-being of every individual</p>
                <p><strong>Typology:</strong> 2 BHK & 3 BHK</p>
                <p><strong>Status:</strong> On-Going</p>
                <p><strong>Category:</strong> Low Rise Premium Independent Floors</p>
                <a href="global-park4and5.php" class="btn btn-outline-primary btn-sm">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Latest Residential Properties -->

<!-- Ensure Bootstrap is Loaded -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function toggleCollapse(button, targetId) {
    var target = document.getElementById(targetId);
    if (!target) return; // Ensure target exists

    var collapseInstance = bootstrap.Collapse.getOrCreateInstance(target);

    // Close all other open dropdowns
    document.querySelectorAll(".collapse.show").forEach(function (openDropdown) {
      if (openDropdown !== target) {
        bootstrap.Collapse.getOrCreateInstance(openDropdown).hide();
        let openButton = openDropdown.closest(".card").querySelector("button");
        if (openButton) openButton.innerText = "View Details"; // Reset other buttons
      }
    });

    // Toggle the clicked dropdown
    if (target.classList.contains("show")) {
      collapseInstance.hide();
      button.innerText = "View Details";
    } else {
      collapseInstance.show();
      button.innerText = "Hide Details";
    }
  }
</script>