

document.getElementById("head").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.getElementById("head").style.display = "flex"
    document.getElementById("head").style.position = "fixed"
    document.querySelector(".content>.brend").style.display = "flex"
}
document.getElementById("brend").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.getElementById("brend").style.display = "flex"
    document.getElementById("brend").style.position = "fixed"
    document.querySelector(".content>.onas").style.display = "flex"
}
document.getElementById("onas").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.getElementById("onas").style.display = "flex"
    document.getElementById("onas").style.position = "fixed"
    document.querySelector(".content>.chisla").style.display = "flex"
}

document.getElementById("chisla").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.getElementById("chisla").style.display = "flex"
    document.getElementById("chisla").style.position = "fixed"
    document.querySelector(".content>.group").style.display = "flex"
}

document.getElementById("group").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.getElementById("group").style.display = "flex"
    document.getElementById("group").style.position = "fixed"
    document.getElementById("sliders").style.position = "relative"

    document.querySelector(".content>.sliders").style.display = "flex"
}

document.getElementById("sliders").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.getElementById("sliders").style.display = "flex"
    document.getElementById("sliders").style.position = "fixed"
    document.querySelector(".content>.news").style.display = "flex"
}

document.getElementById("news").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.getElementById("news").style.display = "flex"
    document.getElementById("news").style.position = "fixed"
    document.querySelector(".content>.mapic").style.display = "flex"
}
document.getElementById("mapic").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.getElementById("mapic").style.display = "flex"
    document.getElementById("mapic").style.position = "fixed"
    document.querySelector(".content>.footer").style.display = "flex"
}
document.getElementById("footer").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.brend").style.display = "flex"
}
const contents =  document.querySelectorAll(".content>div")
// contents.forEach( (item)=>{
//     item.style.display = "none"
// } )
// document.querySelector(".content>.brend").style.display = "flex"
document.getElementById("showAbout").onclick = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.onas").style.display = "flex"
}

document.getElementById("showChisla").onclick = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.chisla").style.display = "flex"
}

document.getElementById("showGroup").onclick = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.group").style.display = "flex"
}



document.getElementById("showSlide").onclick = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.sliders").style.display = "flex"
}



document.getElementById("showNews").onclick = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.news").style.display = "flex"
}
document.getElementById("showMap").onclick = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.mapic").style.display = "flex"
}


document.getElementById("showTop").onclick = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.brend").style.display = "flex"
}

document.getElementById("showFoot").onclick = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.footer").style.display = "flex"
}

document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '.slide-1', {
        type   : 'loop',
		perPage    : 4,
		breakpoints: {
			600: {
				perPage: 1,
			}
		},

	} ).mount();
} );
document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '.slide-2', {
        type   : 'loop',
		perPage    : 4,
		breakpoints: {
			600: {
				perPage: 1,
			}
		},

	} ).mount();
} );


document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '.slide-3', {
        type   : 'loop',
		perPage    : 4,
		breakpoints: {
			600: {
				perPage: 1,
			}
		},

	} ).mount();
} );

const path = document.querySelectorAll("svg path")
path.forEach((item)=>{
  item.onmousemove = function(){
    document.querySelector(item.getAttribute('data-ser')).classList.add("active")
  }
  item.onmouseleave = function(){
    document.querySelector(item.getAttribute('data-ser')).classList.remove("active")
}
})



document.getElementById("footer").onwheel = function(){
    contents.forEach( (item)=>{
        item.style.display = "none"
    } )
    document.querySelector(".content>.header_wrapper").style.display = "flex"
}
