function myfunction (img) {
    var src = img.src;
    var imgModel = document.getElementById("imMod");
    imgModel.src = img.src; 
    
    var modal = document.querySelector('.modal');
    modal.style.display = 'flex';
    
    var closeImg = document.querySelector('.close-img');
    closeImg.addEventListener('click', function() {
    modal.style.display = 'none';
    });
    
    window.addEventListener('click', function(e){
        if (e.target == modal) {
            modal.style.display = 'none';   
        }
    });
}  