document.addEventListener("DOMContentLoaded", function () {
  const burger = document.getElementById("mobileBurger");
  const menu = document.getElementById("mobileMenu");

  if (burger && menu) {
    burger.addEventListener("click", function () {
      console.log("new class");
      menu.classList.toggle("open");
    });
  }
});
// Функция для обертки текста в span с подложкой
// Функция для обертки текста в span с подложкой
// Функция для обертки текста в правильную структуру
function fixSliderTextPosition() {
  const slides = document.querySelectorAll(".sow-slider-image-wrapper");

  slides.forEach((wrapper) => {
    // Находим h3 внутри
    const h3 = wrapper.querySelector("h3");
    if (!h3) return;

    // Проверяем, не обернут ли уже
    if (h3.closest(".slider-text-wrapper")) return;

    // Создаем обертки
    const textWrapper = document.createElement("div");
    textWrapper.className = "slider-text-wrapper";

    const contentWrapper = document.createElement("div");
    contentWrapper.className = "slider-content";

    // Перемещаем h3 в обертки
    h3.parentNode.insertBefore(contentWrapper, h3);
    contentWrapper.appendChild(textWrapper);
    textWrapper.appendChild(h3);
  });
}
// Функция для обертки текста в span с подложкой
function wrapTextWithBackground() {
  const slides = document.querySelectorAll(".sow-slider-image-wrapper h3");

  slides.forEach((slide) => {
    // Пропускаем, если уже есть обертка .text-bg
    if (slide.querySelector(".text-bg")) return;

    const text = slide.innerText; // Берем чистый текст
    // Оборачиваем весь текст в span с классом text-bg
    slide.innerHTML = `<span class="text-bg">${text}</span>`;
  });
}

// Функция для градиента на первом слове
function addGradientToFirstWord() {
  const textSpans = document.querySelectorAll(
    ".sow-slider-image-wrapper h3 .text-bg",
  );

  textSpans.forEach((span) => {
    // Пропускаем, если уже есть gradient-text
    if (span.querySelector(".gradient-text")) return;

    const text = span.innerText; // Берем чистый текст
    const firstSpace = text.indexOf(" ");

    let firstWord, restText;

    if (firstSpace > 0) {
      firstWord = text.substring(0, firstSpace);
      restText = text.substring(firstSpace);
      span.innerHTML = `<span class="gradient-text">${firstWord}</span>${restText}`;
    } else {
      span.innerHTML = `<span class="gradient-text">${text}</span>`;
    }
  });
}

// Добавляем стили
const style = document.createElement("style");
style.textContent = `
  .gradient-text {
    background: linear-gradient(135deg, #8EE901 0%, #4F9C2C 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }
`;
document.head.appendChild(style);

// Запускаем один раз после загрузки
// Запускаем все функции
document.addEventListener("DOMContentLoaded", function () {
  fixSliderTextPosition(); // Новая функция для структуры
  wrapTextWithBackground();
  addGradientToFirstWord();
});

document.addEventListener("cycle-after", function () {
  setTimeout(function () {
    fixSliderTextPosition();
    wrapTextWithBackground();
    addGradientToFirstWord();
  }, 50);
});
