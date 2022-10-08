function showMenu() {
	document.getElementById("profile").classList.toggle("active");
}

function showImage(event){
    if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("image1-preview");
        preview.src = src;
        preview.style.display = "block";

    } 
}
function showAddPost() {
	document.getElementById("addPost").classList.toggle("active");
}
function hideAddPost() {
	document.getElementById("addPost").classList.remove("active");
}
