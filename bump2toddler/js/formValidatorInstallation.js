$(document).ready(function() {
    
    toggleFields();
    $("#USESMTP").change(function () {
        toggleFields();
    });
    
    var installFrm = $('#installationForm');
    
    installFrm.bootstrapValidator({
        fields: {
            Email_to: {
                validators: {
                    notEmpty: {
                        message: 'Email to is required'
                    }
                }
            },
            Email_subject: {
                validators: {
                    notEmpty: {
                        message: 'Email subject is required'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
 
            e.preventDefault();
        
            var request = $.ajax({
                type: installFrm.attr('method'),
                url: installFrm.attr('action'),
                data: installFrm.serialize()
            });

            $('#installationForm').hide();
            $('#status').html("Installing form, please wait...");

            request.done(function(e) {
                if(e[0] + e[1] == "OK") {
                    $('#status').html(e);
                } else {
                    $('#status').html("Sorry, there was a problem installing your form.<br>Error: " + e + "<br />PLEASE INSTALL MANUALLY");
                    $('#contactForm').show();
                }
            });

            request.fail(function() {
                $('#status').html("Sorry, there was a problem installing your form.");
                $('#installationForm').show();
            });
            
        });

});

function toggleFields() {
    if ($("#USESMTP").val() == "yes") {
        $("#smtp_options").show();
    } else {
        $("#smtp_options").hide();
    }
}