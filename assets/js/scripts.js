// Get all filter buttons
const filterButtons = document.querySelectorAll('.filter');

// Get all projects
const projects = document.querySelectorAll('.project');

// Add click event listener to each filter button
filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Get selected category
    const category = button.dataset.category;

    // Loop through all projects and add/remove "hidden" class
    projects.forEach(project => {
      if (category === 'all' || project.classList.contains(category)) {
        project.classList.remove('hidden');
        fadeIn(project);
      } else {
        fadeOut(project);
      }
    });
  });
});

// Fade in function
function fadeIn(element) {
  element.style.opacity = '0';
  element.style.display = 'block';

  let opacity = 0;
  function animate() {
    opacity += 0.05;
    element.style.opacity = opacity.toString();
    if (opacity < 1) {
      requestAnimationFrame(animate);
    }
  }
  animate();
}

// Fade out function
function fadeOut(element) {
  element.style.opacity = '1';

  let opacity = 1;
  function animate() {
    opacity -= 0.05;
    element.style.opacity = opacity.toString();
    if (opacity > 0) {
      requestAnimationFrame(animate);
    } else {
      element.style.display = 'none';
      element.classList.add('hidden');
    }
  }
  animate();
}