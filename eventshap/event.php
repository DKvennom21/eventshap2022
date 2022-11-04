<div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $row['event_path'] ?>" alt="<?php echo $row['event_name']?>" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <div class="details">
                            <h2><?php echo $row['event_name'] ?></h2>
                            <p> 
                                Event Date: <?php echo $row['event_date']; ?>
                            </p>
                            <p>
                                Event Time: <?php echo $row['event_time']; ?>
                            </p> 
                            <p>
                                <?php $p = $row['event_area'];
                            ?>
                                Event Venue: <?php echo $row['event_venue']; ?>, <?php echo $row['event_area']; ?> <br> 
                                <?php echo $row['event_pin'];      ?>
                            </p> 
                            <p>
                                Event Description: <?php echo $row['event_descrip']; ?>
                            </p>
                            <p>
                                Event Fee: ₹ <?php echo $row['event_fee']; ?>
                            </p>
                            <p>
                                Event For Age Group Of <?php echo $row['event_agegrp']; ?> &Above
                            </p>
                            <p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="event_book.php?id=<?php echo $a; ?>&&eid=<?php echo $row ['event_id']; ?>">
                                        <button class="btn btn-success">Pay now</button>
                                    </a>                            
                                </div>
                                <div class="col-6">
                                    <a href="map.php?eid=<?php echo $row ['event_id']; ?>">
                                        <button class="btn btn-success">Direction</button>
                                    </a>                            
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                