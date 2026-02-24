<?php
$HOST_NAME = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "lecture_signup_page";

//connecting string

$conn = mysqli_connect($HOST_NAME, 
$DB_USER, $DB_PASS, $DB_NAME);
if(!$conn){
    die("connection failed". mysqli_connect_error());
}else{
    echo"connectted successfully";


}
//storing database info.
$firstname =$_POST['firstname'];
$surname =$_POST['surname'];
$email =$_POST['email'];
$password =$_POST['password'];
$age =$_POST['age'];

$insert_query ="INSERT INTO lecture_details(firstname,surname,email,password,age)
VALUES('$firstname', '$surname', '$email', '$password', '$age')" ;
$result = mysqli_query($conn, $insert_query);

if(!$result){
    echo"records created successfully";
}else{
    echo "not created";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture Signup · Simple Login</title>
</head>
<body style="margin:0; font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background:#f2f5f9; display:flex; align-items:center; justify-content:center; min-height:100vh; padding:1.5rem; box-sizing:border-box;">

    <!-- clean minimal card -->
    <div style="max-width:560px; width:100%; background:white; border-radius:32px; box-shadow:0 15px 30px -10px rgba(0,20,40,0.08); padding:2.5rem 2.2rem; border:1px solid #ffffff50;">

        <!-- header -->
        <div style="margin-bottom:2rem;">
            <span style="font-size:0.8rem; font-weight:600; letter-spacing:0.8px; text-transform:uppercase; color:#2a5775; background:#e3ecf2; padding:0.2rem 1rem; border-radius:30px; display:inline-block; margin-bottom:0.5rem;">📋 lecture signup</span>
            <h1 style="font-size:2rem; font-weight:550; margin:0.25rem 0 0 0; color:#122b39; letter-spacing:-0.01em;">create account</h1>
            <p style="color:#4b687c; font-size:1rem; margin-top:0.4rem; border-left:3px solid #8aaec0; padding-left:1rem;">firstname · surname · email · password · age</p>
        </div>

        <!-- pure HTML form - exactly what you need -->
        <form action="lecture.php" method="post" style="display:flex; flex-direction:column; gap:1.6rem;">

            <!-- row: firstname + surname side by side -->
            <div style="display:flex; flex-wrap:wrap; gap:1.2rem;">
                <div style="flex:1 1 180px;">
                    <label for="firstname" style="display:block; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#2f5568; margin-bottom:0.25rem;">first name</label>
                    <input type="text" id="firstname" name="firstname"  required 
                        style="width:100%; padding:0.75rem 0.2rem 0.75rem 0; font-size:1.05rem; background:transparent; border:none; border-bottom:2px solid #d0dee5; outline:none; color:#0f2c38;"
                        onfocus="this.style.borderBottomColor='#347a99'" 
                        onblur="this.style.borderBottomColor='#d0dee5'">
                </div>
                <div style="flex:1 1 180px;">
                    <label for="surname" style="display:block; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#2f5568; margin-bottom:0.25rem;">surname</label>
                    <input type="text" id="surname" name="surname"  required 
                        style="width:100%; padding:0.75rem 0.2rem 0.75rem 0; font-size:1.05rem; background:transparent; border:none; border-bottom:2px solid #d0dee5; outline:none; color:#0f2c38;"
                        onfocus="this.style.borderBottomColor='#347a99'" 
                        onblur="this.style.borderBottomColor='#d0dee5'">
                </div>
            </div>

            <!-- email (full width) -->
            <div>
                <label for="email" style="display:block; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#2f5568; margin-bottom:0.25rem;">email address</label>
                <input type="email" id="email" name="email"  required 
                    style="width:100%; padding:0.75rem 0.2rem 0.75rem 0; font-size:1.05rem; background:transparent; border:none; border-bottom:2px solid #d0dee5; outline:none; color:#0f2c38;"
                    onfocus="this.style.borderBottomColor='#347a99'" 
                    onblur="this.style.borderBottomColor='#d0dee5'">
            </div>

            <!-- password -->
            <div>
                <label for="password" style="display:block; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#2f5568; margin-bottom:0.25rem;">password</label>
                <input type="password" id="password" name="password"  required 
                    style="width:100%; padding:0.75rem 0.2rem 0.75rem 0; font-size:1.05rem; background:transparent; border:none; border-bottom:2px solid #d0dee5; outline:none; color:#0f2c38;"
                    onfocus="this.style.borderBottomColor='#347a99'" 
                    onblur="this.style.borderBottomColor='#d0dee5'">
            </div>

            <!-- age -->
            <div style="max-width:200px;">
                <label for="age" style="display:block; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#2f5568; margin-bottom:0.25rem;">age</label>
                <input type="number" id="age" name="age" placeholder="e.g. 21" min="1" max="120" required 
                    style="width:100%; padding:0.75rem 0.2rem 0.75rem 0; font-size:1.05rem; background:transparent; border:none; border-bottom:2px solid #d0dee5; outline:none; color:#0f2c38;"
                    onfocus="this.style.borderBottomColor='#347a99'" 
                    onblur="this.style.borderBottomColor='#d0dee5'">
            </div>

            <!-- submit button - clean & simple -->
            <div style="margin-top:1rem;">
                <button type="submit" 
                    style="width:100%; background:#1e4459; color:white; font-weight:600; font-size:1.1rem; padding:0.9rem 1.5rem; border:none; border-radius:40px; letter-spacing:0.8px; cursor:pointer; transition:0.1s; border:1px solid #ffffff20; box-shadow:0 2px 6px rgba(27,55,74,0.15);">
                    → sign up for lecture
                </button>
            </div>

          
        </form>
    </div>

    <!-- HTML only – exactly 5 fields + submit. clean. -->
</body>
</html>