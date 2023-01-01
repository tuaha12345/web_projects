  
  var submit=document.getElementById('sub');

            submit.onclick=function(){

            var firstName = document.getElementById('firstName').value;
            var lastName = document.getElementById('lastName').value;
            var email = document.getElementById('email').value;
            var mobile = document.getElementById('number').value;
            var address = document.getElementById('addr').value;
            var password = document.getElementById('pass').value;



            if (firstName == " " || lastName == "" || email == "" || mobile == "" || address == "" || password == "")
            {
                   alert("please fill up the empty field");
                   return false;
            }

            else{
              return true;
            }

      

            }

