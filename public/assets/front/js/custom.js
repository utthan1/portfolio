if ( $.isFunction($.validator) ) {
    
    $.validator.addMethod('mobile', function (value, element, param) {
        if(value){
            var pattern = /^[0-9]{10}$/;
            return pattern.test(value);
        }else{
            return true;
        }
    }, 'Please enter a valid mobile number.');


    $.validator.addMethod('validateEmail', function (value, element, param) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);

        return this.optional(element) || pattern.test(value);       
    }, ' Please enter a valid email address.');

    $.validator.addMethod("alphanumeric", function(value, element) {
        // return this.optional(element) || /^[\w.]+$/i.test(value);
        return this.optional(element) || /^[a-z0-9]+$/i.test(value);
    }, "Code must contain only letters and numbers");


    $.validator.addMethod("alphachar", function(value, element) {
        $regex = /^[a-z0-9,.?&\-\s\']+$/i;
        return this.optional(element) || $regex.test(value);
    }, "Text must contain only alphanumberic and <i> . , ? & - '</i> chars.");

    $.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Only letters are allowed"); 

     $.validator.addMethod("strongPass", function(value, element) {
      return this.optional(element) || nilesh.strongPass(value);
    }, "Password must be more than 8 digit and must contain atleast one lower & upper case letter, one digit and a special character"); 

     //custom validation
    // 25 MB = 25485760  1MB = 1024 bytes
    // Custom method for validate plugin
    $.validator.addMethod('filesize', function (value, element, param) {
        if (element.files[0] !== undefined){
            console.log(element.files[0].size);
            const fsize = element.files[0].size; 
            const fileSize = Math.round((fsize / 1024)); 
            const sizeMB = param*1024;
            return this.optional(element) || (fileSize <= sizeMB)
        }else{
            return true;
        }
        
    }, 'File size must be less than {0} MB');
}

function showLoader(){
    $('.hh-loader').css('display','flex');
}
function hideLoader(){
    $('.hh-loader').hide();
}


function hideError(){
    if($('.errors').length){
        $('.errors').html('');
        $('.errors').removeClass('active');
    }
}
function showError($message){
    $('.alert-dismissible').remove();
    if($('.errors').length){
        $newmessage = '<div class="alert alert-danger alert-dismissible">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Error! </strong>'+$message+' </div>';

        if(typeof $message == 'object'){
            // $newmessage = '<ul>';
            $newmessage = '';
            $.each($message, function(key,value){
                // $newmessage += '<li>'+value+'</li>';

                $newmessage += '<div class="alert alert-danger alert-dismissible">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Error! </strong>'+value+' </div>';
            });
            //$newmessage += '</ul>';
        }

        $('.errors').html($newmessage);
        $('.errors').addClass('active');
        $('html, body').animate({
            scrollTop: $(".errors").offset().top-100
        }, 700);
    }
}

function showToastr($message, $flag  =1){
    $options = {
          "closeButton": true,
          "debug": false,
          "positionClass": "toast-top-right",
          "onclick": null,
          "showDuration": "1000",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "swing",
          "showMethod": "show"
        };
        if($flag == 1){
            toastr.success($message,'Success!',$options  );
        }else{
            toastr.error($message,'Error!', $options  );
        }
}

function showSweetalert($message,$flag  =1){
    var swalWithBootstrapButtons = swal.mixin({
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false,
    });
    if($flag == 1){
        swalWithBootstrapButtons.fire('Success!', $message, 'success');
    }else if($flag == 0){
        swalWithBootstrapButtons.fire('Error!', $message, 'error');
    }else{
        swalWithBootstrapButtons.fire($message);
    }
}

function showLoading($ele){
    var l = Ladda.create($ele[0]);
    l.start();
}
function stopLoading(){
    Ladda.stopAll();
}

function getFormDataObject(form){ 
    var formData = new FormData(form);

    var object = {};
    formData.forEach((value, key) => {
        // Reflect.has in favor of: object.hasOwnProperty(key)
        if(!Reflect.has(object, key)){
            object[key] = value;
            return;
        }
        if(!Array.isArray(object[key])){
            object[key] = [object[key]];    
        }
        object[key].push(value);
    });
    return object;
}

