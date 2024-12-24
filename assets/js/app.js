function toggleMenu() {
  const btn_toggle = document.querySelector(".header__menu-toggle");
  btn_toggle.classList.toggle("active");

  const menu = document.querySelector(".header__menu");
  menu.classList.toggle("active");
}
