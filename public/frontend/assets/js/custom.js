function selectCandidate(element) {
    const candidateCards = document.querySelectorAll('.candidate-card');
    candidateCards.forEach(card => {
        card.classList.remove('selected');
    });

    element.classList.add('selected');
}