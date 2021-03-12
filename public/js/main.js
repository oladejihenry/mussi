function navigate() {
	console.log(document.getElementById("mySidenav").style.width);
	if (document.getElementById("mySidenav").style.width == "250px") {
		document.getElementById("mySidenav").style.width = "0";
    	document.getElementById("content").style.transform = "none";
	}

	else{
	    document.getElementById("mySidenav").style.width = "250px";
	    document.getElementById("content").style.transform = "translate(-250px)";
	}
}
$(".my-rating").starRating({
    starSize: 18,
    initialRating: 4.3,
    readOnly: true,
    callback: function(currentRating, $el){
        // make a server call here
    }
});