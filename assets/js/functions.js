$(window).on("load", function () {
  $(".pack-ul").mCustomScrollbar({
    autoHideScrollbar: true,
  });
});

$(document).ready(function () {

  // Custom Dots Functionality for #testslider
  var dotsContainer = $(".arr-gap"); // Select the custom dots container

  // Bind the 'initialized.owl.carousel' event before initializing the carousel
  $("#testslider").on("initialized.owl.carousel", function (event) {
    var totalSlides = event.item.count;

    // Dynamically generate dots based on the number of original slides
    for (var i = 0; i < totalSlides; i++) {
      dotsContainer.append('<div class="image-size"></div>');
    }

    var dots = $(".arr-gap .image-size"); // Update the dots variable after generation

    // Function to update active dot
    function updateActiveDot(index) {
      dots.removeClass("active-dot"); // Remove active class from all dots
      dots.eq(index).addClass("active-dot"); // Add active class to the current dot
    }

    // Set the initial active dot
    updateActiveDot(0);

    // Listen for slide change events
    $("#testslider").on("changed.owl.carousel", function (event) {
      var currentIndex;

      // Check if the 'relative' method is available
      if (typeof event.relatedTarget.relative === "function") {
        currentIndex = event.relatedTarget.relative(event.item.index);
      } else {
        // Fallback method if 'relative' is not available
        currentIndex =
          event.item.index - event.relatedTarget.clones().length / 2;
        currentIndex =
          ((currentIndex % totalSlides) + totalSlides) % totalSlides;
      }

      updateActiveDot(currentIndex);
    });

    // Make dots clickable to navigate to slides
    dots.click(function () {
      var index = $(this).index();
      $("#testslider").trigger("to.owl.carousel", [index, 300, true]); // 300ms is the speed of the transition
    });
  });

  // Initialize Owl Carousel for #testslider
  $("#testslider").owlCarousel({
    loop: true,
    margin: 0,
    dots: false, // Disable default dots
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    touchDrag: true, // Enable touch drag for mobile devices
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});

$(".chat").click(function () {
  Tawk_API.toggle();
});

$(window).scroll(function () {
  if ($(this).scrollTop() > 1) {
    $(".header123").addClass("navbar-shrink");
  } else {
    $(".header123").removeClass("navbar-shrink");
  }
});

function get_package(a) {
  $("#packages2").val(a);
  $("#packages3").val(a);

  let b = $("#packages2").val();
  $("#packages-val").val(b);

  let b3 = $("#packages3").val();
  $("#packages-val2").val(b3);
}

function get_packagess(val) {
  $(`#packages3`).val(val).change();
  // $(`#packages3 option[value="${val}"]`).prop('selected', true);
  let data = $(`#packages3`).val();

  $(`#packages3 option:eq(${index})`).prop("selected", true);
}

function getURLParameter(name) {
  return (
    decodeURIComponent(
      (new RegExp("[?|&]" + name + "=" + "([^&;]+?)(&|#|;|$)").exec(
        location.search
      ) || [null, ""])[1].replace(/\+/g, "%20")
    ) || null
  );
}

var val = getURLParameter("pack");
// $('#packages').val(val);

if (val == "1") {
  $("#packages").val("BASIC LOGO PACKAGE - £35.00");
}
if (val == "2") {
  $("#packages").val("STARTUP LOGO PACKAGE - £65.00");
}
if (val == "3") {
  $("#packages").val("PROFESSIONAL LOGO PACKAGE - £99.99");
}
if (val == "4") {
  $("#packages").val("BUSINESS LOGO PACKAGE - £149.99");
}
if (val == "5") {
  $("#packages").val("LOGO & WEB PACKAGE - £249.99");
}
if (val == "6") {
  $("#packages").val("START UP WEBSITE PACKAGE - £299");
}
if (val == "7") {
  $("#packages").val("PROFESSIONAL WEBSITE PACKAGE - £544");
}

if (val == "8") {
  $("#packages").val("IDENTITY WEB PACKAGE - £924");
}

if (val == "9") {
  $("#packages").val("ELITE WEB PACKAGE - £1,324");
}

if (val == "10") {
  $("#packages").val("BUSINESS WEB PACKAGE - £1,824");
}

if (val == "11") {
  $("#packages").val("BEGINNERS E-COMMERCE PACKAGE - £895");
}

if (val == "12") {
  $("#packages").val("CORPORATE E-COMMERCE PACKAGE - £1,695");
}

if (val == "13") {
  $("#packages").val("ELITE E-COMMERCE PACKAGE - £2,595");
}

$("#packages1").val($("#packages").val());

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (event) {
    event.preventDefault();
    const targetId = this.getAttribute("href").substring(1);
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      targetElement.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });
});

$(".desk-menu").click(function () {
  $(".menu-left").toggleClass("enable");
});

$(".menu-lclose , .menu-lover").click(function () {
  $(".menu-left").removeClass("enable");
});

const handleBannerForm = async (e, submitted_from) => {
  e.preventDefault();

  // Retrieve form input values
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const description = document.getElementById("description").value;

  // Prepare the object to send
  const objToSend = {
    name,
    email,
    phone,
    description,
    submitted_from,
    submitted_at: new Date().toLocaleString()
  };

  try {
    // Make a POST request to the API endpoint
    await fetch("https://form-submission-google-sheet.vercel.app/submit-form", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(objToSend),
    });
    e.target.reset();
    alert("Form Submitted Successfully");
  } catch (error) {
    console.error("Error during API call:", error);
    alert("An error occurred while submitting the form. Please try again.");
  }
};

const handlePopupRectForm = async (e, submitted_from) => {
  e.preventDefault();

  // Retrieve form input values with matching field names
  const name = document.getElementById("namePopup").value;
  const email = document.getElementById("emailPopup").value;
  const phone = document.getElementById("phonePopup").value;
  const description = document.getElementById("descriptionPopup").value;

  // Prepare the object to send
  const objToSend = {
    name,
    email,
    phone,
    description,
    submitted_from,
    submitted_at: new Date().toLocaleString()
  };

  try {
    // Make a POST request to the API endpoint
    await fetch("https://form-submission-google-sheet.vercel.app/submit-form", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(objToSend),
    });
    e.target.reset();
    alert("Form Submitted Successfully");
  } catch (error) {
    console.error("Error during API call:", error);
    alert("An error occurred while submitting the form. Please try again.");
  }
};

const handlePopupPackage = async (e, submitted_from) => {
  e.preventDefault();
  const form = e.target;

  // Extract values from the form elements
  const name = form.elements["Name"].value;
  const email = form.elements["Email"].value;
  const phone = form.elements["Number"].value;
  const description = form.elements["Message"].value;
  const selected_package = form.elements["Interested"].value;

  // Construct the object to send
  const objToSend = {
    name,
    email,
    phone,
    description,
    submitted_from,
    selected_package,
    submitted_at: new Date().toLocaleString()
  };

  try {
    // Make a POST request to the API endpoint
    await fetch("https://form-submission-google-sheet.vercel.app/submit-form", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(objToSend),
    });
    e.target.reset();
    alert("Form Submitted Successfully");
  } catch (error) {
    console.error("Error during API call:", error);
    alert("An error occurred while submitting the form. Please try again.");
  }
};
