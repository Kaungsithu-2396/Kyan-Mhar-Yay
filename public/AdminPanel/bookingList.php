<?php 
    include '../core/auth.php';
    include '../template/doctor_panel.php';

    
   

?>

<div class="mx-3">
    <p>Booking List for today.</p>
    <p class="h2 pb-3 text-primary">Reception will contact as soon as bookings are verified</p>
   <table class="table table-striped">
        
            <?php 
                if(isset($_SESSION['user'])){
            ?>
            <thead>
            <th>id</th>
            <th>Name</th>
            <th>Reserved Doctor</th>
            <th>Category</th>
            <?php 
                if($_SESSION['user']['Role']==0){
            ?>
            <th>Booked by</th>
            <?php 
                }
            ?>
            <th>Control</th>
            
        </thead>
        <tbody>
            <?php 
                foreach(bookingLists($_SESSION['user']['id'])as $b){
            ?>
                <tr>
                    <td><?php echo $b['id'] ?></td>
                    <td><?php echo $b['Name'] ?></td>
                   <td> <?php echo doctor($b['Doctor_id'])['Name'] ?></td>
                    
                    <td><?php echo category($b['Category_id'])['Name']  ?></td>
                    <?php 
                        if($_SESSION['user']['Role']==0){
                     ?>
                    <td><?php echo user($b['User_id'])['Name']  ?></td>
                    <?php 
                        }
                    ?>
                    <td class="text-nowrap">
                    <a href="booking_delete.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Delete</a>
                    </td>
                    
                
                </tr>
        </tbody>
            <?php 
            } ?>
           <?php 
                }elseif(isset($_SESSION['doctor'] ) ){
           ?>
            <thead>
            <th>id</th>
            <th>Name</th>
            <th>Booked time</th>
            
            
        </thead>
        <tbody>
            <?php 
                foreach(doctorBookingLists($_SESSION['doctor']['id'])as $d){     
            ?>
                <tr>
                    <td><?php echo $d['id'] ?></td>
                    <td><?php echo $d['Name'] ?></td>
                    <td><?php echo $d['created_at'] ?></td>              
                    
                    
                
                </tr>

               
        </tbody>

           <?php 
                }
           ?>
           <?php 
                }
           ?>



           
        
   </table>
   
</div>


<?php 

    include '../template/doctor_footer.php';

?>