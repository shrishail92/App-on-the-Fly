$(document).ready(function(){
 
    var counter = 3;
 
    $("#addButton").click(function () {
 
    if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
    }   
 
    var newTextBoxDiv = $(document.createElement('div'))
         .attr("id", 'TextBoxDiv' + counter);

    newTextBoxDiv.addClass( 'form-group' );     

    newTextBoxDiv.after().html('<label>Field'+ counter +' name : </label>' +
          '<input type="text" name="textbox[' + counter + ']" id="textbox' + counter + '" class="form-control" placeholder="field'+counter+' name">');
 
    newTextBoxDiv.appendTo("#TextBoxesGroup");
 
    $("#hidden").val(counter);
    //alert($("#hidden").val());
    counter++;
    });
 
    $("#removeButton").click(function () {
    if(counter==3){
        alert("No more textbox to remove");
        return false;
    }   
    
    counter--;
    
    $("#hidden").val(counter);
    //alert($("#hidden").val());

    $("#TextBoxDiv" + counter).remove();
 
    });
 
     $("#getButtonValue").click(function () {
 
    var msg = '';
    for(i=1; i<counter; i++){
      msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
    }
      alert(msg);
  });
});