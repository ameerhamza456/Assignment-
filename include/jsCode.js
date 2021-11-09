
(function() {
     setTimeout(function(){ 
         //disable the button with id="submitbutton"
    
         document.getElementById('name').disabled = true;
		 document.getElementById("name").style.cursor = "no-drop";
		 
         document.getElementById('email').disabled = true;
         document.getElementById('email').style.cursor = "no-drop";
		 
         document.getElementById('dob').disabled = true;
         document.getElementById('dob').style.cursor = "no-drop";
		 
         document.getElementById('yurself').disabled = true;
         document.getElementById('yurself').style.cursor = "no-drop";
		 
         document.getElementById('capcha_val').disabled = true;
         document.getElementById('capcha_val').style.cursor = "no-drop";
		 
         document.getElementById('submitbutton').disabled = true;
         document.getElementById('submitbutton').style.cursor = "no-drop";

		 swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'Time out!!',
			  footer: '<a href="index.php">Wanna be Try again?</a>'
			});
      }, 180000);

})();
function CountDown(duration, display) {
            if (!isNaN(duration)) {
                var timer = duration, minutes, seconds;
                
              var interVal=  setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
                    if (--timer < 0) {
                        timer = duration;
                       SubmitFunction();
                       $('#display').empty();
                       clearInterval(interVal)
                    }
                    },1000);
            }
        }
        
        function SubmitFunction(){
       $('form').submit();
        
        }
    
         CountDown(180,$('#display'));
