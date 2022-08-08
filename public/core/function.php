<?php 
 function conn(){
   return mysqli_connect('localhost','root','','KyanMharYay');
}
function alert($data,$col='red-400'){
   echo "<p class=' text-3xl mx-2 text-center my-4 rounded-md bg-$col text-dark p-4' >$data</p>";
}
function redirect($l){
   echo "<script>location.href='$l'</script>";
}

function runQuery($sql){
   if(mysqli_query(conn(),$sql)){
      return true;
   }else{
      echo "<script>alert('DB error')</script>";
   }
}

 function register(){
    $name=$_POST['Name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['cf_pw'];
    $sPass=password_hash($password,PASSWORD_DEFAULT);
    if($password == $confirmPassword){
     
        $sql="INSERT INTO Users (Name,Email,Password) VALUES ('$name','$email','$sPass')";
       if(runQuery($sql)){
          return redirect('patient_login.php');
       }
    }else{
           return alert("Password Matching error");
    }
 }

 function p_login(){
   $email=$_POST['email'];
   $password=$_POST['password'];

   $sql="SELECT * FROM Users WHERE Email= '$email' ";
   $query=mysqli_query(conn(),$sql);
   $row=mysqli_fetch_assoc($query);
   if(!$row){
      return alert("no user available");
   }else{
      if(password_verify($password,$row['Password'])){
         session_start();
           $_SESSION['user']=$row;
           redirect('index1.php');
      }else{
         return alert("Email or password no available");
      }
      
   }
 }

 function category_add(){
      $cat=$_POST['Category'];
      $sql= "INSERT INTO Category (Name) VALUES ('$cat')";
      mysqli_query(conn(),$sql);
 }
 function categories(){
   $sql="SELECT * FROM Category";
   $query=mysqli_query(conn(),$sql);
   $rows=[];
   while($row=mysqli_fetch_assoc($query)){
      array_push($rows,$row);
   }
   return $rows;

 }
 function category($id){
   $sql="SELECT * FROM Category WHERE id=$id";
   $query=mysqli_query(conn(),$sql);
   $row=mysqli_fetch_assoc($query);
   return $row;
   
   
 }
 function userLists(){
   $sql="SELECT * FROM Users";
   $query=mysqli_query(conn(),$sql);
   $rows=[];
   while($row=mysqli_fetch_assoc($query)){
      array_push($rows,$row);
   }
   return $rows;
 }
 function user($id){
   $sql="SELECT * FROM Users WHERE id=$id";
   $query=mysqli_query(conn(),$sql);
   $row=mysqli_fetch_assoc($query);
   return $row;
 }
 function editCat(){
   $id=$_POST['id'];
   $title=$_POST['title'];
   $query="UPDATE Category SET Name='$title' WHERE id=$id";
   if(mysqli_query(conn(),$query)){
      redirect('category_add.php');
   }
 }
 function fetchAll($sql){
   $query=mysqli_query(conn(),$sql);
   $rows=mysqli_fetch_assoc($query);
   return $rows;
 }
 function doctors(){
    $sql="SELECT * FROM doctors";
    $query=mysqli_query(conn(),$sql);
    $rows=[];
    while($row=mysqli_fetch_assoc($query)){
      array_push($rows,$row);
    }
    return $rows;
 }

 function doctorRegister( ){
    $name=$_POST['name'];
    $email=$_POST['email'];
   $photo=$_FILES['photo']['name'];
    $password=$_POST['password'];
    $confirm=$_POST['cf_pw'];
    $cat_id=$_POST['cat_id'];

   

    if($password==$confirm){
      $sql="INSERT INTO doctors (Name,email,password,photo,Category_id) VALUES ('$name','$email','$password','$photo','$cat_id')";
      if(mysqli_query(conn(),$sql)){
         move_uploaded_file($_FILES['photo']['tmp_name'],"doctor_img/$photo");
         
  
      }
    }else{
        echo "<script>alert('Password matching error')</script>";
    }
    
 }

 function doctorEdit(){
   $id=$_POST['id'];
   $name=$_POST['name'];
   $email=$_POST['email'];
  $photo=$_FILES['photo']['name'];
   $cat_id=$_POST['cat_id'];

   $sql="UPDATE doctors SET Name='$name',Email='$email',photo='$photo',Category_id='$cat_id' WHERE id=$id";
   if(mysqli_query(conn(),$sql)){
      move_uploaded_file($_FILES['photo']['tmp_name'],"doctor_img/$photo");
      redirect('doctor_list.php');
   }
 }
 function doctor($id){
   $sql="SELECT * FROM doctors WHERE id=$id";
   $query=mysqli_query(conn(),$sql);
   $row=mysqli_fetch_assoc($query);
   return $row;

 }
 function doctorByCat($id){
   $sql="SELECT * FROM doctors WHERE Category_id =$id";
    $query=mysqli_query(conn(),$sql);
    $rows=[];
    while($row=mysqli_fetch_assoc($query)){
      array_push($rows,$row);
    }
    return $rows;
 }
 function booking_form(){
   $name=$_POST['Name'];
   $doctor_id=$_POST['doctor_id'];
   $cat_id=$_POST['cat_id'];
   $phone_no=$_POST['phone'];
   $user_id=$_SESSION['user']['id'];
   $sql="INSERT INTO Booking (Name,phone_no,Doctor_id,Category_id,User_id) VALUES ('$name','$phone_no','$doctor_id','$cat_id',$user_id)";
   if(mysqli_query(conn(),$sql)){
      echo "<script>alert('booking success')</script>";
      redirect('index1.php');
   };
 }
 function bookingLists($id){
   if($_SESSION['user']['Role']==0 or $_SESSION['doctor']['role']=0){
      $sql="SELECT * FROM Booking ";
   }else{
      $sql="SELECT * FROM Booking WHERE User_id=$id";
   }
   
   $query=mysqli_query(conn(),$sql);
   $rows=[];
   while($row=mysqli_fetch_assoc($query)){
      array_push($rows,$row);
   }
   return $rows;
 }
 function doctorBookingLists($id){
   $sql="SELECT * FROM Booking WHERE Doctor_id=$id ";
   $query=mysqli_query(conn(),$sql);
   $rows=[];
   while($row=mysqli_fetch_assoc($query)){
      array_push($rows,$row);
   }
   return $rows;
 }
 function doctorLogin(){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $sql="SELECT * FROM doctors WHERE Email='$email'";
   $query=mysqli_query(conn(),$sql);
   $row=mysqli_fetch_assoc($query);

   if(!$row){
      return alert("no user available");
   }else{
      if($password == $row['password']){
         session_start();
           $_SESSION['doctor']=$row;
           redirect('index1.php');
         
      }else{
         return alert("Email or password wrong");
      }
      
   }
 }

?>