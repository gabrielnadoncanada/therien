document.addEventListener("DOMContentLoaded", function () {
    var iso;

    function initializeGrid() {
        const gridItems = grid.querySelectorAll('.grid-item');
        gridItems.forEach((item, index) => {
            switch (index % 7) { // If the pattern repeats every 7 elements
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


        iso = new Isotope(grid, {
            itemSelector: '.grid-item',
            gutter: '.grid-gutter',
            columnWidth: '.grid-sizer',
            percentPosition: true,
            layoutMode: 'packery'
        });
    }

    function getHashFilter() {
        var hash = location.hash;

        var matches = location.hash.match(/service=([^&]+)/i);
        var hashFilter = matches && matches[1];




        return hashFilter && decodeURIComponent(hashFilter);
    }

    function onHashchange() {
        var hashFilter = getHashFilter();


        console.log(hashFilter);

        if (!hashFilter) {
            return;
        }

        iso.arrange({filter: hashFilter});

        for (let i = 0, len = buttonGroups.length; i < len; i++) {
            let buttonGroup = buttonGroups[i];
            buttonGroup.classList.remove('is-checked');

            document.querySelector('[data-filter="' + hashFilter + '"]').classList.add('is-checked');
        }
    }

    var grid = document.getElementById('grid');
    var buttonGroups = document.querySelectorAll('[data-filter]');

    initializeGrid();
    onHashchange();


    var filtersElem = document.querySelector('.filters-button-group');

    filtersElem.addEventListener('click', function (event) {
        if (!matchesSelector(event.target, 'button')) {
            return;
        }
        var filterValue = event.target.getAttribute('data-filter');

        location.hash = 'service=' + encodeURIComponent(filterValue);
    });


    window.addEventListener('hashchange', onHashchange);

});



