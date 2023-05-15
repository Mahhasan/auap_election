function selectCandidate(element) {
    const candidateCards = document.querySelectorAll('.candidate-card');
    candidateCards.forEach(card => {
        card.classList.remove('selected');
    });

    element.classList.add('selected');
}


$(document).ready(function() {
    // When the modal is hidden, pause the video
    $('.bd-example-modal-lg2').on('hidden.bs.modal', function () {
        var iframe = $(this).find('iframe');
        var videoSrc = iframe.attr('src');
        iframe.attr('src', '');
        iframe.attr('src', videoSrc);
    });
});