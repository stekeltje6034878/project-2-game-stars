    function showSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.style.display = 'flex';
      document.querySelector('.menu-button').style.display = 'none';
    }

    // Functie om de sidebar te verbergen
    function hideSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.style.display = 'none';
      document.querySelector('.menu-button').style.display = 'block';
    }
