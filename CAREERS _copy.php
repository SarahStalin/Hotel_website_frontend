<html>
<head ><img src="LOGO.jpg" style="width:100px;height:100px;"> 
<PRE> <A HREF="HOME.HTML">HOME</A>          <A HREF="MENU.HTML">  MENU</A>            <A HREF="RESERVE.HTML">   RESERVE</A>         <A HREF="SEPICAL_OFFERS.HTML">  SEPICAL OFFERS  </A>       <A HREF="CAREERS.HTML">CAREERS</A>       <A HREF="LOGIN.HTML"> LOGIN </A></PRE>

  </head>
<body bgcolor=#eeeeee>
<form id="form_career" onsubmit="return  formValidate()" method="post"> 
        APPLICANT'S NAME *: <select name ="title">
            <option value="select" selected>--</option>
             <option value="Ms">Miss</option>
             <option value="Mr">Mr</option>
             <option value="Mrs">Mrs</option>
             </select>  <input type="text" name="career_first_name ">   <input type="text" name="career_last_name"><br><br>
         EMAIL ID * : <input type="text" name="career_email_id"><br><br>
        CONTACT NUMBER * : <input type="text" name="career_contact" value="" /><br><br> 
         BLOOD GROUP * :  <select name ="blood_grp">
            <option value="select" selected>--</option>
             <option value="a1">A+</option>
             <option value="b1">B+</option>
             <option value="o1">O+</option>
             <option value="a1">AB+</option>
             <option value="b1">A-</option>
             <option value="ab1">B-</option>
             <option value="ab2">O-</option>
             <option value="o2">AB-</option>
             </select> 
<br><br>
        
        GENDER *:<br>

        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
       <br><br>

        INTERESTED TO WORK AS:
       <select name="cars">
           <option value="select" selected>---SELECT--</option>
    <option value="chef">chef</option>
    <option value="waiter">waiter</option>
    <option value="cashier">cashier</option>
    <option value="manager">manager</option>
    <option value="cook">cook</option>
</select><br><br>


  UPLOAD PHOTO * : <input type="file" id="browse_photo" name="fileupload" style="display: none" onChange="HandlechangePhoto();"/>
		<input type="text" id="file_photo" readonly="true"/>
		<input type="button" value="Browse & Upload" id="Browse" onclick="HandleBrowseClickPhoto();"/>
  <br><br>
<script>
function HandleBrowseClickPhoto()
{
    var fileinput = document.getElementById("browse_photo");
    fileinput.click();
}

function HandlechangePhoto()
{
    var fileinput = document.getElementById("browse_photo");
    var textinput = document.getElementById("file_photo");
    textinput.value = fileinput.value;
}

</script>

   UPLOAD CV * : <input type="file" id="browse_file" name="fileupload" style="display: none" onChange="Handlechange();"/>
		<input type="text" id="file_name" readonly="true"/>
		<input type="button" value="Browse & Upload" id="Browse" onclick="HandleBrowseClick();"/>
  <br><br>

<script>
function HandleBrowseClick()
{
    var fileinput = document.getElementById("browse_file");
    fileinput.click();
};

function Handlechange()
{
    var fileinput = document.getElementById("browse_file");
    var textinput = document.getElementById("file_name");
    textinput.value = fileinput.value;
};

</script>
     
 <button Id="submit_btn" onclick="Redirect()">Submit</button> 
<script>
      function submitData(){
         
          alert("YOUR APPLICATION HAS BEEN SUBMITTED. THANK YOU FOR SHOWING YOUR INTEREST!");
          
      };

	function Redirect() {
               window.location="HOME.HTML";
            };
</script>
  </form>
	
</body>
</html>