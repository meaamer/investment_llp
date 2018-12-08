<?php //die(print_r($detail)); ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title"><?php echo $detail['name'] ?>  Details</h4>
                                   
                                </div>
                                <div class="card-content">
                                    <div id="typography">
                                        <div class="title">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="tim-typo">
                                               
                                                    <span class="tim-note"> ID</span>
                                                     <h5><?php echo $detail['id'] ?>  </h5>
                                            </div>
                                            <div class="tim-typo">
                                              
                                                    <span class="tim-note"> Name 
                                                    </span>  <h4><?php echo $detail['name'] ?> </h4>
                                            </div>
                                            <div class="tim-typo">
                                                
                                                    <span class="tim-note">Age
                                                    </span><h4><?php echo $detail['age'] ?> </h4>
                                            </div>
                                            <div class="tim-typo">
                                                
                                                    <span class="tim-note">Gender
                                                    </span><h4><?php echo $detail['gender'] ?>  </h4>
                                            </div>
                                            <div class="tim-typo">
                                                
                                                    <span class="tim-note">Number
                                                    </span><h4><?php echo $detail['mobile_number'] ?>  </h4>
                                            </div>
                                            
                                           
                                          

                                            

                                         
                                            <div class="tim-typo">
                                                <span class="tim-note">Pan</span>
                                                <p class="text-muted">
                                                      <?php echo $detail['pan'] ?>
                                                </p>
                                            </div>

                                             <div class="tim-typo">
                                                <span class="tim-note">Email ID</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['email'] ?>
                                                </h5>
                                            </div>


                                             <div class="tim-typo">
                                                <span class="tim-note">Introduced By</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['introduced_by'] ?>
                                                </h5>
                                            </div>

                                             <div class="tim-typo">
                                                <span class="tim-note">Nominee</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['nominee'] ?>
                                                </h5>
                                            </div>

                                             <div class="tim-typo">
                                                <span class="tim-note">Relation with Nominee</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['relation_with_nominee'] ?>
                                                </h5>
                                            </div>

                                             <div class="tim-typo">
                                                <span class="tim-note">Nominee Contact Number</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['r_contact_number'] ?>
                                                </h5>
                                            </div>


                                             <div class="tim-typo">
                                                <span class="tim-note">Bank Name</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['bank_name'] ?>
                                                </h5>
                                            </div>
                                             <!--  coloum one -->
                                            </div>
                                            
                                            <div class="col-md-6">

                                             <div class="tim-typo">
                                                <span class="tim-note">Account No</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['account_number'] ?>
                                                </h5>
                                            </div>


                                             <div class="tim-typo">
                                                <span class="tim-note">IFCSC No</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['ifsc_code'] ?>
                                                </h5>
                                            </div>


                                             <div class="tim-typo">
                                                <span class="tim-note">Branch Name</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['branch_name'] ?>
                                                </h5>
                                            </div>


                                             <div class="tim-typo">
                                                <span class="tim-note">Date</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['date'] ?>
                                                </h5>
                                            </div>



                                             <div class="tim-typo">
                                                <span class="tim-note">Sign</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['sign'] ?>
                                                </h5>
                                            </div>



                                             <div class="tim-typo">
                                                <span class="tim-note">Payment Mode</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['mode_of_payment'] ?>
                                                </h5>
                                            </div>



                                             <div class="tim-typo">
                                                <span class="tim-note">Amount</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['amount'] ?>
                                                </h5>
                                            </div>


                                             <div class="tim-typo">
                                                <span class="tim-note">Amount in Word</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['amount_in_words'] ?>
                                                </h5>
                                            </div>


                                             <div class="tim-typo">
                                                <span class="tim-note">Payment Reffrence No</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['payment_ref_number'] ?>
                                                </h5>
                                            </div>


                                             <div class="tim-typo">
                                                <span class="tim-note">Plane</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['plan'] ?>
                                                </h5>
                                            </div>


                                             <div class="tim-typo">
                                                <span class="tim-note">Status</span>
                                                <h5 class="text-muted">
                                                      <?php if ($detail['status']==1): ?>
                                                          <button class="btn btn-success" disabled="">Active</button>
                                                      <?php else: ?>

                                                         <button class="btn btn-danger" disabled="">Deactive</button>
                                                      <?php endif ?>
                                                </h5>
                                            </div>

                                              <div class="tim-typo">
                                                <span class="tim-note">Date of Activation</span>
                                                <h5 class="text-muted">
                                                      <?php echo $detail['activation_date'] ?>
                                                </h5>
                                            </div>


                                            </div>
                                           

                                            



                                            
                                            
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
