<script>
/*function display() {     
  var div = document.getElementById('ul');    
  with(div.style) {        
    display = 'block';        
    backgroundColor = '#222222';        
    position = 'absolute';    
  }     
}*/

(function (doc)
{
  var display = doc.getElementById('menu');
  
 // console.log(display);
  display.addEventListener('click', function(ev)
  {
    var thatUl = ev.target.querySelector('#ul');
      //console.log(thatUl.classList);
    thatUl.classList.toggle('show');
  }, false);
}(document))


</script>