let kediyasi = document.getElementById("kediYasi");
let button = document.getElementById("hesapla");
let sonuc = document.getElementById("sonuc");



button.addEventListener("click" , () => {
    if(kediyasi.value >= 1) {
        sonuc.innerText = Number(kediyasi.value) + 14
    }
    if(kediyasi.value >= 2) {
        sonuc.innerText = Number(kediyasi.value) + 22
    }
    if(kediyasi.value >= 3) {
        sonuc.innerText = ((Number(kediyasi.value) - 2) * 4) + 24
    }
})