function ajaxCall(form,$button,settings={}){ 
    var options = jQuery.extend({
        redirect: '',
        $errorType: 1,
    }, settings);

    $errorType = options.errorType;
    // console.log(options);
    //$errorType  1 = error div , else toastr
    var formData = new FormData(form);
    // console.log(formData);
    // const value = Object.fromEntries(formData.entries());

    var object = getFormDataObject(form);

    var json = JSON.stringify(object);

    if($('.hh-loader').length){
        showLoader();
    }else{
        showLoading($button);
    }
    
    hideError();

    $.ajax({
        type: $(form).attr('method'),
        url: $(form).attr('action'),
        data: json,
        processData: false,
        dataType: "json",
        contentType: 'application/json',
        // processData: false,
        // contentType: false,
        complete: function (data) {
            if($('.hh-loader').length){
                hideLoader();
            }else{
                stopLoading();
            }
          // $button.removeClass('process');
        },
        success: function( $res) {
            // console.log($res);
            if($res.status == 1){
                showToastr($res.message);    
                if(options.redirect != ''){
                    window.location.href = options.redirect;
                    return false;
                }

                if('redirect' in $res ){
                    window.location.href = $res.redirect;
                    return false;
                }
                // showSweetalert($res.message,1);
            }
            else{
                if($errorType == 1){
                    showError($res.message);
                }else{
                    showToastr($res.message,0);
                }
            }
 
        },
        error: function(xhr, textStatus, errorMessage) {
            try {
                $res= $.parseJSON(xhr.responseText);
                if($errorType == 1){
                    showError($res.message);
                }else{
                    showToastr($res.message,0);
                }
            } catch(e) {
                if($errorType == 1){
                    showError('Request could not be completed');
                }else{
                    showToastr('Request could not be completed',0);
                }
            }

        }             
    });
}

function autoFetchCity($stateId,$cityId){
    $(document).on('change', $stateId, function (e) {
        var state_id = $(e.currentTarget).val();
        // var api_url = '{{ route("api.statecitylist",'') }}'+'/'+state_id;
        var api_url = site_url+'/api/v1/cities/?states_id='+state_id;

        $($cityId).html('<option value="">Please select city</option>');

        $.ajax({
            type:"get",
            url:api_url,
            success: function($res) {
                console.log($res);
                $.each($res.data, function (i, item) {
                    $('#city').append($('<option>', { 
                        value: item.id,
                        text : item.name 
                    }));
                });
            },
             error: function(xhr, textStatus, errorMessage) {
                if(xhr.status == 400){
                    $res= $.parseJSON(xhr.responseText);
                    showToastr($res.message,0);
                }
            }
        });
    });
}


$.fn.ajaxCall = function (settings) {
    var options = jQuery.extend({
        form: $('form'),
        object: '',
        button: '',
        redirect: '',
        errorType: 1,
        handleResponse: 1,
        onOpen: function () {},
        onClose: function () {},
        onSelect: function () {}
    }, settings);

    var formData = new FormData(options.form);
    console.log(formData);
    // const value = Object.fromEntries(formData.entries());

    if(!options.formData){
        var object = {};
        formData.forEach((value, key) => {
            // Reflect.has in favor of: object.hasOwnProperty(key)
            if(!Reflect.has(object, key)){
                object[key] = value;
                return;
            }
            if(!Array.isArray(object[key])){
                object[key] = [object[key]];    
            }
            object[key].push(value);
        });
    }
    
    var json = JSON.stringify(object);

    // showLoading(this);
    showLoader();
    hideError();

    $result = 'abc';
    $.ajax({
        type: $(options.form).attr('method'),
        url: $(options.form).attr('action'),
        data: json,
        processData: false,
        dataType: "json",
        contentType: 'application/json',
        // processData: false,
        // contentType: false,
        complete: function (data) {
            hideLoader();
          // stopLoading();
          // $button.removeClass('process');
        },
        success: function( $res) {
            // console.log($res);
            if($res.status == 1 && options.handleResponse == 1){
                
                if('redirect' in $res){
                    showToastr($res.message);

                    window.location.href = $res.redirect;
                    return false;
                }
                showSweetalert($res.message,1);
            }
            else {
                if(options.errorType == 1){
                    showError($res.message);
                }else{
                    showToastr($res.message,0);
                }
            }
            $result = $res;
            return $result;
        },
        error: function(xhr, textStatus, errorMessage) {
            try {
                $res= $.parseJSON(xhr.responseText);
                if($errorType == 1){
                    showError($res.message);
                }else{
                    showToastr($res.message,0);
                }
            } catch(e) {
                if($errorType == 1){
                    showError('Request could not be completed');
                }else{
                    showToastr('Request could not be completed',0);
                }
            }
            // stopLoading();
        }             
    });

    // return $result;
}

function handleErrorMessage(xhr, textStatus,$type=1){
    $message = '';

    if(xhr.status == 400){
        $res= $.parseJSON(xhr.responseText);
        $message = $res.message;

        if (typeof $message == 'object'){
          $message = $message[0];
        }
    }
    else if(xhr.status == 401){
        $message = 'You are not authorized';
    }
    else{
        $message = 'Request could not be completed';
    }
    if($type == 1){
        showError($message);
    }
    else if($type == 2){
        showSweetalert($message,0);
    }else{
        showToastr($message,0);
    }

    hideLoader();
}

$(document).on('click','.discard',function(){
    window.location.href = $(this).data('url');
    return false;
});

function formatNumber($value){
    if($value > 999){
        return $value.toFixed(2)+'k';
    }else{
        if($value == 0){
            $value = '';
        }
        return $value;
    }
}
