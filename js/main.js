    function showSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.style.display = 'flex';
      document.querySelector('.menu-button').style.display = 'none';
    }

    function hideSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.style.display = 'none';
      document.querySelector('.menu-button').style.display = 'block';
    }
