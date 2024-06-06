document.addEventListener('DOMContentLoaded', function () {
    const triggerDiv = document.getElementById('triggerDiv');
    const hoverDiv = document.getElementById('hoverDiv');

    let isHoverDivClicked = false;

    triggerDiv.addEventListener('click', () => {
        hoverDiv.style.display = 'block';
    });

    hoverDiv.addEventListener('click', () => {
        isHoverDivClicked = true;
    });

    document.addEventListener('click', (event) => {
        if (!triggerDiv.contains(event.target) && !hoverDiv.contains(event.target) && !isHoverDivClicked) {
            hoverDiv.style.display = 'none';
        }
        isHoverDivClicked = false;
    });
});