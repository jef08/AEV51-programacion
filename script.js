const intro_page = document.querySelector(".intro-page");
const servicios_bttn = document.querySelector(".servicios-bttn");
const seguro_bttn = document.querySelector(".seguro-bttn");
const ong_bttn = document.querySelector(".ong-bttn");
const servicios_emergencias_div = document.querySelector(".servicios-emergencias");
const agentes_seguro_div = document.querySelector(".agentes-seguro");
const ong_div = document.querySelector(".ong");

servicios_emergencias_div.style.display = "none";
agentes_seguro_div.style.display = "none";
ong_div.style.display = "none";

servicios_bttn.addEventListener("click", () => {
    servicios_emergencias_div.style.display = "grid";
    intro_page.style.display = "none";
})

seguro_bttn.addEventListener("click", () => {
    agentes_seguro_div.style.display = "flex";
    intro_page.style.display = "none";
})

ong_bttn.addEventListener("click", () => {
    ong_div.style.display = "block";
    intro_page.style.display = "none";
})
