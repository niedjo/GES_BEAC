let autent = document.getElementById('autent')
let form = document.querySelector('.form')

// on recupere les onglets et les contenues 

let tab1 = document.querySelector('.tab1')
let tab2 = document.querySelector('.tab2')
let tab3 = document.querySelector('.tab3')
liste_tab = [tab1,tab2,tab3]

let content1 = document.querySelector('.content1')
let content2 = document.querySelector('.content2')
let content3 = document.querySelector('.content3')
// let section = document.querySelector('.section')

function display() {
    // content1.style.display = 'none'
    liste_tab[0].style.background = '#d9f150'
    content2.style.display = 'none'
    content3.style.display = 'none'
    // form.style.display = ''
}
display()

tab1.addEventListener("click",function () {
    // section.style.display = 'none'
    for (let i = 0; i < liste_tab.length; i++) {
        if (i == 0) {
            liste_tab[i].style.background = '#d9f150'
        }
        else{
            liste_tab[i].style.background = 'white'
        }
    }
    form.style.display = 'none'
    content1.style.display = ''
    content2.style.display = 'none'
    content3.style.display = 'none'
    
})
tab2.addEventListener("click",function () {
    // section.style.display = 'none'
    for (let i = 0; i < liste_tab.length; i++) {
        if (i == 1) {
            liste_tab[i].style.background = '#d9f150'
        }
        else{
            liste_tab[i].style.background = 'white'
        }
    }
    form.style.display = 'none'
    content1.style.display = 'none'
    content2.style.display = ''
    content3.style.display = 'none'
    
})
tab3.addEventListener("click",function () {
    // section.style.display = 'none'
    for (let i = 0; i < liste_tab.length; i++) {
        if (i == 2) {
            liste_tab[i].style.background = '#d9f150'
        }
        else{
            liste_tab[i].style.background = 'white'
        }
    }
    form.style.display = 'none'
    content1.style.display = 'none'
    content2.style.display = 'none'
    content3.style.display = ''
    
})

form.style.display = 'none'
autent.addEventListener('click',function () {
    form.style.display = ''
    content1.style.display = 'none'
    content2.style.display = 'none'
    content3.style.display = 'none'
})



