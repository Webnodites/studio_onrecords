 $(document).ready(function () {

        $('.only-alpha').keypress(function (e) {
                var regex = new RegExp("^[a-zA-Z ]*$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (regex.test(str)) {
                    return true;
                }
                else {
                    e.preventDefault();
                    return false;
                }
            });
            var numberval = false;

        $(document).ready(function () {
                $(".only-numeric").bind("keypress", function (e) {
                    var keyCode = e.which ? e.which : e.keyCode
                 
                    if (!(keyCode >= 48 && keyCode <= 57)) {
                        return false;
                    } else {
                    }

                    if ($(this).val().length < 9) {
                        
                        numberval = false;
                    }
                    else {
                        numberval = true;
                       
                    }

                });
            });

            function validate() {
                //for name validation
                var sn = document.forms['cform']['name'];
                var em = document.forms['cform']['email'];
                var mb = document.forms['cform']['phone'];
           

                atpos = em.value.indexOf("@");
                dotpos = em.value.lastIndexOf(".");

                if (atpos < 1 || (dotpos - atpos < 2)) {
                    alert("Please enter correct email ID");
                    return false;
                }
                if (em.value.length < 8) {
                    alert("Please enter correct email ID");
                    return false;
                }
                if (em.value.indexOf('@') <= 0) {
                    alert("Please enter correct email ID");
                    return false;
                }
                if ((em.value.charAt(em.length - 3) != '.') && (em.value.charAt(em.length - 4) != '.')) {
                    alert("Invalid . position in email ID");
                    return false;
                }

                if ((mb.value.charAt(0) != 6) && (mb.value.charAt(0) != 7) && (mb.value.charAt(0) != 8) && (mb.value.charAt(0) != 9)) {

                    alert("Invalid mobile no.");
                    return false;
                }
               
                if (isNaN(mb.value)) {
                    alert("Enter numeric value");
                    return false;
                }
            
            }
           
        });


