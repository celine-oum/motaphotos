//drop down button js //
function toggleDropdown(button) {
  // Close all dropdowns first
  document.querySelectorAll('.dropdown').forEach(dropdown => {
      if (dropdown !== button.parentElement) {
          dropdown.classList.remove('active');
      }
  });
  // Toggle the clicked dropdown
  button.parentElement.classList.toggle('active');
}
// Close dropdowns when clicking outside
document.addEventListener('click', function(event) {
  if (!event.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown').forEach(dropdown => {
          dropdown.classList.remove('active');
      });
  }
});
//end of drop down dutton js//
const menuIcon = document.querySelector('.menu-icon');
const closeIcon = document.querySelector('.close-icon');
const mobileMenu = document.querySelector('.mobile-menu');
menuIcon.addEventListener('click', () => {
  mobileMenu.classList.add('active');
});
closeIcon.addEventListener('click', () => {
  mobileMenu.classList.remove('active');
});