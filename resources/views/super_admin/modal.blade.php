
                <!--Delete Modal-->
                <div id="deleteModal{{$data->id}}" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header flex-column">
                                    <div class="icon-box">
                                        <i class="material-icons">&#xE5CD;</i>
                                    </div>
                                    <h4 class="modal-title w-100">Are you sure?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a href="{{route('user.delete', $data->_id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
                                </div>
                            </div>
                    </div>
                </div> 
                <!--End Delete Modal-->

                <!--Edit Modal-->
                <div class="modal fade" id="editModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('update',$data->id)}}" method="post">
                        @csrf
                        <div class="modal-body">
                            
                            <div class="form-group">
                                <strong><label class="col-form-label">Name:</label></strong>
                                <input type="text" class="form-control" name="name" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                                <strong><label class="col-form-label">Email:</label></strong>
                                <input type="text" class="form-control" name="email" value="{{$data->email}}">
                            </div>
                            <div class="form-group">
                                <strong><label class="col-form-label">Role:</label></strong><br>
                                <select name="role" id="role" class="form-control" required>
                                    <option value="">--Please Select Below Option--</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>  
                        </div>
                    </div>
                </div> 
                <!--End Edit Modal-->     
                
                <!--Ban Modal-->
                <div id="banModal{{$data->id}}" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header flex-column">
                                    <div class="icon-box">
                                        <i class="material-icons">&#xE5CD;</i>
                                    </div>
                                    <h4 class="modal-title w-100">Ban User?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a href="{{route('ban.user', $data->_id) }}"><button type="button" class="btn btn-danger">Proceed</button></a>
                                </div>
                            </div>
                    </div>
                </div> 
                <!--End Ban Modal-->

                <!--UnBan Modal-->
                <div id="unbanModal{{$data->id}}" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header flex-column">
                                    <div class="icon-box">
                                        <i class="material-icons">&#xE5CD;</i>
                                    </div>
                                    <h4 class="modal-title w-100">Unban User?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a href="{{route('unban.user', $data->_id) }}"><button type="button" class="btn btn-danger">Proceed</button></a>
                                </div>
                            </div>
                    </div>
                </div> 
                <!--End UnBan Modal-->

                 <!--Profile Modal-->
                 <div class="modal fade" id="profileModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Admin Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">    
                             <div class=" image d-flex flex-column justify-content-center align-items-center"><img src="/users/images/{{ $data->picture}}" height="150" width="150" style="border-radius:60%" /> <span class="name mt-3" style="font-size:25px"> {{ $data->name   }}</span></div> <div class="text mt-3">
                             <div class="form-group">
                                <strong><label class="col-form-label">Email:</label></strong>
                                <input type="text" class="form-control" name="name" value="{{$data->email}}" readOnly>
                            </div>  
                            <div class="form-group">
                                <strong><label class="col-form-label">Role:</label></strong>
                                <input type="text" class="form-control" name="name" value="{{$data->role}}" readOnly>
                            </div> 
                            <div class="form-group">
                                <strong><label class="col-form-label">Phone Number:</label></strong>
                                <input type="text" class="form-control" name="name" value="{{ $data->phone_number }}" readOnly>
                            </div> 
                            <div class="form-group">
                                <strong><label class="col-form-label">Position:</label></strong>
                                <input type="text" class="form-control" name="name" value="{{ $data->position }}" readOnly>
                            </div>  
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> 
                        </div>
                        </div>
                    </div>
                </div> 
                <!--End Profile Modal-->     

                
                  
               
               
               