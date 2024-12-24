function toggleMenu() {
  const btn_toggle = document.querySelector(".header__toggler");
  btn_toggle.classList.toggle("collapsed");

  const menu = document.querySelector(".header__menu");
  menu.classList.toggle("collapse");
}
