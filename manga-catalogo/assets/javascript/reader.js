//array de paginas berserk cap 1:

const pages = [
    "assets/berserk-1-1.jpg",
    "assets/berserk-1-2.jpg",
    "assets/berserk-1-3.jpg",
    "assets/berserk-1-4.jpg",
    "assets/berserk-1-5.jpg",
    "assets/berserk-1-6.jpg",
    "assets/berserk-1-7.jpg",
    "assets/berserk-1-8.jpg",
    "assets/berserk-1-9.jpg",
    "assets/berserk-1-10.jpg",
    "assets/berserk-1-11.jpg",
    "assets/berserk-1-12.jpg",
    "assets/berserk-1-13.jpg",
    "assets/berserk-1-14.jpg",
    "assets/berserk-1-15.jpg",
    "assets/berserk-1-16.jpg",
    "assets/berserk-1-17.jpg",
    "assets/berserk-1-18.jpg",
    "assets/berserk-1-19.jpg",
    "assets/berserk-1-20.jpg",
    "assets/berserk-1-21.jpg",
    "assets/berserk-1-22.jpg",
    "assets/berserk-1-23.jpg",
    "assets/berserk-1-24.jpg",
    "assets/berserk-1-25.jpg",
    "assets/berserk-1-26.jpg",
    "assets/berserk-1-27.jpg",
    "assets/berserk-1-28.jpg",
    "assets/berserk-1-29.jpg",
    "assets/berserk-1-30.jpg",
    "assets/berserk-1-31.jpg",
    "assets/berserk-1-32.jpg",
    "assets/berserk-1-33.jpg",
    "assets/berserk-1-34.jpg"
  ];
  

let pageIndex = 0;

const currentPage = document.getElementById("current_page");
const prevButton = document.getElementById("prev_button");
const nextButton = document.getElementById("next_button");

//funções do reader:

function updatePage() {
  currentPage.src = pages[pageIndex];
}

prevButton.addEventListener("click", () => {
  if (pageIndex > 0) {
    pageIndex--;
    updatePage();
  }
});

nextButton.addEventListener("click", () => {
  if (pageIndex < pages.length - 1) {
    pageIndex++;
    updatePage();
  }
});

updatePage();


//testar js:
console.log("javascript carregado");