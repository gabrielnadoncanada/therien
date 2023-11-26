document.addEventListener("DOMContentLoaded", function () {
    var iso;

    function initializeGrid(grid) {
        const gridItems = grid.querySelectorAll('.grid-item');
        let filtersElem = document.querySelector('.filters-button-group');
        let buttonGroups = document.querySelectorAll('[data-filter]');

        gridItems.forEach((item, index) => {
            switch (index % 7) {
                case 0:
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

        filtersElem.addEventListener('click', function (event) {
            if (!matchesSelector(event.target, 'button')) {
                return;
            }
            let filterValue = event.target.getAttribute('data-filter');

            location.hash = 'service=' + encodeURIComponent(filterValue);
        });

        window.addEventListener('hashchange', function () {
            let hashFilter = function () {
                var hash = location.hash;
                var matches = location.hash.match(/service=([^&]+)/i);
                var hashFilter = matches && matches[1];
                return hashFilter && decodeURIComponent(hashFilter);
            };
            if (!hashFilter) {
                return;
            }
            iso.arrange({filter: hashFilter()});
            for (let i = 0, len = buttonGroups.length; i < len; i++) {
                let buttonGroup = buttonGroups[i];
                buttonGroup.classList.remove('is-checked');

                document.querySelector('[data-filter="' + hashFilter() + '"]').classList.add('is-checked');
            }
        });
    }

    let grid = document.getElementById('grid');
    if (grid) {
        initializeGrid(grid);
    }
});



