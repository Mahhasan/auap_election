function selectCandidate(element) {
    const candidateCards = document.querySelectorAll('.candidate-card');
    candidateCards.forEach(card => {
        card.classList.remove('selected');
    });

    element.classList.add('selected');
}

function validateForm() {
    var selectedOption = document.querySelector('input[name="candidate_id"]:checked');

    if (!selectedOption) {
        showPopup();
        return false;
    }
    return true;
}

function showPopup() {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");

    popup.style.display = "block";
    overlay.style.display = "block";
}

function closePopup() {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");

    popup.style.display = "none";
    overlay.style.display = "none";
}

document.getElementById("myForm").addEventListener("submit", function(event) {
    if (!validateForm()) {
        event.preventDefault();
    }
});


$(document).ready(function() {
    // When the modal is hidden, pause the video
    $('.bd-example-modal-lg2').on('hidden.bs.modal', function () {
        var iframe = $(this).find('iframe');
        var videoSrc = iframe.attr('src');
        iframe.attr('src', '');
        iframe.attr('src', videoSrc);
    });
});