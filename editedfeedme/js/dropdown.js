document.addEventListener('DOMContentLoaded', () => {
  const dropdownButton = document.getElementById('dropdownMenuButton');
  const dropdownMenu = document.querySelector('.dropdown-menu');

  dropdownButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('show');
  });
});
