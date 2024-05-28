// Pakete-botoi guztiak eskuratu
const buttons = document.querySelectorAll(".package-btn");

// DOMeko elementuak lortzea
const packageInfoDiv = document.getElementById("package-info");
const packageDetails = document.getElementById("package-details");
const hideInfoBtn = document.getElementById("hide-info-btn");
const startDeliveryBtn = document.getElementById("start-delivery-btn");
const deliveryCompletedBtn = document.getElementById("delivery-completed-btn");
const cancelDeliveryBtn = document.getElementById("cancel-delivery-btn");
const inProgressPackageDiv = document.getElementById("in-progress-package");
const deliveredPackagesDiv = document.getElementById("delivered-packages");

// Uneko paketearen informazioa biltegiratzeko aldagaia
let currentPackageInfo = null;
let currentPackageButton = null;

// Gehitu klik bat pakete botoi bakoitzean
buttons.forEach((button) => {
  button.addEventListener("click", function () {
    // Data-info atributuaren paketeko informazioa lortu
    const info = JSON.parse(this.getAttribute("data-info"));
    currentPackageInfo = info;
    currentPackageButton = this;

    // Erakutsi paketearen informazioa div
    packageDetails.innerHTML =
      "<p>Pakete ID-a: " +
      info.id_Paketea +
      "</p>" +
      "<p>Entregatze Helbidea: " +
      info.entregatze_helbidea +
      "</p>" +
      "<p>Entregatze Data: " +
      info.entregatze_data +
      "</p>";

    // Paketearen informazio-diba ikusgai egitea
    packageInfoDiv.style.display = "block";
  });
});

// "Ikusteari Utzi" botoirako ekitaldia
hideInfoBtn.addEventListener("click", function () {
  packageInfoDiv.style.display = "none";
  currentPackageInfo = null;
  currentPackageButton = null;
});

// "Banatu" botoirako ekitaldia
startDeliveryBtn.addEventListener("click", function () {
  if (currentPackageInfo && currentPackageButton) {
    // Botoi berri bat sortu jatorrizko botoiaren estilo eta eduki berarekin
    const newButton = document.createElement("button");
    newButton.className = currentPackageButton.className;
    newButton.innerHTML = currentPackageButton.innerHTML;
    newButton.setAttribute(
      "data-info",
      currentPackageButton.getAttribute("data-info")
    );

    // Gehitu funtzionaltasuna paketea "Abian dagoen paketea" tik entregatzeko
    newButton.addEventListener("click", function () {
      currentPackageInfo = JSON.parse(this.getAttribute("data-info"));
      currentPackageButton = this;
      packageDetails.innerHTML =
        "<p>Pakete ID-a: " +
        currentPackageInfo.id_Paketea +
        "</p>" +
        "<p>Entregatze Helbidea: " +
        currentPackageInfo.entregatze_helbidea +
        "</p>" +
        "<p>Entregatze Data: " +
        currentPackageInfo.entregatze_data +
        "</p>";
      packageInfoDiv.style.display = "block";
    });

    //Mugitu botoi berria "Abian dagoen Paketea" botoira
    inProgressPackageDiv.innerHTML = "";
    inProgressPackageDiv.appendChild(newButton);

    // "Banatu beharreko paketeak" botoiaren jatorrizko botoia ezabatzea.
    currentPackageButton.remove();

    // Ezkutatu paketearen informazio-div.
    packageInfoDiv.style.display = "none";
    currentPackageInfo = null;
    currentPackageButton = null;
  }
});

// "Entregatu" botoirako ekitaldia
deliveryCompletedBtn.addEventListener("click", function () {
  if (currentPackageInfo && currentPackageButton) {
    // Eguneratu paketearen egoera datu-basean
    fetch("paketeak.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "completeDelivery=true&id_Paketea=" + currentPackageInfo.id_Paketea,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          // Botoi berri bat sortu jatorrizko botoiaren estilo eta eduki berarekin
          const newButton = document.createElement("button");
          newButton.className = currentPackageButton.className;
          newButton.innerHTML = currentPackageButton.innerHTML;
          newButton.setAttribute(
            "data-info",
            currentPackageButton.getAttribute("data-info")
          );

          // Mugitu botoi berria "Entregatutako paketeak" botoira
          deliveredPackagesDiv.appendChild(newButton);

          // Ezabatu "Banatu beharreko paketeak" edo "Abian dagoen paketea" botoiaren jatorrizko botoia.
          currentPackageButton.remove();

          //Ezkutatu paketearen informazio-div.
          packageInfoDiv.style.display = "none";
          currentPackageInfo = null;
          currentPackageButton = null;
        } else {
          alert("Errorea paketea entregatzeko.");
        }
      });
  }
});

// "Ezeztatu" botoirako ekitaldia
cancelDeliveryBtn.addEventListener("click", function () {
  if (currentPackageInfo) {
    openReasonModal();
  }
});

function openReasonModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeReasonModal() {
  document.getElementById("myModal").style.display = "none";
}

function saveReason() {
  var reason = document.getElementById("reason").value;
  var packageId = currentPackageInfo.id_Paketea;
  fetch("paketeak.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body:
      "cancelDelivery=true&id_Paketea=" +
      packageId +
      "&reason=" +
      encodeURIComponent(reason),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status === "success") {
        alert("Inzidentzia jasota: " + reason);
        closeReasonModal();
        // Ezabatu baliogabetutako paketearen botoia
        currentPackageButton.remove();
        // Ezkutatu paketearen informazio-div.
        packageInfoDiv.style.display = "none";
        currentPackageInfo = null;
        currentPackageButton = null;
      } else {
        alert("Errorea paketea cancelatzeko.");
      }
    });
}
