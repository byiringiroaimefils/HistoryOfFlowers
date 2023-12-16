var firstIndex = 0;

function automaticslide(){
    setTimeout(automaticslide,5000)

    const img = document.querySelectorAll("#img")

    for(i=0;i< img.length;i++){
        img[i].style.display = "none"
    }
    firstIndex++;
    
    if(firstIndex>img.length){
        firstIndex = 1;
    }
    img[firstIndex-1].style.display ="block"
}
automaticslide()
