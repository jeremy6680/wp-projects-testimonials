// Assign the window.Shuffle object to a variable for easier use
var Shuffle = window.Shuffle;

// Assign the window.jQuery object to a variable for easier use
var jQuery = window.jQuery;

// Create a new Shuffle instance with the specified options
var myShuffle = new Shuffle(document.querySelector('.my-shuffle'), {
  itemSelector: '.image-item',
  sizer: '.my-sizer-element',
  buffer: 1,
});

// Get all filter links on the page
const filterLinks = document.querySelectorAll('.filter-link');

// Attach a click event listener to each filter link
filterLinks.forEach(function(link) {
  // Prevent the default link behavior
  link.addEventListener('click', function(event) {
    event.preventDefault();
    // Get the category from the link's data attribute
    const category = link.dataset.category;
    // Filter the Shuffle instance by the selected category
    myShuffle.filter(category);
  });
});