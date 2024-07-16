setInterval(() => {
  
    if (document.querySelectorAll(".fullscreen")[1].classList.contains("active")){
        document.querySelector(".txt_my.animate__animated").classList.add("animate__fadeInUp")
    }else{
        document.querySelector(".txt_my.animate__animated").classList.remove("animate__fadeInUp")
    }
    if (document.querySelectorAll(".fullscreen")[7].classList.contains("active")){
        document.querySelector(".footer .animate__animated").classList.add("animate__fadeInUp")
    }else{
        document.querySelector(".footer .animate__animated").classList.remove("animate__fadeInUp")
    }
    if (document.querySelectorAll(".fullscreen")[5].classList.contains("active")){
        document.querySelector(".grids.animate__animated").classList.add("animate__fadeInRight")
    }else{
        document.querySelector(".grids.animate__animated").classList.remove("animate__fadeInRight")
    }
    if (document.querySelectorAll(".fullscreen")[0].classList.contains("active")){
        document.querySelector(".grid-mini.animate__animated").classList.add("animate__fadeInUp")
    }else{
        document.querySelector(".grid-mini.animate__animated").classList.remove("animate__fadeInUp")
    }
    if (document.querySelectorAll(".fullscreen")[2].classList.contains("active")){
        document.querySelector(".chisla .animate__animated").classList.add("animate__fadeInUp")
    }else{
        document.querySelector(".chisla .animate__animated").classList.remove("animate__fadeInUp")
    }
    if (document.querySelectorAll(".fullscreen")[3].classList.contains("active")){
        document.querySelector(".group.animate__animated").classList.add("animate__fadeInUp")
    }else{
        document.querySelector(".group.animate__animated").classList.remove("animate__fadeInUp")
    }
    checkNum()
    if (document.querySelectorAll(".fullscreen")[4].classList.contains("active")){
        splidePlayer()
    }

}, 100);

function splidePlayer(){
    document.querySelectorAll('.transfor').forEach((item)=>{
        item.style.transform = 'translateX(-15%);'
    })
}

const counters = document.querySelectorAll('.counter');
// Main function

function checkNum () {
    if(document.querySelectorAll(".fullscreen")[2].classList.contains("active")){
        for(let n of counters) {
            const updateCount = () => {
              const target = + n.getAttribute('data-target');
              const count = + n.innerText;
              const speed = 30; // change animation speed here
              const inc = target / speed; 
              if(count < target) {
                n.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 70);
              } else {
                n.innerText = target;
              }
            }
            updateCount();
        }
    }
}