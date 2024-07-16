
const path = document.querySelectorAll("svg path");
path.forEach((item) => {
  item.onmouseenter = function () {
    document.querySelector(item.getAttribute("data-ser")).classList.add("active");
  };
  item.onmouseleave = function () {
    document.querySelector(item.getAttribute("data-ser")).classList.remove("active");
  };
});

const activs = document.querySelectorAll(".fullscreen");
document.getElementById("one").onclick = function () {
  activs.forEach((item) => {
    item.classList.remove("active");
  });
  activs[1].classList.add("active");
};
document.querySelectorAll("#nazad").forEach((item) => {
  
  if(window.innerWidth > 768){
    item.addEventListener("click", function () {
      document.querySelectorAll(".alert-modal").forEach((item) => {
        item.style.left = "";
      });

    })
  }else{
    item.addEventListener("click", function () {
      document.querySelectorAll(".alert-modal").forEach((item) => {
        item.style.left = "";
      });
    })
  }
});

const modaler = document.querySelectorAll("#modalOpen");
const modaler2 = document.querySelectorAll("#imgtab");

  
  modaler.forEach((item) => {
    if(window.innerWidth < 768){
      item.addEventListener('click', function () {
        document.getElementById(item.getAttribute("data-modal")).style.left = "50%";
        document.getElementById(item.getAttribute("data-modal")).style.transform =
          "translate(-50%, 0)";
  
      })
    }
    else{
      item.addEventListener('click', function () {
        document.getElementById(item.getAttribute("data-modal")).style.left = "50%";
        document.getElementById(item.getAttribute("data-modal")).style.transform =
          "translate(-50%, 0)";
  
      })
    }
  
  });
  modaler2.forEach((item) => {
    if(window.innerWidth < 768){
      item.addEventListener('click', function () {
        document.getElementById(item.getAttribute("data-modal")).style.left = "50%";
        document.getElementById(item.getAttribute("data-modal")).style.transform =
          "translate(-50%, 0)";
  
      })
    }
    else{
      item.addEventListener('click', function () {
        document.getElementById(item.getAttribute("data-modal")).style.left = "50%";
        document.getElementById(item.getAttribute("data-modal")).style.transform =
          "translate(-50%, 0)";
  
      })
    }
  
  });


document.querySelector(".logo").onclick = function () {
  document.querySelector(".main-container").style.transform = "translateY(0)";
  document.querySelectorAll(".fullscreen").forEach((item) => {
    item.classList.remove("active");
  });
  document.querySelector("#mainpage").classList.remove("active");
  // document.querySelectorAll(".fullscreen")[4].classList.add("active")
};

function perexod() {
  var elmnt = document.querySelectorAll(".fullscreen")[0];
  var offsetHisob = elmnt.offsetHeight;
  document.querySelector(".main-container").style.transform = `translateY(-${offsetHisob + 80 - offsetHisob + 25
    }px)`;
  document.querySelectorAll(".fullscreen").forEach((item) => {
    item.classList.remove("active");
  });
  document.querySelector("#mainpage").classList.add("active");
}

function allPer(index){
     allPerexod(index);
     allPerexod(index);
}

function allPerexod(index) {
  var elmnt = document.querySelectorAll(".fullscreen")[0];
  var contentBottom = document.querySelectorAll(".next-block")[0].offsetHeight;
  var offsetHisob = elmnt.offsetHeight;
  document.querySelector(".main-container").style.transform = `translateY(-${offsetHisob * index + contentBottom
    }px)`;
  document.querySelectorAll(".fullscreen").forEach((item) => {
    item.classList.remove("active");
  });
  document.querySelectorAll(".fullscreen")[index].classList.add("active");
  document.querySelector("#mainpage").classList.add("active");

}

document.querySelectorAll(".abs-container").forEach((item) => {
  item.onwheel = function () {
    var elmnt = document.querySelectorAll(".fullscreen")[0];
    
    var offsetHisob = elmnt.offsetHeight;
    document.querySelector(".main-container").style.transform = `translateY(-${offsetHisob + 80 - offsetHisob + 25
      }px)`;
    document.querySelectorAll(".fullscreen").forEach((item) => {
      item.classList.remove("active");
    });
    document.querySelector("#mainpage").classList.add("active");
  };
});

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "grid";
  evt.currentTarget.className += " active";
}

  openCity(event, 'organ')





for (let sliders = 1; sliders <= 5; sliders++) {
  document.addEventListener("DOMContentLoaded", function () {

   new Splide(`.slide-${[sliders]}`, {
      type: "loop",
      perPage: 4,

      breakpoints: {
        968: {
        perPage: 1,
          interval: 3500,
        },
     },
      interval: 1500, // How long to display each slide
      pauseOnHover: false, // must be false
      pauseOnFocus: false, // must be false
      resetProgress: false,
    }).mount();
  });
}




document.querySelectorAll(".tablinks")[0].classList.add("active")
new Splide('.slide-4', {
  type: "loop",
}).mount();


new Splide('.slide-5', {
  type: "loop",
}).mount();

for(let sl=1; sl<=5; sl++){
  new Splide(`.m-slide-${sl}`, {
  perPage: 2,
    type: "loop"
  
  }).mount();
}




// developer Farruh Turgunpolatov