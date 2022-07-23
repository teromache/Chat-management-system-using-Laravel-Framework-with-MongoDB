 <!--Edit Modal-->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">    
                             <div class=" image d-flex flex-column justify-content-center align-items-center"><img src="{{ $data->pic }}" height="150" width="150" style="border-radius:60%" /> <span class="name mt-3" style="font-size:25px"> {{ $data->name }}</span></div> <div class="text mt-3">
                             <div class="form-group">
                                <strong><label class="col-form-label">Email:</label></strong>
                                <input type="text" class="form-control" name="name" value="{{$data->email}}" readOnly>
                            </div>  
                            <div class="form-group">
                                <strong><label class="col-form-label">Program:</label></strong>
                                <input type="text" class="form-control" name="name" value="{{$data->program}}" readOnly>
                            </div> 
                            <div class="form-group">
                                <strong><label class="col-form-label">Semester:</label></strong>
                                <input type="text" class="form-control" name="name" value="{{ $data->semester }}" readOnly>
                            </div> 
                            <div class="form-group">
                                <strong><label class="col-form-label">Faculty:</label></strong>
                                <input type="text" class="form-control" name="name" value="{{ $data->faculty }}" readOnly>
                            </div>  
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> 
                        </div>
                        </div>
                    </div>
                </div> 
                <!--End Edit Modal-->     
