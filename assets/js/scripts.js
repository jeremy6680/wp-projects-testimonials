// init Isotope
var grid = document.querySelector('.grid');
var iso = new Isotope(grid, {
// options
});

// filter items on button click
var filterButtonGroup = document.querySelector('.filter-button-group');
filterButtonGroup.addEventListener('click', function(event) {
// only listen for clicks on buttons
if (!event.target.matches('button')) {
return;
}

var filterValue = event.target.getAttribute('data-filter');
iso.arrange({ filter: filterValue });
});