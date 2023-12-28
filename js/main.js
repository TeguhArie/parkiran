const menuToggle = document.querySelector(".menu-toggle input");
const nav = document.querySelector("nav ul");

menuToggle.addEventListener("click", () => {
  nav.classList.toggle("slide");
});

let sections = document.querySelectorAll("section");
window.onscroll = () => {
  sections.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop;
    let height = (sec.offsetHeight = 150);
    let offsetThreshold = 250;

    if (
      top >= offset - offsetThreshold &&
      top < offset + height + offsetThreshold
    ) {
      sec.classList.add("animate");
    } else {
      sec.classList.remove("animate");
    }
  });
};

// let section = document.getElementsByClassName('anim')[0];
// let a = section.querySelector('.nav ul li a:nth-child(4)');
// a.style.bacgroundColor = 'red';
