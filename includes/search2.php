 <link rel="stylesheet" href="css/stil.css">

<div class="container" >
    <div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
<div class="blok2" >

    <form name="search" method="post" action="search-result.php">
    	   <div class="search-box">
               <div class="search-area">
        <div class="control-group">

     
            <input class="search-field" placeholder="Search Product..." name="product" required="required" style=" color:black; width: 555px; height:30px;"/>

         
              

        </div>
       
            </div><br> 
             
                <select class="search-field" id="Place" name="location"  style=" color:black; width: 555px; height:30px;">
                  
                    <option value="0" selected="selected">Select Product Location</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['productCompany'] . '">' . $countryResult[$key]['productCompany'] . '</option>';
                            }
                        }
                        ?>
                </select>
 
       <!--          <select name="location" class="search-field" required>
<option value="0" selected="selected">Select product location</option> 
<?php $query=mysqli_query($con,"select productCompany FROM products ORDER BY productCompany ASC ");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['productCompany'];?></option>
<?php } ?> -->
<!-- </select> -->
           <br><br>
             <p align="center"><button class="search-button" type="submit" name="search" name="location" id="Filter" style="background:#333333; color:white; width: 200px; height:30px;" >Search</button>
               </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->	</div></div>	</div>		
