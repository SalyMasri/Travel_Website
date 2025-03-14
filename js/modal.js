// Get the modal
var modalAdventure = document.getElementById("modalAdventure");

// Get the box that opens the modal
var boxAdventure = document.getElementById("adventureBox");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the box, open the modal
boxAdventure.onclick = function() {
  modalAdventure.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modalAdventure.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalAdventure) {
    modalAdventure.style.display = "none";
  }
}
function toggleDetail(detailId) {
    var x = document.getElementById(detailId);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}


document.getElementById('homeAboutSection').addEventListener('click', function() {
    window.location.href = 'about.html';
});

document.getElementById('homePackagesSection').addEventListener('click', function() {
    window.location.href = 'package.html';
});








document.addEventListener('DOMContentLoaded', function() {
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('status') && urlParams.get('status') === 'success') {
        var notificationDiv = document.getElementById('notification');
        notificationDiv.style.display = 'block'; // Show the notification
    }
});
