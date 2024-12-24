document.addEventListener("DOMContentLoaded", () => {
  // トグルボタンを取得
  const btnToggle = document.querySelector(".header__toggler");

  // メニューを取得
  const menu = document.querySelector(".header__menu");

  // トグルボタンにクリックイベントを追加
  btnToggle.addEventListener("click", () => {
    btnToggle.classList.toggle("collapsed");
    menu.classList.toggle("collapse");
  });
});
