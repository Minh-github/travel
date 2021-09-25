const picture = document.querySelectorAll('.place img');
const places = document.querySelectorAll('.place .text');
const titles = document.querySelectorAll('.father .title');
const coloumnMode = document.querySelectorAll('.father .column');
const columns = document.querySelectorAll('.column .tag');
const text = document.querySelectorAll('.column .info');
const darkMode = document.querySelectorAll('.mode');


window.addEventListener('load',load());

function load(){
    for (let index = 0; index < places.length; index++) {
        titles[index].innerText = places[index].innerText = AllText[index].Title;
        picture[index].src = `image/${AllText[index].Image}.jpg`;
    }
    let x = 0;
    let y = 0;
    for (let i = 0; i < columns.length; i++) {
        if(y == AllText[x].Columns.length){
            x++;
            y = 0;
        }
        columns[i].innerText = AllText[x].Columns[y].Tag;
        text[i].innerText = AllText[x].Columns[y].Text;
        y++;
    }
    
}

function myFun(){
    document.querySelector('.block').classList.toggle('active');
    document.querySelector('.block_mb').classList.toggle('active');
    document.querySelector('.moon').classList.toggle('active2');
    for (let i = 0; i < darkMode.length; i++) {
        darkMode[i].classList.toggle('darkMode');
    }
    for (let i = 0; i < coloumnMode.length; i++) {
        coloumnMode[i].classList.toggle('darkMode');
    }
    for (let i = 0; i < titles.length; i++) {
        titles[i].classList.toggle('darkMode');   
    }
}
function myFun4(){
    document.querySelector('.nav_mobile').classList.add('active3');
    document.querySelector('.open').style.display = "none";
}
function myFun2(){
    document.querySelector('.nav_mobile').classList.remove('active3');
    document.querySelector('.open').style.display = "block";
}

window.addEventListener('scroll', show);
function show(){
    var showAll = document.querySelectorAll('.father');

    for (let index = 0; index < showAll.length; index++) {
        var windowHeight = window.innerHeight;
        var showTop = showAll[index].getBoundingClientRect().top;
        var point = 50;

        if(showTop < windowHeight - point){
            showAll[index].classList.add('show');
        }
        else{
            showAll[index].classList.remove('show');
        }
    }
}
