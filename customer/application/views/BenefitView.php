
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Benefits</h4>
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Name</th>
                                            <th>Plan</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($profits)): ?>
                                            <?php foreach ($profits as $row): ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['plan_title']; ?></td>
                                                <td><?php echo $row['tran_date']; ?></td>
                                                <td class="text-primary"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $row['credit']; ?></td>
                                            </tr>  
                                            <?php endforeach ?>
                                            <?php endif ?>
                                           
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
         