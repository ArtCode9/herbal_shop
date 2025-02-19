document.getElementById('openPopup').onclick = function() {
   console.log("openPopup called");
   document.getElementById('overlay').style.display = 'block';
 }
 document.getElementById('closePopup').onclick = function() {
   console.log("closePopup called");
   document.getElementById('overlay').style.display = 'none';
 }
 window.onclick = function(event) {
   if (event.target == document.getElementById('overlay')) {
       document.getElementById('overlay').style.display = 'none';
   }
 };


 console.log(`Hello this is popup section in js`);