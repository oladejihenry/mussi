function animatedMenu(x) {
    if (x.classList.contains("change")) {
    	x.classList.remove("change");
    	document.getElementById("monstaNav").style.width = "0";
    	document.getElementById("body").classList.remove("transition");
    } else {
    	x.classList.add("change");
    	document.getElementById("monstaNav").style.width = "250px";
    	document.getElementById("body").classList.add("transition");
    }
}