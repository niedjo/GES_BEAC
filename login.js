let tab1 = document.querySelector('.tab1')
let tab2 = document.querySelector('.tab2')
let tab3 = document.querySelector('.tab3')
// let tab4 = document.querySelector('.tab4')

liste_tab = [tab1,tab2,tab3]

let content1 = document.querySelector('.content1')
let content2 = document.querySelector('.content2')
let content3 = document.querySelector('.content3')
// let content4 = document.querySelector('.content4')
let liste_content = [content1,content2,content3]

function display() {
    for (let i = 0; i < liste_content.length; i++) {
        if (i == 0) {
            liste_content[i].style.display = ''
            liste_tab[i].style.backgroundColor = '#d9f150'
        } else {
            liste_content[i].style.display = 'none'
            liste_tab[i].style.background = ''
        }
        
    }
}
display()


tab1.addEventListener("click",function () {
    for (let i = 0; i < liste_content.length; i++) {
        if (i == 0) {
            liste_content[i].style.display = ''
            liste_tab[i].style.background = '#d9f150'
        } else {
            liste_content[i].style.display = 'none'
            liste_tab[i].style.background = ''
        }
        
    }
})
tab2.addEventListener("click",function () {
    for (let i = 0; i < liste_content.length; i++) {
        if (i == 1) {
            liste_content[i].style.display = ''
            liste_tab[i].style.background = '#d9f150'
        } else {
            liste_content[i].style.display = 'none'
            liste_tab[i].style.background = ''
        }
        
    }
})
tab3.addEventListener("click",function () {
    for (let i = 0; i < liste_content.length; i++) {
        if (i == 2) {
            liste_content[i].style.display = ''
            liste_tab[i].style.background = '#d9f150'
        } else {
            liste_content[i].style.display = 'none'
            liste_tab[i].style.background = ''
        }
        
    }
})
// tab4.addEventListener("click",function () {
//     for (let i = 0; i < liste_content.length; i++) {
//         if (i == 3) {
//             liste_content[i].style.display = ''
//             liste_tab[i].style.background = '#d9f150'
//         } else {
//             liste_content[i].style.display = 'none'
//             liste_tab[i].style.background = ''
//         }
        
//     }
// })