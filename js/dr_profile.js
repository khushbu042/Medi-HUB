


function changeLink(dr_id){

     var link = prompt ("Enter new Meeting link: ","");
     if(link != "" && link !=null){
          updateLink(link,dr_id);
          document.getElementById('meet_link').href = link;
     }
     
}
function updateLink(link,dr_id){
     
    $.ajax({
     url: '../ajax/update_meet_link.php',
     type: 'POST',
     data: {
         link: link,
         dr_id:dr_id
     },
     success: function(result) {
         $('#meet_link').html(result);
     }
    });
}