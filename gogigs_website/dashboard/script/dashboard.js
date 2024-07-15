document.addEventListener('DOMContentLoaded', function () {
  fetch('sidebarContent.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('sidebar-content').innerHTML = data;

      // Add the click event listener for the sidebar list items after loading the content
      const listItems = document.querySelectorAll(".sidebar-list li");

      listItems.forEach((item) => {
        item.addEventListener("click", () => {
          let isActive = item.classList.contains("active");

          listItems.forEach((el) => {
            el.classList.remove("active");
          });

          if (isActive) item.classList.remove("active");
          else item.classList.add("active");
        });
      });

      // Add the click event listener for the dropdown functionality
      document.addEventListener('click', function (e) {
        if (e.target.matches('.dropdown .title')) {
          const parent = e.target.closest('.dropdown');
          parent.classList.toggle('open');
        }
      });
    })
    .catch(error => console.error('Error loading sidebar content:', error));

  // Sidebar toggle functionality
  const sidebar = document.querySelector('.sidebar');
  const toggleSidebar = document.querySelector('.toggle-sidebar');
  const logo = document.querySelector('.logo-box');

  toggleSidebar.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });

  logo.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });
});
