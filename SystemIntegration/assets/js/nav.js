document.addEventListener('DOMContentLoaded', function () {
  const userIcon = document.querySelector('.top_bar_links a.logo-button img[src*="user.png"]').parentNode;
  const loginOverlay = document.getElementById('loginOverlay');
  const closeBtn = document.getElementById('closeOverlayBtn');

  
  userIcon.addEventListener('click', function (e) {
    e.preventDefault();
    loginOverlay.classList.add('active');
  });

  
  closeBtn.addEventListener('click', function () {
    loginOverlay.classList.remove('active');
  });

  
  loginOverlay.addEventListener('click', function (e) {
    if (!e.target.closest('.overlay-panel')) {
      loginOverlay.classList.remove('active');
    }
  });
});


    const bellBtn = document.querySelector('.dropbtn');
    
    const dropdown = document.getElementById('notification-dropdown');

    
    bellBtn.addEventListener('click', function(e) {
        e.preventDefault();
        dropdown.classList.toggle('show');
    });

    
    window.addEventListener('click', function(e) {
        if (!e.target.matches('.dropbtn') && !e.target.closest('.dropdown')) {
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
            }
        }
    });


    