

// Start script for  load more button in trending items section


let LoadMoreLessButton = document.querySelector('.loadmoreless');

let morePhotos = document.querySelectorAll('.more');


LoadMoreLessButton.addEventListener("click", (e) => {
    for (let i = 0; i < morePhotos.length; i++) {
        morePhotos[i].style.display = "block";
    }


    if (LoadMoreLessButton.innerText === "LOADMORE") {
        LoadMoreLessButton.innerText = "LOADLESS";
    }

    else {
        LoadMoreLessButton.innerText = "LOADMORE";

        for (let i = 0; i < morePhotos.length; i++) {
            morePhotos[i].style.display = "none"; 


        }
    }

})

// End script for  load more button in trending items section



    // Start script for  read more button in latest blogs section

function myFunction1() {
   let dots = document.getElementById("dots1");
    let moreText = document.getElementById("more1");
    let btnText = document.getElementById("myBtn1");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read More"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }


}
function myFunction2() {
    let dots = document.getElementById("dots2");
     let moreText = document.getElementById("more2");
     let btnText = document.getElementById("myBtn2");
   
     if (dots.style.display === "none") {
       dots.style.display = "inline";
       btnText.innerHTML = "Read More"; 
       moreText.style.display = "none";
     } else {
       dots.style.display = "none";
       btnText.innerHTML = "Read less"; 
       moreText.style.display = "inline";
     }
 
 
 }
 function myFunction3() {
    let dots = document.getElementById("dots3");
     let moreText = document.getElementById("more3");
     let btnText = document.getElementById("myBtn3");
   
     if (dots.style.display === "none") {
       dots.style.display = "inline";
       btnText.innerHTML = "Read More"; 
       moreText.style.display = "none";
     } else {
       dots.style.display = "none";
       btnText.innerHTML = "Read less"; 
       moreText.style.display = "inline";
     }
 
 
 }

// End script for  read more button in latest blogs section



