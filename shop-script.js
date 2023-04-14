let menu = document.querySelector('#menu-btn'); // menu burger
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{ // menu burger
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{ //menu burger
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};


document.querySelector('#close').onclick = () =>{// annulr le modification
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'admin.php';
};