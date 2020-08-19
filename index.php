<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Form Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script>
    function clickHere(){

        var getname=document.myform.user_name.value;
        document.getElementById('name').innerHTML = getname;

        var genlan= document.myform.gender.length;
        for(i=0;i<genlan;i++){
            var gencheck= document.myform.gender[i].checked;
            if(gencheck){
                var genvalue = document.myform.gender[i].value;
         }
        }
        document.getElementById('gen').innerHTML = genvalue;

        var deptlan= document.myform.dept.length;
        for(i=0;i<deptlan;i++){
            var deptcheck= document.myform.dept[i].checked;
            if(deptcheck){
                var deptvalue = document.myform.dept[i].value;
         }
        }
        document.getElementById('dept').innerHTML = deptvalue;

        var index = document.myform.coder.selectedIndex;
        var indexvalue = document.myform.coder.options[index].value;
        document.getElementById('coder').innerHTML=indexvalue;
    }
</script>


<table class="tblone">
    <tr>
        <td colspan="2" align="center"></td>
    </tr>

    <tr>
        <td>Name :</td>
        <td><span id="name"></span></td>
    </tr>

    <tr>
        <td>Gender :</td>
        <td><span id= "gen"></span></td>
    </tr>

    <tr>
        <td>Department :</td>
        <td><span id="dept"></span></td>
    </tr>

    <tr>
        <td>Coder :</td>
        <td><span id="coder"></span></td>
    </tr>
</table>


<form action="index.php" method="POST" name ="myform" id="myform" onsubmit= "clickHere(); return false;">
    <table>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="user_name" ></td>
            </tr>

            <tr>
                <td>Gender :</td>
                <td>
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Other">Other
                </td>
            </tr>

            <tr>
                <td>Department:</td>
                <td>
                    <input type="checkbox" name="dept" value="English">English 
                    <input type="checkbox" name="dept" value="Math">Math
                    <input type="checkbox" name="dept" value="Bangladesh">Bangladesh
                </td>
            </tr>

            <tr>
                <td>Coder:</td>
                <td>
                    <select name="coder">
                    <option value="">Select One</option>
                    <option value="PHP">PHP</option>
                    <option value="JAVA">JAVA</option>
                    <option value="C#">C#</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Clear">
                </td> 
            </tr>



    </table>


</form>
    
</body>
</html>