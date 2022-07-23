      <!--Ban Modal-->
            <div id="reportModal" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header flex-column">
                                    <div class="icon-box">
                                        <i class="material-icons">&#xE5CD;</i>
                                    </div>
                                    <h4 class="modal-title w-100">Ban User?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <form action="{{route('ban.user.admin')}}" method="POST">
                                @csrf
                                <div class="modal-footer justify-content-center">
                                <input type="text" name="offender_email" id="offender_email" hidden/>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Proceed</button>
                                </form>
                                </div>
                            </div>
                    </div>
                </div> 
                <!--End of Ban Modal-->

                <!--Unban Modal-->
                <div id="unbanModal" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header flex-column">
                                    <div class="icon-box">
                                        <i class="material-icons">&#xE5CD;</i>
                                    </div>
                                    <h4 class="modal-title w-100">Unban User?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <form action="{{route('unban.user.admin')}}" method="POST">
                                @csrf
                                <div class="modal-footer justify-content-center">
                                <input type="text" name="offender_email" id="offender_email" hidden/>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Proceed</button>
                                </form>
                                </div>
                            </div>
                    </div>
                </div> 
                <!--End of UnBan Modal-->
                