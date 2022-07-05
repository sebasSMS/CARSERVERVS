//menuTonggle
  let toggle = document.querySelector('.toggle');
  let navegacion = document.querySelector('.navegacion');
  let main = document.querySelector('.main');

  toggle.onclick = function() {
    navegacion.classList.toggle('active');
    main.classList.toggle('active');

  }

  //add hovered class in selectes list item
  let list = document.querySelectorAll('.navegacion li');

  function activeLink() {
    list.forEach((item) =>
      item.classList.remove('hovered'));
    this.classList.add('hovered');

  }
  list.forEach((item) =>
    item.addEventListener('mouseover', activeLink));