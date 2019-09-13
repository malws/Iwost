function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

function openSection(clicked_id) {
	//document.getElementById(clicked_id + "_content").style.width = "100%";
	//document.getElementById(clicked_id).style.height = "100%";
	document.getElementById(clicked_id).className = "clicked";
	var x = document.getElementsByClassName('descriptions');
	while(x.length > 0) {
   		x[0].className = 'clicked';  
	}
	document.getElementById(clicked_id + "_content").style.width = "100%";
}

function closeSection(clicked_id) {
	document.getElementById(clicked_id).parentElement.style.width = "0%";
	var x = document.getElementsByClassName('clicked');
	while(x.length > 0) {
   		x[0].className = 'descriptions';  
	}
}
function openPage(clicked_id) {
	closeNav();
	document.getElementById(clicked_id).className = "clicked";
	var x = document.getElementsByClassName('descriptions');
	while(x.length > 0) {
   		x[0].className = 'clicked';  
	}
	document.getElementById(clicked_id + "_section").style.width = "100%";
}

jQuery(document).ready(function(){

	var quadimages = document.querySelectorAll("#quad .attachment-post-thumbnail");
for(i=0; i<quadimages.length; i++) {
  quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); //quad.classList.toggle("full") 
													}); 
}
});
 