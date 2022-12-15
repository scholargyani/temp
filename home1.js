// /* Slider (work in progress)
//  * 03/09/2015 by Andrew Errico
//  */
// $(function() {

//     // slider type
//     $t = "slide"; // opitions are fade and slide
    
//   	//variables
//     $f = 1000,  // fade in/out speed
//     $s = 1000,  // slide transition speed (for sliding carousel)
//     $d = 5000;  // duration per slide
    
//     $n = $('.slide').length; //number of slides
//     $w = $('.slide').width(); // slide width
//   	$c = $('.container').width(); // container width
//    	$ss = $n * $w; // slideshow width
  
  	
//       function timer() {
//         $('.timer').animate({"width":$w}, $d);
//         $('.timer').animate({"width":0}, 0);
//     }

  
//   // fading function
//     function fadeInOut() {
//       timer();
//         $i = 0;    
//         var setCSS = {
//             'position' : 'absolute',
//             'top' : '0',
//             'left' : '0'
//         }        
        
//         $('.slide').css(setCSS);
        
//         //show first item
//         $('.slide').eq($i).show();
        

//         setInterval(function() {
//           timer();
//             $('.slide').eq($i).fadeOut($f);
//             if ($i == $n - 1) {
//                 $i = 0;
//             } else {
//                 $i++;
//             }
//             $('.slide').eq($i).fadeIn($f, function() {
//                 $('.timer').css({'width' : '0'});
//             });

//         }, $d);
        
//     }
    
//     function slide() {
//       timer();
//         var setSlideCSS = {
//             'float' : 'left',
//             'display' : 'inline-block',
//           	'width' : $c
//         }
//         var setSlideShowCSS = {
//             'width' : $ss // set width of slideshow container
//         }
//         $('.slide').css(setSlideCSS);
//         $('.slideshow').css(setSlideShowCSS); 
        
        
//         setInterval(function() {
//             timer();
//             $('.slideshow').animate({"left": -$w}, $s, function(){
//                 // to create infinite loop
//                 $('.slideshow').css('left',0).append( $('.slide:first'));
//             });
//         }, $d);
        
//     }
    
//     if ($t == "fade") {
//         fadeInOut();
        
//     } if ($t == "slide") {
//         slide();
        
//     } else {
      
//     }
// });



// var slideIndex = 0;
// showSlides();

// function showSlides() {
//   var i;
//   var slides = document.getElementsByClassName("Slide");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";  
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}    
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
//   setTimeout(showSlides, 2000); // Change image every 2 seconds
// }

// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}

