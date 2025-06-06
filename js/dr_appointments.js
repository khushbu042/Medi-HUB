function myFunction(id) {
    
    if(document.getElementById(id).innerHTML == "Pending"){
      
        document.getElementById(id).innerHTML = "Done";
        document.getElementById(id).setAttribute("style", "width:70px; border:none; border-radius:5px; background-color:rgb(255, 88, 88);");
        changeStatusFalse(id);

    }else{
        document.getElementById(id).innerHTML = "Pending";
        document.getElementById(id).setAttribute("style", "width:70px; background-color: rgb(91, 216, 91); border:none; border-radius:5px; ");
        changeStatueTrue(id);
    }
    
    // alert(id);
}
function deleteRecord(id){
    var r = confirm("Are you really wants to delete this Appointment ?");
    if(r){
        deleteThisAppointmnet(id);

    }else{
        
        return;
    }
}
function changeStatusFalse(appointment_id){
    $.ajax({
        url:'../ajax/changeStatusFalse.php',
        type:'POST',
        data:{
            appmt_id : appointment_id
        },
        success: function(result) {
            $(appointment_id).html(result);
        }
    });
}

function deleteThisAppointmnet(appointment_id){
    $.ajax({
        url:'../ajax/deleteAppointment.php',
        type:'POST',
        data:{
            appmt_id : appointment_id
        },
        success: function(result) {
            $(appointment_id).html(result);
        }
    });
    document.getElementById(appointment_id).parentNode.parentNode.innerHTML="";
}

function changeStatueTrue(appointment_id){
    $.ajax({
        url:'../ajax/changeStatusTrue.php',
        type:'POST',
        data:{
            appmt_id : appointment_id
        },
        success: function(result) {
            $(appointment_id).html(result);
        }
    });
}


$(document).ready(function(){
    $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });
    
            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
    




    // ******************************************************

    (function(){
        'use strict';
        var $ = jQuery;
        $.fn.extend({
            filterTable: function(){
                return this.each(function(){
                    $(this).on('keyup', function(e){
                        $('.filterTable_no_results').remove();
                        var $this = $(this), 
                            search = $this.val().toLowerCase(), 
                            target = $this.attr('data-filters'), 
                            $target = $(target), 
                            $rows = $target.find('tbody tr');
                            
                        if(search == '') {
                            $rows.show(); 
                        } else {
                            $rows.each(function(){
                                var $this = $(this);
                                $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                            })
                            if($target.find('tbody tr:visible').size() === 0) {
                                var col_count = $target.find('tr').first().find('td').size();
                                var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
                                $target.find('tbody').append(no_results);
                            }
                        }
                    });
                });
            }
        });
        $('[data-action="filter"]').filterTable();
    })(jQuery);
    
    $(function(){
        // attach table filter plugin to inputs
        $('[data-action="filter"]').filterTable();
        
        $('.container').on('click', '.panel-heading span.filter', function(e){
            var $this = $(this), 
                $panel = $this.parents('.panel');
            
            $panel.find('.panel-body').slideToggle();
            if($this.css('display') != 'none') {
                $panel.find('.panel-body input').focus();
            }
        });
        $('[data-toggle="tooltip"]').tooltip();
    })