
                    <div class="modal fade" id="addnew" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><b>Add Attendance</b></h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                  <form class="form-group" method="POST" action="./action/faculty_add.php">
                    <div class="form-group">
                        <label for="id" class="control-label">Employee Code</label>
    
                        
                          <input type="text" class="form-control" id="id" name="code" required>
                        </div>
                   
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
    
                       
                          <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
    
                        
                          <input type="text" class="form-control" id="email" name="email" required>
                          <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                    <div class="form-group">
                        <label for="phone" class="control-label">Phone</label>
    
                        
                          <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                    <div class="form-group">
                        <label for="dept" class="control-label">Dept</label>
                          <select name="dept">
                            <option value="IT">IT</option>
                            <option value="Comp">Comp</option>
                            <option value="EXTC">EXTC</option>
                            <option value="Mech">Mech</option>
                            <option value="Civil">Civil</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div> 
                  </form>            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="far fa-trash-alt"></i> Remove</button>
                  <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                 
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add1new" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>Attendance</b></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form class="form-group" method="POST" action="attendance_add.php">
                    <div class="form-group">
                        <label for="id" control-label>id ID</label>
    
                       
                          <input type="text" class="form-control" id="id" name="id" required>
                       
                    </div>
                    <div class="form-group">
                        <label for="datepicker_add" control-label>Date</label>
    
                        
                          <div class="date">
                            <input type="text" class="form-control" id="datepicker_add" name="date" required>
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="time_in" control-label>Time In</label>
    
                     
                          <div class="bootstrap-timepicker">
                            <input type="text" class="form-control timepicker" id="time_in" name="time_in">
                          </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="time_out" control-label>Time Out</label>
    
        
                          <div class="bootstrap-timepicker">
                            <input type="text" class="form-control timepicker" id="time_out" name="time_out">
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                  <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                  </form>
                </div>
            </div>
        </div>
    </div>