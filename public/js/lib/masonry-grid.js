document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById('grid');

    function initializeGrid() {
        const gridItems = container.querySelectorAll('.grid-item');
        gridItems.forEach((item, index) => {
            switch(index % 7) { // If the pattern repeats every 7 elements
                case 0: // If you have a special class for index 0, you can add here.
                    break;
                case 1:
                    item.classList.add('grid-item--height2');
                    break;
                case 2:
                case 4:
                    item.classList.add('grid-item--width2-height3');
                    break;
                case 5:
                    item.classList.add('grid-item--width2-height2');
                    break;
                case 6:
                    item.classList.add('grid-item--width4-height3');
                    break;
                default:
                    // For indices that do not need special classes
                    break;
            }
        });

        const grid = new Packery(container, {
            itemSelector: '.grid-item',
            gutter: '.grid-gutter',
            columnWidth: '.grid-sizer',
            percentPosition: true


        });
    }
    if(container) {
        initializeGrid();
    }

});
